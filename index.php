<?php session_start()?>
<?php include_once 'includes/header.inc.php' ?>
    
        <?php include_once 'includes/menu.inc.php' ?>

                     
        <!--FORMULÁRIO DE CADASTRO-->
        <div class="row container">
            <p$nbsp;></p>
            <form action="banco_de_dados/create.php" method="post" class="col s12">
                <fieldset class="formulario" style="padding: 15px">
                    <legend><img src="imagens/avatar-2.png" alt="[imagem]" width="100"></legend>
                    <h5 class="light center">Cadastro de Alunos</h5>
                    
                    <?php
                        if (isset($_SESSION['msg'])):
                            echo $_SESSION['msg'];
                            session_unset();
                        endif;
                    ?>
                    
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
                        <input type="submit" value="cadastrar" class="btn blue">
                        <input type="reset" value="limpar" class="btn red">
                    </div>
                
                </fieldset>                   
            </form>
        </div>
        <?php include_once 'includes/footer.inc.php' ?>