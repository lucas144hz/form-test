<?php

$dados = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS); 
var_dump($dados);


?>