<?php if ($data): ?>
    <table>
        <thead>
        <tr>
            <th>nome</th>
            <th>email</th>
            <th>senha</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $usuario): ?>
            <tr>
                <td><?=$usuario['usuario']?></td>
                <td><?=$usuario['email']?></td>
                <td><?=$usuario['senha']?></td>
                <td>
                    <a href="index.php?controller=usuario&action=alterar&email=<?=$usuario['email']?>">alterar</a>
                    <a href="index.php?controller=usuario&action=apagar&email=<?=$usuario['email']?>">apagar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
   </table>
<?php else: ?>
<?php endif ?>

<a href="index.php?controller=usuario&action=criar">novo usuario</a>

