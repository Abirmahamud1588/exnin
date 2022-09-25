


<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
        <?php
   if( ($_SESSION['role']) == 's')
   {
    ?>
<li class="nav-item">
  <a class="nav-link" href="#">
    <span data-feather="shopping-cart" class="align-text-bottom"></span>
    Ami student
  </a>
</li>
<?php
  
   }if( ($_SESSION['role']) == 'a'){
?>


<li class="nav-item">
            <a class="nav-link active" aria-current="page" href="http://localhost/exnin/admin/banner/banner.php">
              <span data-feather="home" class="align-text-bottom"></span>
              Banner
            </a>
          </li>

         
          <li class="nav-item">
            <a class="nav-link active" href="http://localhost/exnin/admin/banner/alluser.php">
              <span data-feather="file" class="align-text-bottom"></span>
              All USER
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="http://localhost/exnin/admin/banner/coursecreate.php">
              <span data-feather="file" class="align-text-bottom"></span>
              coursecreate
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="http://localhost/exnin/admin/banner/faqcreate.php">
              <span data-feather="file" class="align-text-bottom"></span>
              Faq
            </a>
          </li>
      
<?php

   }if( ($_SESSION['role']) == 't'){
?>

<li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file" class="align-text-bottom"></span>
              ami teacher
            </a>
          </li>
<li class="nav-item">
            <a class="nav-link" href="http://localhost/exnin/admin/teacher/enrolled.php">
              <span data-feather="file" class="align-text-bottom"></span>
              Enrolled student 
            </a>
          </li>

<?php
   }


?>
         
         
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          
        </h6>
       
      </div>
    </nav>