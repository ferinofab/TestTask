
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

<div class="d-flex align-items-center justify-content-center vh-100 bg-body-tertiary">
    <main class="form-signin w-100 m-auto" style="max-width: 330px;">
        <form action="../Controllers/EditPersonalControlelr" method="post">
            <h1 class="h3 mb-3 fw-normal text-center">Изменение пароля</h1>
            <input type="hidden" name="id" value="<?=$_GET['id'] ?>">

            <div class="form-floating mb-2">
                <input type="password" name="old_password" class="form-control" id="floatingInput">
                <label for="floatingInput">Старый пароль</label>
            </div>

            <div class="form-floating mb-2">
                <input  type="password" name="new_password" class="form-control" id="floatingInput" required>
                <label for="floatingInput">Новый пароль</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" name="rep_password" class="form-control" id="floatingPassword" required>
                <label for="floatingPassword">Повтор пароля</label>
            </div>

            <button class="btn btn-primary w-100 py-2" type="submit"name="update_password">Изменить</button>
        </form>
    </main>
</div>
<?php
require_once __DIR__ . "/../views/footer.php"
?>
</body>
</html>