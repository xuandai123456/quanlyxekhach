<?php
     include '../includes/connect.php';
     $id=$_REQUEST['id'];
     $q="delete from toa where id=$id";
     $d=$db->query($q);
     $r=$d->fetch(); 

     if($d>0)
         header("location:index.php?page=dstoa");
?>

