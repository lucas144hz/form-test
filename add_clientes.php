<?php
include_once("conect.php");
$dados = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

$nome_cliente = $_POST['nome_cliente'];
$telefone_cliente = $_POST['telefone_cliente'];
$endereco_cliente = $_POST['endereco_cliente'];
$numero_endereco_cliente = $_POST['numero_endereco_cliente'];
$complemento_endereco_cliente = $_POST['complemento_endereco_cliente'];
$cep_cliente = $_POST['cep_cliente'];
$estado_cliente = $_POST['estado_cliente'];
$cidade_cliente = $_POST['cidade_cliente'];

$query = "INSERT INTO public.clientes(
	nome_cliente, telefone_cliente, endereco_cliente, numero_endereco_cliente, complemento_endereco_cliente, cep_cliente, estado_cliente, cidade_cliente)
	VALUES ('$nome_cliente', $telefone_cliente, '$endereco_cliente', '$numero_endereco_cliente', '$complemento_endereco_cliente', '$cep_cliente', '$estado_cliente', '$cidade_cliente');";


$estado = $conexao->query($query);
header('Location:cadastro_vendas.php');
