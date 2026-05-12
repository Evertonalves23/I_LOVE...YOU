<?php
include("config.php");

if(isset($_POST['cadastrar'])){

$email = $_POST['email'];
$cpf = $_POST['cpf'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios(email,cpf,senha)
VALUES('$email','$cpf','$senha')";

if($conn->query($sql)){

$_SESSION['usuario'] = $email;

header("Location: inicio.php");
exit();

}else{
$erro = "Email já cadastrado";
}
}
?>

<link rel="stylesheet" href="style.css">

<div class="overlay">
<div class="box">

<h1>🐉 Cadastro</h1>

<?php if(isset($erro)) echo $erro; ?>

<form method="POST">

<input type="email" name="email" placeholder="Email" required>

<input type="text" name="cpf" placeholder="CPF" required>

<input type="password" name="senha" placeholder="Senha" required>

<button name="cadastrar">Cadastrar</button>

</form>

<br>

<a href="login.php">Já tenho conta</a>

</div>
</div>