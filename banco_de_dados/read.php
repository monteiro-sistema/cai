<?php

include_once 'conexao.php';

$querySelect = $link->query("select * from tb_alunos");
while ($registros = $querySelect->fetch_assoc()):
    $id = $registros['id'];
    $matricula = $registros['matricula'];
    $nome = $registros['nome'];
    $pasta = $registros['pasta'];
    $gaveta = $registros['gaveta'];
    
    echo "<tr>";
    echo "<td>$id</td><td>$matricula</td><td>$nome</td><td>$pasta</td><td>$gaveta</td>";
    echo "<td><a href='editar.php?id=$id'><i class='material-icons'>edit</i></a></td>";
    echo "<td><a href='banco_de_dados/delete.php?id=$id'><i class='material-icons'>delete</i></a></td>";
    echo "</tr>";
    
endwhile;
