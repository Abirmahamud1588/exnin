<?php

$id = $_GET['id'];
require_once "../../db.php" ;

if(is_numeric($id))
{

  $query = " DELETE  FROM banner WHERE id=$id " ;
$res = mysqli_query($conn , $query);
if($res){
 
    header("Location: banner.php");


}



}





























?>