<?php
// Conexão com banco de dados
$conexao = mysqli_connect('localhost', 'root', '', 'gettron');

// Verifica conexão
if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}
