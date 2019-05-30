<?php
session_start();
include_once 'conexao.php';
$id = $_SESSION['id'];

$matricula     = filter_input(INPUT_POST,'matricula', FILTER_SANITIZE_NUMBER_INT);
$nome          = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$pasta    = filter_input(INPUT_POST,'pasta', FILTER_SANITIZE_SPECIAL_CHARS);
$gaveta = filter_input(INPUT_POST,'gaveta', FILTER_SANITIZE_SPECIAL_CHARS);

$queryUpdate = $link->query("update tb_clientes set matricula='$matricula' nome='$nome', pasta='$pasta', gaveta='$gaveta' where id='$id'");
$affected_rows = mysqli_affected_rows($link);
if($affected_rows > 0):
    header("Location:../consultas.php");
endif;