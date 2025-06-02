<?php
include_once("Conexion.php");
// modelo para la clase usuarios, haciendo distincion entre freelancers y empresas
class User {
    private ?int $id;
    private string $nombre;
    private string $apellidos;
    private string $mail;
    private string $pass;
    private string $tipo;
    
    public function __construct(string $nombre, string $pass, string $mail, string $tipo, string $apellidos , int $id = null){
        $this->nombre = $nombre;
        $this->mail = $mail;
        $this->pass = $pass;
        $this->tipo = $tipo;
        $this->apellidos = $apellidos;
        if(isset($id)){
            $this->id = $id;
        }
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellidos
     */ 
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     *
     * @return  self
     */ 
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of pass
     */ 
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set the value of pass
     *
     * @return  self
     */ 
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }
}

class UserModel{
    /* public static function getEmail(){
        $emails = [];
        $pdo = Conexion::connection();
        $sql = "SELECT email FROM usuarios WHERE tipo_usuario = developer OR tipo_usuario = empresa";
        try {
            $stmt = $pdo->query($sql);
            foreach ($stmt as $mail) {
                $emails[] = $mail;
            }
        } catch (PDOException $th) {
            error_log("Error verificando el correo".$th->getMessage());
        }finally{
            $pdo = null;
            $stmt = null;
        }
        return $emails;
    } */

    public static function getUser($email){
        $pdo = Conexion::connection();
        $sql = "SELECT id_usuario, nombre,apellidos,email,contrasena,tipo_usuario FROM usuarios WHERE email = ?";
        $usuario = null;
        try{
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(1, $email, PDO::PARAM_INT);
            $stmt->execute();
            if($row = $stmt->fetch()){
                $usuario = new User($row['nombre'],
                                    $row['contrasena'],
                                    $row['email'],
                                    $row['tipo_usuario'],
                                    $row['apellidos'],
                                    $row['id_usuario'] );
            }else{
                error_log("Usuario no encontrado");
            }
        }catch (PDOException $th){
            error_log("Error verificando el usuario".$th->getMessage());
        }finally{
            $pdo = null;
            $stmt = null;
        }

        return $usuario;
    }

    public static function addUser(User $u){
        $pass = sha1($u->getPass());
        $flag = false;
        $pdo = Conexion::connection();
        $sql = "INSERT INTO usuarios(nombre, apellidos, email, contrasena, tipo_usuario) VALUES (?,?,?,?,?)";
        try {
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $u->getNombre(), PDO::PARAM_STR);
            $stmt->bindValue(2, $u->getApellidos(), PDO::PARAM_STR);
            $stmt->bindValue(3, $u->getMail(), PDO::PARAM_STR);
            $stmt->bindValue(4, $pass, PDO::PARAM_STR);
            $stmt->bindValue(5, $u->getTipo(), PDO::PARAM_STR);
            $flag = $stmt->execute();
        } catch (PDOException $th) {
            error_log("Error al darse de alta ".$th->getMessage());
            $flag = false;
        }finally{
            $pdo=null;
            $stmt= null;
        }
        return $flag;
    }

    //recoge datos del usuario al iniciar sesion
    /* public static function login($mail, $pass){
        $flag = false;
        $password = sha1($pass);
        $pdo = Conexion::connection();
        $sql = "SELECT id_usuario, nombre, email,contrasena,tipo_usuario FROM usuarios WHERE email = ? AND contrasena = ?";
        $usuario = null; 
        try {
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $mail, PDO::PARAM_STR);
            $stmt->bindValue(2,$password, PDO::PARAM_STR);
            $stmt->execute();
            $resultado = $stmt->fetch();
            $flag = isset($resultado['user']) && $resultado['user']==1;
        } catch (PDOException $th) {
            error_log("Error intentando entrar en la cuenta" .$th->getMessage());
            $flag = false;
        }finally{
            $pdo = null;
            $stmt = null;
        }
        return $flag;
    } */

    public static function editUser(User $u){
        $pass = sha1($u->getPass());
        $flag = false;
        $pdo = Conexion::connection();
        $sql="UPDATE usuarios SET nombre = ?, apellidos = ?, email = ?, contrasena = ? WHERE id_usuario = ?";
        try {
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $u->getNombre(), PDO::PARAM_STR);
            $stmt->bindValue(2, $u->getApellidos(), PDO::PARAM_STR);
            $stmt->bindValue(3, $u->getMail(), PDO::PARAM_STR);
            $stmt->bindValue(4, $pass, PDO::PARAM_STR);
            $stmt->bindValue(5, $u->getId(), PDO::PARAM_STR);
            $flag = $stmt->execute();
        } catch (PDOException $th) {
            error_log("Error actualizando los datos ".$th->getMessage());
            $flag = false;
        }finally{
            $pdo = null;
            $stmt = null;
        }
        return $flag;
    }
}