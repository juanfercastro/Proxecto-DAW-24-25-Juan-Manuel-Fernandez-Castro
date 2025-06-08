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
        $data['entradas'] = EntradaModel::getAll();
        foreach ($data['entradas'] as $entrada) {
            if ($entrada->getId_creador()==$_SESSION['id']) {
                $entradasPropias[] = $entrada;
            }else{
                $otrasEntradas[] = $entrada;
            }
        }

        $data = [
            'propias' => $entradasPropias,
            'otras' => $otrasEntradas
        ];

        $this->view->show('foro', $data);
        exit;
    }

    public function addEntrada(){
        $id_creador = empty($_POST['id_creador'])?null:$_POST['id_creador'];
        $titulo = empty($_POST['titulo'])?null:$_POST['titulo'];
        $contenido = empty($_POST['contenido'])?null:$_POST['contenido'];

        $errores = '';

        if(!isset($id_creador)){
            $errores .= 'No elimine el valor del id.';
        }

        if(!isset($titulo)){
            $errores .= 'Es obligatorio incluir el titulo al crear una entrada.';
        }elseif(strlen($titulo)>100){
            $errores .= 'El titulo es demasiado extenso.';
        }

        if(!isset($contenido)){
            $errores .= 'Falta incluir el contenido de la entrada.';
        }

        $data = [];
        if(empty($errores)){
            if(EntradaModel::addEntrada(new Entrada($id_creador, $titulo, $contenido))){
                header("Location: ?controller=ForoController&action=showForo");
                exit;
            }else{
                $errores .= 'Hubo un error al crear la nueva entrada.';
            }
        }
        if(!empty($errores)){
            $data['errores'] = $errores;
            $this->view->show('foro', $data);
            exit;
        }
    }
}