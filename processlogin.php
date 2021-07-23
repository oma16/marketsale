<?php
session_start();
require_once('mysql-connect.php');

   
    $email = $_POST["email"];
    $password = $_POST["password"];
    

   
    $_SESSION["email"] = $email ;
    $_SESSION["password"] = $password;
    $_SESSION["firstname"] = $firstname;  
    $_SESSION["lastname"] = $lastname;


if(isset($_POST["submit"])){
     $error = [];  
     
     echo "<div style ='margin:20px; font-size:30px; color:red'> Welcome $firstname  $lastname, </div>";
   
    if(empty($_POST["email"])){
        
        $error[] = 'Email is required';
        header('location:login.php');

    }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        header('location:login.php');
      }
    else{
        //check if email is available
        $sql = "SELECT * FROM users WHERE email ='$email'";
        $result = mysqli_query($dbc, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck < 1){
            $emailErr = " Email not found";
        header('location:login.php');
        }else{
         
        if(empty($_POST["password"])){
        
        $error[] = 'password is required';
        header('location:login.php');

    }else{
        if($row = mysqli_fetch_assoc($result)){
              // de-hashing the pwd
              $hashedpwdCheck = password_verify($password,$row['password']);
              if($hashedpwdCheck === false){
                $error[] = 'error';
                header('location:login.php');
                exit();
              }elseif($hashedpwdCheck == true){
                  //login user
                $_SESSION["loggedin"] = true ;
                $_SESSION["email"] = $email ;
                $_SESSION["password"] = $password;
                $_SESSION["firstname"] = $firstname;  
                $_SESSION["lastname"] = $lastname;
                $_SESSION["user_id"] = $id;

                header('location:home.php');
                exit();

              }
        }
        
        
         
    }
  
}
    }
    }

?>