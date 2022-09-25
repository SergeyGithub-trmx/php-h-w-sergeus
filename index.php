<?php

$users = [
    [
        'name' => 'Denis',
        'surname' => 'Popov',
        'age' => 15,
    ],
    [
        'name' => 'Sergey',
        'surname' => 'Gaymashev',
        'age' => 15,
    ],
    [
        'name' => 'Dmitriy',
        'surname' => 'Gorbunov',
        'age' => 14,
    ],
    [
        'name' => 'Dmitriy',
        'surmane' => 'Labzov',
        'age' => 16,
    ],
    [
        'name' => 'Ilya',
        'surname' => 'Vorobeiy',
        'age' => 15
    ]
];

function getUser()
{
    return [       
        'name' => 'Denis',
        'surname' => 'Popov',
        'age' => 15
    ];
}

print_r(getUser());

function getUsers()
{
    $usersList = [];
    while (count($usersList) <= 4) {
        array_push($usersList, getUser());
    }
    return $getUsers;
}

print('<pre>');
print_r($usersList);
print('</pre>');
