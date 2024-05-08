<?php
session_start();
if(!isset($_SESSION["loggedin"])){
    header("location: ./login.php");
    exit;
}

$userIp = "";
if (!empty($_SERVER["HTTP_CLIENT_IP"])){
    $userIp = $_SERVER["HTTP_CLIENT_IP"];
}elseif(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
    $userIp = $_SERVER["HTTP_X_FORWARDED_FOR"];
}else{
    $userIp = $_SERVER["REMOTE_ADDR"];
}

?>

<html>

<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=1, minimum-scale=1.0, maximum-scale=3.0">
    <title>登入成功</title>
</head>

<body style="padding: 3em 8%;">
    <h1 style="color:#D93025;">登入成功！<br />(づ｡◕‿‿◕｡)づ</h1>
    <div style="margin-top:4em;">帳號：<?= $_SESSION["memberId"]; ?></div>
    <div style="margin-top:0em;">姓名：<?= $_SESSION["memberName"]; ?></div>
    <div style="margin-top:0em;">位置：<?= $userIp; ?></div>
    <div style="margin-top:4em;"><a href="./logout.php"
            style="padding:0.5em 3em; color:white; background-color:#1A73E8; text-decoration:none; border-radius: 6px;">登出</a>
    </div>
</body>

</html>