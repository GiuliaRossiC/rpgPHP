<form action="index.php?controller=servico&action=criar" method="Post">
    <input name="codigo">
    <?php
    if (isset($data['codigo']))
        echo '<span style="color:red ">' . $data['codigo'] . "</span>";
    ?>
    <input name="missao">
    <?php
    if (isset($data['missao']))
        echo '<span style="color:red ">' . $data['missao'] . "</span>";
    ?>
    <select name="materia">
        <option value="portugues">portugues</option>
        <option value="matematica">matematica</option>
    </select>
    <button type="submit">salvar</button>
</form>