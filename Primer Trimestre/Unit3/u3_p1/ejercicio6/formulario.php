<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {  	
	
if(!empty($_POST['nombre']) and (!empty($_POST['nota']))and
    (!empty($_POST['nombresalumnos'])) and
    (!empty($_POST['notasalumnos']))){
    $nombre = $_POST['nombre'];
    $nota = $_POST['nota'];
    //Notas y alumnos: ahora no son arrays
    $array1 = $_POST['notasalumnos'];
    $array2 = $_POST['nombresalumnos'];
         
    //Convertirlos en array
    $b = array_map('intval', explode(',', $array1));
    $a= explode(",", $array2);
    $c = array_combine($a, $b);
    
    // Añadir el nuevo elemento
    $c[$nombre]=$nota;
    
  
    $alumnos = [];
    foreach ($c as $clave => $valor) {
       
          $alumno = array(
              'nombre' => $clave,
              'nota' => $valor
          );
          //OJO no debemos insertar si esa clave ya existe
          array_push($alumnos,$alumno);
           
         }
   
    //imprimir la tabla
    $s = '<table border="1">';
    $s .= '<tr>';
    $s .= '<td>NOMBRE</td>';
    $s .= '<td>NOTA</td>';
    $s .= '</tr>';
    foreach ( $alumnos as $r ) {
        $s .= '<tr>';
        foreach ( $r as $v ) {
                $s .= '<td>'.$v.'</td>';
        }
        $s .= '</tr>';
    }
    $s .= '</table>';
    echo $s;
    // nuevos valores en las columnas del array para procesar en el formulario
    $nombres_col = array_column($alumnos, 'nombre');
        
    $notas_col = array_column($alumnos, 'nota');
 
}	
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Alumnos</title>		
		<meta charset = "UTF-8">
	</head>
	<body>			
		<h3> Nuevo</h3>
		<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" value = "<?php if(isset($nombre))echo $nombre;?>"/>

                    <label for="nota">Nota</label>
                    <input type="number" name="nota" value = "<?php if(isset($nota))echo $nota;?>"/>

                    <input type="text" readonly name="nombresalumnos" value="<?php echo implode(",", $nombres_col); ?>" style="visibility:hidden">

                    <input type="text" readonly name="notasalumnos" value="<?php echo implode(",", $notas_col); ?>" style="visibility:hidden">

                    <input type="submit" value="Añadir">
		</form>
	</body>
</html>
