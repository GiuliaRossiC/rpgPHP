<?php if ($data): ?>
    <table>
        <thead>
        <tr>
            <th>codigo</th>
            <th>missao</th>
            <th>materia</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $missao): ?>
            <tr>
                <td><?=$missao['codigo']?></td>
                <td><?=$missao['missao']?></td>
                <td><?=$missao['materia']?></td>
                <td>
                    <a href="index.php?controller=servico&action=alterar&codigo=<?=$missao['codigo']?>">alterar</a>
                    <a href="index.php?controller=servico&action=apagar&codigo=<?=$missao['codigo']?>">apagar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
   </table>
<?php else: ?>
<?php endif ?>

<a href="index.php?controller=servico&action=criar">nova missao</a>
<a href="index.php?controller=login&action=sair">Logout</a>

