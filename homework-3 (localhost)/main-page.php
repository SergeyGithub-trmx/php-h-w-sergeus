<?php

require_once('functions.php');

$config = require_once('config\db.php');
$mysqli = mysqli_connect(...$config);

if (!$mysqli) {
    http_response_code(500);
    exit;
}

$sql = 'SELECT * FROM `project`';
$projresult = mysqli_query($mysqli, $sql);

$sql = 'SELECT * FROM `task`';
$taskresult = mysqli_query($mysqli, $sql);

$projects = [];
$tasks = [];

while ($project = mysqli_fetch_assoc($projresult)) {
    $projects[] = $project;
}

while ($task = mysqli_fetch_assoc($taskresult)) {
    $tasks[] = $task;
}

$page_content = includeTemplate('main.php', [
    'tasks' => $tasks,
    'projects' => $projects
]);

$page_header = includeTemplate('layouts\header.php');

$page_layout = includeTemplate('layouts\main-layout.php', [
    'page_content' => $page_content,
    'page_header' => $page_header,
    'css_file' => 'css\main_page-style.css',
    'title' => 'Task Manager - Main page'
]);

print($page_layout);
