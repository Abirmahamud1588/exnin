
<?php

require_once "template/header.php" ;
?>


<?php
if(isset( $_SESSION['message']))
{
   
printf("<p class='alert  alert-%s'>  %s   </p>",  $_SESSION['type'] , $_SESSION['message'] );
}
?>
<div class="col-12 text-center ">

</div>

      </div>

      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
   

      <h2>Section title</h2>
     
   


<?php
require_once "template/footer.php" ;
?>

   
<?php
unset($_SESSION['nameerror']);
unset($_SESSION['emailerror']);
unset($_SESSION['passerror']);
unset($_SESSION['message']);
unset($_SESSION['type']);
?>
