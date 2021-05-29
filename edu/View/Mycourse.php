<?php
    include("../Controller/config.php");
    include("../Controller/sessionChecker.php");

    $id = $_SESSION["id"];
    //echo $id;

    $getUserDataSql = "SELECT * FROM user WHERE userId = '$id'" ;
    $homeUser = mysqli_query($myConn,$getUserDataSql);
    $userDetail = mysqli_fetch_row($homeUser);

    $getUserCourseDataSql = "SELECT * FROM course WHERE userId = '$id'" ;
    $homeUserCourse = mysqli_query($myConn,$getUserCourseDataSql);
    

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
    
    
    <body style="background-color: #007bff!important;">
    
    
        <div class="fluid-container">
            
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
            
            <div class="row" style="margin-top: 200px">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <?php
                        while($userCourseDetail = mysqli_fetch_row($homeUserCourse)){
                            echo "<a href = 'CourseDetailPage.php?courseId=$userCourseDetail[0]' > <strong> $userCourseDetail[2]</strong></a>";
                            echo "<br>";
                            echo "<strong>Number Of Videos : </strong>";
                            echo $userCourseDetail[5];
                            echo "<br>";
                            echo "<br>";
                            
                            echo "<br>";
                            echo "<br>";
                        }

                    ?>
                </div>
                <div class="col-sm-2"></div>
            </div>
            <div class="row">
                <div class="col-sm-5"></div>
                <div class="col-sm-2">
                    

                    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="4735.jpg" alt="Card image cap">
  <div class="card-body">
    <a id="addImageLink" href= "AddNewCoursePage.php?id=<?php echo $userDetail[0]; ?>" class="btn btn-primary" style="margin-left: 40px">Create New Course </a>
  </div>
</div>

                  </div>
                <div class="col-sm-5"></div>
            </div>
          </div>
            
            
            
            
            
            
            
            <!-- MY Page Footer -->
           

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

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

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
        for (var i=0; i<elements.length; i++) {
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
