
<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  # code...
  $firstN = $_POST['fName'];
  $lastN = $_POST['lName'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  if ($firstN == '' || $lastN == '' || $email == '' || $password == '') {
    # code...
    $fNameErr = 'Invalid First Name';
    $lNaameErr = 'Invalid Last Name';
    $emailErr = 'Invalid Email';
    $password = 'Invalid Password';
  }  else {
    $_SESSION['fName'] = $firstN;
    $_SESSION['lName'] = $lastN;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header('Location:  /phpcrash/myfirstphp/userdashboard.php');

  }
  
  
  
}



?>








<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

  <div>
  <label for="fName">First Name:</label>
  <input type="text" name="fName" id="">
  <p><?php echo $fNameErr  ?></p>
  </div>
  <div>
  <label for="lName">Last Name:</label>
  <input type="text" name="lName" id="">
  <p><?php echo  $lNaameErr  ?></p>
  </div>
  <div>
  <label for="email">Email Address:</label>
  <input type="email" name="email" id="">
  <p><?php echo $emailErr  ?></p>
  </div>
  <div>
  <label for="password">Password:</label>
  <input type="text" name="password" id="">
  <p><?php echo  $password  ?></p>
  </div>
 <button type="submit">Submit</button>

  </form>
</body>
</html>


<?php echo $firstN ?>