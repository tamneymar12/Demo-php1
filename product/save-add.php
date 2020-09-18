<?php
require_once "../db.php";
$name = $_POST['name'];
$cate =$_POST['cate'];
$image = $_FILES['image'];
$price = $_POST['price'];
$short = $_POST['short_desc'];
$detail = $_POST['detail'];
$star = $_POST['star'];
$view = $_POST['views'];

// $filename = $news['image'];

if($image['size'] > 0){
    $filename = uniqid() . '-' . $image['name'];
    move_uploaded_file($image['tmp_name'], "../upload/" . $filename);
    $filename = "../upload/" . $filename;

    $insertProduct = "insert into products (name,cate_id,image,price,short_desc,detail,star,views)
                                values('$name','$cate','$filename','$price','$short','$detail','$star','$view')";
                                $products = $db->query($insertProduct);
                                $product = $products->fetchAll();
                                if($insertProduct){
                                    header("location: index.php");
                                }
}else{
    header("location: add-product.php");
}

?>
