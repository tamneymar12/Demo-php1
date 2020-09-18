<?php
require_once "../db.php";
$id = $_POST['id'];
$name = $_POST['name'];
$cate = $_POST['cate'];
$image = $_FILES['image'];
$price = $_POST['price'];
$short = $_POST['short_desc'];
$detail = $_POST['detail'];
$star = $_POST['star'];
$view = $_POST['views'];

$getProductById = "select * from products where id = '$id'";
$products = $db->query($getProductById);

// $filename = $news['image'];

if($image['size'] > 0){
    $filename = uniqid() . '-' . $image['name'];
    move_uploaded_file($image['tmp_name'], "../upload/" . $filename);
    $filename = "../upload/" . $filename;
}
    $updateProductsQuery = "update products
                                                set
                                                    name ='$name',
                                                    cate_id='$cate',
                                                    image ='$filename',
                                                    price ='$price',
                                                    short_desc ='$short',
                                                    detail ='$detail',
                                                    star ='$star',
                                                    views ='$view'
                                                where id ='$id'";
                              $products=$db->query($updateProductsQuery);
                              $product = $products->fetch();
    // var_dump($updateProductsQuery);

    if($updateProductsQuery){
        header("location: index.php");
    }
?>
