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
// var_dump($posts['16/01/2021']);
// var_dump($posts['07/04/2021']);
// var_dump($posts['01/05/2021']);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <ul>
        <?php

        $keysMap = array_keys($posts);
        var_dump($keysMap);

        for ($i = 0; $i < count($posts); $i++) {
            $key = $keysMap[$i];
            $value = $posts[$key];
        ?>
            <li>
                <?php
                echo $key;
                ?>
                <ul>
                    <?php
                    for ($j = 0; $j < count($value); $j++) {
                        $eachPost = $value[$j];
                    ?>
                        <li>
                            <?php
                            echo $eachPost['title'];
                            echo '<br>';
                            echo $eachPost['author'];
                            echo '<br>';
                            echo $eachPost['text'];
                            ?>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </li>

        <?php
        }
        ?>


    </ul>

</body>

</html>