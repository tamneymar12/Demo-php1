<?php
include_once "../db.php";
      $category = "SELECT * FROM categories";
      $categories= $db->query($category);
      $categories= $categories->fetchAll();
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
    <h1>Thêm người dùng </h1>
    <div class="container">
      <form method="post" enctype="multipart/form-data" action="save-add.php">
        <div class="form-group">
          <label for="">Name<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="name">
          <label for="">Loại sp<span class="text-danger">*</span></label>
          <br>
          <select name="cate" id="" >
            <?php foreach ($categories as $cate): ?>
            <option value="<?php echo $cate['id'] ?>"><?php echo $cate['cate_name']?></option>
            <?php  endforeach; ?>
          </select>
          <br>
          <label for="">image<span class="text-danger">*</span></label>
          <input type="file" class="form-control" name="image">
          <label for="">Price<span class="text-danger">*</span></label>
          <input type="number" class="form-control" name="price">
          <label for="">short_desc<span class="text-danger">*</span></label>
          <textarea name="short_desc" id="" cols="150" rows="10"></textarea><br>
          <label for="">detail<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="detail">
          <label for="">star<span class="text-danger">*</span></label>
          <input type="number" class="form-control" name="star">
          <label for="">views<span class="text-danger">*</span></label>
          <input type="number" class="form-control" name="views">
        </div>
            <button type="submit" class="btn btn-primary">Add</button>
      </form>
    </div>

</body>

</html>
