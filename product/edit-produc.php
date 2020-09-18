<?php
$id = isset($_GET['id']) ? $_GET['id'] : -1;
require_once "../db.php";
$getProductsQuery = "select * from products where id = '$id'";
$product = $db->query($getProductsQuery);
$products = $product->fetch();
$category = "SELECT * FROM categories";
$categories = $db->query($category);
$categories = $categories->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <h1>Sửa người dùng </h1>
  <div class="container">
    <form method="post" enctype="multipart/form-data" action="save-edit.php">
      <div class="form-group">
        <input type="text" name="id" value="<?php echo $id ?>" hidden>
        <label for="">Name<span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="name" value="<?php echo $products['name'] ?>">
        <label for="">Loại sp<span class="text-danger">*</span></label>
        <br>
        <select name="cate" id="">
          <?php foreach ($categories as $cate) : ?>
            <option value="<?php echo $cate['id'] ?>"><?php echo $cate['cate_name'] ?></option>
          <?php endforeach; ?>
        </select>
        <label for="">image<span class="text-danger">*</span></label>
        <input type="file" class="form-control" name="image" value="<?php echo  $products['image'] ?>">
        <label for="">Price<span class="text-danger">*</span></label>
        <input type="number" class="form-control" name="price" value="<?php echo $products['price'] ?>">
        <label for="">short_desc<span class="text-danger">*</span></label>
        <textarea name="short_desc" id="" cols="30" rows="10"></textarea>
        <label for="">detail<span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="detail" value="<?php echo $products['detail'] ?>">
        <label for="">star<span class="text-danger">*</span></label>
        <input type="number" class="form-control" name="star" value="<?php echo $products['star'] ?>">
        <label for="">views<span class="text-danger">*</span></label>
        <input type="number" class="form-control" name="views" value="<?php echo $products['views'] ?>">
      </div>
      <button type="submit" class="btn btn-primary">Sửa</button>
    </form>
  </div>

</body>

</html>
