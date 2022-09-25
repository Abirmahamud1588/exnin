
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
 //*faq**//
 $query3 = " SELECT * FROM faq  " ;
 $result3 = mysqli_query($conn , $query3);

 if(mysqli_num_rows($result3)>0){
  $faqdatas = mysqli_fetch_all($result3, true);
 }




?>


  <!-- Banaer Part Strat -->
  <section id="banner">
 
    <div class="swiper-container mySwiper">

      <div class="swiper-wrapper">
       
      <?php
         
          foreach($bannerdatas as $bannerdata)
          {
            if($bannerdata['status'] == '1'){
            ?>
           
         
           <div class="swiper-slide banner_1">
          <img class="img-fluid" src="upimage/banner/<?=$bannerdata['image']?> " alt="<?=$bannerdata['title']?>">
        </div>
       

<?php
            }
          }
  
  
  
  
  
  ?>
       
       
      </div>
      <div class="swiper-scrollbar"></div>
    </div>
  </section>
  <!-- Banaer Part End -->

  <!-- FAQ Part Start -->
  <section id="faq">
    <div class="container">
      <div class="section_heading text-center">
        <h2>Frequently Asked Questions <span>(FAQ)</span></h2>
        <p>Every moment of life should be used properly</p>
      </div>
      <div class="col-lg-12">
        <div class="faq">
          <div class="accordion" id="accordionExample">
            <?php 
            $i=1;
            foreach($faqdatas as $faqdata){
            
            
              $i=1;
            
            
            
            
            ?>
            <div class="accordion-item">
              <h2 class="accordion-header" id="<?=$i ?>">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  <?=$faqdata['title']?> <i class="fa fa-chevron-down"></i>
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse <?php $i== '1' ?  'show' : 'noshow' ?> " 
              aria-labelledby="<?=$i ?>"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p> <?=$faqdata['des']?> </p>
                </div>
              </div>
            </div>
            <?php 
            }
            ?>
           
        <h1>ss</h1>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- FAQ Part End -->



  <!-- About part Start -->
  <section id="about">
    <div class="container">
      <div class="section_heading text-center">
        <h2>About <span>bestupp</span></h2>
        <p>Every moment of life should be used properly</p>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-5">
          <div class="about_pic">
            <img src="images/about_us.png" alt="About image" class="img-fluid w-100">
          </div>
        </div>
        <div class="col-lg-7">
          <div class="about_text">
            <h4>Welcome to bestupp</h4>
            <p>
              Starting our bestupp journey by thinking about the little kids in exile. We have seen through electronic and social hwmedia at different times that the children of expatriate in different parts of the world cannot speak Bangla properly. Many cannot sing our national anthem. They have no idea about the history of our language and culture at all, because we realize that in the schools of different countries they do not teach on our own language, history, culture, they only teach on their language and the Guardians in exile are busy with their work most of the time. They are not able to give their children enough time on the language, culture, history of our lives.
              <span>In order to develop every child in a creative way through intellectual development, first of all it is necessary to use the right language. No matter where the expatriates are in the world, we will build them in Bangla language, Bangla culture, English education through our bestupp and at the same time we will present the aspects of advanced technology of our country to the world in the right way.</span>
            </p>
          </div>
          <div class="about_btn">
            <a href="about_us.html">Read More</a>
            <a href="student-registration.html">Enroll Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>
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
                
              </div>
            </div>
          </div>
        </div>

       

  <?php } ?>

     

      </div>
      <div class="course_btn text-center">
        <a href="course.php">All Courses</a>
      </div>
    </div>
  </section>
  <!-- Courses Part End -->





  <!-- Download App Part End -->

  <!-- Footer Part Start -->
  <section id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="footer_item item_left">
            <a href="#">
              <img src="images/logo.png" alt="Logo">
            </a>
            <div class="join_free_seminar">
              <button class="main_btn" type="submit" data-bs-target="#myModal" data-bs-toggle="modal">Join free
                learning</button>
              <div class="modal" tabindex="-1" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h6 class="modal-title">Join free learning</h6>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="#">
                        <div class="form-floating admission_input">
                          <input type="text" class="form-control" id="joinName" placeholder="Enter Name">
                          <label for="joinName">Enter Name</label>
                        </div>
                        <div class="form-floating admission_input">
                          <input type="text" class="form-control" id="joinMobile" placeholder="Enter Mobile">
                          <label for="joinMobile">Enter Mobile</label>
                        </div>
                        <div class="form-floating admission_input">
                          <input type="text" class="form-control" id="joinEmail" placeholder="Enter Email">
                          <label for="joinEmail">Enter Email</label>
                        </div>
                        <div class="form-floating admission_input">
                          <input type="text" class="form-control" id="joinAddress" placeholder="Enter Address">
                          <label for="joinAddress">Enter Address</label>
                        </div>
                        <div class="form-floating admission_input">
                          <select class="form-select" id="studentCourse" aria-label="Floating label select example">
                            <option selected>-Select One-</option>
                            <option value="Kid's learning">Kid's learning</option>
                            <option value="Kid's English">Kid's English</option>
                            <option value="Spoken English">Spoken English</option>
                            <option value="Arabic Shikkha">Arabic Shikkha</option>
                            <option value="Quran Shikkha">Quran Shikkha</option>
                            <option value="Foreign Language">Foreign Language</option>
                            <option value="General Knowledge">General Knowledge</option>
                            <option value="Basic Computer">Basic Computer</option>
                            <option value="Official Computer">Official Computer</option>
                            <option value="Video Editing">Video Editing</option>
                            <option value="Freelancing">Freelancing</option>
                            <option value="Web Design">Web Design</option>
                            <option value="Digital Marketing">Digital Marketing</option>
                            <option value="App Development">App Development</option>
                            <option value="General Knowledge">Graphic Design</option>
                            <option value="Other">Other</option>
                          </select>
                          <label for="studentCourse">Name of Course</label>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer text-center">
                      <button type="button" class="modal_btn main_btn">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="social_links">
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              </ul>
            </div>
            <div class="play_store">
              <div class="play_store_img">
                <a href="#"><img class="img-fluid" src="images/Play-store.png" alt="Play Store image"></a>
              </div>
            </div>

          </div>
        </div>

        <div class="col-lg-2 col-md-6">
          <div class="footer_item">
            <h3>Quick Links</h3>
            <ul class="links">
              <li><a href="about_us.html"><i class="fa fa-caret-right"></i> About us</a></li>
              <li><a href="#"><i class="fa fa-caret-right"></i> Students' Feedback</a></li>
              <li><a href="#"><i class="fa fa-caret-right"></i> Job Placement</a></li>
              <li><a href="#"><i class="fa fa-caret-right"></i> Freelancing Success</a></li>
              <li><a href="#"><i class="fa fa-caret-right"></i> Gallery</a></li>
              <li><a href="contact.html"><i class="fa fa-caret-right"></i> Contact us</a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="footer_item">
            <h3>All Courses</h3>
            <div class="row">
              <div class="col-6">
                <ul class="links">
                  <li><a href="kids_learning.html"><i class="fa fa-caret-right"></i> Kid's Learning</a>
                  <li><a href="kids_english.html"><i class="fa fa-caret-right"></i> Kid's English</a>
                  <li><a href="spoken_english.html"><i class="fa fa-caret-right"></i> Spoken English</a>
                  <li><a href="arabic_shikkha.html"><i class="fa fa-caret-right"></i> Arabic Shikkha</a>
                  <li><a href="quran-shikkha.html"><i class="fa fa-caret-right"></i> Quran Shikkha</a>
                  <li><a href="bangla_language.html"><i class="fa fa-caret-right"></i> Bangla Language</a>
                  <li><a href="foreign_language.html"><i class="fa fa-caret-right"></i> Foreign Language</a>
                  <li><a href="general_knowledge.html"><i class="fa fa-caret-right"></i> General Knowledge</a>
                  
                </ul>
              </div>
              <div class="col-6">
                <ul class="links">
                  <li><a href="basic_computer.html"><i class="fa fa-caret-right"></i> Basic Computer</a>
                  <li><a href="official_computer.html"><i class="fa fa-caret-right"></i> Official Computer</a>
                  <li><a href="video_editing.html"><i class="fa fa-caret-right"></i> Video Editing</a>
                  <li><a href="freelancing.html"><i class="fa fa-caret-right"></i> Freelancing</a>
                  <li><a href="web_design.html"><i class="fa fa-caret-right"></i> Web Design</a>
                  <li><a href="digital_marketing.html"><i class="fa fa-caret-right"></i> Digital Marketing</a>
                  <li><a href="app_development.html"><i class="fa fa-caret-right"></i> App Development</a></li>
                  <li><a href="graphic_design.html"><i class="fa fa-caret-right"></i> Graphics Design</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="footer_item">
            <h3>Contact us</h3>
            <div class="contact_inner_text number">
              <div class="contact_icon">
                <i class="fa fa-phone" aria-hidden="true"></i>
              </div>
              <div class="contact_info">
                <ul>
                  <li><a href="tel:+8801601600405">+88 01601600405</a></li>
                  <li><a href="whatsapp://tel:+8801786600486">+88 01786600486</a> <i class="fa fa-whatsapp"
                      aria-hidden="true"></i></li>
                </ul>
              </div>
            </div>
            <div class="contact_inner_text">
              <div class="contact_icon">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
              </div>
              <div class="contact_info">
                <ul>
                  <li><a href="mailto:bestupplearning@gmail.com">bestupplearning@gmail.com</a></li>
                  <li><a href="mailto:bestupplearning@gmail.com">bestupplearning@gmail.com</a></li>
                </ul>
              </div>
            </div>
            <div class="contact_inner_text">
              <div class="contact_icon">
                <i class="fa fa-globe" aria-hidden="true"></i>
              </div>
              <div class="contact_info">
                <ul>
                  <li><a href="https://bestupp.com/" target="_blank">www.bestupp.com</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copy">
      <p>Copyright <i class="fa fa-copyright" aria-hidden="true"></i>
        2021. All Rights Reserved by <a href="#">bestupp.</a></p>
    </div>
  </section>
  <!-- Footer Part End -->



  <!-- All script Js Here -->
  <script src="js/jquery-1.12.4.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/venobox.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>

<?php

require_once "ft/header.php" ;
?>