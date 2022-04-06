<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <!-- header section starts  -->

<?php require 'includes/header.php' ?>

<!-- header section ends -->
<div class="body1">
    <div class="container-lg">
        <div class="header-lg">
            <h2>Contact us</h2>
        </div>
        <div class="contacti">
            <form action="includes/connect.php" method="POST" id="form" onsubmit="return validate()">
                <label>Name</label>
                <input type="text" id="name" name="firstName" placeholder="Enter your name">
                <label>Email</label>
                <input type="email" id="email" name="mail" placeholder="Enter your email">
                <label>Message</label><br>
                <textarea name="message" id="message" name="message" cols="30" rows="10" placeholder="Type a message"></textarea><br>
                <button type="submit" name="submit" onclick="validate()">Submit</button>
            </form>
        </div>
    </div>

    <div class="adresses">
        <h2>Adress</h2>
        <p>Karposh 03 Presevo, Serbia</p>
        <p>Rruga Kosoves 103 Bujanovac, Serbia<p>
        <h2>Telephone Number</h2>
        <p>+381 63 8109123<p>
        <h2>Email to contact us</h2>
        <p>skincare.support@hotmail.com</p>
    </div>
</div>


<!-- footer section starts  -->

<?php require 'includes/footer.php' ?>


<!-- footer section ends -->


<!-- custom css file link  -->
<script src="js/script.js"></script>
</body>
</html>