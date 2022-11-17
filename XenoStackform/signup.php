<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup System</title>

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
    <?php
    if(isset($_POST['signup']))
    {
      extract($_POST);
      if(strlen($fname)<3)
      {
        $error[]='Please enter using  3 character atleast';
      }
  
       $sql=" select *from  users where (username='$username ' or 
       email='$email')";
      $res=mysqli_query($sql,$conn);
      if(mysqli_num_rows($res) >0){
    $row= mysqli_fetch_assoc($res);
       if($username==$row['username'])
       {
        $error[]='Username already Exists.';
       }
       if($email==$row['email'])
       {
        $error[]='Email already  Exists.';
       }
      }

      if(!isset($error)){
        $date=date('Y-M-D');
             $options =array("cost"=>4);
        $password  =password_hash($password, PASSWORD_BCRYPT,$options);

  $result =mysqli_query($conn,"INSERT into users values('' ,'$fname' ,'$lname', '$username' ,'$email' ,'$password' ,'$date')");

   if($result)
   {
    $done=2;
   }
     else{
     $error[]='Failed : Something  went wrong';
        }
      }
    }
    ?>
   <div class="col-sm-4">
    <?php
    if(isset($error))
    {
     foreach($error as$error)
     {
      echo '<p  class ="errmsg"> &#x26A0;'.$error.'</p>';
     }
    }
    ?>

   </div>
   <div class="col-sm-4">
    <?php if(isset($done))
    {?>
    <div class="successmsg"><span style= "font-size:100px;"> &#9989;</span> <br> You have registered successfully .
    <br> <a href="login.php"  style="color:#fff;">  Login here... </a> </div>
    <?php } else{?>
    <div class="signup_form">
    <img src="logo.png">
        <form action=" " method="POST">
    <div  class="form-group">

     <label class="label_txt"> First Name </label>
     <input type="text"  class="form-control"  name="fname"  value="<?php if(isset($error)) {echo $fname;}?>" required="">
    </div>
    <div  class="form-group">
      <label class="label_txt"> Last Name </label>
      <input type="text"  class="form-control"  name="lname" value="<?php if(isset($error)) {echo $lname;}?>" required="">
    </div>
    <div  class="form-group">
      <label class="label_txt"> UserName </label>
      <input type="text"  class="form-control"  name="username" value="<?php if(isset($error)) {echo $username;}?>" required="">
    </div>
    <div  class="form-group">
      <label class="label_txt"> Email </label>
      <input type="email"  class="form-control"  name="email" value="<?php if(isset($error)) {echo $email;}?>" required="">
    </div>
    <div  class="form-group">
      <label class="label_txt"> Password </label>
      <input type="password"   class="form-control"  name="password"  required="">
    </div>
    <button type="submit"  name="signup"  class="btn btn-primary  btn-group-lg
    form_btn">SignUp </button>
    <p>Have  an account?  <a href="login.php">Log in </a> </p>
    <?php }?>
</form>
</div>
     </div>
      <div class="col-sm-4"></div>
    </div>
</div>

    
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  
</html>