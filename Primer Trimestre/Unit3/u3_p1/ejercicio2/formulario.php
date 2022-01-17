<?php

if ($_POST['usuario']=="usuario" and $_POST['clave']=="1234"){
    header("location:bienvenida.html");
}else{
    header("Location:error.html");
}
