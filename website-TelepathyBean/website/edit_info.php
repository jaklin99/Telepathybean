<?php
require_once "config.php";

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["edit_info"]))
{

    $first_name = trim($_POST["first_name"]);
    $last_name = trim($_POST["last_name"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);

    $fn_err = $ln_err = $email_err = $phone_err = "";

    if(empty($first_name))
    {
        $fn_err = "Please, enter a first name!";
    }
    if(empty($last_name))
    {
        $ln_err = "Please, enter a last name!";
    }
    if(empty($email))
    {
        $email_err = "Please, enter an email!";
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_err = "Invalid email format";
    }
    else{
        $sql = "SELECT count(email) FROM people_info where email = :email and username <> :username";

        if($stmt = $pdo->prepare($sql)){
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->bindParam(":username", $_SESSION["username"], PDO::PARAM_STR);

            if($stmt->execute()){
                if(($result = $stmt->fetch())[0]>0){
                    $email_err = "There is already a user with that email!";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            unset($stmt);
        }
    }
    if(strlen($phone) > 13)
    {
        $phone_err = "Phone Number is too long!";
    }
    if(empty($fn_err) && empty($ln_err) && empty($email_err) && empty($phone_err)){

        $sql = "update people_info set first_name = :fn, last_name = :ln, email = :email, phone_number = :phone where username = :username";

        if($stmt = $pdo->prepare($sql)){

            $stmt->bindParam(":username", $_SESSION["username"], PDO::PARAM_STR);
            $stmt->bindParam(":fn", $first_name, PDO::PARAM_STR);
            $stmt->bindParam(":ln", $last_name, PDO::PARAM_STR);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->bindParam(":phone", $phone, PDO::PARAM_STR);

            if($stmt->execute()){
                $_SESSION["first_name"] = $first_name;
                $_SESSION["last_name"] = $last_name;
                }else{
                    echo "Something went wrong. Please try again later.";
                }
            }
            unset($stmt);
        }
    unset($pdo);
}


