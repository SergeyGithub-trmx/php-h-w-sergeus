<?php

function create_user(mysqli $mysqli, array $data): bool
{
    list($login, $email, $password) = $data;
    
    $login = mysqli_real_escape_string($mysqli, $login);
    $email = mysqli_real_escape_string($mysqli, $email);
    $password = mysqli_real_escape_string($mysqli, $password);
    
    $data = implode(', ', ["'$login'", "'email'", "'$password'"]);
    
    $sql = "INSERT INTO `user` (login, email, password_hash) VALUES ($data)";
    
    return mysqli_query($mysqli, $sql);
};

function get_user_by_email(mysqli $mysqli, string $email): string
{
    $email = strval($email);
    $sql = "SELECT * FROM `user` WHERE `email` = {$email}";
    $result = mysqli_query($mysqli, $sql);
}

function get_user_projects(mysqli $mysqli, int $user_id): array
{
    $projects = [];
    
    $user_id = intval($user_id);
    $sql = "SELECT * FROM `project` WHERE `user_id` = {$user_id}";
    $result = mysqli_query($mysqli, $sql);
    
    while ($project = mysqli_fetch_assoc($result)) {
        $projects = $project;
    };
    
    return $projects;
};

function get_user_tasks(mysqli $mysqli, int $user_id): array
{
    $tasks = [];
    
    $user_id = intval($user_id);
    $sql = "SELECT * FROM `task` WHERE `user_id` = {$user_id}";
    $result = mysqli_query($mysqli, $sql);
    
    while ($task = mysqli_fetch_assoc($result)) {
        $tasks = $task;
    };
    
    return $tasks;
};