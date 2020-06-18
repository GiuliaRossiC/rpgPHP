<?php

/**
 * Classe para salvar e ler os dados em disco
 */
class Data
{
    /**
     * @var string
     */
    private $table;

    public function __construct($table)
    {
        $this->table = $table;
    }

    public function load()
    {
        $path = $this->getFilename();
        if (file_exists($path)) {
            return require $path;
        }
        return [];
    }

    public function getall()
    {
        $conexao = $this->getConnection();
        $result = mysqli_query($conexao, "SELECT * FROM {$this->table}");
        mysqli_close($conexao);
        return $result;
    }

    public function getby($campo, $valor)
    {
        $conexao = $this->getConnection();
        $result = mysqli_query($conexao, "SELECT * FROM {$this->table} WHERE $campo = '$valor'");
        $result = mysqli_fetch_array($result);
        mysqli_close($conexao);
        return $result;
    }

    public function get($chave)
    {
        $conexao = $this->getConnection();
        $result = mysqli_query($conexao, "SELECT * FROM {$this->table} WHERE id_{$this->table} = $chave");
        if ($result === false) {
            throw new \RuntimeException('erro ao consultar dados:' . mysqli_error($conexao));
        }
        $result = mysqli_fetch_array($result);
        mysqli_close($conexao);
        return $result;
    }

    public function save($dados, $chave = null)
    {
        $conexao = $this->getConnection();
        $current = $chave ? $this->get($chave) : null;
        if (empty($current)) {
            $insert = "INSERT INTO {$this->table} ("
                . implode(', ', array_keys($dados))
                . ") VALUES ('" . implode("', '", $dados) . "')";
            $result = mysqli_query($conexao, $insert);
            if ($result === false) {
                throw new \RuntimeException('erro ao gravar dados:' . mysqli_error($conexao));
            }
        } else {

            $set = [];
            foreach ($dados as $key => $value) {
                $set[] = "$key = '$value'";
            }
            $update = "UPDATE {$this->table} SET " . implode(', ', $set) . " WHERE id_{$this->table} = $chave";
            $result = mysqli_query($conexao, $update);
            if ($result === false) {
                throw new \RuntimeException('erro ao gravar dados:' . mysqli_error($conexao));
            }
        }

    }

    public function getFilename()
    {
        return __DIR__ . "/data-{$this->table}.php";
    }

    public function apagar($chave)
    {
        $conexao = $this->getConnection();
        $result = mysqli_query($conexao, "DELETE FROM {$this->table} WHERE id_{$this->table} = $chave");
        if ($result === false) {
            throw new \RuntimeException('erro ao gravar dados:' . mysqli_error($conexao));
        }
        mysqli_close($conexao);
        return $result;
    }

    /**
     * @return false|mysqli
     */
    public function getConnection()
    {
        $conexao = mysqli_connect("127.0.0.1", "root", "", "rpg");
        if ($conexao === false) {
            throw new \RuntimeException('nao foi possivel conectar');
        }
        return $conexao;
    }

}