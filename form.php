<?php
include ("config.php");
$result=mysqli_query($mysqli,"SELECT* from register2 ORDER by id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <h1>Register Form</h1>
</head>
<link rel="stylesheet" href="style.css">
<body>
 <form action="function.php" method="POST">
  <table>
   <tr>
    <td>Name :</td>
    <td><input type="text" name="name" required></td>
   </tr>
   <tr>
    <td>Password :</td>
    <td><input type="password" name="password" required></td>
   </tr>
   <tr>
    <td>Gender :</td>
    <td>
     <input type="radio" name="gender" value="m" required>Male
     <input type="radio" name="gender" value="f" required>Female
    </td>
   </tr>
   <tr>
    <td>Email :</td>
    <td><input type="text" name="email" required></td>
   </tr> 
   <tr>
    <td><input type="submit" value="Submit" name="submit"></td>
   </tr>
  </table>
 </form>
<table border="2">
    <tr>
        <th>Name</th>
        <th>Password</th>
        <th>Gender</th>
        <th>Email</th>
    </tr>
    <?php
    while ($res = mysqli_fetch_array($result)){

        echo "<tr>";
        echo "<td>".$res['name']."</td>";
        echo "<td>".$res['password']."</td>";
        echo "<td>".$res['gender']."</td>";
        echo "<td>".$res['email']."</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>