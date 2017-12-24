<?php
namespace admin\controller;

use framework\core\Controller;
use framework\tools\Upload;
use framework\tools\Thumb;
use framework\core\Factory;
/*
 * 分类模块，主要负责：后台添加分类、删除分类、修改分类、查询分类等
 * 操作分类数据表
 */
class CategoryController extends Controller
{
    //显示问题列表
    public function indexAction()
    {
        $this->smarty->display('category/index.html');
    }
    //显示添加内容的表单
    public function addAction()
    {
        $this->smarty->display('category/add.html');
    }
    //提交表单并接收表单的数据
    public function addHandleAction()
    {
        //导入上传类、图像压缩类
        $upload = new Upload();
        //设置上传的路径
        $upload -> upload_path = UPLOADS_PATH.'category/';
        $upload_file = $upload -> doUpload($_FILES['cat_logo']);
        //die(UPLOADS_PATH.'category/'.$upload_file);
        $thumb = new Thumb(UPLOADS_PATH.'category/'.$upload_file);
        $thumb -> thumb_path = THUMB_PATH.'category/';        
        $thumb_path = $thumb -> makeThumb(50, 50);
        
        //将缩略图的地址和其他表单项一同保存到Category数据表
        $data['cat_name'] = $_POST['cat_name'];
        $data['cat_desc'] = $_POST['cat_desc'];
        $data['cat_logo'] = 'category/'.$thumb_path;
        $data['parent_id'] = $_POST['parent_id'];
        //实例化模型对象，保存到数据表
        $model = Factory::M('Category');
        $result = $model -> insert($data);
        if($result){
            //添加成功，跳转到列表页面
            $this->jump('?m=admin&c=category&a=indexAction', '添加成功');
        }else{
            //添加失败，回到当前页面
            $this->jump('?m=admin&c=category&a=addAction', '添加失败');
        }        
    }
    //显示编辑的表单
    public function editAction(){}
    //提交表单并更新
    public function updateAction(){}
    //删除操作
    public function deleteAction(){}
}