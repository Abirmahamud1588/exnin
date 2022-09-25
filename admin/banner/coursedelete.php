<?php

$id = $_GET['id'];
require_once "../../db.php" ;

if(is_numeric($id))
{
  $q = "SELECT image FROM course WHERE id=$id ";
  $r = mysqli_query($conn , $q);
  if(mysqli_num_rows($r)>0){
    $user = mysqli_fetch_assoc($r);
  
    $file_path = '../../upimage/course/'.$user['image'];
    if(file_exists($file_path)){
      unlink($file_path);
     } else{
        echo "eror" ;
      }

      $query = " DELETE  FROM course WHERE id=$id " ;
      $res = mysqli_query($conn , $query);
    if($res){
       
          header("Location: coursecreate.php");
        }
       
    
    
    }
  }

 
































?>