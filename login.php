<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $select = "SELECT * FROM newreg WHERE email = '$email' && password = '$password'";

  $result = mysqli_query($conn, $select);

  if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_array($result);
    $_SESSION['name'] = $row['firstName'];
    $_SESSION['email'] = $row['email'];


    header('location:index.php');
  }else{
    $error[] = 'incorrect email or password';
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="stylesign.css">
</head>
<body>
  <div class="form_wrapper">
    <div class="form_container">
      <div class="title_container">
        <h2>USER LOGIN</h2>
      </div>
      <div class="row clearfix">
        <div class="">
        <?php
        if(isset($error)){
          foreach($error as $error){
             echo '<span class="error-msg">'.$error.'</span>';
          };
        };
        ?>
          <form action="" method="post">
            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
              <input type="email" name="email" placeholder="Email" required />
            </div>
            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
              <input type="password" name="password" placeholder="Password" required />
            </div>
            
            <input class="button" type="submit" name="submit" value="Log in" />
          </form>
        </div>
      </div>
    </div>
  </div>
  <p class="credit">Developed by <a href="http://www.designtheway.com" target="_blank">Design the way</a></p>
</body>
</html>