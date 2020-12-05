<!DOCTYPE html>
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
    <link rel="stylesheet" href="./css/style.css">
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
    </nav>
    <center><div class="card2">
        <div class="card-body">
            <div class="container-fluid p-5">
            <div class="row">
            <div class="col text-white">
            <center><h2><b><i><u>REGISTRATION FORM</u></i></b></h2></center>
                
                <form action="" method="post"> 
                    <div class="input">
                        <label for="" class="mt-2">NAME:</label>
                        <input type="text" name="username" id="" class="form-control text-white bg-black" placeholder="Enter your name:"required>
                    </div>

                    <div class="input">
                        <label for="" class="mt-2">EMAIL-ID:</label>
                        <input type="email" name="useremail" id="" class="form-control text-white bg-black" placeholder="Enter your email-id"required>
                    </div>

                    <div class="input">
                        <label for="" class="mt-2">MOBILE NUMBER:</label>
                        <input type="text" name="usermobile" id="" class="form-control text-white bg-black" placeholder="Enter your mobile number:"required>
                    </div>

                    <div class="input">
                        <label for="" class="mt-2">PASSWORD:</label>
                        <input type="password" name="userpass" id="" class="form-control text-white bg-black" placeholder="Enter your password:"required>
                    </div>

                    <div class="input">
                        <label for="" class="mt-2">House/Flat Name:</label>
                        <input type="text" name="userflat" id="" class="form-control text-white bg-black" placeholder="Enter the House/Flat Name.:"required>
                    </div>

                    <div class="input">
                        <label for="" class="mt-2">Street:</label>
                        <input type="text" name="userst" id="" class="form-control text-white bg-black" placeholder="Enter the Street:"required>
                    </div>

                    <div class="input">
                        <label for="" class="mt-2">Area:</label>
                        <input type="text" name="userarea" id="" class="form-control text-white bg-black" placeholder="Enter the Area:"required>
                    </div>

                    <div class="input">
                        <label for="" class="mt-2">District:</label>
                        <input type="text" name="userdis" id="" class="form-control text-white bg-black" placeholder="Enter the District:"required>
                    </div>

                    <div class="input">
                        <label for="" class="mt-2">State:</label>
                        <input type="text" name="userstate" id="" class="form-control text-white bg-black" placeholder="Enter the State:"required>
                    </div>

                    <div class="input">
                        <label for="" class="mt-2">Country:</label>
                        <input type="text" name="usercountry" id="" class="form-control text-white bg-black" placeholder="Enter the Country:"required>
                    </div>

                    <div class="input">
                        <label for="" class="mt-2">Pincode:</label>
                        <input type="text" name="userpin" id="" class="form-control text-white bg-black" placeholder="Enter the Pincode:"required>
                    </div>

                     <div class="input p-2">
                        <button class="btn btn-primary text-white" type="submit" name="submit_1">Register</button>
                    </div>
                </form>

                <?php

                    include ("config.php");

                    if(isset($_POST["submit_1"]))
                    {
                        $name = $_POST["username"];
                        $email = $_POST["useremail"];
                        $mobile = $_POST["usermobile"];
                        $password = $_POST["userpass"];
                        $flat = $_POST["userflat"];
                        $st = $_POST["userst"];
                        $area = $_POST["userarea"];
                        $dis = $_POST["userdis"];
                        $state = $_POST["userstate"];
                        $country = $_POST["usercountry"];
                        $pin = $_POST["userpin"];

                        $sql = "INSERT INTO `registration`(`s.no`, `name`, `email`, `mobile`, `password`, `flat`, `street`, `area`, `district`, `state`, `country`, `pincode`) VALUES ('NULL','$name','$email','$mobile','$password','$flat','$st','$area','$dis','$state','$country','$pin')";
                        if(mysqli_query($con,$sql))
                        {
                            echo "YOUR REGISTRATION HAS BEEN SUCCESSFULLY REGISTERED";
                            echo"
                            <script>
                            window.location='Index.php'
                            </script>";
                        }
                        else
                        {
                            echo "FAILED TO PROCESS...PLEASE TRY AGAIN LATER";
                        }
                    }
                    

                ?>
            </div>
        </div>
    </div>
    </div>
    </div></center>
</body>
</html> 