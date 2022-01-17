<?php
session_start();
$nombre_categoria = $_GET['id'];
include('conexion.php');

function conseguirCategorias($conexion)
{
    $resultado = mysqli_query($conexion, 'SELECT * FROM categorias');
    return $resultado;
}
function conseguirEntradas($conexion, $nombre_categoria)
{

    $entradas = mysqli_query($conexion, 'SELECT * FROM entradas where categoria_id = '.$nombre_categoria.'');
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
                    <li><a href="usuarioLogueado.php">INICIO</a></li>
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
        <section class="seccion">
            <?php
            $entradas = conseguirEntradas($conexion, $nombre_categoria);
            if (!empty($entradas)) :
                while ($entrada = mysqli_fetch_assoc($entradas)) :
            ?>
                    <article class="entrada">
                        <a href="entrada.php?id=<?= $entrada['id'] ?>">
                            <h2><?= $entrada['titulo'] ?></h2>
                            <span class="fecha"><?= $entrada['categoria_id'] . ' | ' . $entrada['fecha'] ?></span>
                            <p>
                                <?= substr($entrada['descripcion'], 0, 180) . "..." ?>
                            </p>
                        </a>
                    </article>
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