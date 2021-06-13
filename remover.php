<?php

$filename = 'data.json';

$data = file_get_contents($filename);
$users = json_decode($data);
?>


<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
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
          </tr>
          <?php } ?>
          
      </tbody>

  </table>
  <form action="/delete.php" method="POST">
    <label for="id">Informe o codigo do usuario que queira deletar: </label>
    <input type="text" id="id" name="id" maxlength="2">
    <button type="submit">Excluir</button>
  </form>
</div>
</body>
</html>