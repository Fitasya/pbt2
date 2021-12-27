<?php
$username = $_POST['idpengguna'];
$password = $_POST['katalaluan'];
$myfile = fopen('pswd.txt', 'r');
$pswd = fread($myfile, filesize("pswd.txt"));

if ($username == 'admin') {
    $sql = 'SELECT * FROM admin';
    if (password_verify($password, $pswd)) {
        $_SESSION['idpengguna'] = 'admin';
        header('location:display.php');
    } else {
?>
        <script>
            alert("Wrong username/password");
            window.location = "index.php";
        </script>
    <?php
        
    }
} else {
    ?>
    <script>
        alert("Wrong username/password");
        window.location = "index.php";
    </script>
<?php
}
