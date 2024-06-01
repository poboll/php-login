<?php
/**
 * Created by PhpStorm.
 * User: mdo
 * Date: 2024/6/1
 * Time: 9:35
 */
$username=$_POST["username"];
$password=md5($_POST["password1"]);
$db=new mysqli("localhost","plogin","BeS5AHLDPrkNni8S","plogin");
$sql="insert into user(`username`,`password`)values('$username','$password')";
$db->query($sql);
if($db->affected_rows==1){
    $msg="注册成功";
    $href="login.html";
}else{
    $msg="注册失败";
    $href="sign.html";
}
include("message.html");