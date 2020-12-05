<!DOCTYPE html>
<?php
        session_start();
        
    if(isset($_SESSION["user_name"]))
    {
        
    }
    else
    {
        header("location:Index.php");
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lakme Cosmetics</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/f64fbb0f8c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/project1.css">
</head>
<body>

    <nav class="navbar navbar-expand-md" id="navbar">

        <a class="navbar-brand" href="#">
        <img src="./images/logo2.png" width="auto" height="30" alt="logo" loading="lazy">
        <img src="./images/logo3.jpg" width="auto" height="40" alt="logo" loading="lazy">
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCon">
            <a href="#" class="btn btn-light"><span class="navbar-toggler-icon"></span></a>
        </button>
        <div class="navbar-collapse collapse" id="navbarCon">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link" href="./Eyes.php"><b><i><i class="fa fa-eye" aria-hidden="true">Eyes</i></i></b></a></li>
              <li class="nav-item"><a class="nav-link" href="./LipColor.php"><b><i><i class="fas fa-laugh-beam">Lips</i></i></b></a></li>
              <li class="nav-item"><a class="nav-link" href="./NailColor.php"><b><i><i class="fa fa-hand-paper-o" aria-hidden="true">Nails</i></i></b></a></li>
              <li class="nav-item"><a class="nav-link" href="./Purchase.php"><b><i><i class="fa fa-shopping-bag">Purchase</i></i></b></a></li>
              <div class="dropdown">
              <button class="btn dropdown-toggle " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="fa fa-user-circle"><?php echo $_SESSION["user_name"]; ?></span></button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <b><i><a class="dropdown-item" href="Logout.php">Logout</a></i></b>
              </div>
              </div>
            </ul>
        </div>
    </nav>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="./images/banner1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./images/banner2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./images/banner3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
    </div>
    <div class="card1 mb-3">
  <div class="row no-gutters">
    <div class="col-md-4">
        <img src="./images/trending.png" class="card-img-top" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
            <b><i><h5 class="card-title">Trending...</h5></i></b>
            <h4 class="card-subtitle"><b><i>HOW TO ACE THE METALLIC EYE TREND</i></b></h4>
            <p class="card-text"><b><i>The glitter eyes have had their moment of glory, but this year, the metallic eye look has made a comeback in grandiose style.Lakme exhibit this look with absolute vogue. Smooth metallic eyes, with a mirror-like finish offers a subtle and clean eye look that complements nude and bold lips alike.</i></b></p>                
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
<div class="card1 mb-3">
  <div class="row no-gutters">
    <div class="col-md-4">
        <img src="./images/trending2.jpg" class="card-img-top" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
            <b><i><h5 class="card-title">Trending...</h5></i></b>
            <h4 class="card-subtitle"><b><i>MATTE MELT LIQUID LIP COLOR</i></b></h4>
            <p class="card-text"><b><i>Introducing Lakme Matte Melt Liquid Lip Color Range - Available in 20 Exciting shades! This matte lip colour makes your lips look lush, matte and bold. It has a velvety matte texture that delivers a stunning suede-like finish. The formula is long-wear by nature, feels feather-light on your lips and has an intense, deep and rich colour pay off in a single stroke.</i></b></p>                
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
<div class="card1 mb-3">
  <div class="row no-gutters">
    <div class="col-md-4">
        <img src="./images/trending3.jpg" class="card-img-top" alt="..."><br>
    </div>
    <div class="col-md-8">
      <div class="card-body">
            <b><i><h5 class="card-title">Trending...</h5></i></b>
            <h4 class="card-subtitle"><b><i>MATTE LIQUID NAIL COLOR</i></b></h4>
            <p class="card-text"><b><i>Introducing Lakme Matte Liquid Nail Color Range – Available in 15 Exciting shades! Long-lasting, chip resistant nail enamel.  Contains resins to strengthen nails and prevent breakage.  Has colour lock technology.  Gives lacquer-like finish</i></b></p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
    <div class="footer container-fluid">
        <center><img src="./images/logo2.png" width="auto" height="30" alt="logo" loading="lazy">
        <img src="./images/logo3.jpg" width="auto" height="40" alt="logo" loading="lazy"></center>
        <div class="row">
            <div class="col">
                <h3 class="text-white">For more details</h3>
                <p class="text-light">Visit our official page: <a href="https://lakmeindia.com/">LakmeIndia.com</a></p>
                <p class="text-light">Contact us: 1800-102-0348</p>
                <p class="text-light">Email us: order@lakmeindia.com</p>
            </div>
            <div class="col">
                <h3 class="text-light">Follow us on:</h3>
                <p><a class="text-light p-0" href="https://www.instagram.com/lakmeindia/"><i class="fa fa-instagram" aria-hidden="true"></i>lakmeindia</a></p>
                <p><a class="text-light p-0" href="https://www.facebook.com/lakme"><i class="fa fa-facebook-official" aria-hidden="true"></i>lakme</a></p>
                <p><a class="text-light p-0" href="https://twitter.com/ilovelakme"><i class="fa fa-twitter" aria-hidden="true"></i>ilovelakme</a></p>
                <p><a class="text-light p-0" href="https://www.youtube.com/user/ILoveLakme"><i class="fa fa-youtube-play" aria-hidden="true"></i>ILoveLakme</a></p></center>
            </div>
            <div class="col">
                <h3 class="text-light">Customer Care:</h3>
                <p><a href="https://lakmeindia.com/pages/terms-conditions" class="text-light">Terms and Conditions</a></p>
                <p><a href="https://www.unilevernotices.com/india/english/privacy-notice/notice.html" class="text-light">Privacy Policy</a></p>
                <p><a href="https://lakmeindia.com/pages/faq" class="text-light">FAQs</a></p>
            </div>
            <div class="col">
                <center><h5><a class="text-light" href="https://api.whatsapp.com/send?phone=919137630020&text=Send%20this%20message%f0%9f%91%89&source=&data=&app_absent="><i class="fa fa-whatsapp" aria-hidden="true"></i>Chat with us</a></h5>
                <form action="#" method="POST" class="form-group">
                    <input type="text" class="form-control w-50 m-3 text-light" placeholder="Enter your name">
                    <input type="text" class="form-control w-50 m-3 text-light" placeholder="Enter your number">
                    <input type="email" class="form-control w-50 m-3 text-light" placeholder="Enter your Email">
                    <input type="submit" value="Register" class="btn btn-md w-25 mt-3 m-auto bg-info">
                </form></center>
            </div>
        </div>
    </div>
</body>
</html>