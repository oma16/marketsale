<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header id="nav">
        
        <div id="navbar">
            <nav>
                <ul>
                 <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']== false){?>  
               <li><a href="register.php">Sign Up</a></li>     
               <li> <a href="login.php">Sign In </a> </li>
              <?php }else{?>
                <li> <a href="logout.php">Logout </a> </li>
               <li> <a href="dashboard.php">Dashboard </a> </li>
               <?php
            }?>
               
                    
                </ul>
            </nav>
        </div>
        
    </header>
</body>
</html>