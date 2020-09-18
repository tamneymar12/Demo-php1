<?php
    require_once "../db.php";
    $id = $_POST['id'];
    $name = $_POST['name'];
    var_dump($name);
    $show = $_POST['show_menu'];
    $desc = $_POST['desc'];
    $getUpdadeCategoryByID = "select * from categories where id ='$id'";
    $category= $db->query($getUpdadeCategoryByID);

    $UpdateCategoryQuery = "update categories set
                                                cate_name='$name',
                                                show_menu='$show',
                                                description='$desc'
                                                where id='$id'";
                            $categori= $db->query($UpdateCategoryQuery);
                          
                            $cate = $categori->fetch();

                if($UpdateCategoryQuery){
                     header("location: index.php");
  }
