<?php
header("Content-type: text/html; charset=utf-8"); 
$pass = '123456'; 
echo "MD5加密后".md5($pass)."<br>"; //不安全 
echo "crypt加密后".crypt($pass)."<br>"; // 比较乱的密码 刷新后还会变 
echo "crypt复杂加密后".crypt($pass,substr($pass,4,4))."<br>"; //还是不爽 
echo "无敌加密后".md5(crypt($pass,substr($pass,4,4)))."<br>"; // 现在让黑客如何破这个密码？？？



 $str = "我是李云";
    $key = "123qwe.019860905061X";
    $cipher = MCRYPT_RIJNDAEL_128;
    $mode = MCRYPT_MODE_ECB;
    $iv = mcrypt_create_iv(mcrypt_get_iv_size($cipher,$mode),MCRYPT_RAND);
 
    echo "原文：".$str."<br>";
    $str_encrypt = mcrypt_encrypt($cipher,$key,$str,$mode,$iv);
    echo "加密后的内容是：".$str_encrypt."<br>";
 
    $str_decrypt = mcrypt_decrypt($cipher,$key,$str_encrypt,$mode,$iv);
    echo "解密后的内容：".$str_decrypt."<br>";
?>