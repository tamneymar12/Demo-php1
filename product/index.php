<?php
  require_once "../db.php";
  $products = "SELECT  products.*, categories.cate_name as cate_name
                                    FROM products join categories
                                    on products.cate_id=categories.id";
  $product = $db->query($products);
  $product= $product->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="../style.css">
</head>
<body>
      <h1>Danh SÁCH SẢN PHẨM </h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Tên sp</th>
      <th scope="col">Ảnh</th>
      <th scope="col">Giá</th>
      <th scope="col">Short_desc</th>
      <th scope="col">Detail</th>
      <th scope="col">Star</th>
      <th scope="col">Views</th>
      <th colspan="2"><a href="add-product.php" style="color: white;" >Thêm</a></th>
    </tr>
  </thead>
  <tbody>
        <?php foreach ($product as $pro): ?>
            <tr>
              <td><?php  echo $pro['id'] ?></td>
              <td><?php  echo $pro['cate_name'] ?></td>
              <td><img src="<?php  echo $pro['image'] ?>"  width="200px;" alt=""></td>
              <td><?php  echo $pro['price'] ?></td>
              <td><?php  echo $pro['short_desc'] ?></td>
              <td><?php  echo $pro['detail'] ?></td>
              <td><?php  echo $pro['star'] ?></td>
              <td><?php  echo $pro['views'] ?></td>
              <td><a href=" <?php 'edit-product.php?id=' . $pro['id'] ?>" class="btn btn-sm btn-info">Sửa</a>
              <a href=" <?php 'remove.php?id=' . $pro['id'] ?>" class="btn btn-sm btn-info">Xóa</a>
            </td>
            </tr>
        <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>
