<h2>Login</h2>
<?php if(isset($_GET["error"])) echo "Correo o contraseña incorrectos"; ?>
<form method="POST" action="validar.php">
Correo: <input name="correo"><br>
Clave: <input type="password" name="clave"><br>
<button>Ingresar</button>
</form>