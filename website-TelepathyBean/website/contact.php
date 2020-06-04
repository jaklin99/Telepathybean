<?php

require_once "config.php";

        $sql = "SELECT subject, message, username FROM contact";

        if($stmt = $pdo->prepare($sql))
        {
            if($stmt->execute()) {
                if ($stmt->rowCount() > 0) {
                    foreach($stmt as $row) {
                        echo "<h2> Subject: " . $row['subject'] ." Message: " . $row['message'] . " From: " . $row['username'] . "</h2>";
                    }

                } else {
                    echo "Oops! Something went wrong. Please try again later...";
                }
            }
            unset($stmt);

    }
    unset($pdo);

