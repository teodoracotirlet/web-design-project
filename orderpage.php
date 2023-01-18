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

    
   <h1>Order here:</h1>
<form action="shoporder.php" method="POST">
   Full Name: <input type="text" name="fullnameclient" required><br> 
   Product: <input type="text" name="product" required><br>
   Quantity: <input type="text" name="quantity" required><br>
   Price: <input type="text" name="price" required><br>
   Photographer: <input type="text" name="photographer" required><br>
   
   <input type="reset" value="Reset">
   <input type="submit" value="Order">
</form>


    </body>
</html>
