<?php

// read file
$data = file_get_contents('data.json');

// decode json to array
$json_arr = json_decode($data, true);
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$index = $_POST['index'];

$json_arr[$index]['nome'] = $nome;
$json_arr[$index]['sobrenome'] = $sobrenome ;
$json_arr[$index]['email'] = $email ;


// encode array to json and save to file
file_put_contents('data.json', json_encode($json_arr));

header("Location: index.php");
?>