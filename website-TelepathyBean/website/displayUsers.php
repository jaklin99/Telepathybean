<?php
require_once 'config.php';
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $sql = "SELECT pi.first_name, pi.last_name, u.username, u.type_user FROM people_info as pi inner join users as u on pi.username = u.username";
    if($stmt = $pdo->prepare($sql))
    {
        if($stmt->execute())
        {
            if($stmt->rowCount() > 0)
            {
                $all  = $stmt->fetchAll();
                echo '<table id="myTable" class="table">';
                echo '<thead class="thead" >';
                echo ' <tr>';
                     echo '<th scope="col">First Name</th>';
                echo '<th scope="col">Last Name</th>';
                echo '<th scope="col">Username</th>';
                echo '<th scope="col">User Type</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';

                for ($i = 0;$i<$stmt->rowCount();$i++)
                {

                    $row = $all[$i];

                    $first_name = $row["first_name"];
                    $last_name = $row["last_name"];
                    $username = $row["username"];
                    $type = $row["type_user"];

                    echo '<tr>';
                    echo '<th scope="row">' . $first_name . '</th>';
                    echo '<td>' . $last_name . '</td>';
                    echo '<td>' . $username . '</td>';
                    echo '<td>' . $type . '</td>';
                    echo '<td>';

                    echo '<form action = \'UsersPage.php?uname='. $username . '\' method = "post">';
                    if($type == 'SuperUser')
                    {
                        echo '<input type="submit" class="btn btn-outline-warning" value ="Remove" disabled/>';
                    }else
                        {
                            echo '<input type="submit" class="btn btn-outline-warning" value ="Remove"/>';
                        }
                    echo '</form>';
                    echo '</td>';

                    echo '<td>';

                    echo '<form action = \'UsersPage.php?unameU='. $username . '\' method = "post">';
                    if($type == 'SuperUser')
                    {
                        echo '<input type="submit" class="btn btn-outline-warning" value="Edit user" disabled/>';
                    }else
                    {
                        echo '<input type="submit" class="btn btn-outline-warning" value="Edit user"/>';
                    }
                    echo '</form>';
                    echo '</td>';

                    echo '</tr>';
                }
                echo '</tbody>';
                echo '</table>';
            }else{
                echo "Oops! Something went wrong. Please try again later...";
            }
        }else{
            echo "Oops! Something went wrong. Please try again later...";
        }
    } else{
        echo "Oops! Something went wrong. Please try again later...";
    }
    unset($stmt);
    unset($pdo);

}
