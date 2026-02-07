<?php
require "db.php";

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$rep_password = $_POST['rep_password'];

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "SELECT * FROM users WHERE name = :name AND phone = :phone AND email = :email";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'name'  => $name,
    'phone' => $phone,
    'email' => $email,
]);
$user = $stmt->fetch();


if($user == true)
{
    //пользователь есть
    $_SESSION['error'] = "Пользователь с таким Иминем, Email или телефоном уже есть!";
    header('Location: ../auth/login');
    exit;
}
else
{
    if($password == $rep_password)
    {
        $sql = "INSERT INTO users (name, phone, email, password) VALUES (:name, :phone, :email, :password)";
        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            'name'     => $name,
            'phone'    => $phone,
            'email'    => $email,
            'password' => $hashedPassword
        ]);

        $newUserId = $pdo->lastInsertId();

        $_SESSION['user_id'] = $newUserId;
        $_SESSION['user_name'] = $name;
        header('Location: ../views/personal_account');
    }
    else
    {
        $_SESSION['error'] = "Пароли не совпадпют!";
        header('Location: ../auth/register');
        exit;
    }

}
exit();