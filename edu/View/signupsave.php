<?php


$conn = mysqli_connect("localhost", "root",  "", "education");

if (isset($_POST['save'])) {

    echo $name = $_POST['name'];
    echo $email = $_POST['email'];
    echo $phone = $_POST['phone'];
    echo $msg = $_POST['message'];
    echo $sql = "INSERT INTO `register`(`name`, `email`, `phone`, `message`) VALUES ('$name','$email','$phone','$msg')";
    echo $res = mysqli_query($conn, $sql);

    if ($res === TRUE) {


        session_start();
        $_SESSION['scs'] = "ok";

        echo '<script language="javascript">';
        echo 'window.alert("Successfully Send!!")';
        echo '</script>';

        header("Location: http://localhost/edu/edu/View/learnAboutUs.php");
    }
}
