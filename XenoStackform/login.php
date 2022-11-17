<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login  System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet"  type="text/css"  href="style.css">
</head>
<body>

<div class="mid">
    <ul class="navbar">
      <li ><a href="#">Home</a></li>
      <li ><a href="#">Services</a></li>
      <li ><a href="#">About Us</a></li>
      <li ><a href="#">Contact Us</a></li>
    </ul>
</div>
<div class="container">

        <div class="row">
           <div  class="col-sm-4"></div>
        <div  class="col-sm-4">
            <div class="login_form">
              <img src="logo.png">
 <form>
     <div class="form-group">
        <label class="label_txt"> Username  or Email</label>
        <input type="email" class="form-control"></div>
    <div class="form-group">
       <label class="label_txt">Password</label>
       <input type="password" class="form-control"> </div>
  
  <button type="submit"  class="btn btn-primary  form_btn">Login</button>

</form>
<p  style="font-size: 12px; text-align:center;  margin-top: 10px;"><a href="forget-password.php" style="color:
#00376b;" >Forget Password?</a>  </p>
  <br>
    <p>Don't  have an account? <a href="signup.php"> Sign up</a>  </p>
       </div>
     </div>
          <div  class="col-sm-4"></div>
  </div>
</div>

    
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  
</html>