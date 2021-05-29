<?php

    $loginuser = $_SESSION['user'];
    //Stablishing Connection..
        include_once 'config.php';
    //Checking if button is clicked or not...
        if (isset($_POST['reg_stu'])) {

          session_start();
    //Getting Image Path...
            $target_dir = "uploads/";
         $temp = $_FILES['file']['tmp_name'];
         $target_file = $target_dir . basename($_FILES["file"]["name"]);
       
    //Moving into a folder...
        move_uploaded_file($temp, "" . $target_file);
    //Getting values from a form...
         $city = $_POST['city'];
         $num = $_POST['num_stu'];
         $education = $_POST['education'];
         $days = $_POST['days'];
         $phone = $_POST['phone'];
         $email = $_POST['email'];
         $info = $_POST['info'];


         $_SESSION["student"] = $email;

    //Insert Query for Mysql...
         $sql = "INSERT INTO `student`(`City`, `No_Stu`, `Education`, `Days`, `Phone`, `Email`, `Info`, `Image`) VALUES ('$city','$num','$education','$days','$phone','$email','$info','$target_file')";
        

         $res = mysqli_query($conn, $sql);

    //Resdirection To Another Page...
        if ($res == TRUE) {
            session_start();
            header("Location: index.php");
        } else {

        }
    }
    ?>

<?php

    //Stablishing Connection..
        include_once 'config.php';
    //Checking if button is clicked or not...
        if (isset($_POST['reg_sup'])) {
          session_start();
    //Getting Image Path...
            $target_dir = "uploads/";
         $temp = $_FILES['file']['tmp_name'];
         $target_file = $target_dir . basename($_FILES["file"]["name"]);
       
    //Moving into a folder...
        move_uploaded_file($temp, "" . $target_file);
    //Getting values from a form...
         $city = $_POST['city'];
         $age = $_POST['age'];
         $gender = $_POST['gender'];
         $laptop = $_POST['laptop'];
         $days = $_POST['days'];
         $phone = $_POST['phone'];
         $email = $_POST['email'];
         $info = $_POST['info'];

         $_SESSION["supporter"] = $email;

    //Insert Query for Mysql...
         echo $sql = "INSERT INTO `supporter`(`Email`, `Phone`, `City`, `Age`, `Gender`, `Laptop`, `Days`, `Info`, `Image`) VALUES ('$email','$phone','$city','$age','$gender','$laptop','$days','$info','$target_file')";
        

         echo $res = mysqli_query($conn, $sql);

    //Resdirection To Another Page...
        if ($res == TRUE) {
            session_start();
            echo "<script>Supporter Added</script>";
        } else {

        }
    }
    ?>
<?php

    //Stablishing Connection..
        include_once 'config.php';
    //Checking if button is clicked or not...
        if (isset($_POST['send'])) {

    //Getting values from a form...
         $name = $_POST['name'];
         $email = $_POST['email'];
         $phone = $_POST['phone'];
         $message = $_POST['message'];

         $_SESSION["sender"] = $name;


    //Insert Query for Mysql...
         $sql = "INSERT INTO `contact`(`Name`, `Email`, `Phone`, `Message`) VALUES  ('$name','$email','$phone','$message')";
        

         $res = mysqli_query($conn, $sql);

    //Resdirection To Another Page...
        if ($res == TRUE) {
            session_start();
            header("Location: index.php");
        } else {

        }
    }
    ?>
<!DOCTYPE html>
<html>

<head>
  <title>Education Home</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="type.css">

  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">
  <link href="css/type.css" rel="stylesheet">
  <link href="css/codeanimate.css" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
 <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
<!-- Main css -->
    <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
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
      position: absolute;
      margin-top: 100px;
    }

    #nav {
      margin-top: 7px;
      display: flex;
    }

    #header {
      position: relative;
      background-color: black;
      height: 75vh;
      min-height: 25rem;
      overflow: hidden;
    }

    #header video {
      position: absolute;
      top: 50%;
      left: 50%;
      width: auto;
      height: auto;
      z-index: 0;
      -ms-transform: translateX(-50%) translateY(-50%);
      -moz-transform: translateX(-50%) translateY(-50%);
      -webkit-transform: translateX(-50%) translateY(-50%);
      transform: translateX(-50%) translateY(-50%);
    }

    #header .container {
      position: relative;
      z-index: 2;
    }

    #header .overlay {
      position: absolute;
      top: 0;
      left: 0;
      background-color: black;
      opacity: 0.5;
      z-index: 1;
    }

    @media (pointer: coarse) and (hover: none) {
      #header {
        background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
      }

      #header video {
        display: none;
      }
    }

    .carousel {
      background: #2f4357;
      margin-top: 20px;
    }

    .carousel-item {
      text-align: center;
      /* Prevent carousel from being distorted if for some reason image doesn't load */
    }

    .card-counter {
      box-shadow: 2px 2px 10px #DADADA;
      margin: 5px;
      padding: 20px 10px;
      background-color: #fff;
      height: 100px;
      border-radius: 5px;
      transition: .3s linear all;
    }

    .card-counter:hover {
      box-shadow: 4px 4px 20px #DADADA;
      transition: .3s linear all;
    }

    .card-counter.primary {
      background-color: #007bff;
      color: #FFF;
    }

    .card-counter.danger {
      background-color: #ef5350;
      color: #FFF;
    }

    .card-counter.success {
      background-color: #66bb6a;
      color: #FFF;
    }

    .card-counter.info {
      background-color: #26c6da;
      color: #FFF;
    }

    .card-counter i {
      font-size: 5em;
      opacity: 0.2;
    }

    .card-counter .count-numbers {
      position: absolute;
      right: 35px;
      top: 20px;
      font-size: 32px;
      display: block;
    }

    .card-counter .count-name {
      position: absolute;
      right: 35px;
      top: 65px;
      font-style: italic;
      text-transform: capitalize;
      opacity: 0.5;
      display: block;
      font-size: 18px;
    }

    ::-webkit-scrollbar {
      width: 30px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      background: white;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: linear-gradient(grey, skyblue, grey);

      box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);

      border-top-right-radius: 10px;
      border-top-left-radius: 10px;
      border-bottom-right-radius: 10px;
      border-bottom-left-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: linear-gradient(skyblue, grey, skyblue);
    }

    #marg {
      padding-top: 220px;
    }

    .carousel-inner img {
      width: 100%;
      height: 100%;
    }

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
      position: relative;
    }

    *,
    *:before,
    *:after {
      box-sizing: border-box;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    
    button,
    input {
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
      letter-spacing: 1.4px;
    }

    .background {
      display: flex;
      min-height: 100vh;
    }

    #container {
      flex: 0 1 700px;
      margin: auto;
      padding: 10px;
    }

    .screen {
      position: relative;
      background: #3e3e3e;
      border-radius: 15px;
    }

    .screen:after {
      content: '';
      display: block;
      position: absolute;
      top: 0;
      left: 20px;
      right: 20px;
      bottom: 0;
      border-radius: 15px;
      box-shadow: 0 20px 40px rgba(0, 0, 0, .4);
      z-index: -1;
    }

    .screen-header {
      display: flex;
      align-items: center;
      padding: 10px 20px;
      background: #4d4d4f;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
    }

    .screen-header-left {
      margin-right: auto;
    }

    .screen-header-button {
      display: inline-block;
      width: 8px;
      height: 8px;
      margin-right: 3px;
      border-radius: 8px;
      background: white;
    }

    .screen-header-button.close {
      background: #ed1c6f;
    }

    .screen-header-button.maximize {
      background: #e8e925;
    }

    .screen-header-button.minimize {
      background: #74c54f;
    }

    .screen-header-right {
      display: flex;
    }

    .screen-header-ellipsis {
      width: 3px;
      height: 3px;
      margin-left: 2px;
      border-radius: 8px;
      background: #999;
    }

    .screen-body {
      display: flex;
    }

    .screen-body-item {
      flex: 1;
      padding: 50px;
    }

    .screen-body-item.left {
      display: flex;
      flex-direction: column;
    }

    .app-title {
      display: flex;
      flex-direction: column;
      position: relative;
      color: #fff;
      font-size: 26px;
    }

    .app-title:after {
      content: '';
      display: block;
      position: absolute;
      left: 0;
      bottom: -10px;
      width: 25px;
      height: 4px;
      background: rgb(134, 172, 67);
      background: -moz-linear-gradient(352deg, rgba(134, 172, 67, 0.17970938375350143) 0%, rgba(24, 137, 180, 0.9612219887955182) 66%);
      background: -webkit-linear-gradient(352deg, rgba(134, 172, 67, 0.17970938375350143) 0%, rgba(24, 137, 180, 0.9612219887955182) 66%);
      background: linear-gradient(352deg, rgba(134, 172, 67, 0.17970938375350143) 0%, rgba(24, 137, 180, 0.9612219887955182) 66%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#86ac43", endColorstr="#1889b4", GradientType=1);
    }

    .app-contact {
      margin-top: auto;
      font-size: 8px;
      color: #888;
    }

    .app-form-group {
      margin-bottom: 15px;
    }

    .app-form-group.message {
      margin-top: 40px;
    }

    .app-form-group.buttons {
      margin-bottom: 0;
      text-align: right;
    }

    .app-form-control {
      width: 100%;
      padding: 10px 0;
      background: none;
      border: none;
      border-bottom: 1px solid #666;
      color: #ddd;
      font-size: 14px;
      text-transform: uppercase;
      outline: none;
      transition: border-color .2s;
    }

    .app-form-control::placeholder {
      color: #666;
    }

    .app-form-control:focus {
      border-bottom-color: #ddd;
    }

    .app-form-button {
      background: none;
      border: none;
      color: rgba(24, 137, 180, 0.9612219887955182);
      font-size: 14px;
      cursor: pointer;
      outline: none;
    }

    .app-form-button:hover {
      color: white;
    }

    .credits {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 20px;
      color: #ffa4bd;
      font-family: 'Roboto Condensed', sans-serif;
      font-size: 16px;
      font-weight: normal;
    }

    .credits-link {
      display: flex;
      align-items: center;
      color: #fff;
      font-weight: bold;
      text-decoration: none;
    }

    .dribbble {
      width: 20px;
      height: 20px;
      margin: 0 5px;
    }

    @media screen and (max-width: 520px) {
      .screen-body {
        flex-direction: column;
      }

      .screen-body-item.left {
        margin-bottom: 30px;
      }

      .app-title {
        flex-direction: row;
      }

      .app-title span {
        margin-right: 12px;
      }

      .app-title:after {
        display: none;
      }
    }

    @media screen and (max-width: 600px) {
      .screen-body {
        padding: 40px;
      }

      .screen-body-item {
        padding: 0;
      }
    }
  </style>

</head>


<body style="background-color: white;">


<?php session_start(); ?>
<?php include 'navbar.php';?>


  <header class="bg-primary text-white" id="marg">
    <div class="container text-center" style="padding-bottom: 100px">
      <h1 style="background-color: white; color: white;">
        <a href="" class="typewrite" data-period="2000" data-type='[ "Welcome To Education World.", "Evolution.", "Creative.", "Inovative." ]'>

        </a>
      </h1>
      <p class="lead" style="color: white">This is a platform to enhance your skills</p>
    </div>
  </header>
  </header><br><br><br>
  <hr><br>

  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="card-counter primary">
          <i class="fa fa-code-fork"></i>
          <span class="count-numbers">189</span>
          <span class="count-name">Companies</span>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-counter danger">
          <i class="fa fa-ticket"></i>
          <span class="count-numbers">243</span>
          <span class="count-name">Projects</span>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-counter success">
          <i class="fa fa-database"></i>
          <span class="count-numbers">6</span>
          <span class="count-name">Course</span>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-counter info">
          <i class="fa fa-users"></i>
          <span class="count-numbers">1200</span>
          <span class="count-name">Enrolled</span>
        </div>
      </div>
    </div>
  </div><br><br>
  <hr><br><br>
  <div class="fluid-container">

<?php include 'navbar.php';?><br>

 <div class="box" style="">
      <div class="container">
       
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="box-part text-center">

              <div class="title text-decoration">
                <h1>About Us</h1>
              <p class="pt-4">
                we employ Probabilistic Neural Network (PNN) with image and data processing techniques to implement a general purpose automated Plant identification for which user can analyze the growth rate of plant which is required in that entered area. The classification features are the set of time series values, built by the sequence of images, and geographic coordinate of field – latitude.

              </p>
              <p>
                It takes a lot of time and man power to identify the areas where plants are to be planted. People keep planting trees In the same area where plants are already been planted they do not have an idea where the need of plantation.

              </p>
              <p class="pt-4">
                we employ Probabilistic Neural Network (PNN) with image and data processing techniques to implement a general purpose automated Plant identification for which user can analyze the growth rate of plant which is required in that entered area. The classification features are the set of time series values, built by the sequence of images, and geographic coordinate of field – latitude.

              </p>
              <p>
                It takes a lot of time and man power to identify the areas where plants are to be planted. People keep planting trees In the same area where plants are already been planted they do not have an idea where the need of plantation.

              </p><p class="pt-4">
                we employ Probabilistic Neural Network (PNN) with image and data processing techniques to implement a general purpose automated Plant identification for which user can analyze the growth rate of plant which is required in that entered area. The classification features are the set of time series values, built by the sequence of images, and geographic coordinate of field – latitude.

              </p>
              <p>
                It takes a lot of time and man power to identify the areas where plants are to be planted. People keep planting trees In the same area where plants are already been planted they do not have an idea where the need of plantation.

              </p>
              </div>


            </div>
          </div>
        </div>
        
    </div>




  </div>

</div>
<br><br>
  <hr>

  <div class="main">
<?php
  if (!isset($_SESSION['student'])) {
    
?>
        <section class="signup" >
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="index.php" enctype="multipart/form-data" style="border:2px solid black; padding: 30px;border-radius: 20px;box-shadow: 0px 0px 5px 5px">
                        <h2 class="form-title">Register Student's</h2>
                        <div class="form-group">
                            <input required type="text" class="form-input" name="city" id="name" placeholder="City"/>
                        </div>
                        <div class="form-group">
                            <input required min="0" type="number" class="form-input" name="num_stu" id="email" placeholder="No.Of Students"/>
                        </div>
                        <div class="form-group">
                            <input required type="text" class="form-input" name="education" id="password" placeholder="Education"/>
                        </div>
                        <div class="form-group">
                            <input required min="0" type="number" class="form-input" name="days" id="name" placeholder="Days"/>
                        </div>
                        <div class="form-group">
                            <input required type="text" class="form-input" name="phone" id="email" placeholder="Your Phone"/>
                        </div>
                        <div class="form-group">
                            <input required type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input required type="text" class="form-input" name="info" id="name" placeholder="Additional Info"/>
                        </div>
                        <div class="form-group">
                            <input required type="file" class="form-input" name="file" id="file"/>
                        </div>
                       
                        <div class="form-group">
                            <input type="submit" name="reg_stu" id="submit" class="form-submit" value="Register"/>
                        </div>
                    </form>
                
                </div>
            </div>
        </section>

<?php 
}else{


?>
<br><br>
        <h3 style="color: green;text-align: center;">
          Student Registered Successfully!
        </h3>
        <br><br>
<?php
}
?>

    </div>
<hr>
 <div class="main">

<?php
  if (!isset($_SESSION['supporter'])) {
    
?>
        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="index.php" enctype="multipart/form-data" style="border:2px solid black; padding: 30px;border-radius: 20px;box-shadow: 0px 0px 5px 5px">
                        <h2 class="form-title">Register Supporter's</h2>
                        <div class="form-group">
                            <input required type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input required type="text" class="form-input" name="phone" id="phone" placeholder="Your Phone"/>
                        </div>
                        <div class="form-group">
                            <input required type="text" class="form-input" name="city" id="city" placeholder="Your City"/>
                        </div>
                        <div class="form-group">
                            <input required type="text" class="form-input" name="age" id="age" placeholder="Your Age"/>
                        </div>
                        <div class="form-group">
                                                <select class="form-input" name="gender">
                                                            <option selected disabled> Select Your Gender </option>
                                                            <option value="Male"> Male </option>
                                                            <option value="Female"> Female </option>
                                                            <option value="Other"> Other </option>                                                    
                                                </select>
                        </div>
                                                <div class="form-group">
                                                <select class="form-input" name="laptop">
                                                            <option selected disabled> Do You Have Laptop? </option>
                                                            <option value="Yes"> Yes </option>
                                                            <option value="No"> No </option>                                                    
                                                </select>
                        </div>
                        <div class="form-group">
                            <input required type="text" class="form-input" name="days" id="email" placeholder="Available days"/>
                        </div>
                        <div class="form-group">
                            <input required type="text" class="form-input" name="info" id="name" placeholder="Additional Info"/>
                        </div>
                        <div class="form-group">
                            <input required type="file" class="form-input" name="file" id="file"/>
                        </div>
                       
                        <div class="form-group">
                            <input type="submit" name="reg_sup" id="submit" class="form-submit" value="Register"/>
                        </div>
                    </form>
                
                </div>
            </div>
        </section>

<?php 
}else{


?>
<br><br>
        <h3 style="color: green;text-align: center;">
          Supporter Registered Successfully!
        </h3>
        <br><br>
<?php
}
?>


    </div>
<hr>
<div class="box">
      <div class="container">
       
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="box-part text-center">
<br><br>
              <div class="title text-decoration">
                <h4><b>Find Student Here</b></h4>
              </div>
<br><br><br><br>

            </div>
          </div>
        </div>
        <div class="row">
   <?php
                   
                    //Connection Stablishing...
                     include_once 'config.php';

                      
                  //Getting Data From Databse...
                      $query = "SELECT * FROM `student`";
                      $res = mysqli_query($conn, $query);

                      if (mysqli_num_rows($res) > 0) {
                        $c = 0;
                        while ($row = mysqli_fetch_assoc($res)) {?>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

            <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<?php echo $row['Image'] ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['Education'] ?></h5><br>
    <h6 class="card-text"><?php echo "Info: ".$row['Info'] ?></h6><br>
    <h6 class="card-text"><?php echo "Available: ".$row['Days']." days a week." ?></h6><br>
    <a href="#" class="btn btn-primary">View Detail</a>
  </div>
</div>
          </div>
        <?php }
      }
      ?>

      </div><br><br><br><br>
      
    </div>




  </div>
<hr>
<div class="box">
      <div class="container">
       
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="box-part text-center">

<br><br>
              <div class="title text-decoration">
                <h4><b>Find Supporter Here</b></h4>
              </div>
<br><br><br><br>

            </div>
          </div>
        </div>
        <div class="row">

          <?php
                   
                    //Connection Stablishing...
                      include_once 'config.php';
                      
                  //Getting Data From Databse...
                      $query = "SELECT * FROM `supporter`";
                      $res = mysqli_query($conn, $query);

                      if (mysqli_num_rows($res) > 0) {
                        $c = 0;
                        while ($row = mysqli_fetch_assoc($res)) {?>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

              <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<?php echo $row['Image'] ?>" alt="Card image cap" style="width: 100%px;height: 330px">
  <div class="card-body">
    <h5 class="card-title"><?php echo "Gender: ".$row['Gender'] ?></h5><br>
    <h6 class="card-text"><?php echo "I am ".$row['Age']." Old." ?></h6><br>
    <h6 class="card-text"><?php echo "Available: ".$row['Days']." days a week." ?></h6><br>
    <a href="#" class="btn btn-primary">View Detail</a>
  </div>
</div>
          </div>
        <?php }
      }
      ?>
      </div><br><br><br><br>
    </div>




  </div>
<hr>
<div class="box" style="margin-top: 100px">
      <div class="container">
       
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="box-part text-center">

              <div class="title text-decoration">
                <h1>Frequently Asked Question's</h1><br><br><br>
              <h4 style="text-align: center;">What Payment Method's Do You Accept?</h4>
              <h6 style="text-align: center;color: green">
                We accept Paypal Payment Method.
              </h6><br>
              <h4 style="text-align: center;">How Can I Update My Policy?</h4>
              <h6 style="text-align: center;color: green">
                You Can Update Your Policy By Contacting Our Customer Support.
              </h6><br>
              <h4 style="text-align: center;">Are Our Details Are Safe Here?</h4>
              <h6 style="text-align: center;color: green">
                Yes, It is obvious that your all information will be kept hidden.
              </h6><br>
              </div>


            </div>
          </div>
        </div>
        
    </div>




  </div>
  <br><br><br><br>
<hr>

<?php
  if (!isset($_SESSION['sender'])) {
    
?>
<div class="background" id="body">
      <div class="container" id="container">
        <div class="screen">
          <div class="screen-header">
            <div class="screen-header-left">

              <div class="screen-header-button close"></div>
              <div class="screen-header-button maximize"></div>
              <div class="screen-header-button minimize"></div>
            </div>
            <div class="screen-header-right">
              <div class="screen-header-ellipsis"></div>
              <div class="screen-header-ellipsis"></div>
              <div class="screen-header-ellipsis"></div>
            </div>
          </div>
          <div class="screen-body">
            <div class="screen-body-item left">
              <div class="app-title">
                <span>CONTACT</span>
                <span>US</span>
              </div>
              <div class="app-contact">CONTACT INFO : +92 317-2746242</div>
            </div>
            <div class="screen-body-item">
              <div class="app-form">
                <form action="index.php" method="post">
                  <div class="app-form-group">
                    <input required class="app-form-control" name="name" placeholder="NAME" required>
                  </div>
                  <div class="app-form-group">
                    <input required class="app-form-control" name="email" placeholder="EMAIL" required>
                  </div>
                  <div class="app-form-group">
                    <input required class="app-form-control" name="phone" placeholder="PHONE" required>
                  </div>
                  <div class="app-form-group message">
                    <input required class="app-form-control" name="message" placeholder="MESSAGE" required>
                  </div>
                  <div class="app-form-group buttons">
                    <input class="app-form-button" type="submit" name="send" value="SEND">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>

<?php 
}else{


?>
<br><br>
        <h3 style="color: green;text-align: center;">
          Thankyou for contacting us!
        </h3>
        <br><br>
<?php
}
?>



<hr>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; TechPhoenix 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>
  <script type="text/javascript">
    //made by vipul mirajkar thevipulm.appspot.com
    var TxtType = function(el, toRotate, period) {
      this.toRotate = toRotate;
      this.el = el;
      this.loopNum = 0;
      this.period = parseInt(period, 10) || 2000;
      this.txt = '';
      this.tick();
      this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
      var i = this.loopNum % this.toRotate.length;
      var fullTxt = this.toRotate[i];

      if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
      } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
      }

      this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

      var that = this;
      var delta = 200 - Math.random() * 100;

      if (this.isDeleting) {
        delta /= 2;
      }

      if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
      } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
      }

      setTimeout(function() {
        that.tick();
      }, delta);
    };

    window.onload = function() {
      var elements = document.getElementsByClassName('typewrite');
      for (var i = 0; i < elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
      }
      // INJECT CSS
      var css = document.createElement("style");
      css.type = "text/css";
      css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
      document.body.appendChild(css);
    };
  </script>
</body>

</html>