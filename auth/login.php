<?php
session_start();

 if(isset($_POST['submit'])){
     
   
    $email = trim(htmlentities($_POST['email']));
    $pass = trim(htmlentities($_POST['password']));
    $password = md5($pass);


  
   if(empty($email))
   {
         $_SESSION['emailerror'] = "enter email please" ;
   }
   if(empty($pass))
   {
         $_SESSION['passerror'] = "enter password please" ;
   }
   if(!empty( $_SESSION['nameerror']) || !empty( $_SESSION['emailerror']) ||  !empty( $_SESSION['passerror']) ) 
   {
    header("Location: ../login.php ");
   }
   else{

    require_once "../db.php";

    $query = "SELECT  email , password , status , role FROM user  WHERE email= '$email' AND password = '$password'   " ;
    $rslt= mysqli_query($conn, $query);
    if(mysqli_num_rows($rslt)>0){
        $user = mysqli_fetch_assoc($rslt);
              $_SESSION['user'] = $user ;
              $_SESSION['role'] = $user['role'] ;
              $_SESSION['type'] = "success" ;
              $_SESSION['message'] = "Login Sueccesfull" ;
               
              header("Location: ../admin/index.php ");



    }else{

        $_SESSION['type'] = "danger" ;
        $_SESSION['message'] = "login failed" ;
         
        header("Location: ../login.php ");

    }





   }
  























 }






























?>