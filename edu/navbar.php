
  <nav id="nav" class="navbar navbar-expand-lg navbar-light bg-white fixed-top" id="mainNav">
    <div class="container">
      <div style="margin-top: 5px; "><a class="navbar-brand js-scroll-trigger" href="index.php"><b>Education</b></a></div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <b>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            <?php
            if (!isset($_SESSION['user'])) {
              
            ?>
            <li class="nav-item">
              <a class="nav-link btn btn-success" href="login.php" style="font-size: 15px;width:120px;color: white;">Login</a>
            </li>
            <?php

            }else{
            ?>
            <li class="nav-item">
              <a class="nav-link" href="#" style="font-size: 15px;width:120px;"><?php echo $_SESSION['user'];?></a>
            </li>
            <?php 
            }
            ?>
          </ul>
         
        </div>
      </b>
    </div>
  </nav>