<?php
include("config.php");

if(!isset($_SESSION['usuario'])){
header("Location: cadastro.php");
exit();
}
?>

<link rel="stylesheet" href="style.css">

<div class="overlay">
<div class="box">

<h1>🔥 Bem-vindo Guerreiro Z 🔥</h1>

<p><?php echo $_SESSION['usuario']; ?></p>

<img src="https://rollingstone.com.br/wp-content/uploads/legacy/2015/img-1031584-dragon-ball.jpg" width="200">

<br><br>

<form action="logout.php" method="POST">

<button class="sair">Sair</button>

</form>

</div>
</div>