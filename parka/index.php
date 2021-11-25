<?php
include('db.php');
?>
<html>
<title>login</title>
<link rel="stylesheet" href="style.css">
<body>
    <form class="formulario" action="consultar.php" method="POST">
        <h1>iniciar secion</h1>
        <div class="contendor">
                <input name="email" class="loa" type="email" placeholder="coreo electronico">
                <br>
                <input name="contraseña" class="loa" type="password" placeholder="contraseña">
                <br>
               <button name="button" class="btn" type="submit">iniciar</button>
               <p class="crear"> si no tienes cuenta creala ahora<a href="registrar.php">crear cuentas</a></p>
        </div>
    </form>
</body>
</html>