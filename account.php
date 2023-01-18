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

  
 
<h1>Create your account</h1>

<form action="accountselection.php" method="POST">
   First Name: <input type="text" name="firstname" required><br> 
   Last Name: <input type="text" name="lastname" required><br>
   Email: <input type="text" name="email" required><br>
   Age: <input type="text" name="age" required><br>
   
   <input type="reset" value="Reset">
   <input type="submit" value="Send">
</form>


</head>
</html>
