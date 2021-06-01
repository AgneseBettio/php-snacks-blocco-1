<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

//per non avere errori con _GET aggiungo controllo
$name = array_key_exists("name", $_GET) ? $_GET["name"] : '';
$mail = array_key_exists("mail", $_GET) ? $_GET["mail"] : '';
$age = array_key_exists("age", $_GET) ? $_GET["age"] : '';

// var per controlli singoli
$validName = true;
$validMail = true;
$validAge = true;

//controllo nome
if (strlen($name) < 3) {
    $validName = false;
}
//controllo mail 
if (strpos($mail, '@') === false) {
    $validMail = false;
} elseif (strrpos($mail, '.', strpos($mail,"@")) === false) {
    $validMail = false;
}
//controllo age
if (!is_numeric($age)) {
    $validAge = false;
}


if ($validName && $validMail && $validAge) {

    echo "accesso riuscito";
}else{
    echo "accesso negato";
}

?>