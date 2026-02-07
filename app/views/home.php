<?php
require "db.php";

$categories = $pdo->query("SELECT * FROM category")->fetchAll(PDO::FETCH_ASSOC);
$subCategories = $pdo->query("SELECT * FROM sub_category")->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
require_once __DIR__ . "/../views/header.php"
?>
<h1>Главная</h1>
<?php if (isset($_SESSION['error'])): ?>
    <div class="alert alert-danger">
        <h3 style="color: red">
            <?=$_SESSION['error']?>
        </h3>
    </div>

    <?php
    unset($_SESSION['error']);
    ?>
<?php endif;
require_once __DIR__ . "/../views/footer.php"
?>
</body>
</html>
