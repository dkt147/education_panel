<?php
/*include("../Controller/config.php");
include("../Controller/sessionChecker.php");

$id = $_SESSION["id"];
//echo $id;
*/

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

  <style>
   
    body {
      background: rgb(134, 172, 67);
      background: -moz-linear-gradient(352deg, rgba(134, 172, 67, 0.17970938375350143) 0%, rgba(24, 137, 180, 0.9612219887955182) 66%);
      background: -webkit-linear-gradient(352deg, rgba(134, 172, 67, 0.17970938375350143) 0%, rgba(24, 137, 180, 0.9612219887955182) 66%);
      background: linear-gradient(352deg, rgba(134, 172, 67, 0.17970938375350143) 0%, rgba(24, 137, 180, 0.9612219887955182) 66%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#86ac43", endColorstr="#1889b4", GradientType=1);
      font-size: 12px;
    }

    #body{
      font-family: 'Montserrat', sans-serif;
    }

    .background {
      display: flex;
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


<body style="background-color: white">


  <div class="fluid-container">

<?php include 'navbar.php';?><br>

    <?php
    /*if ($_SESSION['scs'] == "ok") {

      echo '<script language="javascript">';
      echo 'window.alert("Successfully Send!!")';
      echo '</script>';
    }*/

    ?>

 <div class="box">
      <div class="container">
       
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="box-part text-center">

              <div class="title text-decoration">
                <h4><b>Find Supporter Here</b></h4>
              </div>


            </div>
          </div>
        </div>
        <div class="row">

          <?php
                   
                    //Connection Stablishing...
                      $con = mysqli_connect("localhost", "root", "", "education") or die("Query Failed!!!");

                      
                  //Getting Data From Databse...
                      $query = "SELECT * FROM `supporter`";
                      $res = mysqli_query($con, $query);

                      if (mysqli_num_rows($res) > 0) {
                        $c = 0;
                        while ($row = mysqli_fetch_assoc($res)) {?>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

            <div class="box-part text-center">

              <div class="title text-decoration">
                    <h4><?php echo $row['Id'] ?></h4></a>
              </div>


            </div>
          </div>
        <?php }
      }
      ?>
      </div>
    </div>




  </div>

</div>

</body>


</html>