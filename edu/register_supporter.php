<?php

    //Stablishing Connection..
        $conn = mysqli_connect("localhost", "root", "", "education") or die("Query Failed!!!");
    
    //Checking if button is clicked or not...
        if (isset($_POST['register'])) {

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



    //Insert Query for Mysql...
         $sql = "INSERT INTO `supporter`(`Email`, `Phone`, `City`, `Age`, `Gender`, `Laptop`, `Days`, `Info`, `Image`) VALUES ('$email','$phone','$city','$age','$gender','$laptop','$days','$info','$target_file')";
        

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
  <title>E2DUCATION About Us</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

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
 <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
<!-- Main css -->
    <link rel="stylesheet" href="style.css">

  <style>
    /* Make the image fully responsive */
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

    body {
      background: rgb(134, 172, 67);
      background: -moz-linear-gradient(352deg, rgba(134, 172, 67, 0.17970938375350143) 0%, rgba(24, 137, 180, 0.9612219887955182) 66%);
      background: -webkit-linear-gradient(352deg, rgba(134, 172, 67, 0.17970938375350143) 0%, rgba(24, 137, 180, 0.9612219887955182) 66%);
      background: linear-gradient(352deg, rgba(134, 172, 67, 0.17970938375350143) 0%, rgba(24, 137, 180, 0.9612219887955182) 66%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#86ac43", endColorstr="#1889b4", GradientType=1);
      font-size: 12px;
    }

    #body,
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


<body style="background-color: white">


  <div class="fluid-container">

<?php include 'navbar.php';?><br>

      <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="register_supporter.php" enctype="multipart/form-data">
                        <h2 class="form-title">Register Supporter's</h2>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="phone" id="phone" placeholder="Your Phone"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="city" id="city" placeholder="Your City"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="age" id="age" placeholder="Your Age"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="gender" id="email" placeholder="Gender M/F"/>
                        </div>
                                                <div class="form-group">
                            <input type="text" class="form-input" name="laptop" id="email" placeholder="Laptop Y/N"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="days" id="email" placeholder="Available days"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="info" id="name" placeholder="Additional Info"/>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-input" name="file" id="file"/>
                        </div>
                       
                        <div class="form-group">
                            <input type="submit" name="register" id="submit" class="form-submit" value="Register"/>
                        </div>
                    </form>
                
                </div>
            </div>
        </section>

    </div>




  </div>



</body>


</html>