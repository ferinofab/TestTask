<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['update_contacts'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $sql = "UPDATE users SET name = :name, email = :email, phone = :phone WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['name' => $name, 'email' => $email, 'phone' => $phone, 'id' => $id]);

        $_SESSION['success'] = "Данные обновлены!";
        $_SESSION['user_name'] =  $name;
        header("Location: ../views/personal_account");
        exit;
    }

    if (isset($_POST['update_password'])) {
        $id = $_POST['id'];

        if ($id !== $_SESSION['user_id']) {
            $_SESSION['error'] = "Попытка изменения чужого пароля!";
            header("Location: ../views/home");
            exit;
        }

        $old_pass = $_POST['old_password'];
        $new_pass = $_POST['new_password'];
        $rep_pass = $_POST['rep_password'];

        $stmt = $pdo->prepare("SELECT password FROM users WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $user = $stmt->fetch();

        if ($user && password_verify($old_pass, $user['password']) && $new_pass === $rep_pass)
        {
            $new_hash = password_hash($new_pass, PASSWORD_DEFAULT);
            $update = $pdo->prepare("UPDATE users SET password = :pass WHERE id = :id");
            $update->execute(['pass' => $new_hash, 'id' => $id]);

            $_SESSION['success'] = "Пароль успешно изменен!";
        }
        else if($new_pass != $rep_pass)
        {
            $_SESSION['error'] = "Пароли не совпадают!  ";
        }
        else
        {
            $_SESSION['error'] = "Старый пароль введен неверно!";
        }

        header("Location: ../views/personal_account");
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];
    $type = $_GET['type'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $user = $stmt->fetch();

    if ($user) {
        $params = http_build_query([
            'id'    => $id,
            'name'  => $user['name'],
            'email' => $user['email'],
            'phone' => $user['phone']
        ]);

        if ($type === 'password') {
            header("Location: ../edit/password.php?id=$id");
        } else {
            header("Location: ../edit/contacts.php?$params");
        }
        exit;
    }
}
