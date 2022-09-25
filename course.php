<?php

require_once "ft/header.php" ;


 

 require_once "db.php";
 
 $query = " SELECT * FROM banner  " ;
 $result = mysqli_query($conn , $query);

 if(mysqli_num_rows($result)>0){
  $bannerdatas = mysqli_fetch_all($result, true);
 }


 //*course**//
 $query2 = " SELECT * FROM course  " ;
 $result2 = mysqli_query($conn , $query2);

 if(mysqli_num_rows($result2)>0){
  $coursedatas = mysqli_fetch_all($result2, true);
 }




?>

  <!-- About part end -->


  <!-- Courses Part Start -->
  <section id="courses">
    <div class="container">
      <div class="section_heading text-center">
        <h2>Our <span>Courses</span></h2>
        <p>Every moment of life should be used properly</p>
      </div>
      <div class="row courses_slider">

      <?php 
      
        foreach($coursedatas as $coursedata){
      
      
      
      
      
      
      ?>
        <div class="col-lg-4 col-md-6">
          <div class="courses_item_main">
            <div class="courses_item text-center">
              <div class="course_img">
                <img style="height: 300px ; object-fit: cover; " src="upimage/course/<?=$coursedata['image']?>" alt="courses-image" class="img-fluid w-100" s>
              </div>
              <div class="course_text">
                <h3><?=$coursedata['title']?></h3>
                <p><?=$coursedata['des']?></p>
                <h3><?=$coursedata['price']?>/=</h3>
              </div>
            </div>
          </div>
        </div>

       

  <?php } ?>

     

      </div>
      <div class="course_btn text-center">
        <a href="course.html">All Courses</a>
      </div>
    </div>
  </section>