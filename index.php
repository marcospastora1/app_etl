<?php

require __DIR__ . "/vendor/autoload.php";

use src\Leitor;

//---------------------TXT
$leitorTXT = new Leitor();
$leitorTXT->setDiretorio(__DIR__ . '/arquivos');
$leitorTXT->setArquivo('dados.txt');
$array_TXT = $leitorTXT->lerArquivo();


//---------------------CSV
$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__ . '/arquivos');
$leitorCSV->setArquivo('dados.csv');
$array_CSV = $leitorCSV->lerArquivo();

//--------------------Merge entre TXT e CSV
echo '<pre>';
print_r(array_merge($array_TXT, $array_CSV));
echo '<pre>';
