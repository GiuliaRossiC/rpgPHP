<?php
/**
 * Classe para salvar e ler os dados em disco
 */
class Data
{
    public function load($filename)
    {
        $path = $this->getFilename($filename);
        if (file_exists($path)) {
            return require $path;
        }
        return [];
    }

    public function save($fileName, $data)
    {
        file_put_contents($this->getFilename($fileName), '<'. '?php return ' . var_export($data, true) . ';');
    }

    public function getFilename($filename)
    {
        return __DIR__ . "/data-$filename.php";
    }

}