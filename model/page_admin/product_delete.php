<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once '../connect.php'; 
    $id = $_GET['id'];
    $sql = "DELETE FROM products WHERE product_id = $id";
    $kq = $conn->query($sql);
    header('Location: producList.php');
    ?>
</body>

</html>