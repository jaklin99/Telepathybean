<?php
$image_set = false;
foreach ($extensions_arr as $item)
{
    if(file_exists("../upload/" . $_SESSION["username"] . "." . $item))
    {
        echo "../upload/" . $_SESSION["username"] . "." . $item;
        $image_set = true;
    }
}
if(!$image_set) echo "../drawable/defPic.png";