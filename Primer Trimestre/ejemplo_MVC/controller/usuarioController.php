<?php
class UsuarioController{
    public function mostrarTodos(){
        require_once 'model/usuario.php';

        $usuario = new Usuario();

    $todos_los_usuarios = $usuario->conseguirTodos(/*'usuarios*/);

        require_once 'view/usuarios/mostrar_todos.php';
    }

    public function crear(){

    }
}
?>