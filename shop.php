<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts -->

<?php require 'includes/header.php' ?>

<!-- header section ends -->

<div class="heading">
    <h1>our shop</h1>
    <p> <a href="home.html">home >></a> shop </p>
</div>


<section class="products">

    <h1 class="title"> our <span>products</span> <a href="#">view all >></a> </h1>

    <div class="box-container">

    <?php 

                $db = mysqli_connect("localhost", "root", "", "skincare_db");
                $sql = "SELECT * FROM product";
                $result = mysqli_query($db, $sql);
                while($row = mysqli_fetch_array($result)) {
                    echo "<div class='box'>";
                   echo " <div class='icons'>";
                echo "<a href='#' class='fas fa-shopping-cart'></a>";
                echo "<a href='#' class='fas fa-heart'></a>";
               echo "<a href='#' class='fas fa-eye'></a>";
           echo " </div>";
                    echo "<div class='image'>";
                    echo "<img src='image" . $row['Image'] . "'>";
                    echo "</div>";
                        echo "<div class='content'>";
                            echo "<h3>" . $row['Text'] . "</h3>";
                        echo "<div class='price'>$". $row['product_price'] ."</div>";
                      echo "</div>";
                    echo "</div>";
                        } 
                ?>


        <!-- <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product1.jpg" alt="">
            </div>
            <div class="content">
                <h3>Product one</h3>
                <div class="price">$88.99</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Product two</h3>
                <div class="price">$68.99</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Product three</h3>
                <div class="price">$68.99</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product4.jpg" alt="">
            </div>
            <div class="content">
                <h3>Product four</h3>
                <div class="price">$45.89</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product5.jpg" alt="">
            </div>
            <div class="content">
                <h3>Product five</h3>
                <div class="price">$67.99</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product6.jpg" alt="">
            </div>
            <div class="content">
                <h3>Product six</h3>
                <div class="price">$58.99</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product7.png" alt="">
            </div>
            <div class="content">
                <h3>Product Seven</h3>
                <div class="price">$58.99</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product8.png" alt="">
            </div>
            <div class="content">
                <h3>Product Eight</h3>
                <div class="price">$56.79</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div> -->

    </div>

</section>




<!-- footer section starts  -->

<?php require 'includes/footer.php' ?>


<!-- footer section ends -->


<!-- custom css file link  -->
<script src="js/script.js"></script>

</body>
</html>