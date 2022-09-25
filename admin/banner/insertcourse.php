<?php
session_start();

 if(isset($_POST['submit'])){
     
    $title = trim(htmlentities($_POST['title']));
    $image = $_FILES['image'];
    $des = trim(htmlentities($_POST['des']));
    $price = trim(htmlentities($_POST['price']));
  
 


   if(empty($title))
   {
         $_SESSION['titleerror'] = "enter title please" ;
   }
   if(empty($image))
   {
         $_SESSION['imageerror'] = "enter image please" ;
   }
   if(empty($des))
   {
         $_SESSION['deserror'] = "enter des please" ;
   }
   if(empty($price))
   {
         $_SESSION['pricerror'] = "enter des price" ;
   }
  
   if(!empty( $_SESSION['titleerror']) || !empty( $_SESSION['imageerror']) ||  !empty( $_SESSION['deserror']) ||  !empty( $_SESSION['pricerror']) ) 
   {
    header("Location: coursecreate.php ");
   }
   else{

    $img_ex = explode('.',$image['name']);
    $img_name = $title . '-' . time() .'.'. end($img_ex);
    $imgup = move_uploaded_file($image['tmp_name'] , '../../upimage/course/'.$img_name);

    if($imgup){

        require_once "../../db.php";

        $query = "INSERT INTO course (title , image , des , price  ) VALUES('$title','$img_name','$des' , '$price' )" ;
        $insert= mysqli_query($conn, $query);
        if($insert){
                  $_SESSION['type'] = "success" ;
                  $_SESSION['message'] = "banner added" ;
                   
                  header("Location: coursecreate.php ");
    


    }




    else{

        $_SESSION['type'] = "danger" ;
        $_SESSION['message'] = "uploaded failed" ;
         
        header("Location: courseinsert.php ");

    }





   }
  


 }
}

?>