<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD DATA</title>
</head>
<body>
<?php
//cheak that sighup is enterd or not 
if(isset($_POST['signup']))
{
    //get the dta enter by the user name
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];


    include "config.php";
    if($conn){
    $sql = "INSERT INTO users (name ,username ,password , phone ,email) VALUES ('{$name}','{$username}','{$password}','{$phone}','{$email}')";
    if(mysqli_query($conn, $sql))
    {
        header("Location:http://localhost/CMS/server/post.php");  
    }
    else
    {
        echo "conncetion falied";
    }  
    }
}
?>
  

     <form action=" <?php $_SERVER['PHP_SELF']; ?>" method ="POST">
       
     <label for="name">name</label>
      <input type="text" name="name" id=""><br>
       
      <label for="password">password</label>
      <input type="password" name="password" id=""><br>

      <label for="username">username</label>
      <input type="text" name="username" id=""><br>
       
      <label for="phone">phone</label>
      <input type="tel" name="phone" id=""><br>
     
  
      <label for="email">email</label>
      <input type="email" name="email" id=""><br>
     
      <input type="submit" name="signup" value="signup">
     </form>



</body>
</html>