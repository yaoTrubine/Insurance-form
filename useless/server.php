<?php
// print_r($_FILES);
// echo(__FILE__);
// echo(__DIR__.'/uploads/'.$filename);

function br(){
    echo "<br>";
}

$fileinfo = $_FILES['photo'];
print_r($fileinfo);
br();
print_r($fileinfo['name']);


// echo(dirname('uploads/'));
$filename = $_FILES['photo']['name'];
$type = $_FILES['photo']['type'];
$tmp_name = $_FILES['photo']['tmp_name'];
$size = $_FILES['photo']['size'];
$error = $_FILES['photo']['error'];

//将服务器上的临时文件移动指定目录下
// if(move_uploaded_file($tmp_name,__DIR__.'/uploads/'.$filename)){
//     echo 'success';
// }else{
//     echo 'failed';
// }

//上传文件错误信息
//UPLOAD_ERR_OK：0          没有错误，上传成功
//UPLOAD_ERR_OK:1          上传文件超过了upload_max_filesize选项限制的值
//UPLOAD_ERR_FORM_SIZE:2   上传文件大小超过了html表单中MAX_FILE_SIZE选项指定的值
//UPLOAD_ERR_PARTIAL:3     文件只有部分被上传
//UPLOAD_ERR_NO_FILE:4     没有文件上传
//UPLOAD_ERR_NO_TMP_DIR:6  找不到临时文件夹
//UPLOAD_ERR_CANT_WRITE:7  文件写入失败
//UPLOAD_ERR_EXTENSION:8   上传文件被PHP扩展程序中断

// $name = isset($_POST['name'])? $_POST['name'] : '';  
// $gender = isset($_POST['gender'])? $_POST['gender'] : '';  
  
// $filename = time().substr($_FILES['photo']['name'], strrpos($_FILES['photo']['name'],'.'));  
  
// $response = array();  
  
// if(move_uploaded_file($_FILES['photo']['tmp_name'], $filename)){  
//     $response['isSuccess'] = true;  
//     $response['name'] = $name;  
//     $response['gender'] = $gender;  
//     $response['photo'] = $filename;  
// }else{  
//     $response['isSuccess'] = false;  
// }  
  
// echo json_encode($response);  


?>