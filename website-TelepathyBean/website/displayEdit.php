<?php
require_once 'config.php';
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $sql = "SELECT first_name, last_name, email, phone_number FROM people_info WHERE username = :username";
    if($stmt = $pdo->prepare($sql))
    {
        $stmt->bindParam(":username", $_SESSION["username"], PDO::PARAM_STR);
        if($stmt->execute())
        {
            if($stmt->rowCount() == 1)
            {
                if($row = $stmt->fetch())
                {
                    $first_name = $row["first_name"];
                    $last_name = $row["last_name"];
                    $email = $row["email"];
                    $phone = $row["phone_number"];

                    echo "<div class=\"form-group\">
    <label class=\"col-lg-3 control-label\">First name:</label>
    <div class=\"col-lg-8\">
        <input class=\"form-control\" type=\"text\" value=\"".$first_name."\" name='first_name'></div>
</div>";
                    echo "<div class=\"form-group\">
    <label class=\"col-lg-3 control-label\">Last name:</label>
    <div class=\"col-lg-8\">
        <input class=\"form-control\" type=\"text\" value=\"".$last_name."\" name='last_name'></div>
</div>";
                    echo "<div class=\"form-group\">
    <label class=\"col-lg-3 control-label\">Email:</label>
    <div class=\"col-lg-8\">
        <input class=\"form-control\" type=\"text\" value=\"".$email."\" name='email'></div>
</div>";
                    echo "<div class=\"form-group\">
    <label class=\"col-lg-3 control-label\">Phone Number:</label>
    <div class=\"col-lg-8\">
        <input class=\"form-control\" type=\"text\" value=\"".$phone."\" name='phone'></div>
</div>";
                    }
                else
                {
                    echo "1Oops! Something went wrong. Please try again later...";
                }
                }else
                    {
                        echo $stmt->rowCount();
                        echo "2Oops! Something went wrong. Please try again later...";
                    }
            }
        } else{
            echo "3Oops! Something went wrong. Please try again later...";
        }
        unset($stmt);
        unset($pdo);

}
