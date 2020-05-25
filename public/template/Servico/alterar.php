<form action="index.php?controller=servico&action=criar" method="post">
    <input name="codigo" type="hidden" value="<?=$data['codigo']?>">
    codigo: <?=$data['codigo']?>
    <input name="missao" value="<?=$data['missao']?>">
    <select name="materia">
        <option value="portugues" <?php if ($data['materia'] == 'portugues') echo 'selected="selected"'?>>portugues</option>
        <option value="matematica" <?php if ($data['materia'] == 'matematica') echo 'selected="selected"'?>>matemagica</option>
    </select>
    <button type="submit">salvar</button>
</form>