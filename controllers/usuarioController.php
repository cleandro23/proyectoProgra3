<?php

require_once 'models/usuario.php';
class usuarioController{
    public function index(){
        echo "Controlador usuarios, accion index";
    }

    public function registro(){
       require_once 'views/usuario/registro.php';
    }

    public function save(){
       if(isset($_POST)){

        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
        $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
        $email = isset($_POST['email']) ? $_POST['email'] : false;
        $password = isset($_POST['password']) ? $_POST['password'] : false;

        if ($nombre && $apellidos && $email && $password){
        $usuario = new Usuario();
        $usuario->setNombre($nombre);
        $usuario->setApellidos($apellidos);
        $usuario->setEmail($apellidos);
        $usuario->setPassword($apellidos);
        
        $save = $usuario->save();
        if($save){
            $_SESSION['register'] = "complete";
        }else{
            $_SESSION['register'] = "failded";
        } }
       }else{
        $_SESSION['register'] = "failded";
        header("location:".base_url.'usuario/registro');
    }
    }
}