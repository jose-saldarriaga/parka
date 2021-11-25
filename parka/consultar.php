<?php
include('db.php');

if  (isset($_POST['button'])) {
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    echo $email;
    echo $contraseña;
    $query = "SELECT * FROM usuarios WHERE email = '$email' AND contraseña = '$contraseña' ";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        header('Location: perfil.html');
        echo('iniciando sesion');
    }else{
        $_SESSION['message'] = "Error: Usuario y/o contraseña errados";
        header('Location: index.php');
    }
  }
?>