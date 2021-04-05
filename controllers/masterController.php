<?php
class masterController extends Controller{

    public $needLogin;

    public function needLogin($need = false){
        $m = new Master();

        if($need == true){
            if(!$m->isLogged()){
                header('Location: '.BASE_URL.'master/login');
                
            }
        }
    }

    public function login(){
        $dados = array();
        $this->needLogin();
        $dados['title'] = "Login";

        $m = new Master();
        if($m->isLogged()){
            header('Location: '.BASE_URL.'master'); 
        }else{
            if(isset($_POST['email']) && !empty($_POST['email'])){
                $email = addslashes($_POST['email']);
                $pass = $_POST['pass'];

                if($m->login($email, $pass)){
                    header('Location: '.BASE_URL.'master');
                }else{
                    $dados['error'] = true;
                }
            }

            $this->loadView('login', $dados, 'master');
        }
    }

    public function logout(){
        $m = new Master();
        $m->logout();
    }

    public function index(){
        $dados = array();

        $dados['title'] = "Dashboard";
        $this->needLogin(true);

        $this->loadTemplate('index', $dados, 'master');
    }

    public function secretaria(){
        $dados = array();
        $this->needLogin(true);

        $m = new Master();

        if(isset($_POST['name']) && !empty($_POST['name'])){
            $name = addslashes($_POST['name']);
            $email = addslashes($_POST['email']);
            $pass = $_POST['pass'];
            $company = addslashes($_POST['company']);

            if($m->insertAdmin($name, $email, $pass, $company)){
                $dados['success'] = true;
            }
        }

        $dados['title'] = "Secretaria";
        $dados['btnAdd'] = array(
            'title' => 'Adicionar Secretária',
            'link' => BASE_URL.'master/adicionarSecretaria',
            'id' => 'addSecretaria'
        );
        $dados['companyList'] = $m->getList('companies');
        $dados['listSecretary'] = $m->getList('admin');

        $this->loadTemplate('secretaria', $dados, 'master');
    }

    public function empresas(){
        $dados = array();
        $this->needLogin(true);

        $m = new Master();

        if(isset($_POST['name']) && !empty($_POST['name'])){
            $name = addslashes($_POST['name']);
            $cnpj = addslashes($_POST['cnpj']);

            if($m->insertCompany($name, $cnpj)){
                $dados['success'] = true;
            }
        }

        $dados['title'] = "Secretaria";
        $dados['btnAdd'] = array(
            'title' => 'Adicionar Empresa',
            'id' => 'addEmpresa'
        );

        $dados['companyList'] = $m->getList('companies');
        $this->loadTemplate('empresas', $dados, 'master');
    }
}