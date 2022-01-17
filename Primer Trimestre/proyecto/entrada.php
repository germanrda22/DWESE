<?php
session_start();
$id_entrada = $_GET['id']; 
include('conexion.php');

function conseguirCategorias($conexion)
{
    $resultado = mysqli_query($conexion, 'SELECT * FROM categorias');
    return $resultado;
}
function conseguirEntradas($conexion, $id_entrada)
{

    $entradas = mysqli_query($conexion, 'SELECT * FROM entradas WHERE id = ' . $id_entrada . '');
    return $entradas;
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Este texto es el título del documento</title>
    <link rel="stylesheet" href="estilo_logueado.css">
</head>

<body>
    <div class="agrupar">
        <header class="cabecera">
        </header>
        <nav class="menu">
            <div id="header">
                <ul class="nav">
                    <li><a href="logueado.php">INICIO</a></li>
                    <?php
                    $categorias = conseguirCategorias($conexion);
                    if (!empty($categorias)) :
                        while ($categoria = mysqli_fetch_assoc($categorias)) :
                    ?>

                            <li>
                                <a href="categoria.php?id=<?= $categoria['id'] ?>"><?= $categoria['nombre'] ?></a>
                            </li>

                    <?php
                        endwhile;
                    endif;
                    ?>
                </ul>
            </div>
        </nav>
        <br>
        <br>
        <br>
        <section class="seccion_entrada">
            <?php
            $entradas = conseguirEntradas($conexion, $id_entrada);
            if (!empty($entradas)) :
                while ($entrada = mysqli_fetch_assoc($entradas)) :
            ?>
                    <p><?= $entrada['titulo'] ?>
                        <br>
                        <?= $entrada['descripcion'] ?>
                        <br>
                        <?= $entrada['fecha'] ?>
                    </p>
            <?php
                endwhile;
            endif;
            ?>
        </section>

        <footer class="pie">
            Derechos Reservados 2010-2018
        </footer>
    </div>
</body>

</html>