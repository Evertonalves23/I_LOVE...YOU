<?php
include("config.php");

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['enviar'])){

$email = $_POST['email'];

$token = md5(rand());

$conn->query("UPDATE usuarios SET token='$token' WHERE email='$email'");

$link = "http://localhost/cadastro_app/resetar.php?token=$token";

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;

$mail->Username = '@gmail.com';
$mail->Password = 'ssqjiqkkdlvjhbvd';

$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('Dragon Ball App');

$mail->addAddress($email);

$mail->isHTML(true);

$mail->Subject = 'Recuperação de senha';

$mail->Body = "
<h1>🔥 Dragon Ball App 🔥</h1>

<p>Clique abaixo:</p>

<a href='$link'
style='
background:orange;
padding:10px 20px;
color:white;
text-decoration:none;
border-radius:8px;
'>
Resetar Senha
</a>
";

$mail->send();

$msg = "Email enviado 📩";
}
?>

<link rel="stylesheet" href="style.css">

<div class="overlay">
<div class="box">

<h1>📩 Recuperar</h1>

<?php if(isset($msg)) echo $msg; ?>

<form method="POST">

<input type="email" name="email" placeholder="Seu email" required>

<button name="enviar">Enviar Email</button>

</form>

</div>
</div>