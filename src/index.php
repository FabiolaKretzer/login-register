<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Tela de Login</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="ajax/jquery-3.4.1.min.js"></script>
        <script src="js/register.js"></script>
        <script src="js/form_login.js"></script>
    </head>
    <body>
        <?php session_start(); ?>
        <div id="login-box">
            <div id="login-box-interno">
                <div id="login-box-label">
                    Login
                </div>
                <form id="form-login" action="login.php" method="POST">
                    <div class="input-div" id="input-email">
                        <label for="email_login">E-mail</label>
                        <input name="email" type="text"/>
                    </div>
                    <div class="input-div" id="input-senha">
                        <label for="senha_login">Senha</label>
                        <input name="senha" type="password"/>
                    </div>
                    <div class="input-div" id="input-message">
                        <?php //if(isset($_SESSION['message'])): ?>
                            <?php //echo $_SESSION['message']; ?>
                        <?php //endif; ?>
                        <?php //$_SESSION['message'] = ''; ?>
                    </div>
                    <div id="botoes">
                        <input type="submit" value="Logar"/>
                        
                        <div id="paracadastro">
                                Ainda não tem conta?
                                <a href="register.php">Cadastre-se</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>


