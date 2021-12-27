<?php
$kata = password_hash('abc123', PASSWORD_BCRYPT);
$myfile = fopen('pswd.txt', 'w');
fwrite($myfile, $kata);
fclose($myfile);
