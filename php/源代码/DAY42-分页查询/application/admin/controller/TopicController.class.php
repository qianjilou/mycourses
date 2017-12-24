<?php
/*
 * 话题模块负责话题的管理
 */
namespace admin\controller;
use framework\core\Controller;
use framework\tools\Upload;
use framework\tools\Thumb;
use framework\core\Factory;

class TopicController extends Controller
{
    //1. 显示话题列表
    public function indexAction()
    {
        //先查询话题列表，再分配到index.html模板页面
        $model = Factory::M('Topic');
        $topic_list = $model -> find();
        
        $this->smarty->assign('topics',$topic_list);
        $this->smarty->display('topic/index.html');
    }
    //2. 显示添加内容的表单
    public function addAction()
    {
        $this->smarty->display('topic/add.html');
    }
    //3. 提交表单并接收数据，入库
    public function addHandleAction()
    {
        //1. 先上传话题缩略图文件
        $upload = new Upload();
        $upload -> upload_path = UPLOADS_PATH.'topic/';
        $upload_file = $upload -> doUpload($_FILES['topic_thumb']);
        
        $thumb = new Thumb(UPLOADS_PATH.'topic/'.$upload_file);
        $thumb -> thumb_path = THUMB_PATH.'topic/';
        $topic_file = $thumb -> makeThumb(50,50);
        
        //2. 把缩略图的地址、话题标题、话题的描述保存到数据库
        $data['topic_title'] = $_POST['topic_title'];
        $data['topic_desc'] = $_POST['topic_desc'];
        $data['topic_pic'] = 'topic/'.$topic_file;
        $data['user_id'] = 1;   //由于还没有做用户的登录，所以暂时写死
        $data['pub_time'] = time(); //发布时间
        
        //3. 实例化模型对象
        $model = Factory::M('Topic');
        $result = $model -> insert($data);
        if($result){
            $this->jump('?m=admin&c=topic&a=indexAction', '添加成功');
        }else{
            $this->jump('?m=admin&c=topic&a=addAction', '添加失败');
        }
    }
    //4. 显示编辑内容的表单页面
    public function editAction()
    {
        //接收编辑的话题的id
        $topic_id = $_GET['id'];
        //根据话题id查询话题的信息
        $model = Factory::M('Topic');
        $where = array('topic_id'=>$topic_id);
        $result = $model -> find($where);   //返回的是二维数组，但是里面只有一条数据
        
        $this->smarty->assign('topic',$result[0]);
        $this->smarty->display('topic/edit.html');
    }
    //5. 提交表单并更新数据
    public function updateAction()
    {
        //判断是否上传新的图像
        if($_FILES['topic_pic']['error'] == 0){
            //说明上传了新的图像
            $upload = new Upload();
            $upload -> upload_path = UPLOADS_PATH.'topic/';
            $upload_file = $upload -> doUpload($_FILES['topic_pic']);
            
            //压缩
            $thumb = new Thumb(UPLOADS_PATH.'topic/'.$upload_file);
            $thumb -> thumb_path = THUMB_PATH.'topic/';
            $thumb_file = $thumb -> makeThumb(50,50);
            
            //删除旧的图像
            $old_topic_pic = $_POST['old_topic_pic'];       // 原来的缩略图thumb_
            $origin = str_replace('thumb_', '', $old_topic_pic);   //原图uploads目录
            unlink(UPLOADS_PATH.$origin);
            unlink(THUMB_PATH.$old_topic_pic);
            
            //更新topic_pic字段
            $data['topic_pic'] = 'topic/'.$thumb_file;
        }
        //执行到这里，说明没有上传
        $data['topic_title'] = $_POST['topic_title'];
        $data['topic_desc'] = $_POST['topic_desc'];
        $data['pub_time'] = time();
        
        $where = array('topic_id'=>$_POST['topic_id']);
        //实例化模型对象
        $model = Factory::M('Topic');
        $result = $model -> update($data,$where);
        
        if($result){
            $this->jump('?m=admin&c=topic&a=indexAction', '更新成功');
        }else{
            $this->jump('?m=admin&c=topic&a=editAction&id='.$_POST['topic_id'], '更新失败');
        }
    }
    //6. 删除操作
    public function deleteAction()
    {
        $id = $_GET['id'];
        //先根据话题id查询话题的图片
        $data = ['topic_pic'];
        $where = ['topic_id'=>$id];
        $model = Factory::M('Topic');
        
        $result = $model -> find($where,$data);
        $topic_pic = $result[0]['topic_pic'];
        //根据缩略图找到原图
        $origin = str_replace('thumb_', '', $topic_pic);
        unlink(UPLOADS_PATH.$origin);
        unlink(THUMB_PATH.$topic_pic);
        
        //再删除数据表中的数据
        $result = $model -> delete($id);
        if($result){
            $this->jump('?m=admin&c=topic&a=indexAction', '删除成功');
        }else{
            $this->jump('?m=admin&c=topic&a=indexAction', '删除失败');
        }        
    }
}