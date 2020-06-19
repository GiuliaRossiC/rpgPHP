<?php if ($data): ?>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
        }
    </style>
    <table>
        <thead>
        <tr>
            <th>codigo</th>
            <th>nome</th>
            <th>email</th>
            <th>senha</th>
            <th>data nascimento</th>
            <th>sexo</th>
            <th>estado civil</th>
            <th>telefone residencial</th>
            <th>telefone celular</th>
            <th>endereco</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $usuario): ?>
            <tr>
                <td><?=$usuario['id_usuario']?></td>
                <td><?=$usuario['usuario']?></td>
                <td><?=$usuario['email']?></td>
                <td><?=$usuario['senha']?></td>
                <td><?=$usuario['data_nascimento']?></td>
                <td><?=$usuario['sexo']?></td>
                <td><?=$usuario['estado_civil']?></td>
                <td><?=$usuario['telefone_residencial']?></td>
                <td><?=$usuario['telefone_celular']?></td>
                <td><?=$usuario['endereco']?></td>
                <td style="float: right">
                    <a href="restrito.php?controller=usuario&action=alterar&id=<?= $usuario['id_usuario']?>">alterar</a>
                    <br>ou<br>
                    <a href="restrito.php?controller=usuario&action=apagar&id=<?=$usuario['id_usuario']?>">apagar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
   </table>
<?php else: ?>
<?php endif ?>

<a href="restrito.php?controller=usuario&action=criar">novo usuario</a>

