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
        <h2>Responsive Registration Form</h2>
      </div>
      <div class="row clearfix">
        <div class="">
          <form action="connect.php" method="post">
            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
              <input type="email" name="email" placeholder="Email" required />
            </div>
            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
              <input type="password" name="password" placeholder="Password" required />
            </div>
            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
              <input type="password" name="cpassword" placeholder="Re-type Password" required />
            </div>
            <div class="row clearfix">
              <div class="col_half">
                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                  <input type="text" name="firstname" placeholder="First Name" />
                </div>
              </div>
              <div class="col_half">
                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                  <input type="text" name="lastname" placeholder="Last Name" required />
                </div>
              </div>
            </div>
                <!-- <div class="input_field radio_option">
                <input type="radio" name="gender" id="rd1" value="m">
                <label for="male">Male</label>
                <input type="radio" name="gender" id="rd2" value="f">
                <label for="female">Female</label>
                </div> -->
                <div class="input_field radio_option">
                  <input type="radio" name="gender" value="m" id="rd1">
                  <label for="rd1">Male</label>
                  <input type="radio" name="gender" value="f" id="rd2">
                  <label for="rd2">Female</label>
                  </div>
                <!-- <div class="input_field select_option">
                  <select>
                    <option>Select a country</option>
                    <option>Option 1</option>
                    <option>Option 2</option>
                  </select>
                  <div class="select_arrow"></div>
                </div> -->
              <!-- <div class="input_field checkbox_option">
                <input type="checkbox" id="cb1">
            <label for="cb1">I agree with terms and conditions</label>
              </div>
              <div class="input_field checkbox_option">
                <input type="checkbox" id="cb2">
            <label for="cb2">I want to receive the newsletter</label>
              </div> -->
            <a href="login.html"><input class="button" type="submit" value="Register" /></a>
            <p>already have an account? <a href="login.php">login now</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>
  <p class="credit">Developed by <a href="http://www.designtheway.com" target="_blank">Design the way</a></p>
</body>
</html>