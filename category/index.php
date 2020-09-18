<?php
        require_once "../db.php";
        $categories = "SELECT * FROM categories";
        $category = $db->query($categories);
        $category = $category->fetchALL();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">;
</head>
<body>
    <h1>Danh mục sản phẩm </h1>
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên danh mục</th>
            <th scope="col">showmenu</th>
            <th scope="col">desc</th>
            <th colspan="2">  <a href="add_cate.php" style="color:white;">Thêm</a> </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($category as $cate): ?>
            <tr>
                <td><?php echo $cate['id'] ?></td>
                <td><?php echo $cate['cate_name'] ?></td>
                <td><?php echo $cate['show_menu'] ?></td>
                <td><?php echo $cate['description'] ?></td>
                <th><a href="<?php echo 'edit_cate.php?id=' .$cate['id'] ?>">Sửa</a></th>
                        <th><a href="<?php echo 'remove.php?id='.$cate['id'] ?>">Xóa</a></th>
            </tr>
        <?php endforeach; ?>
    </tbody>

    </table>

</body>
</html>
