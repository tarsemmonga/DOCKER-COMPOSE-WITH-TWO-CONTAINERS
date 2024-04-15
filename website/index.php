<!DOCTYPE html>

  <?php
  
  $username = "user";
  $password = "password";

  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header("Location: success.php");

  }
  if (isset($_POST['username']) && isset($_POST['password'])){
    if ($_POST['username'] == $username && $_POST['password']== $password)
{
    $_SESSION['loggedin']=true;
    header("Location: /code/public/success.php");
 }
  }
  ?>
