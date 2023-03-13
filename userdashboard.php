<?php

session_start();
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    # code...
    $_SESSION['fName'] = $firstN;
    $_SESSION['lName'] = $lastN;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
 }



?>


<h2>Hello <?php echo $_SESSION['fName'] . $_SESSION['lName'] ;?></h2>
<a href="/phpcrash/myfirstphp/form.php">Home page</a>
