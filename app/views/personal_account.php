<?php
if(!$id = $_SESSION['user_id'])
{
    header('Location: ../auth/login');
}
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
    <h1>Личный кабинет</h1>
    <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger">
            <h3 style="color: red">
                <?=$_SESSION['error']?>
            </h3>
        </div>

        <?php
        unset($_SESSION['error']);
        ?>
    <?php endif; ?>
    <a href="../auth/logout">Выйти</a>

    <h3>ваш логин - <?=$_SESSION['user_name']?></h3>
    <a href="../Controllers/EditPersonalControlelr?id=<?=$id?>&type=contacts">Изменить контактные данные</a>
    <a href="../Controllers/EditPersonalControlelr?id=<?=$id?>&type=password">Изменить пароль</a>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>