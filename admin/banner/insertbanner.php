<?php
session_start();

 if(isset($_POST['submit'])){
     
    $title = trim(htmlentities($_POST['title']));
    $image = $_FILES['image'];
    $status = trim(htmlentities($_POST['status']));
  
 


   if(empty($title))
   {
         $_SESSION['titleerror'] = "enter title please" ;
   }
   if(empty($image))
   {
         $_SESSION['imageerror'] = "enter image please" ;
   }
   if(empty($status))
   {
         $_SESSION['statuserror'] = "enter status please" ;
   }
  
   if(!empty( $_SESSION['titleerror']) || !empty( $_SESSION['imageerror']) ||  !empty( $_SESSION['statuserror']) ) 
   {
    header("Location: banner.php ");
   }
   else{

    $img_ex = explode('.',$image['name']);
    $img_name = $title . '-' . time() .'.'. end($img_ex);
    $imgup = move_uploaded_file($image['tmp_name'] , '../../upimage/banner/'.$img_name);

    if($imgup){

        require_once "../../db.php";

        $query = "INSERT INTO banner (title , image , status  ) VALUES('$title','$img_name','$status' )" ;
        $insert= mysqli_query($conn, $query);
        if($insert){
                  $_SESSION['type'] = "success" ;
                  $_SESSION['message'] = "banner added" ;
                   
                  header("Location: banner.php ");
    


    }




    else{

        $_SESSION['type'] = "danger" ;
        $_SESSION['message'] = "uploaded failed" ;
         
        header("Location: banner.php ");

    }





   }
  


 }
}

?>