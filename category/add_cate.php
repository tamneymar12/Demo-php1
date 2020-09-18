
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
    <h1>Thêm Danh Mục</h1>
<form class="container" method="post" enctype="multipart/form-data" action="save_add.php">
  <div class="form-group">
    <label for="">Tên danh mục</label>
    <input type="text" class="form-control" id="" name="cate_name">
  </div>
  <div class="form-group">
    <label for="">Show_menu</label>
    <input type="text" class="form-control" id="" name="show_menu">
  </div>
  <div class="form-group">
    <label for="">Desc</label>
   <textarea name="desc" id="" cols="150" rows="10"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Thêm </button>
</form>
</body>
</html>
