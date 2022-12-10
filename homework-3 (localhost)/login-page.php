<?php

require_once('functions.php');

$errors = [];

if (isset($_SESSION['user'])) {
    header('Location: /main-page.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = trim($_POST['login'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (mb_strlen($login) === 0) {
        $errors['login'] = 'Please enter a login.';
    }

    if (mb_strlen($password) === 0) {
        $errors['password'] = 'Please enter a password!';
    }
}

$page_content = includeTemplate('login.php');

$page_header = includeTemplate('layouts\header.php');

$page_layout = includeTemplate('layouts\main-layout.php', [
    'page_content' => $page_content,
    'page_header' => $page_header,
    'css_file' => 'css\login-register_page-style.css',
    'title' => 'Task Manager - Login',
]);

print($page_layout);
