<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="footer, address, phone, icons"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="../css/registrationStyle.css">


    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Volkhov&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="../css/navigationStyle.css">

    <title>Registration</title>
</head>
<body>
<?php
require_once "../registration.php";
?>

<div class="modal">
    <?php require_once "Navigation.php"?>

    <form class="modal-content animate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="container" >
            <div <?php echo (!empty($username_err)) ? 'has-error' : '' ; ?>>
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Username" name="username" required>
                <span class="wrong-input"><?php echo $username_err; ?></span>
            </div>
            <div<?php echo (!empty($first_name_err)) ? 'has-error' : ''; ?>>
                <label for="first_name"><b>First name</b></label>
                <input type="text" placeholder="Enter first name" name="first_name" required>
                <span class="wrong-input"><?php echo $first_name_err; ?></span>
            </div>
            <div <?php echo (!empty($last_name_err)) ? 'has-error' : ''; ?>>
                <label for="last_name"><b>Last name</b></label>
                <input type="text" placeholder="Enter last name" name="last_name" required>
                <span class="wrong-input"><?php echo $last_name_err; ?></span>

            </div>
            <div <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>>
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter email" name="email" required>
                <span class="wrong-input"><?php echo $email_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                <span class="wrong-input"><?php echo $password_err; ?></span>
            </div>

            <div <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>>
                <label for="confirm_password"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="confirm_password" required>
                <span class="wrong-input"><?php echo $confirm_password_err; ?></span>
            </div>
            <button type="submit" class="registerbtn">Sign up</button>
        </div>
        <div class="container signin">
            <p>Already have an account? <a href="LoginPage.php">Login</a>.</p>
        </div>
</form>
</div>

</body>
</html>
