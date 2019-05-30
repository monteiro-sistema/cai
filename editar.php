<?php
session_start();
include_once 'includes/header.inc.php'; 
include_once 'includes/menu.inc.php';   
?>

<div class="row container">
    <div class="col s12">
        <h5 class="light">Edição de Registros</h5>
    </div>
</div>

<?php
    include_once 'banco_de_dados/conexao.php';
    
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $_SESSION['id'] = $id;
    $querySelect = $link->query("select * from cadastro where id='$id'");
while ($registros = $querySelect->fetch_assoc()):
    $matricula = $registros['matricula'];
    $nome = $registros['nome'];
    $pasta = $registros['pasta'];
    $gaveta = $registros['gaveta'];
endwhile;
?>

<!--FORMULÁRIO DE CADASTRO-->
        <div class="row container">
            <p$nbsp;></p>
            <form action="banco_de_dados/update.php" method="post" class="col s12">
                <fieldset class="formulario" style="padding: 15px">
                    <legend><img src="imagens/avatar-2.png" alt="[imagem]" width="100"></legend>
                    <h5 class="light center">Alterar Cadastro</h5>
                    
                                        
                    <!-- CAMPO MATRICULA-->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">keyboard_hide</i>
                        <input type="text" name="matricula" id="matricula" maxlength="40" required autofocus>
                        <label for="matricula">Matricula do Aluno</label>
                    </div>

                    <!-- CAMPO NOME-->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input type="text" name="nome" id="nome" maxlength="40" required autofocus>
                        <label for="nome">Nome do Aluno</label>
                    </div>
                    
                    <!-- CAMPO PASTA-->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">folder</i>
                        <input type="text" name="pasta" id="pasta" maxlength="50" required>
                        <label for="pasta">Pasta do Aluno</label>
                    </div>
                    
                    <!-- CAMPO GAVETA-->
                    <div class="input-field col s12">
                        <i class="material-icons prefix">featured_play_list</i>
                        <input type="text" name="gaveta" id="gaveta" maxlength="15" required>
                        <label for="gaveta">Gaveta do Aluno</label>
                    </div>
                    
                    <!-- BOTOES-->
                    <div class="input-field col s12">
                        <input type="submit" value="alterar" class="btn blue">
                        <a href="consultas.php" class="btn red">cancelar</a>
                    </div>
                
                </fieldset>                   
            </form>
        </div>



<?php include_once 'includes/footer.inc.php' ?>