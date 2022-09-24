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

print('<pre>');

function getUser():array {
    return [       
        'name' => 'Denis',
        'surname' => 'Popov',
        'age' => 15
    ];
};

print_r(getUser());

$usersList = [];

while (count($usersList) <= 4) {
    $usersList[] = getUser();
};
print_r($usersList);

print('</pre>');
