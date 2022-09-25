<?php
session_start();

 if(isset($_POST['submit'])){
     
    $title = trim(htmlentities($_POST['title']));
   
    $status = trim(htmlentities($_POST['status']));
  
 


   if(empty($title))
   {
         $_SESSION['titleerror'] = "enter title please" ;
   }
  
   if(empty($status))
   {
         $_SESSION['statuserror'] = "enter status please" ;
   }
  
   if(!empty( $_SESSION['titleerror']) ||  !empty( $_SESSION['statuserror']) ) 
   {
    header("Location: edit.php ");
   }
   else{

  

    

        require_once "../../db.php";

        $query = "UPDATE banner  SET title= '$title' , status = '$status' WHERE id=$id  " ;
        $insert= mysqli_query($conn, $query);
        if($insert){
                  $_SESSION['type'] = "success" ;
                  $_SESSION['message'] = "banner updated" ;
                   
                  header("Location: edit.php ");
    


    }
    else{

        $_SESSION['type'] = "danger" ;
        $_SESSION['message'] = "uploaded failed" ;
         
        header("Location: edit.php ");

    }





   }
  


 }


?>