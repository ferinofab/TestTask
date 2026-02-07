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

    <div class="d-flex align-items-center justify-content-center vh-100 bg-body-tertiary">
        <main class="form-signin w-100 m-auto" style="max-width: 330px;">
            <form  action="../Controllers/RegisterController" method="post">
                <h1 class="h3 mb-3 fw-normal text-center">Регистрация</h1>

                <div class="form-floating mb-2">
                    <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                    <label for="floatingInput">Имя</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" name="phone"  class="form-control" id="floatingInput" placeholder="8*********" required>
                    <label for="floatingInput">Телефон</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                    <label for="floatingInput">E-mail</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="password" name="password" class="form-control" id="floatingInput" placeholder="" required>
                    <label for="floatingInput">Пароль</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" name="rep_password" class="form-control" id="floatingInput" placeholder="" required>
                    <label for="floatingInput">Повтор пароля</label>
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
            </form>
        </main>
    </div>

    <?php
    require_once __DIR__ . "/../views/footer.php"
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>