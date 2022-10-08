<?php

require_once('functions.php');

$page_content = includeTemplate('guest.php');

$page_header = includeTemplate('layouts/header.php');

$page_layout = includeTemplate('layouts/main-layout.php', [
    'page_content' => $page_content,
    'page_header' => $page_header,
    'css_file' => './css/guest_page-style.css',
    'title' => 'Task Manager - Guest page'
]);

print($page_layout);