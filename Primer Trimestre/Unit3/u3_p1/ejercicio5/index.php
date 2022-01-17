
<?php
/*Se pide un formulario que:
solicite los siguientes datos: nombre, teléfono y email .
al pulsar el botón enviar muestre la siguiente página.
“¡Buenos días, nombre!
Te voy a enviar spam a correo y te llamaré de madrugada a telefono.
Enviado desde un iPhone”
 */
    if ($_POST['nombre'] and $_POST['telefono'] and $_POST['email']){
        echo "¡Buenos días, ".$_POST['nombre']."!<br>";
        echo "Te voy a enviar spam a ".$_POST['email']." y te llamaré de madrugada a ".$_POST['telefono'].".<br>";
        echo "Enviado desde un iPhone.";
    }else{
        echo "Tienes que rellenar todos los campos";
    }
?>