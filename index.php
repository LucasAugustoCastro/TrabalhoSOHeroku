<?php

$filename = 'data.json';

$data = file_get_contents($filename);
$users = json_decode($data);
?>

<html>
<style>
a{
  text-decoration: none;
  color: #000000;
}
</style>
<div>
    <table>
        <tbody>
            <tr>
                <th>Código: </th>
                <th>Nome: </th>
                <th>Sobrenome: </th>
                <th>Email: </th>
            </tr>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <td> <?= $user->codigo; ?> </td>
                    <td> <?= $user->nome; ?> </td>
                    <td> <?= $user->sobrenome; ?> </td>
                    <td> <?= $user->email; ?> </td>
                    <td><button><a href="/atualizar.php/<?=$user->codigo?>">Atualizar Cadastro</a></button></td>
                </tr>
            <?php } ?>
            
        </tbody>

    </table>
    <div>
        <button><a href="/cadastrar.php">Cadastre um novo usuario</a></button>
        <button><a href="/remover.php">Remova um usuario</a></button>
    </div>
</div>
</html>