<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
</head>
<body>

<?php 
session_start();
?>
<h1> <?php echo $_SESSION['username']; ?></h1>

<a href="http://localhost/CMS/server/addData.php">ADD USER</a>
<a href="http://localhost/CMS/server/logout.php">logout</a>

<?php    
include "config.php";
$sql = " SELECT * FROM users";
$result = mysqli_query($conn,$sql);


if(mysqli_num_rows($result)>0){ 
                  ?>
                       
                  <table class="content-table">
                      <thead>
                          <th>id</th>
                         <th>name</th>
                         <th>username</th>
                         <th>password</th>
                         <th>phone</th>
                         <th>email</th>
                         <th>edit</th>
                         <th>delete</th>
                      </thead>
                      <tbody>
                      <?php
                         
                         while($row = mysqli_fetch_assoc($result)) {
                      ?>
                          <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['username']; ?> </td>
                            <td><?php echo $row['password']; ?> </td>
                            <td><?php echo $row['phone']; ?> </td>
                            <td><?php echo $row['email'];  ?> </td>
                              <td><a href='update.php?id=<?php echo $row["id"];?>'>EDIT</a></td>
                              <td><a href='delete.php?id=<?php echo $row["id"];?>'>DELETE</a></td>
                          </tr>
                          <?php
                        }
                        ?>
                      </tbody>
                  </table>
                 <?php
                 
                   }
                 ?> 
</body>
</html>