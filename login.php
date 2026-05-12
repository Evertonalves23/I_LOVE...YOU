<?php
include("config.php");

if(isset($_POST['login'])){

$email = $_POST['email'];
$senha = $_POST['senha'];

$res = $conn->query("SELECT * FROM usuarios WHERE email='$email'");

$user = $res->fetch_assoc();

if($user && password_verify($senha, $user['senha'])){

$_SESSION['usuario'] = $email;

header("Location: inicio.php");
exit();

}else{
$erro = "Email ou senha inválidos";
}
}
?>

<link rel="stylesheet" href="style.css">

<div class="overlay">
<div class="box">

<h1>🔥 Login</h1>

<?php if(isset($erro)) echo $erro; ?>

<form method="POST">

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="senha" placeholder="Senha" required>

<button name="login">Entrar</button>

</form>

<br>

<a href="cadastro.php">Criar conta</a>

<br><br>

<a href="esqueci.php">Esqueci minha senha</a>

</div>
</div>