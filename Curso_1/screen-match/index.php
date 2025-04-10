<?php

require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Modelo/Serie.php";
require __DIR__ . "/src/Modelo/Episodio.php";
require __DIR__ . "/src/Calculos/CalculadoraDeMaratona.php";

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme(
    'Thor - Ragnarok',
    2021,
    Genero::SuperHeroi,
    180,
);

$filme->avalia(10);
$filme->avalia(5.2);
$filme->avalia(6.5);
$filme->avalia(8);
$filme->avalia(7);

var_dump($filme);
echo $filme->media() . "\n";

echo $filme->anoLancamento . "\n";

$serie = new Serie(
    'Lost',
    2007,
    Genero::Drama,
    10,
    20,
    30,
);
$episodio = new Episodio($serie, 'Episodio piloto', 1);

echo $serie->anoLancamento . "\n";

$serie->avalia(8);

echo $serie->media() . "\n";

var_dump($serie);

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "Para essa maratona, você precisa de $duracao minutos";