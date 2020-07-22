<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Tela de Login</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <?php session_start();?>
        <?php include("check_login.php")?>
        <div id="login-box">
            <div id="login-box-interno">
                <div id="login-box-label">
                    Você está logado!! 
                </div>
                <form action="logout.php" method="POST">
                    <div class="input-div" id="input-logar">
                        Você é o usuário <?= $_SESSION['nome']?> e possui o pacote <?= $_SESSION['tipo']?>!!
                    </div>
                    <div id="botoes">
                        <input type="submit" value="Sair" onClick="Nova()"/>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
<script type="text/javascript">
    function Nova() {
        location.href="index.php"
    }
</script>