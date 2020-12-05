<!DOCTYPE html>
<html lang="en">
<?php 
session_start();

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lakme Cosmetics</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="icon" type="image/icon" href="image/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="https://kit.fontawesome.com/f64fbb0f8c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    #card{
        height:300px;
        width:200px;
    }
    #card img{
        height:200px;
        width:200px;
    }
</style>
<body>

        <div class="container-fluid p-3 bg-dark">
            <h2 class="text-white text-center">Lakme Products</h2>
        </div>

        <div class="row">
            <div class="container p-5 m-1">
                <h3 class="text-dark">Enter the details</h3>

                <form action="" method="post" enctype="multipart/form-data" class="form-group">
                    <label for="" class="mt-2">Product Name:</label>
                    <input type="text" name="product_name" id="" placeholder="Enter Product Name..." class="form-control" required>

                    <label for="" class="mt-2">Product Price:</label>
                    <input type="text" name="product_price" id="" placeholder="Enter Product Price..." class="form-control" required>

                    <label for="" class="mt-2">Image to be uploaded: </label>
                    <input type="file" name="image" id="" class="form-control" required>

                    <input type="submit" value="Upload" name="submit_upload" class="btn mt-4 btn-success form-control" required>
                </form>

                    <?php
                        include("config.php");
                            if(isset($_POST["submit_upload"]))
                            {       
                        $upload = "imgdoc/";
                        $productname = $_POST["product_name"];
                        $productprice = $_POST["product_price"];
                        $image = $_FILES["image"]["name"];
                        $image_tmp = $_FILES["image"]["tmp_name"];

                            if(move_uploaded_file($image_tmp,$upload.$image))
                            {
                                $sql_insert = "INSERT INTO `file_upload`(`id`, `productname`, `productprice`, `imgname`) VALUES (NULL,'$productname','$productprice','$image')";
                                if(mysqli_query($con,$sql_insert))
                                {
                                    echo"PRODUCT HAS BEEN UPLOADED";
                                }
                                else
                                {
                                    echo"FAILED TO UPLOAD THE PRODUCT";
                                }
                            }
                            /*else
                            {
                                echo"fail";
                            }*/
                        }

                    ?>

                    
</body>
</html>