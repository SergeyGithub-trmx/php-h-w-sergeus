<?php

require_once('functions.php');

$page_content = includeTemplate('register.php');

$page_header = includeTemplate('layouts/header.php');

$page_layout = includeTemplate('layouts/main-layout.php', [
    'page_content' => $page_content,
    'page_header' => $page_header,
    'css_file' => './css/login-register_page-style.css',
    'title' => 'Task Manager - Register'
]);

print($page_layout);