<?php 
    session_start();
?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<header class="header">

    <a href="home.php" class="logo"> <i class="fas fa-shopping-basket"></i> Skincare </a>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="shop.php">shop</a>
        <a href="about.php">about</a>
        <a href="review.php">review</a>
        <a href="contact.php">contact</a>
    </nav>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <div id="cart-btn" class="fas fa-shopping-cart"></div>
    </div>

    <form action="" class="search-form">
        <input type="search" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-times"></i>
            <img src="image/product2.jpg" alt="">
            <div class="content">
                <h3>Skincare product</h3>
                <span class="quantity">1</span>
                <span class="multiply">x</span>
                <span class="price">$18.99</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-times"></i>
            <img src="image/product3.jpg" alt="">
            <div class="content">
                <h3>Skincare product</h3>
                <span class="quantity">1</span>
                <span class="multiply">x</span>
                <span class="price">$18.99</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-times"></i>
            <img src="image/product4.jpg" alt="">
            <div class="content">
                <h3>Skincare product</h3>
                <span class="quantity">1</span>
                <span class="multiply">x</span>
                <span class="price">$18.99</span>
            </div>
        </div>
        <h3 class="total"> total : <span>56.97</span> </h3>
        <a href="#" class="btn">checkout cart</a>
    </div>

    
    <?php
    if(!isset($_SESSION['userUid'])) {
        echo '        
        <nav class="navbar">
        <a href="log-in.php">Log in</a>
        <a href="login.php">Sign Up</a>
        </nav>';
    };
                if(isset($_SESSION['userUid'])) {
                    if($_SESSION['userGroup'] > 0) {
                        echo '
                        <nav class="navbar">
                        <a href="dashboard.php">Admin Dashboard</a>
                       ';
                       echo '
                       <div class="navbar-logout">
                          <p> Logged in as ' . '<span style="color: black;">' . $_SESSION['userUid']   . '</span>' . '</p>';
                          echo ' <form action="includes/logout.php" method="post">
                          <button class="logout-button" name="logout-button"> Logout </button>
                          </form>
                      </div>';
                    };
                     if($_SESSION['userGroup'] == 0) {
                        echo  '
                        <div class="navbar-logout">
                           <p> Logged in as ' . '<span style="color: black;">' . $_SESSION['userUid']   . '</span>' . '</p>';
                           echo ' <form action="includes/logout.php" method="post">
                           <button class="logout-button" name="logout-button"> Logout </button>
                           </form>
                       </div>';
                    } 
                }
            ?>


</header>
