<?php
    require_once '../vendor/autoload.php';

    //conecto a la base de datos de empresa
    $conexion = new mysqli("localhost","root","","empresa");
    $conexion->query("SET NAMES 'utf8'");

    //realizo la consulta que me cuenta el numero de usuarios que hay en total
    $consulta = $conexion->query("SELECT COUNT(codigo) as 'total' FROM usuarios");
    $numero_elementos = $consulta->fetch_object()->total;
    $numero_elementos_pagina = 2;
    //paginacion con dos elementos de cada pagina
    $pagination = new Zebra_Pagination();

    //numero total de elementos a paginar
    $pagination->records($numero_elementos);

    //indico el numero de elementos de la pagina que deseo

    $pagination->records_per_page($numero_elementos_pagina);

    $page = $pagination->get_page();//consigo la pagina de la url

    $empieza_limit = (($page-1)*$numero_elementos_pagina);//determino donde empieza
    //establezco los limites de consulta
    $sql = "SELECT * FROM usuarios LIMIT $empieza_limit, $numero_elementos_pagina";
    $usuarios = $conexion->query(($sql));

    //incluyo la hoja de estilos de esta libreria
    //para maquetar despues los links a las páginas
    echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css"';

    //muestro la informacion obtenida
    while($usuario = $usuarios->fetch_object()){
        echo "<h2>Usuario: {$usuario->nombre}</h2>";
        echo "<h3>Rol: {$usuario->rol}</h3>";
    }

    $paginatio->render(); //mustro los links de las distintas páginas
?>