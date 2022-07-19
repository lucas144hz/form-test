<?php
include("conect.php");
$dados = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS); 
$numero_do_boi = $_POST['numero_do_boi'];

$peso_do_boi = $_POST['peso_do_boi'];

$data_da_pesagem = $_POST['data_da_pesagem'];

$data_de_venda = $_POST['data_de_venda'];

$query = "INSERT INTO public.venda(
	numero_do_boi, peso_do_boi, data_da_pesagem, data_de_venda)
	VALUES ('$numero_do_boi', '$peso_do_boi', '$data_da_pesagem', '$data_de_venda')";

$estado = $conexao->query($query);
header('Location:index.html');


?>
