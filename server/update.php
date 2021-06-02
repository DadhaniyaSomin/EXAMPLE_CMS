<?php
  
//   session_start();

//   if(!(isset($_SESSION['username'])))
//   {
//     header("Location:http://localhost/CMS/server/login.php");  
//   }

?>

<?php 
session_start();
?>
<h1> <?php echo $_SESSION['username']; ?></h1>
<?php
$get_id = $_GET['id'];
echo $get_id;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
</head>
<body>
        <form action="<?php $_SERVER['PHP_SELF']; ?> ">
    <?php    
    include "config.php";
    $sql  = "SELECT * FROM users WHERE id = '{$get_id}'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0)
    {

      while($row = mysqli_fetch_array($result))
      {
 ?>
    
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">                 
     <label for="name">name</label>
      <input type="text" name="name" id="" value="<?php echo $row['name']; ?>"><br>
       
      <label for="password">password</label>
      <input type="password" name="password" id="" value="<?php echo $row['password']; ?>" ><br>

      <label for="username">username</label>
      <input type="text" name="username" id="" value="<?php echo $row['username']; ?>" ><br>
       
      <label for="phone">phone</label>
      <input type="tel" name="phone" id="" value="<?php echo $row['phone']; ?>"><br>
     
  
      <label for="email">email</label>
      <input type="email" name="email" id="" value="<?php echo $row['email']; ?>"><br>
     
      <input type="submit" name="update" value="update">

        </form>
  
  <?php
      }}
  ?>

  <?php
    $id = $_POST['id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
   
   $conn = mysqli_connect("localhost","root","","ALPHA");
   if($conn)
   {
   $sql = "UPDATE users SET name = '{$name}',username = '{$username}', password = '{$password}', email = '{$email}', phone = '{$phone}' WHERE id = '{$id}'";
   if(mysqli_query($conn,$sql))
   {
    header("Location:http://localhost/CMS/server/post.php");  
   }
   else
   {
       echo "quary falied";
   }
   }else
   {
       echo "  connection falied";
   }
 


   ?>
</body>
</html>
