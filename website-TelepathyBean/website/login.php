<?php
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
{
    header("location: ../index.php");
    exit;
}

require_once "config.php";

$username = $password = "";
$username_err = $password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty(trim($_POST["username"])))
    {
        $username_err = "Please enter username.";
    }
    else
        {
        $username = trim($_POST["username"]);
    }

    if(empty(trim($_POST["password"])))
    {
        $password_err = "Please enter your password.";
    } else
        {
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if(empty($username_err) && empty($password_err))
    {
        $sql = "SELECT u.id, u.username, password, type_user, first_name, last_name FROM users as u join people_info as pi on u.username = pi.username WHERE u.username = :username";

        if($stmt = $pdo->prepare($sql))
        {
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);

            $param_username = trim($_POST["username"]);

            if($stmt->execute())
            {
                if($stmt->rowCount() == 1)
                {
                    if($row = $stmt->fetch())
                    {
                        $id = $row["id"];
                        $username = $row["username"];
                        $hashed_password = $row["password"];
                        $type = $row["type_user"];
                        $first_name = $row["first_name"];
                        $last_name = $row["last_name"];

                        if(password_verify($password, $hashed_password))
                        {
                            session_start();

                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            $_SESSION["type"] =$type;
                            $_SESSION["first_name"] =$first_name;
                            $_SESSION["last_name"] =$last_name;

                            header("location: ../index.php");
                        } else
                            {
                                echo $password;
                            $password_err = "password not valid";
                        }
                    }
                } else{
                    $username_err = "No such username";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later...";
            }
            unset($stmt);
        }
    }
    unset($pdo);
}
