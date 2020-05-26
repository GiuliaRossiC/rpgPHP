<form method="post">
    <input name="codigo" type="hidden" value="<?=$data['servico']['codigo']?>">
    codigo: <?=$data['servico']['codigo']?>
    <input name="missao" value="<?=$data['servico']['missao']?>">
    <?php
    if (isset($data['erro']['missao']))
        echo '<span style="color:red ">' . $data['erro']['missao'] . "</span>";
    ?>
    <select name="materia">
        <option value="portugues" <?php if ($data['servico']['materia'] == 'portugues') echo 'selected="selected"'?>>portugues</option>
        <option value="matematica" <?php if ($data['servico']['materia'] == 'matematica') echo 'selected="selected"'?>>matemagica</option>
    </select>
    <button type="submit">salvar</button>
</form>