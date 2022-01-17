<?php
    require_once('conexion.php');

    function conseguirCategorias($conexion){
        $resultado = mysqli_query($conexion, 'SELECT * FROM categorias');
        return $resultado;
    }
    
    function conseguirEntradas($conexion){
        $entradas = mysqli_query($conexion, 'SELECT * FROM entradas');
        return $entradas;
    }

    if(isset($_GET['action'])){
        if($_GET['action']){
            $_SERVER = null;
        }
    }else{
        $_GET['action'] = '';
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
    <form id="search">
        <legend>Buscar</legend>
        <br>
        <input type="text" placeholder="Buscar" autofocus>
        <button>
            <span class="state">Buscar</span>
        </button>
    </form>

    <form id="formulario1" action="loguin.php" method="post">
        <br>
        <legend>Iniciar sesión</legend>
        <br>
            <label for="email">E-mail:</label>
            <input type="text" name="email" size="20">
            <br>
            <br>
            <label for="contraseña">Contraseña:</label>
            <input type="password" name="contraseña" size="20">
            <br>
            <br>
            <input type="submit" value="Enviar" id="enviar">
            <input type="reset" value="Borrar" id="borrar">
    </form>
    <form id="formulario2" action="registro.php" method="post"> 
        <br>
        <legend>Registrar usuario</legend>
        <br>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" size="20">
            <!--<span class="error">* <?php echo $_SESSION[$nombreErr];?></span>-->
            <br>
            <br>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" size="20">
            <!--<span class="error">* <?php echo $apellidosErr;?></span>-->
            <br>
            <br>
            <label for="email">E-mail:</label>
            <input type="text" name="email" size="20">
            <!--<span class="error">* <?php echo $emailErr;?></span>-->
            <br>
            <br>
            <label for="contraseña">Contraseña:</label>
            <input type="password" name="contraseña" size="20">
            <!--<span class="error">* <?php echo $contraseñaErr;?></span>-->
            <br>
            <br>
            <input type="submit" value="Registrar" id="enviar">
            <input type="reset" value="Borrar" id="borrar">
    </form>
 </aside>

 <footer class="pie">
    Derechos reservados 2021-2022
 </footer>

</div>
</body>
</html>