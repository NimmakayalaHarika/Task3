<?php
include("config.php");
  if(isset($_POST['submit']))
    {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];

    $result=mysqli_query($mysqli,"INSERT INTO register2 values('$name', '$password', '$gender', '$email',' ')");

    if($result)
    {
    header("Location:form.php");
    }
    else{
        echo "failed";
    }
}
?>