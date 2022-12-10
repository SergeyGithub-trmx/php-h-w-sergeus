<?php

require_once('functions.php');
require_once('db-func.php');

$config = require_once('config\db.php');
$mysqli = mysqli_connect(...$config);

if (!$mysqli) {
    http_response_code(500);
    exit;
};

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = trim($_POST['login'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (mb_strlen($login) === 0) {
        $errors['login'] = 'Please enter a login.';
    }

    if (mb_strlen($email) === 0) {
        $errors['email'] = 'Please enter a valid email address.';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Please enter a valid email address.';
    }

    if (mb_strlen($password) === 0) {
        $errors['password'] = 'Please enter a password!';
    }

    if (empty($errors)) {
        if ($user = get_user_by_email($mysqli, $email)) {

            if (password_verify($password, $user['password_hash'])) {
                $_SESSION['user'] = $user;
                header('Location: /main-page.php');
            } else {
                $errors['password'] = 'Please enter a password!';
            }
        } else {
            $errors['password'] = 'Please enter a password!';
        }
    }
}

$page_content = includeTemplate('register.php', [
    'errors' => $errors
]);

$page_header = includeTemplate('layouts\header.php');

$page_layout = includeTemplate('layouts\main-layout.php', [
    'page_content' => $page_content,
    'page_header' => $page_header,
    'css_file' => 'css\login-register_page-style.css',
    'title' => 'Task Manager - Register'
]);

print($page_layout);
