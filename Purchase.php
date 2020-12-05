<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase-Lakme Cosmetics</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/f64fbb0f8c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/project1.css">
    <link rel="stylesheet" href="./css/style.css">
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
              <li class="nav-item"><a class="nav-link active" href="./Home.php"><b><i><i class="fa fa-home" aria-hidden="true">Home</i></i></b></a></li>
              <li class="nav-item"><a class="nav-link" href="./Eyes.php"><b><i><i class="fa fa-eye" aria-hidden="true">Eyes</i></i></b></a></li>
              <li class="nav-item"><a class="nav-link" href="./LipColor.php"><b><i><i class="fas fa-laugh-beam">Lips</i></i></b></a></li>
              <li class="nav-item"><a class="nav-link" href="./NailColor.php"><b><i><i class="fa fa-hand-paper-o" aria-hidden="true">Nails</i></i></b></a></li>
            </ul>
        </div>
    </nav>
<div class="container p-3 ">

<div class="row">
    <?php
        include("config.php");
        $select_image = "select * from  `file_upload`";
        $result_image = mysqli_query($con,$select_image);
        while($fetch_image = mysqli_fetch_assoc($result_image))
        {
            $image_name_f = $fetch_image["imgname"];
            $product_name_f = $fetch_image["productname"];
            $product_price_f = $fetch_image["productprice"];
            
            ?>
                <div class="card3" style="width: 18rem;">
                <h3 class="text-white text-center">PURCHASE HERE AND BUY!!</h3>
                        <img class="card-img-top2" src="imgdoc/<?php echo $image_name_f; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><?php  echo $product_name_f;?></h4>
                            <h5 class="card-text">Rs:<?php  echo $product_price_f;?>/-</h5>
                            
                        </div>
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-dark btn-border-white text-white"><i class="fa fa-shopping-bag" aria-hidden="true"> Buy Now</i></button>
                                </div>
                                
                                <div class="col">
                                <button class="btn btn-dark btn-border-white text-white"><i class="fa fa-shopping-cart" aria-hidden="true"> Add to Cart</i></button>
                                </div>
                            </div>
                        </div>

            <?php
        }

    ?>

    </div>
    </div>
</body>
</html>