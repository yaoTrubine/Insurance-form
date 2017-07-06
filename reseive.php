<?php

//获取域名或主机地址 
echo $_SERVER['HTTP_HOST']."<br/>"; 
//获取网页地址 
echo $_SERVER['PHP_SELF']."<br/>"; 
//获取网址参数 
echo $_SERVER["QUERY_STRING"]."<br/>"; 
//来源网页的详细地址 
echo $_SERVER['HTTP_REFERER']."<br/>"; 
// strrpos
$url_1 = "http://localhost/uploadFile/upload1.html";

if(strpos($url_1, "http://localhost/uploadFile/upload1.html")){
    echo "yes";
}else{
    echo "no";
}

?>