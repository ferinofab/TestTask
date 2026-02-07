<?php

$login = $_POST['name'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE phone = :login OR email = :login";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'login'  => $login,
]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_name'] = $user['name'];
    header('Location: ../views/personal_account');
    exit;
} else {
    $_SESSION['error'] = "Неверный логин или пароль";
    header('Location: ../auth/login');
    exit;
}
exit();