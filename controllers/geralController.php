<?php
class geralController extends Controller{
    public function inserir(){
        if(isset($_POST['id_curso']) && !empty($_POST['id_curso'])){
            $g = new Geral;

            $id_curso = addslashes($_POST['id_curso']);
            $titulo = addslashes($_POST['titulo']);
            $sequencia = addslashes($_POST['sequencia']);

            if($g->inserePeriodos( $id_curso, $titulo, $sequencia )){
                return true;
            }
        }else{
            header('Location: '.BASE_URL);
        }
    }

    public function pesquisar(){
        if(isset($_POST['id_curso']) && !empty($_POST['id_curso'])){
            $g = new Geral;

            $id_curso = addslashes($_POST['id_curso']);

            echo json_encode($g->getFromTableWhere('turmas', 'id_curso = '.$id_curso));

        }else{
            header('Location: '.BASE_URL);
        }
    }
}