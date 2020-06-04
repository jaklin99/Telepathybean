<?php
require_once "config.php";

$username_err = $password_err = $confirm_password_err = $email_err = $first_name_err = $last_name_err =  "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $confirm_password = trim($_POST["confirm_password"]);
    $email = trim($_POST["email"]);
    $first_name = trim($_POST["first_name"]);
    $last_name = trim($_POST["last_name"]);

    //Username
    if(empty($username))
    {
        $username_err = "Please, enter a username!";
    }
    else
        {
        $sql = "SELECT id FROM users WHERE username = :username";

        if($stmt = $pdo->prepare($sql))
        {
            $stmt->bindParam(":username", $username, PDO::PARAM_STR);
            if($stmt->execute())
            {
                if($stmt->rowCount() == 1)
                {
                    $username_err = "This username is already taken!";
                }
            }
            else
                {
                echo "Oops! Something went wrong. Please try again later.";
            }
            unset($stmt);
        }
    }
    //First Name
    if(empty($first_name)) {
    $first_name_err = "Please, enter First Name!";
}
    //Last Name
    if(empty($last_name)){
        $last_name_err = "Please, enter a Last Name!";
    }
    //Email
    if(empty($email))
    {
        $email_err = "Please, enter a valid email!";
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }
    else{
            $sql = "SELECT email FROM people_info as pi inner join users as u on pi.username = u.username where email = :email";

            if($stmt = $pdo->prepare($sql)){
                $stmt->bindParam(":email", $email, PDO::PARAM_STR);

                if($stmt->execute()){
                    if($stmt->rowCount() == 1){
                        $email_err = "There is already a user with that email!";
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
                unset($stmt);
            }
        }

    //Password
    if(empty($password)){
        $password_err = "Please enter a password.";
    } else if(strlen($password) < 8){
        $password_err = "Password must be at least 8 characters.";
    }

    //Confirm Password
    if(empty($confirm_password)){
        $confirm_password_err = "Please confirm password.";
    } else{
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }else{
            $password = password_hash($password, PASSWORD_DEFAULT);
        }
    }

    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err) && empty($first_name_err)&& empty($last_name_err)){

        $sql = "INSERT INTO users (id, username, password, type_user) VALUES (null, :username, :password, :typeOfUser)";
        $sql1 = "INSERT INTO people_info (id, first_name, last_name, email, username) VALUES (null, :firstName, :lastName, :email, :username)";

        if($stmt = $pdo->prepare($sql)){
            $param_userType = "Standard";

            $stmt->bindParam(":username", $username, PDO::PARAM_STR);
            $stmt->bindParam(":password", $password, PDO::PARAM_STR);
            $stmt->bindParam(":typeOfUser", $param_userType, PDO::PARAM_STR);

            if($stmt->execute()){
                unset($stmt);
                if($stmt = $pdo->prepare($sql1)) {
                    $stmt->bindParam(":username", $username, PDO::PARAM_STR);
                    $stmt->bindParam(":firstName", $first_name, PDO::PARAM_STR);
                    $stmt->bindParam(":lastName", $last_name, PDO::PARAM_STR);
                    $stmt->bindParam(":email", $email, PDO::PARAM_STR);

                    if($stmt->execute()){
                        header("location: LoginPage.php");
                    }
                }else{
                    echo "Something went wrong. Please try again later.";
                }


            } else{
                echo "Something went wrong. Please try again later.";
            }
            unset($stmt);
        }
    }
    unset($pdo);
}


