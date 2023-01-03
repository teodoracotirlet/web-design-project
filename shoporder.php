<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   


</head>
    <body>
  

    <div class = "baraprincipala">

    <div class = "logo">
        <img src= "imaginihomepage/logo.png" width="25%">

    </div>
    
    <div class = "linkuriprincipale">
        
        <a href= "photographysite.php" class = "homebutton" >Home</a>
        <a href= "gallery.php" class = "gallerybutton" >Gallery</a>
        <a href= "account.php" class = "accountbutton" >Account</a>
        <a href= "shop.php" class = "shopbutton" >Shop</a>
        <a href= "about.php" class = "aboutbutton" >About</a>

    </div>

    </div><br><br><br><br>

    <h1>This is your order:</h1>

<?php

$nameErr=$fullnameclient="";
if (empty($_POST["fullnameclient"])) {
    $nameErr = "Type your name!";
  } else {
    $firstname = $_POST["firstname"];
  }
?>

Name:  <?php echo $fullnameclient.$nameErr; ?><br>
Order : <?php echo $_POST["product"]; ?>

<?php
//database connection 'clienti'
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photographywebsite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$fullnameclient=$_POST['fullnameclient'];
$product=$_POST['product'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$photographer=$_POST['photographer'];

$sql = "INSERT INTO orders (fullnameclient, product,quantity,price, photographer)
VALUES ('$fullnameclient', '$product', '$quantity','$price','$photographer')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully !";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>



    </body>
</html>