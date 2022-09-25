<?php
require_once "../template/header.php" ;
$id = $_GET['id'];
require_once "../../db.php" ;

if(is_numeric($id))
{

  $query = " SELECT  * FROM banner WHERE id=$id " ;
$res = mysqli_query($conn , $query);
if(mysqli_num_rows($res)>0){

  $ed =mysqli_fetch_assoc($res);
 
   


}



}
if(isset($_POST['update'])){
     
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

  

    

      

        $query = " UPDATE banner  SET title= '$title' , status = '$status' WHERE id=$id  " ;
        $insert= mysqli_query($conn, $query);
        if($insert){
                  $_SESSION['type'] = "success" ;
                  $_SESSION['message'] = "banner updated" ;
                   
                  header("Location: banner.php ");
    


    }
    else{

        $_SESSION['type'] = "danger" ;
        $_SESSION['message'] = "uploaded failed" ;
         
        header("Location: banner.php ");

    }





   }
  


 }


?>


<div class="row">
   <div class="col-4 m-5 card">

 <h1 class="">Banner</h1>
   <?php
if(isset( $_SESSION['message']))
{
   
printf("<p class='alert  alert-%s'>  %s   </p>",  $_SESSION['type'] , $_SESSION['message'] );
}
?>

   <form action="" method="POST" enctype="multipart/form-data">
    
  

    <div class="form-floating my-3">
      <input type="text" name="title"  value="<?=$ed['title']?>" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Title </label>
      <?php
if(isset( $_SESSION['titleerror']))
{
   
printf("<p class='text-danger'>  %s   </p>", $_SESSION['titleerror'] );
}
?>
    </div>
    <div class="form-floating my-3">
      
      <select class="form-control my-3 " name="status" id="">
        <option value=""></option>
        <option value="1">Active</option>
        <option value="2">Deactive</option>
      

      </select>
      <p class="my-3 alert alert-danger"  >Current status: <?=$ed['status'] =='1' ? 'Now Active' : 'Now Deactive' ?> </p>
      <?php
      if(isset( $_SESSION['statuserror']))
{
   
printf("<p class='text-danger'>  %s   </p>", $_SESSION['statuserror'] );
}
?>
      <label for="floatingInput">Status </label>
     

    </div>
   
    
    <button class="w-100 btn btn-lg btn-primary my-3" type="submit" name="update"> UPDATE Banner</button>
  
  </form>
   </div>
</div>