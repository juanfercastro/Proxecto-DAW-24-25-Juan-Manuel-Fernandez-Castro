<?php
include_once("globals.php");
include_once("Controller.php");
include_once(MODEL_PATH."UserModel.php");

class UserController extends Controller{
    public function __construct(){
        parent::__construct();
    }

    public function loginForm(){
        $this->view->show('login');
    }

    public function signForm(){
        $this->view->show('sign');
    }

    public function addUser(){
        $nombre = empty($_POST['nombre'])? null: $_POST['nombre'];
        $apellidos = empty($_POST['apellidos'])? null: $_POST['apellidos'];
        $mail = empty($_POST['mail'])?null:$_POST['mail'];
        $tipo = empty($_POST['tipo_user'])?null:$_POST['tipo_user'];
        $pass = empty($_POST['pass'])?null:$_POST['pass'];
        $pass2 = empty($_POST['pass2'])?null:$_POST['pass2'];

        $errores = '';
        if(!isset($nombre)){
            $errores .= 'El nombre es obligatorio,';
        }elseif(strlen($nombre)>150){
            $errores .= 'Nombre es demasiado extenso,';
        }
        
        if(isset($apellidos)){
            if(strlen($apellidos)>100){
                $errores .= 'Apellido demasiado extenso,';
            }
        }

        if(!isset($mail)){
            $errores .= 'El correo electrónico es obligatorio,';
        }elseif(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
            $errores .= 'Formato del correo electrónico incorrecto,';
        }else{
            $verificarCorreo = UserModel::getUser($mail);
            if(isset($verificarCorreo)){
                $errores .= 'Ya existe una cuenta asignada a ese correo,';
            }
        }
        
        if(!isset($tipo)){
            $errores .= 'Debe elegir su tipo de usuario,';
        }
        
        if(!isset($pass) || !isset($pass2)){
            $errores .= 'Deben rellenarse ambos campos de contraseña,';
        }elseif($pass != $pass2){
            $errores .= 'Las contraseñas no coinciden,';
        }elseif(strlen($pass)>30){
            $errores .= 'Contraseña demasiado extensa,';
        }


        $data = [];
        if(empty($errores)){
            if(UserModel::addUser(new User($nombre, $pass, $mail, $tipo, $apellidos))){
                $this->loginForm();
            }else{
                $errores .= 'Error al crear la cuenta';
            }
        }
        if(!empty($errores)){
            $data['errores'] = $errores;
            $this->view->show('sign', $data);
        }
    }

    public function login(){
        $email = empty($_POST['mail'])?null:$_POST['mail'];
        $pass = empty($_POST['pass'])?null:sha1($_POST['pass']);

        $errores = '';
        if(!isset($email) || !isset($pass)){
            $errores .= 'Rellene ambos campos para poder iniciar sesión,';
        }else{
            //cambian para recoger los datos y compararlos
            $usuario = UserModel::getUser($email);
            if(!isset($usuario)){
                $errores .= 'No existe una cuenta asignada a ese correo,';
            }elseif($usuario->getMail() != $email || $usuario->getPass() != $pass){
                $errores .= 'Credenciales incorrectos, pruebe de nuevo,';
            }
        }

        if(empty($errores)){
            $_SESSION['id'] = $usuario->getId();
            $_SESSION['nombre'] = $usuario->getNombre();
            $_SESSION ['tipo'] = $usuario->getTipo();
            $this->view->show('portfolio');
        }

        $data = [];
        if(!empty($errores)){
            $data['errores'] = $errores;
            $this->view->show('login', $data);
        }
    }
}
