<?php

 require_once "../template/header.php" ;

 require_once "../../db.php";
 
 $query = " SELECT * FROM course  " ;
 $result = mysqli_query($conn , $query);

 if(mysqli_num_rows($result)>0){
  $datas = mysqli_fetch_all($result, true);
 }



?>
 <div class="row">
   <div class="col-4 m-5 card">

 <h1 class="">Course</h1>
   <?php
if(isset( $_SESSION['message']))
{
   
printf("<p class='alert  alert-%s'>  %s   </p>",  $_SESSION['type'] , $_SESSION['message'] );
}
?>

   <form action="insertcourse.php" method="POST" enctype="multipart/form-data">
    
  

    <div class="form-floating my-3">
      <input type="text" name="title" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Title </label>
      <?php
if(isset( $_SESSION['titleerror']))
{
   
printf("<p class='text-danger'>  %s   </p>", $_SESSION['titleerror'] );
}
?>
    </div>
    <div class="form-floating my-3">
      
     <textarea name="des" id="" cols="30" rows="10" class="form-control"></textarea>
      <?php
      if(isset( $_SESSION['deserror']))
{
   
printf("<p class='text-danger'>  %s   </p>", $_SESSION['deserror'] );
}
?>
      <label for="floatingInput">Description </label>
     

    </div>
    <?php
      if(isset( $_SESSION['imageerror']))
{
   
printf("<p class='text-danger'>  %s   </p>", $_SESSION['imageerror'] );
}
?>
    <div class="form-control my-3 ">
      <input type="file" name="image" class="form-control" id="floatingPassword" >
     
      
    </div>
    <div class="form-control my-3 ">
    <label for="floatingInput">Course price </label>
      <input type="text" name="price" class="form-control" id="floatingInput" >
     
     
    </div>

    
    <button class="w-100 btn btn-lg btn-primary my-3" type="submit" name="submit"> Add Banner</button>
  
  </form>
   </div>


   <div class="col-6 m-5 card">

   <table class="table ">
  <thead class="thead">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Image</th>

      <th scope="col">DEs</th>
      <th scope="col">price</th>
      <th> Action</>
    </tr>
  </thead>
  <tbody>

  <?php
          $i=1;
          foreach($datas as $data)
          {

            ?>
            <tr>
            <th ><?=$i++?> </th>
            <th ><?=$data['title']?> </th>
            <th > <img class="" style="width: 100px;"  src="../../upimage/course/<?=$data['image']?>" alt="">              </th>

            <th ><?=$data['des'] ?> </th>
            <th ><?=$data['price'] ?> </th>

          
            <th>  <a class="btn btn-danger" href="coursedelete.php?id=<?=$data['id']?>" >DEL</a>  </th>
           
          </tr>
         


<?php

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