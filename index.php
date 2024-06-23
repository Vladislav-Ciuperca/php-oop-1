<?php

class Movie
{
    public $titolo;
    public $durata;
    public $prezzo;

    public function titoloCompleto()
    {
        return "$this->titolo $this->durata";
    }

    function __construct($titolo, $durata, $prezzo)
    {
        $this->titolo = $titolo;
        $this->durata = $durata;
        $this->prezzo = $prezzo;
    }
}

$movies = [
    $The_Beekeeper = new Movie("The Beekeper", 120, 7.50),
    $Barbie = new Movie("Barbie", 120, 8.20),
    $UP = new Movie("UP", 90, 12.30),
    $Despiacable_me = new Movie("Despiacamle Me", 94, 7.80),
];


?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css"> -->
     <link rel="stylesheet" href="css/style.css">
    <title>php-oop-1</title>
</head>

<body>

    <h1>Hello OOP World</h1>

    <ul>

        <?php foreach ($movies as $indice => $Movie) {
            echo "<li> $Movie->titolo $Movie->durata prezzo: $Movie->prezzo</li>";
        } ?>

    </ul>

    <?php
    echo $UP->titoloCompleto();
    // placeholder
    ?>

</body>

</html>