<?php
require_once 'Upload.class.php';
$upload = new Upload();
$path = $upload -> doUpload($_FILES['cat_logo']);
var_dump($path);