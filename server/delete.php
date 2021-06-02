<?php
include "config.php";
   
   //get user id from here
   $userid= $_GET['id'];

   //get input data which has enter by the user 
   $sql = "DELETE FROM users WHERE id='{$userid}'"  or die("quary failed");

   if(mysqli_query($conn,$sql))
         {
            header("Location:http://localhost/CMS/server/post.php");
         }



?>