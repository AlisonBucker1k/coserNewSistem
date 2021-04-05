<?php
class Geral extends Model{
    public function inserePeriodos( $id_curso, $titulo, $sequencia ){
        $sql = "INSERT INTO periodos SET id_curso = :id_curso, titulo = :titulo, sequencia = :sequencia";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_curso', $id_curso);
        $sql->bindValue(':titulo', $titulo);
        $sql->bindValue('sequencia', $sequencia);
        $sql->execute();

        return true;
    }

    public function getFromTableWhere($table, $where){
        $array = array();

        $sql = "SELECT * FROM $table WHERE $where";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }
}