<?php
session_start();

require_once 'conexion.php';

function conseguirCategorias($conexion){
    $resultado = mysqli_query($conexion, 'SELECT * FROM categorias');
    return $resultado;
}
function conseguirEntradas($conexion){
    $entradas = mysqli_query($conexion, 'SELECT * FROM entradas');
    return $entradas;
}

?>

<!doctype html>
<html lang="es">
<head>
  <title>Inicio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="Estilos.css">
</head>
<body>
    <div class="agrupar">
    <header class="cabecera">
        <h1 class="h1cabecera">Mi blog</h1>
    </header>   
    <nav class="menu">
        <div id="header">
        <ul class="nav">
            <li><a href="index.php">Inicio</a></li>
                <?php
                $categorias = conseguirCategorias($conexion);
                if(!empty($categorias)):
                        while($categoria = mysqli_fetch_assoc($categorias)):
                ?>

                <li>
                    <a href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre']?></a>
                </li>

                <?php
                    endwhile;
                endif;
                ?>
        </ul>
        </div>
        </nav>

 <section class="seccion">
            <?php
            $entradas = conseguirEntradas($conexion);
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
         <footer>
             <p>Comentarios (10)</p>
         </footer>
 </section>

 <aside class="columna">
    <form id="formentrada">
        <?php
            echo "<strong>Bienvenid@ ".$_SESSION['email']."</strong>";
        ?>
        <br>
        <br>
        <button onclick="location.href='crear_entrada.php'" id="entrada" type="button">Crear entradas</button>
        <br>
        <button onclick="location.href='crear_categoria.php'" id="categoria" type="button">Crear categoria</button>
        <br>
        <button onclick="location.href='datos_usuario.php'"type="button" id="misdatos">Mis datos</button>
        <br>
        <button onclick="location.href='index.php?action=cerrarsesion'"type="button" id="cerrarsesion">Cerrar Sesion</button>
        <br>
        <button onclick="location.href='editar_entradas.php'"type="button" id="editarentrada">Editar entradas</button>
        <br>
        <button onclick="location.href='borrar.php'"type="button" id="borrarentrada">Borrar entradas</button>
    </form>
 </aside>

 <footer class="pie">
    Derechos reservados 2021-2022
 </footer>

</div>
</body>
</html>