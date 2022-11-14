<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php session_start(); ?>
    <div class="container">
        <nav class="row">
            <?php require_once("../view/menu.php"); ?>
        </nav>
        <header class="row"><?php require_once("../view/header.php"); ?></header>
        <div class="section">
            <main class="col-9"><?php require_once("../view/main.php");?></main>
        </div>
        <aside><?php require_once("../view/aside.php");?></aside>
    </div>
    <?php require_once("../view/footer.php");?>
</body>
</html>