<?php
include("config.php");

$token = $_GET['token'];

if(isset($_POST['resetar'])){

$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$conn->query("UPDATE usuarios SET senha='$senha', token=NULL WHERE token='$token'");

header("Location: login.php");
exit();
}
?>

<link rel="stylesheet" href="style.css">

<div class="overlay">
<div class="box">

<h1>🔐 Nova Senha</h1>

<form method="POST">

<input type="password" name="senha" placeholder="Nova senha" required>

<button name="resetar">Salvar</button>

</form>

</div>
</div>