<?php

session_start();

include("connection.php");

$html = '';
if(trim($_POST['email']) == "" || trim($_POST['senha']) == ""):
    $html = 'Preencha todos os campos!';
    print_r($html);
    //header("Location: index.php");
    exit();
endif;

$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);

$query = "SELECT nome, email, id_pacote FROM conta WHERE email = '$email' AND senha = md5('$senha')";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();
$tipo = intval($row['id_pacote']);

$query_tipo = "SELECT nome_tipo FROM tipo_pacote WHERE id = '$tipo'";
$result_tipo = $mysqli->query($query_tipo);
$row_tipo = $result_tipo->fetch_assoc();

//var_dump(intval($result->num_rows));

if (intval($result->num_rows) == 1):
    var_dump(intval($result->num_rows));
    $_SESSION['nome'] = $row['nome'];
    $_SESSION['email'] = $email;
    $_SESSION['tipo'] = $row_tipo['nome_tipo'];
    header("Location: confirmation_login.php");
    //exit();
else:
    $html = 'Você não possui cadastro!';
    print_r($html);
    //header("Location: index.php");
    exit();
endif;

?>