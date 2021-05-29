<?php
include("../Controller/config.php");
?>
<!DOCTYPE html>
<html>

<head>
  <title> My Courses</title>

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

    .flip-card {
      background-color: transparent;
      width: 300px;
      height: 200px;
      border: 1px solid #f1f1f1;
      perspective: 1000px;
      /* Remove this if you don't want the 3D effect */
    }

    /* This container is needed to position the front and back side */
    .flip-card-inner {
      position: relative;
      width: 100%;
      height: 100%;
      text-align: center;
      transition: transform 0.8s;
      transform-style: preserve-3d;
    }

    /* Do an horizontal flip when you move the mouse over the flip box container */
    .flip-card:hover .flip-card-inner {
      transform: rotateY(180deg);
    }

    /* Position the front and back side */
    .flip-card-front,
    .flip-card-back {
      position: absolute;
      width: 100%;
      height: 100%;
      -webkit-backface-visibility: hidden;
      /* Safari */
      backface-visibility: hidden;
    }

    /* Style the front side (fallback if image is missing) */
    .flip-card-front {
      background-color: #bbb;
      color: black;
    }

    /* Style the back side */
    .flip-card-back {
      background-color: dodgerblue;
      color: white;
      transform: rotateY(180deg);
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
    </nav><br><br><br><br><br><br><br><br><br>
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-3">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="../ee.jpg" alt="Avatar" style="width:300px;height:200px;">
              </div>
              <div class="flip-card-back" style="padding-top: 10px">
                <h1>Electrical Engineering</h1>
                <p>All semester are inside</p>
                <a href="semester.php?id=1"><input type="submit" class="btn btn-warning" name="ee" value="Click for details"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-3">

          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="../cs.jpg" alt="Avatar" style="width:300px;height:200px;">
              </div>
              <div class="flip-card-back" style="padding-top: 10px">
                <h1>Computer Science</h1>
                <p>All semester are inside</p>
                <a href="semester.php?id=2"><input type="submit" class="btn btn-warning" name="cs" value="Click for details"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2"></div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-3">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="../bi.jpg" alt="Avatar" style="width:300px;height:200px;">
              </div>
              <div class="flip-card-back" style="padding-top: 10px">
                <h1>Bio Informatics</h1>
                <p>All semester are inside</p>
                <a href="semester.php?id=3"><input type="submit" class="btn btn-warning" name="Bio" value="Click for details"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-3">

          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="../p.jpg" alt="Avatar" style="width:300px;height:200px;">
              </div>
              <div class="flip-card-back" style="padding-top: 10px">
                <h1>Pharmacy</h1>
                <p>All semester are inside</p>
                <a href="semester.php?id=4"><input type="submit" class="btn btn-warning" name="Pharmacy" value="Click for details"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>

    <?php
    if (isset($_POST['Pharmacy'])) {
      session_start();
      $_SESSION['name'] = "Hello";
    }
    ?>
</body>

</html>