<?php
    require_once("db.php");
    $id = $_GET['id'];
    $res = $database->Delete($id);
     
    
    if($res)
    {
        header("Location:index.php");
    }
    else
    {
       echo "Failed to save data..";
    }
?>