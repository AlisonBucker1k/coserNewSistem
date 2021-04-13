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

    // INICIO DO MODEL GERAL

    public function insert($db, $data){
        $sql = "INSERT INTO $db SET ";
        foreach($data as $item){
            $sql .= "{$item['coluna']} = '{$item['valor']}', ";
        }

        $sql = substr($sql, 0, -2);
        $sql = $this->db->query($sql);

        // echo $sql;exit;
        
        return $this->db->lastInsertId();
    }

    public function select($table, $limit = '', $where = ''){
        $array = array();

        $sql = "SELECT * FROM {$table}";

        if($where != ''){
            $sql .= "WHERE {$where}";
        }

        if($limit != ''){
            $sql .= "LIMIT '{$limit}'";
        }

        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;

    }

    public function selectWhere($table, $where){
        $array = array();

        $sql = "SELECT * FROM {$table} WHERE $where";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function update($table, $data){
        $sql = "UPDATE $table SET status = :status WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':status', $data['status']['valor']);
        $sql->bindValue(':id', $data['id_aluno']['valor']);
        $sql->execute();
    }

    public function delete($table, $where = ''){
        $sql = "DELETE FROM $table ";

        if($where != ''){
            $sql .= "WHERE {$where}";
        }

        $sql = $this->db->query($sql);

        return true;
    }

}