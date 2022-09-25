<?php

 require_once "../template/header.php" ;

 require_once "../../db.php";
 
 $query = "SELECT  * FROM user    " ;
 $rslt= mysqli_query($conn, $query);
 if(mysqli_num_rows($rslt)>0){
     $user = mysqli_fetch_all($rslt,true);
        
            
 }

 print_r($user)


?>
 <div class="row">

   <div class="col-6 m-5 card">

   <table class="table ">
  <thead class="thead">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>

      <th scope="col">Status</th>
      <th> Action</>
    </tr>
  </thead>
  <tbody>

  <?php
          $i=1;
      
          foreach($user as $us)
          {
            if($us['role']== 's'  ){
            ?>
            <tr>
            <th ><?=$i++?> </th>
            <th ><?=$us['name']?> </th>
            <th > <?=$us['email']?>            </th>

            <th ><?=$us['status'] == '1' ? 'Active' : 'Deactive' ?> </th>

          
            <th>  <a class="btn btn-danger" href="delete.php?id=<?=$data['id']?>" >DEL</a>  </th>
            <th>  <a class="btn btn-danger" href="edit.php?id=<?=$data['id']?>" >EDIT</a>  </th>
           
          </tr>
         


<?php
            }   
          }
  
  
  
  
  
  ?>
   
  </tbody>
</table>




   </div>

 </div>

<?php
 require_once "../template/footer.php"
?>

<?php
unset($_SESSION['titleerror']);
unset($_SESSION['imageerror']);
unset($_SESSION['statuserror']);
unset($_SESSION['message']);
unset($_SESSION['type']);
?>