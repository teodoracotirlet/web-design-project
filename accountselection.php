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

    </div><br><br><br><br><br>

  
<h1>This is your account:</h1>

<?php

$nameErr=$firstname="";
if (empty($_POST["firstname"])) {
    $nameErr = "Type your name!";
  } else {
    $firstname = $_POST["firstname"];
  }
?>

First Name:  <?php echo $firstname.$nameErr; ?><br>
Last Name : <?php echo $_POST["lastname"]; ?>

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

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$age=$_POST['age'];

$sql = "INSERT INTO clients (firstname, lastname,email,age)
VALUES ('$firstname', '$lastname', '$email','$age')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully !";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>



</head>
</html>
