<!DOCTYPE html >
<html>
    <head> 
        <title>Formulario tri&aacute;ngulo</title>
    </head>
    <body>
        <?php
            $base = $_REQUEST["base"];
            $altura = $_REQUEST ["altura"];
            $AREA = ($base * $altura) / 2;
            echo "El área del triángulo es ". $AREA. ".";
          ?>
        <form method="REQUEST">
            <fieldset>
                <legend class="datos">Datos a calcular</legend>
                    <label>Base:<input value="<?php if (isset($base))echo $base;?>" type="number" name="base"/></label><br/>
                    <label>Altura:<input value="<?php if (isset($altura))echo $altura;?>" type="number" name="altura"/></label><br/>
                    
                <input type="submit" value="Aceptar" />
            </fieldset>
        </form>
    </body>
</html>