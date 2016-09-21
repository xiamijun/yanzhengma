<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/29
 * Time: 10:23
 */
session_start();

$code=strtolower($_GET['vcode']);
$vstr=strtolower($_SESSION['vstr']);


if($code==$vstr){
    echo "<script>location='http://www.baidu.com'</script>";
}else{
    echo "<script>location='index.html'</script>";
}

