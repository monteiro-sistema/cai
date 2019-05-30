<?php
include_once 'conexao.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$querySelect = $link->query("delete from tb_alunos where id='$id'");

if(mysqli_affected_rows($link) >0):
header("Location:../consultas.php");
endif;

