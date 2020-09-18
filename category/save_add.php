<?php
    require_once "../db.php";
    $name = $_POST['cate_name'];
    $show = $_POST['show_menu'];
    $desc = $_POST['desc'];

    $insertCategoryQuery = "insert into categories
                                                        (cate_name ,show_menu, description)
                                            values
                                                        ('$name', '$show', '$desc')";

    $categoryQuery = $db->query($insertCategoryQuery);

    if($insertCategoryQuery){
        header("location: index.php");
    }
?>
