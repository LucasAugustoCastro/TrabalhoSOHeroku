<?php 


$id = str_replace('/', '', $_SERVER['PATH_INFO']);
// read file
$data = file_get_contents('data.json');

// decode json to array
$json_arr = json_decode($data, true);

foreach ($json_arr as $key => $value) {
    if ($value['codigo'] == $id) {
		  $nome = $json_arr[$key]['nome'] ;
      $sobrenome = $json_arr[$key]['sobrenome'] ;
		  $email = $json_arr[$key]['email'] ;
      $index = $key;
      break;
    }
}
?> 

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
</head>
<body>
<form action="/update.php" method="POST">
    <label for="nome">Nome: </label>
    <input id="nome" name="nome" type="text" value="<?=$nome ?>">

    <label for="sobrenome">Sobrenome: </label>
    <input id="sobrenome" name="sobrenome" type="text" value="<?=$sobrenome ?>">

    <label for="email">Email: </label>
    <input id="email" name="email" type="text" value="<?=$email ?>">

    <input type="hidden" name="index" id="index" value="<?=$key?>">

    <button type="submit">Atualizar</button>
  </form>
</body>
</html>