<?php
require_once 'config.php';
if(isset($_GET['uname']))
{
$username = $_GET['uname'] ?? '';
$sql = 'select type_user from users where username = :username';
    if($stmt = $pdo->prepare($sql)) {
        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
        if ($stmt->execute())
        {
            if($stmt->fetch() != 'SuperUser')
            {
                $sql = 'DELETE FROM users WHERE username = :username;';
                if($stmt = $pdo->prepare($sql))
                {
                    $stmt->bindParam(":username", $username, PDO::PARAM_STR);
                    if (!$stmt->execute()) echo 'Something went wrong';
                }
                $sql = 'DELETE FROM people_info WHERE username = :username;';
                if($stmt = $pdo->prepare($sql))
                {
                    $stmt->bindParam(":username", $username, PDO::PARAM_STR);
                    if (!$stmt->execute()) echo 'Something went wrong';
                }
            }else
                {
                    echo '<script>alert(\'Cannot be deleted\');</script>';
                }
        }else
        {
            echo 'Something went wrong';
        }
    }else
    {
        echo 'Something went wrong';
    }
}
