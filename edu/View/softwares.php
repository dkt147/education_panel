<?php
include("../Controller/config.php");
include("../Controller/sessionChecker.php");

?>
<!DOCTYPE html>
<html>

<head>
    <title>E2DUCATION My Courses</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <style>
        #leftMenus>li {
            margin-left: 15px;
            margin-right: 15px;
        }

        #rightMenus>li {
            margin-right: 50px;
        }

        .footer {
            left: 0;
            bottom: 0px;
            width: 100%;
            padding-bottom: 30px;
            background-color: #84ade3;
            color: black;
            text-align: center;
            margin-top: 100px;
        }

        #addImageLink {
            align-self: auto;
        }

        #show {
            color: white;
            background-color: silver;
            width: 300px;
            height: 50px;
            padding-left: 100px;
            padding-top: 12px;
            margin-left: 550px;
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0);
        }

        .vertical-menu {
            width: 250px;
            /* Set a width if you like */
            text-align: center;
            margin-left: 50px;
        }

        .vertical-menu a {
            background-color: #eee;
            /* Grey background color */
            color: black;
            /* Black text color */
            display: block;
            /* Make the links appear below each other */
            padding: 12px;
            /* Add some padding */
            text-decoration: none;
            /* Remove underline from links */
        }

        .vertical-menu a:hover {
            background-color: #ccc;
            /* Dark grey background on mouse-over */
        }

        .vertical-menu a.active {
            background-color: #4CAF50;
            /* Add a green color to the "active/current" link */
            color: white;
        }

        .box {
            padding: 60px 0px;
        }

        .box-part {
            background: #FFF;
            border-radius: 0;
            padding: 60px 10px;
            margin: 30px 0px;
            border: 2px solid white;
            border-radius: 0.5em;
            box-shadow: 1px 2px 50px 0px rgba(0, 0, 0);
        }

        .text {
            margin: 20px 0px;
        }
    </style>

</head>


<body>


    <div class="fluid-container">

        <nav id="nav" class="navbar navbar-expand-lg navbar-light bg-white fixed-top" id="mainNav">
            <div class="container">
                <div style="margin-top: 5px; "><a class="navbar-brand js-scroll-trigger" href="Home.php"><b>Education</b></a></div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <b>

                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="../index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="MyCoursePage.php">My Courses</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="learnAboutUs.php">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="login.php">Login</a>
                            </li>

                        </ul>
                        <ul class="navbar-nav ml-auto" id="rightMenus">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">

                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="../Controller/logout.php" style="color : red">Log Out</a>
                                </div>

                            </li>
                        </ul>
                    </div>
                </b>
            </div>
        </nav><br>
        <br>

        <?php

        $conn = mysqli_connect("localhost", "root",  "", "education");
        if (isset($_POST['submit'])) {
            $filename = $_FILES['file']['name'];
            $temp = $_FILES['file']['tmp_name'];

            $filename;

            move_uploaded_file($temp, "../Uploads" . $filename);

            $url = "http://localhost/edu/edu/View/uploads/$filename";

            $sid = $_SESSION['cid'];
            $cid = $_SESSION['sid'];

            $sql = "INSERT INTO softwares ( software , sid , cid)
                            VALUES('$filename' ,$cid,$sid)";

            $res = mysqli_query($conn, $sql);

            if ($res == TRUE) {
            } else {
            }
        }

        $_SESSION['sid'];
        $_SESSION['cid'];

        ?>
        <div class="box">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 offset-4">

                        <div class="box-part text-center">

                            <div class="title text-decoration">
                                <a href="CoursesPage.php">
                                    <form action="softwares.php" method="post" enctype="multipart/form-data">
                                        <input type="file" name="file"><br><br>
                                        <input type="submit" name="submit" value="submit" style="border:none;Border-radius:20px">
                                    </form>
                                </a>
                            </div>


                        </div>
                    </div>
                </div><br>
                <div class="row">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 offset-4">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Softwares</th>
                                    <th>Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php


                                $sid = $_SESSION['cid'];
                                $cid = $_SESSION['sid'];

                                if ($_SESSION['cid'] == "1" and $_SESSION['sid'] == "1") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 1 and cid = 1";
                                }
                                if ($_SESSION['cid'] == "2" and $_SESSION['sid'] == "1") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 1 and cid = 2";
                                }
                                if ($_SESSION['cid'] == "3" and $_SESSION['sid'] == "1") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 1 and cid = 3";
                                }
                                if ($_SESSION['cid'] == "4" and $_SESSION['sid'] == "1") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 1 and cid = 4";
                                }
                                if ($_SESSION['cid'] == "5" and $_SESSION['sid'] == "1") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 1 and cid = 5";
                                }
                                if ($_SESSION['cid'] == "6" and $_SESSION['sid'] == "1") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 1 and cid = 6";
                                }
                                if ($_SESSION['cid'] == "7" and $_SESSION['sid'] == "1") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 1 and cid = 7";
                                }
                                if ($_SESSION['cid'] == "8" and $_SESSION['sid'] == "1") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 1 and cid = 8";
                                }

                                if ($_SESSION['cid'] == "1" and $_SESSION['sid'] == "2") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 2 and cid = 1";
                                }
                                if ($_SESSION['cid'] == "2" and $_SESSION['sid'] == "2") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 2 and cid = 2";
                                }
                                if ($_SESSION['cid'] == "3" and $_SESSION['sid'] == "2") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 2 and cid = 3";
                                }
                                if ($_SESSION['cid'] == "4" and $_SESSION['sid'] == "2") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 2 and cid = 4";
                                }
                                if ($_SESSION['cid'] == "5" and $_SESSION['sid'] == "2") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 2 and cid = 5";
                                }
                                if ($_SESSION['cid'] == "6" and $_SESSION['sid'] == "2") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 2 and cid = 6";
                                }
                                if ($_SESSION['cid'] == "7" and $_SESSION['sid'] == "2") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 2 and cid = 7";
                                }
                                if ($_SESSION['cid'] == "8" and $_SESSION['sid'] == "2") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 2 and cid = 8";
                                }
                                if ($_SESSION['cid'] == "1" and $_SESSION['sid'] == "3") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 3 and cid = 1";
                                }
                                if ($_SESSION['cid'] == "2" and $_SESSION['sid'] == "3") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 3 and cid = 2";
                                }
                                if ($_SESSION['cid'] == "3" and $_SESSION['sid'] == "3") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 3 and cid = 3";
                                }
                                if ($_SESSION['cid'] == "4" and $_SESSION['sid'] == "3") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 3 and cid = 4";
                                }
                                if ($_SESSION['cid'] == "5" and $_SESSION['sid'] == "3") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 3 and cid = 5";
                                }
                                if ($_SESSION['cid'] == "6" and $_SESSION['sid'] == "3") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 3 and cid = 6";
                                }
                                if ($_SESSION['cid'] == "7" and $_SESSION['sid'] == "3") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 3 and cid = 7";
                                }
                                if ($_SESSION['cid'] == "8" and $_SESSION['sid'] == "3") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 3 and cid = 8";
                                }
                                if ($_SESSION['cid'] == "9" and $_SESSION['sid'] == "3") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 3 and cid = 9";
                                }
                                if ($_SESSION['cid'] == "10" and $_SESSION['sid'] == "3") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 3 and cid = 10";
                                }
                                if ($_SESSION['cid'] == "1" and $_SESSION['sid'] == "4") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 4 and cid = 1";
                                }
                                if ($_SESSION['cid'] == "2" and $_SESSION['sid'] == "4") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 4 and cid = 2";
                                }
                                if ($_SESSION['cid'] == "3" and $_SESSION['sid'] == "4") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 4 and cid = 3";
                                }
                                if ($_SESSION['cid'] == "4" and $_SESSION['sid'] == "4") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 4 and cid = 4";
                                }
                                if ($_SESSION['cid'] == "5" and $_SESSION['sid'] == "4") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 4 and cid = 5";
                                }
                                if ($_SESSION['cid'] == "6" and $_SESSION['sid'] == "4") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 4 and cid = 6";
                                }
                                if ($_SESSION['cid'] == "7" and $_SESSION['sid'] == "4") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 4 and cid = 7";
                                }
                                if ($_SESSION['cid'] == "8" and $_SESSION['sid'] == "4") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 4 and cid = 8";
                                }
                                if ($_SESSION['cid'] == "9" and $_SESSION['sid'] == "4") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 4 and cid = 9";
                                }
                                if ($_SESSION['cid'] == "10" and $_SESSION['sid'] == "4") {
                                    $fquery = "SELECT * FROM `softwares` WHERE sid = 4 and cid = 10";
                                }
                                $result = mysqli_query($conn, $fquery);

                                if ($result = mysqli_query($conn, $fquery)) {
                                    // Fetch one and one row
                                    $i = 0;
                                    while ($row = mysqli_fetch_row($result)) {
                                        $i = $i + 1; ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $row[1]; ?></td>
                                            <td><a href="#">Download</a></td>
                                        </tr>
                                <?php
                                    }
                                }

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><br><br>

</body>

</html>