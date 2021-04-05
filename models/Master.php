<?php
class Master extends Model{

    public function getList($table){
        $array = array();

        $sql = "SELECT * FROM $table";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function insertCompany($name, $cnpj){
        $sql = "INSERT INTO companies SET name = :name, cnpj = :cnpj";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':name', $name);
        $sql->bindValue(':cnpj', $cnpj);
        $sql->execute();

        return true;
    }

    public function insertAdmin($name, $email, $pass, $company){
        $sql = "INSERT INTO admin SET name = :name, email = :email, pass = :pass";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':name', $name);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':pass', md5($pass));
        $sql->execute();

        $id = $this->db->lastInsertId();

        $this->insertAdminCompany($id, $company);

        return true;
    }

    public function insertAdminCompany($id, $company){
        $sql = "INSERT INTO admin_company SET id_admin = :id_admin, id_company = :id_company";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_admin', $id);
        $sql->bindValue(':id_company', $company);
        $sql->execute();

        return true;
    }

    public function isLogged(){
        if(isset($_SESSION['master']) && !empty($_SESSION['master'])){
            return true;
        }else{
            return false;
        }
    }

    public function login($email, $pass){
        $sql = "SELECT id FROM master WHERE email = :email AND pass = :pass";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':pass', md5($pass));
        $sql->execute();

        if($sql->rowCount() > 0){
            $data = $sql->fetch();

            $_SESSION['master'] = $data['id'];
            return true;
        }else{
            return false;
        }
    }

    public function logout(){
        unset($_SESSION['master']);
        header('Location: '.BASE_URL.'master');
    }
}