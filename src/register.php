<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Tela de Cadastro</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="ajax/jquery-3.4.1.min.js"></script>
        <script src="js/form_register.js"></script>
    </head>
    <body>  
        <?php include("connection.php"); ?> 
        <?php session_start(); ?> 
        <div id="login-box">
            <div id="login-box-interno">
                <div id="login-box-label">
                    Cadastro
                </div>
                <form id="form-register" method="POST" action="val_form_register.php">
                    <div class="input-div" id="input-nome">
                        <label for="nome_cad">Nome do Usuário</label>
                        <input id="nome" name="nome" type="text" value=""/>
                    </div>
                    <div class="input-div" id="input-email">
                        <label for="email_cad">E-mail</label>
                        <input id="email" name="email" type="text"/>
                    </div>    
        
                    <div class="input-div" id="input-tipo">
                        Tipo
                        <select id="in_sel" name="in_sel" class="form-control">
                            <option></option> 
                            <?php
                                $sql = "SELECT nome_tipo FROM tipo_pacote ORDER BY nome_tipo ASC";
                                $result = $mysqli->query($sql);
                            ?>                      
                            <?php if ($result->num_rows > 0): ?>
                                <?php while($row = $result->fetch_assoc()) : ?>
                                    <option> <?= $row["nome_tipo"]; ?> </option>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class="input-div" id="input-senha">
                        <label for="senha_cad">Senha</label>
                        <input id ="senha" name="senha" type="password"/>
                    </div>
                    <div class="input-div" id="input-message">
                        <?php //echo $_SESSION['message']; ?>
                        <?php //$_SESSION['message'] = ''; ?>
                    </div>
                    <div id="botoes">  
                        <input id="button" type="submit" value="Cadastrar"/>
                        <div id="paracadastro">
                            Já tem conta?
                            <a href="index.php"> Ir para Login </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>