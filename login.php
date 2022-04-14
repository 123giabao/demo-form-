<?php
$u = $_POST['username'];
$p = $_POST['password'];

$db = mysqli_connect("localhost", "root", "", "demoform");

$sql = "select * from users where username='$u' and password='$p'";
// echo $sql; exit;



$rs = mysqli_query($db, $sql);

if(mysqli_num_rows($rs) > 0){
    // echo "<h1>Đăng nhập thành công </h1>";

    header("Location: siu.html");
} else{
    echo "<h2> Đăng nhập thất bại</h2>";

    require_once 'login.html';
}
?>