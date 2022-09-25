<?php
session_start();

 if(isset($_POST['submit'])){
     
    $name = trim(htmlentities($_POST['name']));
    $email = trim(htmlentities($_POST['email']));
    $pass = trim(htmlentities($_POST['password']));
    $role = trim($_POST['role']);
    $password = md5($pass);


   if(empty($name))
   {
         $_SESSION['nameerror'] = "enter name please" ;
   }
   if(empty($email))
   {
         $_SESSION['emailerror'] = "enter email please" ;
   }
   if(empty($role))
   {
         $_SESSION['roleerror'] = "enter role please" ;
   }
   if(empty($pass))
   {
         $_SESSION['passerror'] = "enter password please" ;
   }
   if(!empty( $_SESSION['nameerror']) || !empty( $_SESSION['emailerror']) ||  !empty( $_SESSION['passerror'])||  !empty( $_SESSION['roleerror']) ) 
   {
    header("Location: ../registration.php ");
   }
   else{

    require_once "../db.php";

    $query = "INSERT INTO teacher (name , email , password , role ) VALUES('$name','$email','$password' , '$role')" ;
    $insert= mysqli_query($conn, $query);
    if($insert){

      $query2 = "INSERT INTO user (name , email , password , role ) VALUES('$name','$email','$password' , '$role')" ;
      $insert2= mysqli_query($conn, $query2);
             if($insert2) {
                  $_SESSION['type'] = "success" ;
              $_SESSION['message'] = "Registration done" ;
               
              header("Location: ../login.php ");
  
             }else{
                  echo "not done" ;
             }
      


    }else{

        $_SESSION['type'] = "danger" ;
        $_SESSION['message'] = "Registration failed" ;
         
        header("Location: ../registration.php ");

    }





   }
  























 }






























?>