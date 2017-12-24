<?php
/*
 * 该模块负责分类内容的管理
 */
namespace admin\controller;
use framework\core\Controller;
use framework\tools\Upload;
use framework\tools\Thumb;
use framework\core\Factory;

class CategoryController extends Controller
{
    //1.显示分类列表
    public function indexAction()
    {
        //先查询分类的信息
        $model = Factory::M('Category');
        $cat_list = $model -> find();
        $cat_list = $model -> getTreeCategory($cat_list);
        
        //分配到表单中
        $this->smarty->assign('cat_list',$cat_list);
        $this->smarty->display('category/index.html');
    }
    //2.显示添加内容的表单
    public function addAction()
    {
        //先查询分类的信息
        $model = Factory::M('Category');
        $cat_list = $model -> find();
        $cat_list = $model -> getTreeCategory($cat_list);
        
        //分配到表单中
        $this->smarty->assign('cat_list',$cat_list);
        $this->smarty->display('category/add.html');
    }
    //3. 接收表单的内容并入库
    public function addHandleAction()
    {
        //先上传图标，返回图标地址，将地址入库
        $upload = new Upload();
        $upload -> upload_path = UPLOADS_PATH.'category/';
        $upload_file = $upload -> doUpload($_FILES['cat_logo']);
        
        $thumb = new Thumb(UPLOADS_PATH.'category/'.$upload_file);
        $thumb -> thumb_path = THUMB_PATH.'category/';
        $thumb_file = $thumb -> makeThumb(50, 50);
        
        $_POST['cat_logo'] = $thumb_file;
        $model = Factory::M('Category');
        $result = $model -> insert($_POST);
        if($result){
           $this->jump('?m=admin&c=category&a=indexAction', '添加成功'); 
        }else{
            $this->jump('?m=admin&c=category&a=addAction', '添加失败');
        }
    }
    //4. 显示编辑的表单页面
    public function editAction()
    {
        //先接收修改的分类的序号
        $cat_id = $_GET['id'];
        //根据id查询分类的信息
        $where = array('cat_id'=>$cat_id);
        $model = Factory::M('Category');
        $result = $model -> find($where);
        //根据cat_id查询，虽然返回的是二维数组(fetchAll)，但是二维数组只有一个元素
        
        //再查询所有的分类信息
        $model = Factory::M('Category');
        $cat_list = $model -> find();
        $cat_list = $model -> getTreeCategory($cat_list);
        
        $this->smarty->assign('cat',$result[0]);
        $this->smarty->assign('cat_list',$cat_list);
        $this->smarty->display('category/edit.html');
    }
    //5. 接收编辑表单的数据并更新
    public function updateAction()
    {
        $data['cat_name'] = $_POST['cat_name'];
        $data['cat_desc'] = $_POST['cat_desc'];
        $data['parent_id'] = $_POST['parent_id'];
        //1. 先判断是否上传新的图标，如果上传新的则：删除旧的，使用新的图标地址
        //如果没有上传新的图标，不更新cat_logo这个字段
        if($_FILES['cat_logo']['error']==0){
            //说明上传了新的分类图标
            //先上传图标，返回图标地址，将地址入库
            $upload = new Upload();
            $upload -> upload_path = UPLOADS_PATH.'category/';
            $upload_file = $upload -> doUpload($_FILES['cat_logo']);
            
            $thumb = new Thumb(UPLOADS_PATH.'category/'.$upload_file);
            $thumb -> thumb_path = THUMB_PATH.'category/';
            $thumb_file = $thumb -> makeThumb(50, 50);
            
            //删除旧的图标(包括原图、缩略图)
            unlink(THUMB_PATH.'category/'.$_POST['old_cat_logo']);
            //通过缩略图找到原图
            $origin = str_replace('thumb_', '', $_POST['old_cat_logo']);
            //删除uploads目录中的原图
            unlink(UPLOADS_PATH.'category/'.$origin);
            
            $data['cat_logo'] = $thumb_file;
        }
        //执行到这里，说明没有上传新的图标，就不用更新cat_logo这个字段
        $model = Factory::M('Category');
        
        //更新的条件吗，根据cat_id进行更新
        $where = array('cat_id'=>$_POST['cat_id']);
        $result = $model -> update($data,$where);
        if($result){
            //更新成功
            $this->jump('?m=admin&c=category&a=indexAction', '更新成功');
        }else{
            //更新失败
            $this->jump('?m=admin&c=category&a=editAction&id='.$_POST['cat_id'], '更新失败');
        }
    }
    //6. 删除分类的操作
    public function deleteAction()
    {
        //接收删除的超链接里面的序号
        $cat_id = $_GET['id'];
        //1. 只能删除叶子分类（没有子类的分类）
        $model = Factory::M('Category');
        $result = $model -> isLeafCategory($cat_id);
        if($result){
            //查询到了，说明下面有子类，就不能删除
            $this->jump('?m=admin&c=category&a=indexAction', '下面还有小弟，不能删除');
        }
        //2. 先删除该分类相关的文件资源(图片)
        $where = array('cat_id'=>$cat_id);
        $data = array('cat_logo');
        $result = $model -> find($where,$data);
        
        $cat_logo = $result[0]['cat_logo'];
        unlink(THUMB_PATH.'category/'.$cat_logo);
        //删除原图地址
        $origin = str_replace('thumb_', '', $cat_logo);
        unlink(UPLOADS_PATH.'category/'.$origin);
        
        //3. 再删除数据表中的记录
        $result = $model -> delete($cat_id);
        if($result){
            $this->jump('?m=admin&c=category&a=indexAction', '删除成功');
        }else{
            $this->jump('?m=admin&c=category&a=indexAction', '删除失败');
        }
    }
}