<?php
/**
 * Classe para salvar e ler os dados em disco
 */
class Data
{
    /**
     * @var string
     */
    private $dataset;

    public function __construct($dataset)
    {
        $this->dataset = $dataset;
    }

    public function load()
    {
        $path = $this->getFilename();
        if (file_exists($path)) {
            return require $path;
        }
        return [];
    }

    public function get($chave)
    {
        $dataset = $this->load();
        if (isset($dataset[$chave])) {
            return $dataset[$chave];
        }
        return null;
    }

    public function save($chave, $dados)
    {
        $dataset = $this->load();
        $dataset[$chave] = $dados;
        file_put_contents($this->getFilename(), '<'. '?php return ' . var_export($dataset, true) . ';');
    }

    public function getFilename()
    {
        return __DIR__ . "/data-{$this->dataset}.php";
    }

    public function apagar($chave)
    {
        $dataset = $this->load();
        unset($dataset[$chave]);
        file_put_contents($this->getFilename(), '<'. '?php return ' . var_export($dataset, true) . ';');
    }

}