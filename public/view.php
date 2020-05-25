<?php
class View{
    public function load($model, $acao, $data = null){
        $model = ucfirst($model);
        include "template/$model/$acao.php";
    }
}
?>