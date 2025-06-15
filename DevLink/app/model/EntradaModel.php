<?php
include_once("Conexion.php");
class Entrada{
    private ?int $id_entrada;
    private int $id_creador;
    private string $titulo;
    private string $contenido;
    private ?DateTime $fecha;

    public function __construct(int $id_creador, string $titulo, string $contenido, ?DateTime $fecha = null, int $id_entrada = null){
        $this->id_creador = $id_creador;
        $this->titulo = $titulo;
        $this->contenido = $contenido;
        $this->fecha = $fecha;
        $this->id_entrada = $id_entrada;
    }

    

    /**
     * Get the value of id_entrada
     */ 
    public function getId_entrada()
    {
        return $this->id_entrada;
    }

    /**
     * Set the value of id_entrada
     *
     * @return  self
     */ 
    public function setId_entrada($id_entrada)
    {
        $this->id_entrada = $id_entrada;

        return $this;
    }

    /**
     * Get the value of id_creador
     */ 
    public function getId_creador()
    {
        return $this->id_creador;
    }

    /**
     * Set the value of id_creador
     *
     * @return  self
     */ 
    public function setId_creador($id_creador)
    {
        $this->id_creador = $id_creador;

        return $this;
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of contenido
     */ 
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * Set the value of contenido
     *
     * @return  self
     */ 
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;

        return $this;
    }

    /**
     * Get the value of fecha
     */ 
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     *
     * @return  self
     */ 
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }
}

class EntradaModel{
    public static function getAll(){
        $entradas = [];
        $pdo = Conexion::connection();
        $sql = "SELECT id_entrada,id_creador,titulo,contenido,fecha FROM entradas ORDER BY fecha DESC";
        try {
            $stmt = $pdo->query($sql);
            foreach ($stmt as $row) {
                $fecha = new DateTime($row['fecha']);
                $entrada = new Entrada($row['id_creador'],
                                        $row['titulo'],
                                        $row['contenido'],
                                        $fecha,
                                        $row['id_entrada']
                );
                $entradas[] = $entrada;
            }
        } catch (PDOException $th) {
            error_log("Error obteniendo las entradas del foro ".$th->getMessage());
        }finally {
            $pdo = null;
            $stmt = null;
        }
        return $entradas;
    }

    public static function getEntrada($id){
        $entrada = [];
        $pdo = Conexion::connection();
        $sql = "SELECT id_entrada, id_creador, titulo, contenido FROM entradas WHERE id_entrada = ?";
        try {
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(1, $id, PDO::PARAM_INT);
            $stmt->execute();
            if($stmt->rowCount()!=0){
                $entrada = $stmt->fetch(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $th) {
            error_log("Error al obtener los datos de la entrada ".$th->getMessage());
            $entrada = null;
        }finally{
            $pdo = null;
            $stmt = null;
        }

        return $entrada;
    }

    public static function addEntrada(Entrada $e){
        $resultado = false;
        $pdo = Conexion::connection();
        $sql = "INSERT INTO entradas(id_creador,titulo,contenido) VALUES (?,?,?)";
        try {
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $e->getId_creador(), PDO::PARAM_INT);
            $stmt->bindValue(2, $e->getTitulo(), PDO::PARAM_STR);
            $stmt->bindValue(3, $e->getContenido(), PDO::PARAM_STR);
            $resultado = $stmt->execute();
        } catch (PDOException $th) {
            error_log("Error insertando la nueva entrada ".$th->getMessage());
            $resultado = false;
        }finally {
            $pdo = null;
            $stmt = null;
        }
        return $resultado;
    }

    public static function updateEntrada(Entrada $e){
        $resultado = false;
        $pdo = Conexion::connection();
        $sql = "UPDATE entradas SET titulo = ?, contenido = ? WHERE id_entrada = ? AND id_creador = ?";
        try {
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $e->getTitulo(), PDO::PARAM_STR);
            $stmt->bindValue(2, $e->getContenido(), PDO::PARAM_STR);
            $stmt->bindValue(3, $e->getId_entrada(), PDO::PARAM_INT);
            $stmt->bindValue(4, $e->getId_creador(), PDO::PARAM_INT);
            $resultado = $stmt->execute();
        } catch (PDOException $th) {
            error_log("Error actualizando ".$th->getMessage());
            $resultado = false;
        }finally {
            $pdo = null;
            $stmt = null;
        }
        return $resultado;
    }

    public static function deleteEntrada($id){
        $resultado = false;
        $pdo = Conexion::connection();
        $sql = "DELETE FROM entradas WHERE id_entrada = ?";
        try {
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $id, PDO::PARAM_INT);
            $resultado = $stmt->execute();
        } catch (PDOException $th) {
            error_log("Error eliminando la entrada ".$th->getMessage());
            $resultado = false;
        }finally {
            $pdo = null;
            $stmt = null;
        }
        return $resultado;
    }
}