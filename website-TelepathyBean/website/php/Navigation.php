<div class="navigation" id="nav">
    <a class="title" href="../index.php"><span>TelepathyBean</span></a>
    <a href="#" onclick="alert('Coming Soon')">News</a>
    <a href="ProjectsPage.php">Projects</a>
    <a href="ContactUsPage.php">Contact Us</a>
    <a href="AboutUsPage.php">About Us</a>
    
    <?php if( isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]): ?>
        <a href="logoutOther.php" class="login_reg">Logout</a>
    <?php else: ?>
        <a href="LoginPage.php" class="login_reg">Login</a>
    <?php endif; ?>

    <?php if( isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]): ?>
        <a href="MyProfilePage.php" class="login_reg">My Profile</a>
        <a href="UsersPage.php" class="login_reg">Users</a>
    <?php else: ?>
        <a href="RegistrationPage.php" class="login_reg">Registration</a>
    <?php endif; ?>

    <a href="javascript:void(0);" class="icon" onclick="navigationDropdown()">
        <i class="fa fa-bars"></i>
    </a>
</div>
<script src="../js/hamburgerMenu.js"></script>