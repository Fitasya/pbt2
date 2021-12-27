<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>

<body>
    <h1>Change Password</h1>
    <form method="post" action="changepswd2.php" onsubmit="return matchPassword()">
        <label for="currentpass">Current Password</label>
        <input type="password" name="currentpass" id="currentpass" required><br><br>
        <label for="newpass">New Password</label>
        <input type="password" name="newpass" id="newpass" required><br><br>
        <label for="cnewpass">Confirm New Password</label>
        <input type="password" name="cnewpass" id="cnewpass" required><br><br>
        <button type="submit">Submit</button>
    </form>
    <br><a href="display.php" class="btn">Back</a>
</body>

</html>

<script>
    function matchPassword() {
        var currentpass = document.getElementById("currentpass").value;
        var newpass = document.getElementById("newpass").value;
        var cnewpass = document.getElementById("cnewpass").value;
        
        if (newpass == currentpass) {
                alert("Sorry, you entered an old password");
                return false;
        } else if (newpass != cnewpass) {
            alert("Passwords are not match");
            return false;
        }
    }
</script>