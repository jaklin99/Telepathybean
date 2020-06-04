<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link rel="stylesheet" href="../css/loginStyle.css">
    <link rel="stylesheet" href="../css/navigationStyle.css">

    <title>Login</title>
</head>
<body>
<?php
require_once '../login.php';
?>
<div class="modal">
<?php require_once "Navigation.php"?>
    <form class="modal-content animate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="container" >
            <div <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>>
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Username" value="<?php echo $username; ?>" name="username" required>
                <span><?php echo $username_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                <span><?php echo $password_err; ?></span>
            </div>

            <button type="submit" value="login">Login</button>
            <!--<label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>-->
        </div>
            <!--<span class="psw">Forgot <a href="#">Password</a></span>-->
        </div>
    </form>
</div>


</body>
</html>
