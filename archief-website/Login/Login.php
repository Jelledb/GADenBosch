<php>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<?php include '../header.php';?>
<form action="action_page.php" class="col-12 col-md-auto">
        <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container" class="col-12 col-md-auto">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Login</button>
        <button type="submit" class="regbutton">Register </button>
        <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1" class="col-12 col-md-auto">
        <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
</form>
<?php include '../footer.php';?>

</html>

</php>
