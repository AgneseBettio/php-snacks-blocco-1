<!-- ## Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
-->

<?php

$posts = [

    '16/01/2021' => [
        [
            'title' => 'Post 1',
            'author' => 'Mario Rossi',
            'text' => 'ciao mondo'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Mario Rossi',
            'text' => 'Buonanotte Italia'
        ],
    ],
    '07/04/2021' => [
        [
            'title' => 'Post 3',
            'author' => 'Mario Rossi',
            'text' => 'Giornata meraviglia'
        ]
    ],
    '01/05/2021' => [
        [
            'title' => 'Post 4',
            'author' => 'Mario Rossi',
            'text' => 'Testo inutile'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Mario Rossi',
            'text' => 'Salve a tutti quanti'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Mario Rossi',
            'text' => 'Buongiornissimo Kaffeee'
        ]
    ],
];
var_dump($posts['16/01/2021']);
var_dump($posts['07/04/2021']);
var_dump($posts['01/05/2021']);


?>