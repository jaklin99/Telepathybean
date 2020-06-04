<?php
if (isset($_POST['but_upload'])) {

    $name = $_FILES['image']['name'];
    $target_dir = "../upload/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);

    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if (in_array($imageFileType, $extensions_arr))
    {
        foreach ($extensions_arr as $item)
        {
            if(file_exists("../upload/" . $_SESSION["username"] . "." . $item))
            {
                unlink("../upload/" . $_SESSION["username"] . "." . $item);
            }
        }
        move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $_SESSION["username"]. "." .$imageFileType);
        header("Refresh:0");
    }
}