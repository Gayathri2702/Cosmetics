<!DOCTYPE html>
<html lang="en">
    <?php 
    session_start();
    ?>
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
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-md" id="navbar">

        <a class="navbar-brand" href="#">
            <img src="./images/logo2.png" width="auto" height="30" alt="logo" loading="lazy">
            <img src="./images/logo3.jpg" width="auto" height="40" alt="logo" loading="lazy">
        </a>
        
    </nav>
    <center><div class="card2">
        <div class="card-body">
                
                <div class="container-fluid text-white">
                    <center><h2><b><i><u>LOGIN</h2></u></i></b></center>
                        <form action="" method="post"> 
                            <div class="input">
                                <label for="" class="mt-2 text-align-left text-white">NAME:</label>
                                <input type="text" name="user_name" id="" class="form-control text-white bg-black" placeholder="Enter your name:"required>
                            </div>

                            <div class="input">
                                <label for="" class="mt-2 text-align-left">EMAIL-ID:</label>
                                <input type="email" name="user_email" id="" class="form-control text-white bg-black" placeholder="Enter your email-id"required>
                            </div>

                            <div class="input">
                                <label for="" class="mt-2 text-align-left">PASSWORD:</label>
                                <input type="password" name="user_pass" id="" class="form-control text-white bg-black" placeholder="Enter your password:"required>
                            </div>

                            <div class="input p-2">
                                <button class="btn btn-primary text-white btn-align-right" type="submit" name="submit_s">Login</button>
                            </div>

                            <div class="input p-2">
                                <p>Didnt have an account? <a href="./Registration.php" class="text-info">sign up <span>&#128100;</span></a></p>
                            </div>
                        </form>

                        <?php

                            include ("config.php");

                            if(isset($_POST["submit_s"]))
                            {

                                $name_l=$_POST["user_name"];
                                $email_l = $_POST["user_email"];
                                $pswd = $_POST["user_pass"];

                                $sql_1 = "SELECT * FROM `registration` WHERE `name`='$name_l'and`email`='$email_l'and`password`='$pswd'";
                                $result_login = mysqli_query($con,$sql_1);
                                if(mysqli_num_rows($result_login)>0)
                                {
                                    $_SESSION["user_name"]=$name_l;
                                    header("location:Home.php");
                                   
                                   
                                }
                                else
                                {
                                    header("location:Registration.php");
                                }
                            }
                            /*else
                            {
                                echo "fail";
                            }*/

                        ?>
                    </div>
                </div>
            </div>  </center>
                
</body>
</html>

    
  