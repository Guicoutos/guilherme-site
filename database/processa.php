<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";
//echo "Mensagem: $mensagem <br>";

$result_inbox = "INSERT INTO inbox (nome, email, mensagem, data) VALUES('$nome', '$email', '$mensagem' NOW())";
$resultado_inbox = mysqli_query($conn, $result_inbox);

if (mysqli_insert_id($conn)) {
    header("Location: index.html");
} else {
    header("Location: index.html");
}