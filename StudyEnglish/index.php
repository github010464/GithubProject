<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyEnglish.Com | Website</title>    
    <link rel="shortcut icon" type="image/jpg" href="asset/edit--v2.gif"/>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/styles.css">
</head>
<body>

<?php
    include_once 'navbar.php';
?>

<div class="section-video">            
    <video src="asset/Can You Get A Perfect Score On This Grammar Quiz_.mp4" muted loop autoplay></video>     
</div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="asset/lq1.webp" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
      <!-- <h1>Work Hard in Silence</h1>
      <p>Let success makes the noise.</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="asset/lq2.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
      <!-- <h1>Study Hard and Do Good</h1>
      <p>And the good life will follow.</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="asset/lq1.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
      <!-- <h1>The Amount of Wasted Time</h1>
      <p>Is the time not getting started.</p> -->
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div class="footer">
    <h4>follow and like us</h4>
    <img src="asset/instagram-3-xl.png" alt="" style='margin-right:10px;'>
    <img src="asset/twitter-xl.png" alt="">
    <img src="asset/facebook-xl.png" alt="">
    <img src="asset/linkedin-6-xl.png" alt="">	
    <p>Designed by Ronzkie. Copyright &copy; 2020. All rights reserved.</p>
</div>

<script>
    
    $(document).ready(function () {
        $('.navbar-light .dmenu').hover(function () {
                $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
            }, function () {
                $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
            });
        }); 
         
            $(document).ready(function() {
            $(".megamenu").on("click", function(e) {
                e.stopPropagation();
            });
        });
        
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>