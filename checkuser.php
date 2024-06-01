<?php
/**
 * Created by PhpStorm.
 * User: mdo
 * Date: 2024/6/1
 * Time: 10:35
 */
$username=$_GET["username"];
include_once("db.php");
$sql="select * from user where username='$username'";
$resule=$db->query($sql);
if($resule->num_rows==1){
    echo json_encode(false);
}else{
    echo json_encode(true);
}