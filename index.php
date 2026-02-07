<?php
session_start();

//ROUTING
/*
 *views/home - ГЛАВНАЯ
 *auth/login - ФОРМА ВХОДА
 *auth/register - ФОРМА РЕГИСТРАЦИИ
 * views/personal_account - ЛИЧНЫЙ КАБИНЕТ
 *  */


require_once "db.php";

$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($request_uri) {
    case '/' :
        require __DIR__ . '/views/home.php';
        break;

    default:
        $file_in_app = __DIR__ . '/app' . $request_uri;
        $file_in_views = __DIR__ . '/views' . $request_uri;

        if (!str_ends_with($request_uri, '.php')) {
            $file_in_app .= '.php';
            $file_in_views .= '.php';
        }

        if (file_exists($file_in_app)) {
            require $file_in_app;
        } elseif (file_exists($file_in_views)) {
            require $file_in_views;
        } else {
            http_response_code(404);
            require __DIR__ . '/views/404.php';
        }
        break;
}