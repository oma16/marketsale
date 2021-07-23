<?php
include_once('header.php');

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
 


<form action="processlogin.php" method="post">
    <h1>Log In</h1> 
         <p><?Php
         
         if(isset($_SESSION['error']) && !empty($_SESSION['error'])){
    echo "<span style = color:red>". $_SESSION['error']. "</span>";
    
       }?></p>
      
    <div>
    <label for="email">Email</label><br>
    <input type="email" name="email" id="email1" required  >
    </div>
    <div>
    <label for="password">Password</label><br>
    <input type="password" name="password" id="password1"  required>
    </div>
    <div>
    <button type="submit" name="submit">Login</button>
    </div>
    <p>I don't have an account? <a href="register.php">Sign Up</a></p>
    </form>
    <?php session_unset();?>
    </div>
    
    </main>

</body>
</html>
<?php




?>
