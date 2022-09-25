<?php
session_start();

 if(isset($_POST['submit'])){
     
    $title = trim(htmlentities($_POST['title']));
   
    $des = trim(htmlentities($_POST['des']));
 
  
 


   if(empty($title))
   {
         $_SESSION['titleerror'] = "enter title please" ;
   }
  
   if(empty($des))
   {
         $_SESSION['deserror'] = "enter des please" ;
   }
 
  
   if(!empty( $_SESSION['titleerror']) ||  !empty( $_SESSION['deserror'])  ) 
   {
    header("Location: faqcreate.php ");
   }
   else{

  

        require_once "../../db.php";

        $query = "INSERT INTO faq (title  , des   ) VALUES('$title','$des' )" ;
        $insert= mysqli_query($conn, $query);
        if($insert){
                  $_SESSION['type'] = "success" ;
                  $_SESSION['message'] = "faq added" ;
                   
                  header("Location: faqcreate.php ");
    


    }


    else{

        $_SESSION['type'] = "danger" ;
        $_SESSION['message'] = "uploaded failed" ;
         
        header("Location: faqcreate.php ");

    }





   }
  


 }


?>