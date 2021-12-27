<?php
$cnewpass = $_POST['cnewpass'];

$kata = password_hash($cnewpass, PASSWORD_BCRYPT);
$myfile = fopen('pswd.txt', 'w');
fwrite($myfile, $kata);
fclose($myfile);
header('location:index.php');
