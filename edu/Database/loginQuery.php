<?php
session_start();
include("../Controller/config.php");

$userEmail = $_POST["userEmail"];
$userName = $_POST["userEmail"];
$password = $_POST["userPassword"];
$loginCheckSql = "SELECT * FROM user WHERE u_name = '$userName' AND u_pass = '$password' ";
$res = mysqli_query($myConn, $loginCheckSql);
$rowcount = mysqli_num_rows($res);
if ($rowcount == 1) {
    $row = mysqli_fetch_row($res);
    $_SESSION["id"] = $row[1];
    $_SESSION["name"] = $row[1];

    header("Location: ../index.php?id=$row[0]");
} else {
    header("Location: ../login.php?status='failed'");
}
