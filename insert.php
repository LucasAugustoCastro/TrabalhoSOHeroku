<?php

$data = file_get_contents('data.json');

// decode json
$json_arr = json_decode($data, true);

$lastIndex = count($json_arr) - 1;

// add data

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];

$json_arr[] = array('codigo'=>$json_arr[$lastIndex]['codigo'] + 1, 'nome'=>$nome, 'sobrenome'=>$sobrenome, 'email'=>$email);
// encode json and save to file
file_put_contents('data.json', json_encode($json_arr));

header("Location: index.php");
?>
