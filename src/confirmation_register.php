<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Tela de Login</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <div id="login-box">
            <div id="login-box-interno">
                <div id="login-box-label">
                    Seu cadastro foi confirmado!!
                </div>
                <div id="botoes">
                    <input type="submit" value="Sair" onClick="Nova()"/>
                </div>
            </div>
        </div>
    </body>
</html>
<script type="text/javascript">
    function Nova() {
        location.href="index.php"
    }
</script>