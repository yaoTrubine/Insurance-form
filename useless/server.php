<?php
//单文件上传
// print_r($_FILES);
// echo(__FILE__);
// echo(__DIR__.'/uploads/'.$filename);
header('content-type:text/html;charset=utf-8');
$fileinfo = $_FILES['photo'];
$filename = $fileinfo['name'];
$tmp_name = $fileinfo['tmp_name'];
$error = $fileinfo['error'];


$maxsize = 2097152; //最大值
$allowExt = array('jpeg','jpg','png','bmp','gif'); //允许上传的文件名
$flag = true;

// function br(){
//     echo "<br>";
// }

// br();

// print_r($fileinfo);

//将服务器上的临时文件移动指定目录下
if($error == 0){
    if($fileinfo['size'] > $maxsize){
        exit('上传文件太大');
    }
    //$ext = strtolower(end(explode('.',$filename))); //第一种获取文件后缀方法
    $ext = pathinfo($filename,PATHINFO_EXTENSION);  //第二种获取文件后缀方法
    if(!in_array($ext,$allowExt)){
        exit('非法文件类型');
    }
    //判断文件是否通过HTTP POST方式上传来的
    if(!is_uploaded_file($tmp_name)){
        exit('文件不是通过POST方式上传来的');
    }

    //检测是否为真实的文件类型
    // getimagesize($filename);    得到指定图片信息，如果是图片返回数组;如果不是图片返回false
    if($flag){
        if(!getimagesize($tmp_name)){
            exit('不是真正的文件类型');  
        }
    }

    //确保文件上传一定有目录
    $path = __DIR__.'/uploads';
    if(!file_exists($path)){
        mkdir($path, 0777, true);
        chmod($path, 0777);
    }

    $uniName = md5(uniqid(microtime(true),true)).'.'.$ext;
    $destination = $path.'/'.$uniName;
    if(@move_uploaded_file($tmp_name,$destination)){
        echo '文件上传成功';
    }else{
        echo '上传失败';
    }
}


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