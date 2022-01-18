<?php

class ControladorFrontal{
    
    public function iniciar(){

        function show_error(){
            $error = new errorController();
            $error->index();
        }
        //Con el objetivo de no repetir el nombre de las clases, nuestros controladores
        //terminarán todos en Controller.
        //Por ejemplo la clase controladora Categoria, será CategoriaController
        
        //Formamos el nombre del Controlador o en su defecto, tomamos que es controller_default
        //que nosotros definiremos previamente. En este caso será ProductoController
        if(isset($_GET['controller'])){
            $nombre_controlador=$_GET['controller'].'Controller';
        
        //lo mismo sucede con las acciones
        
        }elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
            $nombre_controlador= controller_default;
        
        }else{
            show_error();
            exit();
        }
        
        //Si todo va bien creamos una instancia del controlador y llamamos a la acción
        
        if(class_exists($nombre_controlador)){
            $controlador = new $nombre_controlador;
            if(isset($_GET['action']) && method_exists($controlador, $_GET['action']) ){
                $action = $_GET['action'];
                $controlador->$action();
            }elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
                $action_default = action_default;
                $controlador->$action_default();
            }else{
                show_error();
            }
        
        }else{
            show_error();
        }
    }
}

?>