<?php

require __DIR__ . '/../model/Data.php';

$data = new Data('test');

$filename = $data->getFilename();
if (file_exists($filename)) {
    unlink($filename);
}

$loaded = $data->load();

if (!is_array($loaded)) {
    echo "Não é array";
    die();
}

if (!empty($loaded)) {
    echo "Não esta vazio";
    die();
}

$loaded['test-key'] = 'sim';

$data->save('test-key', 'sim');
if (!file_exists($filename)) {
    echo "arquivo não foi criado";
    die();
}

$testSavedData = require $filename;
if ($testSavedData !== $loaded) {
    echo "arquivo criado errado";
    die();
}

$loadedAgain = $data->load();
if ($loadedAgain !== $loaded) {
    echo "arquivo salvo errado (1)";
    die();
}


$loaded['test-key'] = 'não';
$data->save('test-key', 'não');
if (!file_exists($filename)) {
    echo "arquivo não foi criado";
    die();
}

$loadedAgain = $data->load();
if ($loadedAgain !== $loaded) {
    echo "arquivo salvo errado (2)";
    die();
}

$loaded['zum@rainbow.com'] = ['nome' => 'Zum', 'email' => 'zum@rainbow.com'];
$data->save('zum@rainbow.com', $loaded['zum@rainbow.com']);
if (!file_exists($filename)) {
    echo "arquivo usuario atualizado";
    die();
}

$loadedAgain = $data->load();
if ($loadedAgain !== $loaded) {
    echo "arquivo com usuario salvo errado (2)";
    die();
}

echo "todos os tests ok";
