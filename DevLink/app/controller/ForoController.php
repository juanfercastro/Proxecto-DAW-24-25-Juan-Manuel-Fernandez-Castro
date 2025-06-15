<?php
include_once("globals.php");
include_once("Controller.php");
include_once(MODEL_PATH."EntradaModel.php");
/* include_once(MODEL_PATH."RespuestaModel.php"); */

class ForoController extends Controller{
    public function showForo(){
        $data = [];
        $entradasPropias = [];
        $otrasEntradas = [];
        $entradas = EntradaModel::getAll();
        if(isset($_SESSION['id'])){
            foreach ($entradas as $entrada) {
                if ($entrada->getId_creador()==$_SESSION['id']) {
                    $entradasPropias[] = $entrada;
                }else{
                    $otrasEntradas[] = $entrada;
                }
            }
        }else{
            $otrasEntradas = $entradas;
        }

        $data = [
            'propias' => $entradasPropias,
            'otras' => $otrasEntradas
        ];

        $this->view->show('foro', $data);
        exit;
    }

    public function getEntrada(){
        $id = $_POST['id_entrada'];

        $entrada = EntradaModel::getEntrada($id);
        if(isset($entrada)){
            echo json_encode(['success' => true, 'data' => $entrada]);
        }else{
            echo json_encode(['success' => false, 'message' => 'No se encontró la entrada solicitada']);
        }
    }

    public function addEntrada(){
        $id_creador = empty($_POST['id_creador'])?null:$_POST['id_creador'];
        $titulo = empty($_POST['titulo'])?null:$_POST['titulo'];
        $contenido = empty($_POST['contenido'])?null:$_POST['contenido'];

        if(!isset($id_creador)){
            echo json_encode(['success' => false, 
                                    'message' => 'No se ha enviado un id se usuario correcto']);
            exit;
        }

        if(!isset($titulo)){
            echo json_encode(['success' => false, 
                                    'message' => 'Es obligatorio incluir el titulo al crear una entrada']);
            exit;
        }elseif(strlen($titulo)>100){
            echo json_encode(['success' => false, 
                                    'message' => 'El título de la entrada es demasiado extenso']);
            exit;
        }

        if(!isset($contenido)){
            echo json_encode(['success' => false, 
                                    'message' => 'Falta el contenido de la entrada']);
            exit;
        }

        if(EntradaModel::addEntrada(new Entrada($id_creador, $titulo, $contenido))){
            echo json_encode(['success' => true, 
                                    'message' => 'Entrada creada con éxito']);
        }else{
            echo json_encode(['success' => false, 
                                    'message' => 'No se ha podido crear la entrada']);
        }
    }

    public function updateEntrada(){
        $id_entrada = empty($_POST['id_entrada'])?null:$_POST['id_entrada'];
        $id_creador = empty($_POST['id_creador'])?null:$_POST['id_creador'];
        $titulo = empty($_POST['titulo'])?null:$_POST['titulo'];
        $contenido = empty($_POST['contenido'])?null:$_POST['contenido'];

        if(!isset($id_entrada)){
            echo json_encode(['success' => false, 
                                    'message' => 'No se ha enviado un id de entrada correcto']);
            exit;
        }

        if(!isset($id_creador)){
            echo json_encode(['success' => false, 
                                    'message' => 'No se ha enviado un id de usuario correcto']);
            exit;
        }

        if(!isset($titulo)){
            echo json_encode(['success' => false, 
                                    'message' => 'Es obligatorio incluir el titulo al crear una entrada']);
            exit;
        }elseif(strlen($titulo)>100){
            echo json_encode(['success' => false, 
                                    'message' => 'El título de la entrada es demasiado extenso']);
            exit;
        }

        if(!isset($contenido)){
            echo json_encode(['success' => false, 
                                    'message' => 'Falta el contenido de la entrada']);
            exit;
        }

        if(EntradaModel::updateEntrada(new Entrada($id_creador, $titulo, $contenido, null, $id_entrada))){
            echo json_encode(['success' => true, 
                                    'message' => 'Entrada modificada con éxito']);
        }else{
            echo json_encode(['success' => false, 
                                    'message' => 'No se ha podido crear la entrada']);
        }
    }

    public function deleteEntrada(){
        $id = $_POST['id_entrada'];

        $resultado = EntradaModel::deleteEntrada($id);
        if(isset($resultado)){
            echo json_encode(['success' => true, 'message' => 'Entrada eliminada con exito']);
        }else{
            echo json_encode(['success' => false, 'message' => 'No se encontró la entrada solicitada']);
        }
    }
}