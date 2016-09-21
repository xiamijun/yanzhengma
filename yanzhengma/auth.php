<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/29
 * Time: 10:10
 */
session_start();

$im=imagecreatetruecolor(70,40);

$black=imagecolorallocate($im,0,0,0);
$gray=imagecolorallocate($im,200,200,200);

imagefill($im,0,0,$gray);

for($i=0;$i<100;$i++){
    imagesetpixel($im,mt_rand(0,70),mt_rand(0,40),$black);
}

$strarr=array_merge(range(0,9),range('a','z'),range('A','Z'));
shuffle($strarr);
$str=join('',array_slice($strarr,0,4));
$_SESSION['vstr']=$str;

imagestring($im,5,20,10,$str,$black);

header("content-type:image/png");
imagepng($im);

imagedestroy($im);