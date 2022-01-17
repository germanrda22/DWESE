<?php 
       $alumnos = array(
             array(
              'nombre' => 'John',
              'nota' => 2
             ),
             array(
              'nombre' => 'Sally',
              'nota' => 3
             )
        );
                
        $nombres_col = array_column($alumnos, 'nombre');
        
        $notas_col = array_column($alumnos, 'nota');
 ?>
 
