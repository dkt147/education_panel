<?php

    //Stablishing Connection..
        $conn = mysqli_connect("localhost", "root", "", "education") or die("Query Failed!!!");
    
    //Checking if button is clicked or not...
        if (isset($_POST['send'])) {

    //Getting values from a form...
         $name = $_POST['name'];
         $email = $_POST['email'];
         $phone = $_POST['phone'];
         $message = $_POST['message'];



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
                <form action="contact.php" method="post">
                  <div class="app-form-group">
                    <input class="app-form-control" name="name" placeholder="NAME" required>
                  </div>
                  <div class="app-form-group">
                    <input class="app-form-control" name="email" placeholder="EMAIL" required>
                  </div>
                  <div class="app-form-group">
                    <input class="app-form-control" name="phone" placeholder="PHONE" required>
                  </div>
                  <div class="app-form-group message">
                    <input class="app-form-control" name="message" placeholder="MESSAGE" required>
                  </div>
                  <div class="app-form-group buttons">
                    <input class="app-form-button" type="submit" name="send" value="SEND">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="credits">
          Design by
          <a class="credits-link" href="https://Incoder.netlify.app/" target="_blank">
            <svg class="dribbble" viewBox="0 0 200 200">
              <g stroke="#ffffff" fill="none">
                <circle cx="100" cy="100" r="90" stroke-width="20"></circle>
                <path d="M62.737004,13.7923523 C105.08055,51.0454853 135.018754,126.906957 141.768278,182.963345" stroke-width="20"></path>
                <path d="M10.3787186,87.7261455 C41.7092324,90.9577894 125.850356,86.5317271 163.474536,38.7920951" stroke-width="20"></path>
                <path d="M41.3611549,163.928627 C62.9207607,117.659048 137.020642,86.7137169 189.041451,107.858103" stroke-width="20"></path>
              </g>
            </svg>
            Daniyal khan
          </a>
        </div>
      </div>
    </div>




  </div>



</body>


</html>