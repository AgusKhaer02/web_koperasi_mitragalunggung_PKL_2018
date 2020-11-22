<?php
session_start();
function randomPassword(){
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
//deklarasi $pass menjadi array
$pass = array();
    $alpalength = strlen($alphabet) - 1;
    for ($i = 0;$i <5;$i++)
    {
        $n = rand(0, $alpalength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass);
}
$code = randomPassword();
$_SESSION["code"]=$code;
//membuat panjang dan lebar pada suatu background captcha
$im = imagecreatetruecolor(100,50);
//membuat warna pada background captcha
$bg = imagecolorallocate($im,22,86,165);
//membuat warna pada huruf (putih)
$fg = imagecolorallocate($im,225,225,225);
imagefill($im,0,0,$bg);
imagestring($im,5,30,15,$code,$fg);
header("Cache-Control: no-cache, must-revalidate");
header("Content-type:image/png");
imagepng($im);
imagedestroy($im);
?>