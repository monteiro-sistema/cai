<?php
session_start();
include_once 'conexao.php';
$matricula     = filter_input(INPUT_POST,'matricula', FILTER_SANITIZE_NUMBER_INT);
$nome          = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$pasta    = filter_input(INPUT_POST,'pasta', FILTER_SANITIZE_SPECIAL_CHARS);
$gaveta = filter_input(INPUT_POST,'gaveta', FILTER_SANITIZE_SPECIAL_CHARS);

$querySelect = $link->query("select matricula from tb_alunos");
$array_matriculas = [];

while ($matriculas = $querySelect->fetch_assoc()):
    $matriculas_existentes = $matriculas['matricula'];
    array_push($array_matriculas, $matriculas_existentes);
endwhile;

if(in_array($matricula, $array_matriculas)):
    $_SESSION['msg'] = "<p class='center red-text'>".'Matricula já cadastrado, insira outra Matricula por favor'."</p>";
    header("Location:../");
    else:
        $queryInsert = $link->query("insert into tb_alunos values(default '$matricula', '$nome','$pasta','$gaveta')");
        $affected_rows = mysqli_affected_rows($link);
        
        if($affected_rows > 0):
            $_SESSION['msg'] = "<p class='center green-text'>".'Cadastro efetuado com sucesso!'."<br>";
            header("Location:../");
        endif;
endif;