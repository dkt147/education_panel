<?php
    include("../Controller/config.php");
    include("../Controller/sessionChecker.php");

    $id = $_SESSION["id"];
    $courseId = $_GET["courseId"];
    //echo $id;

    // User Data
    $getUserDataSql = "SELECT * FROM user WHERE userId = '$id'" ;
    $homeUser = mysqli_query($myConn,$getUserDataSql);
    $userDetail = mysqli_fetch_row($homeUser);

    //Course Data
    $courseDataSql = "SELECT * FROM course WHERE courseId = '$courseId'" ;
    $courseDetail = mysqli_query($myConn,$courseDataSql);
    $courseData = mysqli_fetch_array($courseDetail);

    // Video Data
    $VideoDataSql = "SELECT * FROM video WHERE courseId = '$courseId'" ;
    $videoDetail = mysqli_query($myConn,$VideoDataSql);
    

?>
<!DOCTYPE html>
<html>
    <head>
        <title>E2DUCATION Courses</title>
        
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
        
            #leftMenus > li{
              margin-left:15px;
              margin-right:15px;
            }
        
            #rightMenus > li{
              margin-right:50px;
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
            
            #addImageLink{
                align-self: auto;
            }
        </style>
        
    </head>
    
    
    <body style="background-color: white;">
    
    
        <div class="fluid-container">
            
          
            
            <nav class="navbar navbar-expand-md bg-light navbar-light margin-right:0px" style="margin-bottom: 30px;">
                  <!-- Brand -->
                <a class="navbar-brand" href="Home.php?id=<?php echo $userDetail[0]; ?>"><b>E<sup>2</sup>DUCATION</b></a>

                  <!-- Toggler/collapsibe Button -->
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <b>
      
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link active" href="Home.php?id=<?php echo $userDetail[0]; ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="MyCoursePage.php?id=<?php echo $userDetail[0]; ?>">My Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="CoursesPage.php?id=<?php echo $userDetail[0]; ?>">Find New Courses</a>
          </li>
                    <li class="nav-item">
            <a class="nav-link " href="learnAboutUs.php?id=<?php echo $userDetail[0]; ?>">About Us</a>
          </li>
                 
        </ul>
         <ul class="navbar-nav ml-auto" id="rightMenus" >
                            <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    <?php 
                                        echo $userDetail[1];    
                                    ?>
                                  </a>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="UserAccountPage.php?id=<?php echo $userDetail[0]; ?>">Account</a>
                                    <a class="dropdown-item" href="TeacherMsgPage.php?id=<?php echo $userDetail[0]; ?>">Be a Teacher</a>
                                    <a class="dropdown-item" href="../Controller/logout.php" style="color : red">Log Out</a>
                                  </div>
                                
                            </li>
                        </ul>
      </div></b>
                      
                 </nav> </div>
               
            
  <div class="box">
    <div class="container">
      <div class="row">
       
                    <?php
                        echo "<strong>".$courseData[2]."</strong>";
                      
                        if($id == $courseData[1]){
                            echo "<h1><br>You are The Onwer Of The Course To Add new Tutorial Click Here</h1>";
                            echo "<a href = 'AddNewVideoPage.php?courseId=$courseData[0]'> Add New Video </a>";
                        }
                    
                        echo "<br>";
                        echo "<ol>";
                        while($videoRow = mysqli_fetch_array($videoDetail)){
                          ?>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 offset-2" >
               
          <div class="box-part text-center">
                        
            <div class="title text-decoration">
          <a href="CoursesPage.php"><h4><?php  echo " <ol> <li> <a href = '$videoRow[5]'> <strong>$videoRow[3]</strong> </a> </li></ol>";?></h4></a>
            </div>
                       
                  <?php }?>      
           </div>
        </div>  
                </div>
                <div class="col-sm-2"></div>
            </div>

            
          
        </div>

    
    </body>
    
    
    
    
    
    

</html>