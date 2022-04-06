<?php 
    session_start();
?>
<!-- THE UPLOAD ROOM BOX -->
<?php 
    $msg = "";
    // If upload button is pressed
    if(isset($_POST['upload-product'])) {
        $target = "image".basename($_FILES['image']['name']);

        // connect to the database

        $db = mysqli_connect("localhost", "root", "", "skincare_db");

        // Get all the submitted data from the form
        $image = $_FILES['image']['name'];
        $text = $_POST['text'];
        $product_price = $_POST['product_price'];
        $posted_by = $_SESSION['userUid'];

        if(empty($image)) {
            header("Location: dashboard.php?empty-image");
            die();   
        }

        $sql = "INSERT INTO product(Image, Text, product_price, posted_by) VALUES ('$image', '$text', '$product_price', '$posted_by')";
        mysqli_query($db, $sql); // stores the dubmitted data into the database table: add_product

        // This moves the uploaded image inside the folder -> Images
        if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "There was a problem uploading your image";
        }
    };

?>
