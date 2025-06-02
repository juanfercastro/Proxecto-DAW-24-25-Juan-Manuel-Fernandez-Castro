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
        $nombre = $_POST['nombre']??null;
        $apellidos = $_POST['apellidos']??null;
        $mail = $_POST['mail']??null;
        $tipo = $_POST['tipo_user']??null;
        $pass = $_POST['pass']??null;
        $pass2 = $_POST['pass2']??null;

        $errores = '';
        if(!isset($nombre) || strlen($nombre)>150){
            $errores .= 'El nombre es obligatorio,';
        }
        if(strlen($nombre)>150){
            $errores .= 'Nombre es demasiado extenso,';
        }
        if(strlen($apellidos)>100){
            $errores .= 'Apellido demasiado extenso,';
        }
        if(!isset($mail)){
            $errores .= 'El correo electrónico es obligatorio,';
        }
        if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
            $errores .= 'Formato del correo electrónico incorrecto,';
        }
        if(!isset($tipo)){
            $errores .= 'Debe elegir su tipo de usuario,';
        }
        if(!isset($pass) || !isset($pass2)){
            $errores .= 'Deben rellenarse ambos campos de contraseña,';
        }
        if($pass != $pass2){
            $errores .= 'Las contraseñas no coinciden,';
        }
        if(strlen($pass)>30){
            $errores .= 'Contraseña demasiado extensa,';
        }

        $verificarCorreo = UserModel::getUser($mail);
        if(isset($verificarCorreo)){
            $errores .= 'Ya existe una cuenta asignada a ese correo,';
        }

        $data = [];
        if(empty($errores)){
            if(UserModel::addUser(new User($nombre, $mail, $pass, $tipo, $apellidos))){
                $this->view->show('portfolio');
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
        $email = $_POST['mail']??null;
        $pass = sha1($_POST['pass'])??null;

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
            $_SESSION['name'] = $usuario->getNombre();
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
