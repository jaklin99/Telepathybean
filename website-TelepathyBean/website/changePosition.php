<?php
require_once 'config.php';
if(isset($_GET['unameU']))
{
    $username = $_GET['unameU'] ?? '';
    $sql = 'select type_user from users where username = :username';
    if($stmt = $pdo->prepare($sql)) {
        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
        if ($stmt->execute())
        {
            $type = $stmt->fetch();
            if($type != 'SuperUser')
            {
                $sql = 'update users set type_user = :type where username = :username;';
                if($stmt = $pdo->prepare($sql))
                {
                    if($type == 'Standard')
                    {
                        $type_param = 'Admin';
                        $stmt->bindParam(":type", $type_param, PDO::PARAM_STR);
                    }else
                        {
                            $type_param = 'Standard';
                            $stmt->bindParam(":type", $type_param, PDO::PARAM_STR);
                    }
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
