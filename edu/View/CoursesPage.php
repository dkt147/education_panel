<?php
    include("../Controller/config.php");
    include("../Controller/sessionChecker.php");

    $id = $_SESSION["id"];
    //echo $id;

    $getUserDataSql = "SELECT * FROM user WHERE userId = '$id'" ;
    $homeUser = mysqli_query($myConn,$getUserDataSql);
    $userDetail = mysqli_fetch_row($homeUser);

    $getAllCourseDataSql = "SELECT * FROM course" ;
    $allCourse = mysqli_query($myConn,$getAllCourseDataSql);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>E2DUCATION Course</title>
        
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
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
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

#show{
color: white;
background-color: silver;
width: 300px;
height: 50px;
padding-left: 100px;
padding-top: 12px;
margin-left: 550px;
box-shadow: 2px 2px 2px 2px rgba(0,0,0); 
}
.vertical-menu {
  width: 250px; /* Set a width if you like */
  text-align: center;
  margin-left: 50px;
}

.vertical-menu a {
  background-color: #eee; /* Grey background color */
  color: black; /* Black text color */
  display: block; /* Make the links appear below each other */
  padding: 12px; /* Add some padding */
  text-decoration: none; /* Remove underline from links */
}

.vertical-menu a:hover {
  background-color: #ccc; /* Dark grey background on mouse-over */
}

.vertical-menu a.active {
  background-color: #4CAF50; /* Add a green color to the "active/current" link */
  color: white;
}

.box{
    padding:60px 0px;
}

.box-part{
    background:#FFF;
    border-radius:0;
    padding:60px 10px;
    margin:30px 0px;
    border:2px solid white;border-radius: 0.5em;
  box-shadow: 1px 2px 50px 0px rgba(0,0,0);
}
.text{
    margin:20px 0px;
}
        </style>
        
    </head>
    
    
    <body style="background-color: white;">
    
    
        <div class="fluid-container" style="">
            
            <div class="row" id="pageHeader" >
                <div class="col-sm-12" style="text-align: center">
<br><br><br><br><br><br>
                </div>
            
            </div>
            
              <nav id="nav" class="navbar navbar-expand-lg navbar-light bg-white fixed-top" id="mainNav">
    <div class="container">
      <div style="margin-top: 5px; "><a class="navbar-brand js-scroll-trigger" href="Home.php?id=<?php echo $userDetail[0]; ?>"><b>Education</b></a></div>
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
    </div>
  </nav>
            
  <div class="box">
    <div class="container">
      <div class="row">
       <?php
                            while($courseDetail = mysqli_fetch_row($allCourse)){?>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 " >
               
          <div class="box-part text-center">
                        
            <div class="title text-decoration">
          <a href="CoursesPage.php"><h4><?php echo "<a href = 'CourseDetailPage.php?courseId=$courseDetail[0]'> <strong>$courseDetail[2]</strong> </a>";                                echo "<br>";
                                echo "<strong>Number Of Files : </strong>";
                                echo $courseDetail[5];
                                echo "<br>";
                                echo "<br>";
                            
?>
  
</h4></a>
            </div>
                       
                        
           </div>
        </div>  <?php } ?> 
        
          </div>
        </div>
      </div>
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <?php
                            while($courseDetail = mysqli_fetch_row($allCourse)){
                                echo "<a href = 'CourseDetailPage.php?courseId=$courseDetail[0]'> <strong>$courseDetail[2]</strong> </a>";
                                echo "<br>";
                                echo "<strong>Number Of Files : </strong>";
                                echo $courseDetail[5];
                                echo "<br>";
                                echo "<br>";
                            }

                        ?>
                    </div>
                    <div class="col-sm-2"></div>
            </div>
            
          
        </div>
        
        
            <!-- MY Page Footer -->
            

    
    </body>
    
    
    
    
    
    

</html>