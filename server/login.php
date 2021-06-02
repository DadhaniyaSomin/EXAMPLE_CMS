  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=, initial-scale=1.0">
      <title>login</title>
  </head>
  <body>
     <a href=""></a>  

    <form action="<?php $_SERVER['PHP_SELF']; ?> " method ="POST">

      <label for="username">username</label>
      <input type="text" name="username" id="">
       
      <label for="password">password</label>
      <input type="password" name="password" id="">
      
      <input type="submit" value="sign_in " name="sign_in">

    </form>
   
   <?php
     if(isset($_POST['sign_in'])){
        include "config.php";
        $username = $_POST['username'];
        $password= $_POST['password'];
            
        $sql = "SELECT id, username  FROM users WHERE username= '{$username}' AND  password = '{$password}' ";
        $result = mysqli_query($conn,$sql) or die('query failed');

        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_assoc($result))       
           {
               session_start();
               $_SESSION['username']=$row['username'];
               $_SESSION['id']=$row['id'];
          

               header("Location:http://localhost/CMS/server/post.php");
           }

        }
        }    
       ?>


  
   


    <h3>NEW USER </h3>
    <a href="http://localhost/CMS/server/addData.php"> sign in HERE</a>


  </body>
  </html>