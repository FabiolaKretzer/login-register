<?php
include("connection.php");

session_start();

$_SESSION['message'] = '';
if(trim($_POST['nome']) == "" || trim($_POST['email']) == "" || trim($_POST['in_sel']) == "" || trim($_POST['senha']) == ""):
    $_SESSION['message'] = 'Preencha todos os campos!';
    header("Location: register.php");
    exit();
endif;

if (strlen(trim($_POST['senha'])) < 6):
    $_SESSION['message'] = 'Sua senha é muito pequena!';
    header("Location: register.php");
    exit();
endif;


$parte = substr(trim($_POST['email']), -10);
if ($parte != '@gmail.com') :
    $_SESSION['message'] = 'O cadastro deve ser feito com a conta Gmail!';
    header("Location: register.php");
    exit();
endif;


$nome = mysqli_real_escape_string($mysqli, trim($_POST['nome']));
$email = mysqli_real_escape_string($mysqli, trim($_POST['email']));
$senha = mysqli_real_escape_string($mysqli, trim(md5($_POST['senha'])));

$query = "SELECT COUNT(*) AS total FROM conta WHERE email = '$email'";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();

if ($row['total'] == 1) :
    //$_SESSION['status'] = true;
    $_SESSION['message'] = 'Usuário já existe!';
    header("Location: register.php");
    exit();
endif;

$txt_sel = $_POST['in_sel'];
$query = "SELECT id AS number FROM tipo_pacote WHERE nome_tipo = '$txt_sel'";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();
$tipo = intval($row['number']);

if($row['number'] == NULL) :
    header("Location: register.php");
endif;

$query = "INSERT INTO conta (nome, email, senha, id_pacote) VALUES ('$nome', '$email', '$senha', '$tipo')";
$type = $mysqli->query($query);


if($type === TRUE) :
    //$_SESSION['status'] = false;
    header("Location: confirmation_register.php");
endif;


$mysqli->close();

?>
