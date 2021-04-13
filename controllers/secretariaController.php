<?php
class secretariaController extends Controller{
    public $needLogin;

    public function needLogin($need = false){
        $s = new Secretaria();

        if($need == true){
            if(!$s->isLogged()){
                header('Location: '.BASE_URL.'secretaria/login');
                
            }
        }
    }

    public function login(){
        $dados = array();
        $this->needLogin();
        $dados['title'] = "Login";

        $s = new Secretaria();
        if($s->isLogged()){
            header('Location: '.BASE_URL.'secretaria'); 
        }else{
            if(isset($_POST['email']) && !empty($_POST['email'])){
                $email = addslashes($_POST['email']);
                $pass = $_POST['pass'];

                if($s->login($email, $pass)){
                    header('Location: '.BASE_URL.'secretaria');
                }else{
                    $dados['error'] = true;
                }
            }

            $this->loadView('login', $dados, 'secretaria');
        }
    }

    public function logout(){
        $s = new Secretaria();
        $s->logout();
    }

    public function index(){
        $dados = array();

        $dados['title'] = "Dashboard";
        
        $this->needLogin(true);

        $this->loadTemplate('index', $dados, 'secretaria');
    }

    public function verCursos(){
        $dados = array();
        $this->needLogin(true);
        $s = new Secretaria();

        $dados['title'] = 'Lista de Cursos';
        $dados['btnAction'] = array(
            'link' => BASE_URL.'secretaria/adicionarCurso',
            'title' => 'Adicionar Curso'
        );

        $dados['cursos'] = $s->getFromTable('cursos');

        for($q=0;$q<count($dados['cursos']);$q++){
            $dados['cursos'][$q]['coordenador'] = $s->getFromTableWhere('coordenadores','id='.$dados["cursos"][$q]["id_coordenador"]);
            $dados['cursos'][$q]['area'] = $s->getFromTableWhere('areas','id='.$dados["cursos"][$q]["area"]);
        }

        $this->loadTemplate('listar_curso', $dados, 'secretaria');
    }

    public function adicionarCurso(){
        $dados = array();
        $this->needLogin(true);
        $s = new Secretaria();

        $dados['title'] = 'Adicionar Curso';

        if(isset($_POST['nome_curso']) && !empty($_POST['nome_curso'])){
            $nome_curso = addslashes($_POST['nome_curso']);
            $abrev = addslashes($_POST['abrev']);
            $area = addslashes($_POST['area']);
            $curso_nos_documentos = addslashes($_POST['cursos_nos_documentos']);
            $cod_inep = addslashes($_POST['cod_inep']);
            $cod_modalidade_inep = addslashes($_POST['cod_modalidade_inep']);
            $cod_polo_de_ed_dist_inep = addslashes($_POST['cod_polo_de_ed_dist_inep']);
            $grade_unica = addslashes($_POST['grade_unica']);
            $grade_unica_excecao = addslashes($_POST['grade_unica_excecao']);
            $educacao_a_distancia = addslashes($_POST['educacao_a_distancia']);
            $coordenador_curso = addslashes($_POST['coordenador_curso']);
            $coordenador_estagio = addslashes($_POST['coordenador_estagio']);
            $titulo = addslashes($_POST['titulo']);
            $titulacao = addslashes($_POST['titulacao']);
            $eixo_tecnologico = addslashes($_POST['eixo_tecnologico']);
            $area_conhecimento = addslashes($_POST['area_conhecimento']);
            $area_concentracao = addslashes($_POST['area_concentracao']);
            $habilitacao = addslashes($_POST['habilitacao']);
            $autorizacao = addslashes($_POST['autorizacao']);
            $reconhecimento = addslashes($_POST['reconhecimento']);
            $renovacao_conhecimento = addslashes($_POST['renovacao_reconhecimento']);
            $amparo_legal = addslashes($_POST['amparo_legal']);
            $perfil_profissional = addslashes($_POST['perfil_profissional']);
            $observacao = addslashes($_POST['observacao']);
            $prefixo_curso = addslashes($_POST['prefixo_curso']);
            $mostrar_faltas = addslashes($_POST['mostrar_faltas']);
            $separar_garga_horaria_pratica = addslashes($_POST['separar_carga_horaria_pratica']);
            $separar_carga_horaria_dispensa = addslashes($_POST['separar_carga_horaria_dispensa']);
            $mostrar_ano_semestre = addslashes($_POST['mostrar_ano_semestre']);
            $mostrar_titulo_periodo = addslashes($_POST['mostrar_titulo_periodo']);
            $subistituir_dispensa = addslashes($_POST['subistituir_dispensa']);
            $subistituir_pendente = addslashes($_POST['subistituir_pendente']);
            $nome_ch = addslashes($_POST['nome_ch']);
            $abrev_ch = addslashes($_POST['abrev_ch']);
            $nome_ch_anual = addslashes($_POST['nome_ch_anual']);
            $abrev_ch_anual = addslashes($_POST['abrev_ch_anual']);
            $curso_equival = addslashes($_POST['curso_equival']);
            $observacao_historico = addslashes($_POST['observacao_historico']);
            $periodo_letivo = addslashes($_POST['periodo_letivo1']);
            $desbloquear_prof = addslashes($_POST['desbloquear_professores']);

            // $keys = array_keys($_POST);

            $s->cadastrarCurso($nome_curso, $abrev, $area, $curso_nos_documentos, $cod_inep, $cod_modalidade_inep, $cod_polo_de_ed_dist_inep, $grade_unica, $grade_unica_excecao, $educacao_a_distancia, $coordenador_curso, $coordenador_estagio, $titulo, $titulacao, $eixo_tecnologico, $area_conhecimento, $area_concentracao, $habilitacao, $autorizacao, $reconhecimento, $renovacao_conhecimento, $amparo_legal, $perfil_profissional, $observacao, $prefixo_curso, $mostrar_faltas, $separar_garga_horaria_pratica, $separar_carga_horaria_dispensa, $mostrar_ano_semestre, $mostrar_titulo_periodo, $subistituir_dispensa, $subistituir_pendente, $nome_ch, $abrev_ch, $nome_ch_anual, $abrev_ch_anual, $curso_equival, $observacao_historico, $periodo_letivo, $desbloquear_prof);
        }

        $dados['coordenadores'] = $s->getFromTable('coordenadores');
        $dados['cursos'] = $s->getFromTable('cursos');
        
        $this->loadTemplate('cadastrar_curso', $dados, 'secretaria');
    }

    public function editarCurso($id_curso){
        $dados = array();
        $this->needLogin(true);
        $s = new Secretaria();

        $dados['title'] = 'Editar Curso';

        if(isset($_POST['nome_curso']) && !empty($_POST['nome_curso'])){
            $nome_curso = addslashes($_POST['nome_curso']);
            $abrev = addslashes($_POST['abrev']);
            $area = addslashes($_POST['area']);
            $curso_nos_documentos = addslashes($_POST['cursos_nos_documentos']);
            $cod_inep = addslashes($_POST['cod_inep']);
            $cod_modalidade_inep = addslashes($_POST['cod_modalidade_inep']);
            $cod_polo_de_ed_dist_inep = addslashes($_POST['cod_polo_de_ed_dist_inep']);
            $grade_unica = addslashes($_POST['grade_unica']);
            $grade_unica_excecao = addslashes($_POST['grade_unica_excecao']);
            $educacao_a_distancia = addslashes($_POST['educacao_a_distancia']);
            $coordenador_curso = addslashes($_POST['coordenador_curso']);
            $coordenador_estagio = addslashes($_POST['coordenador_estagio']);
            $titulo = addslashes($_POST['titulo']);
            $titulacao = addslashes($_POST['titulacao']);
            $eixo_tecnologico = addslashes($_POST['eixo_tecnologico']);
            $area_conhecimento = addslashes($_POST['area_conhecimento']);
            $area_concentracao = addslashes($_POST['area_concentracao']);
            $habilitacao = addslashes($_POST['habilitacao']);
            $autorizacao = addslashes($_POST['autorizacao']);
            $reconhecimento = addslashes($_POST['reconhecimento']);
            $renovacao_conhecimento = addslashes($_POST['renovacao_reconhecimento']);
            $amparo_legal = addslashes($_POST['amparo_legal']);
            $perfil_profissional = addslashes($_POST['perfil_profissional']);
            $observacao = addslashes($_POST['observacao']);
            $prefixo_curso = addslashes($_POST['prefixo_curso']);
            $mostrar_faltas = addslashes($_POST['mostrar_faltas']);
            $separar_garga_horaria_pratica = addslashes($_POST['separar_carga_horaria_pratica']);
            $separar_carga_horaria_dispensa = addslashes($_POST['separar_carga_horaria_dispensa']);
            $mostrar_ano_semestre = addslashes($_POST['mostrar_ano_semestre']);
            $mostrar_titulo_periodo = addslashes($_POST['mostrar_titulo_periodo']);
            $subistituir_dispensa = addslashes($_POST['subistituir_dispensa']);
            $subistituir_pendente = addslashes($_POST['subistituir_pendente']);
            $nome_ch = addslashes($_POST['nome_ch']);
            $abrev_ch = addslashes($_POST['abrev_ch']);
            $nome_ch_anual = addslashes($_POST['nome_ch_anual']);
            $abrev_ch_anual = addslashes($_POST['abrev_ch_anual']);
            $curso_equival = addslashes($_POST['curso_equival']);
            $observacao_historico = addslashes($_POST['observacao_historico']);
            $periodo_letivo = addslashes($_POST['periodo_letivo1']);
            $desbloquear_prof = addslashes($_POST['desbloquear_professores']);

            if($s->editarCurso($nome_curso, $abrev, $area, $curso_nos_documentos, $cod_inep, $cod_modalidade_inep, $cod_polo_de_ed_dist_inep, $grade_unica, $grade_unica_excecao, $educacao_a_distancia, $coordenador_curso, $coordenador_estagio, $titulo, $titulacao, $eixo_tecnologico, $area_conhecimento, $area_concentracao, $habilitacao, $autorizacao, $reconhecimento, $renovacao_conhecimento, $amparo_legal, $perfil_profissional, $observacao, $prefixo_curso, $mostrar_faltas, $separar_garga_horaria_pratica, $separar_carga_horaria_dispensa, $mostrar_ano_semestre, $mostrar_titulo_periodo, $subistituir_dispensa, $subistituir_pendente, $nome_ch, $abrev_ch, $nome_ch_anual, $abrev_ch_anual, $curso_equival, $observacao_historico, $periodo_letivo, $desbloquear_prof, $id_curso)){
                $dados['success'] = true;
            }
        }

        $dados['btnModal'] = array(
            'title' => 'Adicionar Período',
            'id' => 'addPeriodo'
        );

        $dados['btnSecondary'] = array(
            'title' => 'Listar Períodos',
            'id' => 'listPeriodo'
        );

        $dados['cursoInfo'] = $s->getCursoInfo($id_curso);
        $dados['coordenadores'] = $s->getFromTable('coordenadores');
        $dados['cursos'] = $s->getFromTable('cursos');
        $dados['periodos'] = $s->getPeriodos($id_curso);
        
        $this->loadTemplate('editar_curso', $dados, 'secretaria');
    }

    public function deletarCurso($id){
        $s = new Secretaria();
        $s->deleteFromTableWhere('cursos', 'id='.$id);

        header('Location: '.BASE_URL.'secretaria/verCursos/?delete=success');
    }

    public function matriculas(){
        $dados = array();
        $this->needLogin(true);
        $s = new Secretaria();

        $dados['btnAction'] = array(
            'title' => 'Matricular Aluno',
            'link' => 'matricularAluno/'
        );

        $dados['title'] = 'Listar Matriculas';
        $dados['matriculas'] = array();
        

        $this->loadTemplate('listar_matriculas', $dados, 'secretaria');
    }

    public function matricularAluno(){
        $dados = array();
        $this->needLogin(true);
        $s = new Secretaria();
        $g = new Geral();

        $dados['title'] = 'Matricular Aluno';

        if(isset($_POST['inscricao_inep_mec']) && !empty($_POST['inscricao_inep_mec'])){
            // Responsavel Financeiro
            $responsavel_financeiro = addslashes($_POST['responsavel_financeiro']);
            $resp_financ_nome = addslashes($_POST['resp_financ_nome']);
            $resp_financ_nascimento = addslashes($_POST['resp_financ_nascimento']);
            $estado_civil_resp_financ = addslashes($_POST['estado_civil_resp_financ']);
            $resp_financ_profissao = addslashes($_POST['resp_financ_profissao']);
            $resp_financ_cpf = addslashes($_POST['resp_financ_cpf']);
            $resp_financ_rg = addslashes($_POST['resp_financ_rg']);
            $resp_financ_email = addslashes($_POST['resp_financ_email']);
            $resp_financ_empresa = addslashes($_POST['resp_financ_empresa']);
            $resp_financ_cargo_empresa = addslashes($_POST['resp_financ_cargo_empresa']);
            $resp_financ_ddd_residencial = addslashes($_POST['resp_financ_ddd_residencial']);
            $resp_financ_tel_residencial = addslashes($_POST['resp_financ_tel_residencial']);
            $resp_financ_obs_numero_residencial = addslashes($_POST['resp_financ_obs_numero_residencial']);
            $resp_financ_cob_num_residencial = addslashes($_POST['resp_financ_cob_num_residencial']);
            $resp_financ_ddd_comercial = addslashes($_POST['resp_financ_ddd_comercial']);
            $resp_financ_tel_comercial = addslashes($_POST['resp_financ_tel_comercial']);
            $resp_financ_obs_numero_comercial = addslashes($_POST['resp_financ_obs_numero_comercial']);
            $resp_financ_cob_num_comercial = addslashes($_POST['resp_financ_cob_num_comercial']);
            $resp_financ_ddd_celular = addslashes($_POST['resp_financ_ddd_celular']);
            $resp_financ_tel_celular = addslashes($_POST['resp_financ_tel_celular']);
            $resp_financ_obs_numero_celular = addslashes($_POST['resp_financ_obs_numero_celular']);
            $resp_financ_cob_num_celular = addslashes($_POST['resp_financ_cob_num_celular']);
            $resp_financ_ddd_adicional = addslashes($_POST['resp_financ_ddd_adicional']);
            $resp_financ_tel_adicional = addslashes($_POST['resp_financ_tel_adicional']);
            $resp_financ_cob_num_adicional = addslashes($_POST['resp_financ_cob_num_adicional']); 
            $cep_resp_financ = addslashes($_POST['cep_resp_financ']);
            $endereço_resp_financ = addslashes($_POST['endereço_resp_financ']);
            $numero_res_resp_financ = addslashes($_POST['numero_res_resp_financ']); 
            $complemento_resp_financ = addslashes($_POST['complemento_resp_financ']);
            $bairro_resp_financ = addslashes($_POST['bairro_resp_financ']);
            $cidade_resp_financ = addslashes($_POST['cidade_resp_financ']); 
            $corresp_resp_financ = addslashes($_POST['corresp_resp_financ']);
// Responsavel Academico
            $responsavel_acad = addslashes($_POST['responsavel_academico']);
            $resp_acad_nome = addslashes($_POST['resp_acad_nome']);
            $resp_acad_nascimento = addslashes($_POST['resp_acad_nascimento']);
            $estado_civil_resp_acad = addslashes($_POST['estado_civil_resp_acad']);
            $resp_acad_profissao = addslashes($_POST['resp_acad_profissao']);
            $resp_acad_cpf = addslashes($_POST['resp_acad_cpf']);
            $resp_acad_rg = addslashes($_POST['resp_acad_rg']);
            $resp_acad_email = addslashes($_POST['resp_acad_email']);
            $resp_acad_empresa = addslashes($_POST['resp_acad_empresa']);
            $resp_acad_cargo_empresa = addslashes($_POST['resp_acad_cargo_empresa']);
            $resp_acad_ddd_residencial = addslashes($_POST['resp_acad_ddd_residencial']);
            $resp_acad_tel_residencial = addslashes($_POST['resp_acad_tel_residencial']);
            $resp_acad_obs_numero_residencial = addslashes($_POST['resp_acad_obs_numero_residencial']);
            $resp_acad_cob_num_residencial = addslashes($_POST['resp_acad_cob_num_residencial']);
            $resp_acad_ddd_comercial = addslashes($_POST['resp_acad_ddd_comercial']);
            $resp_acad_tel_comercial = addslashes($_POST['resp_acad_tel_comercial']);
            $resp_acad_obs_numero_comercial = addslashes($_POST['resp_acad_obs_numero_comercial']);
            $resp_acad_cob_num_comercial = addslashes($_POST['resp_acad_cob_num_comercial']);
            $resp_acad_ddd_celular = addslashes($_POST['resp_acad_ddd_celular']);
            $resp_acad_tel_celular = addslashes($_POST['resp_acad_tel_celular']);
            $resp_acad_obs_numero_celular = addslashes($_POST['resp_acad_obs_numero_celular']);
            $resp_acad_cob_num_celular = addslashes($_POST['resp_acad_cob_num_celular']);
            $resp_acad_ddd_adicional = addslashes($_POST['resp_acad_ddd_adicional']);
            $resp_acad_tel_adicional = addslashes($_POST['resp_acad_tel_adicional']);
            $resp_acad_cob_num_adicional = addslashes($_POST['resp_acad_cob_num_adicional']); 
            $cep_resp_acad = addslashes($_POST['cep_resp_acad']);
            $endereço_resp_acad = addslashes($_POST['endereço_resp_acad']);
            $numero_res_resp_acad = addslashes($_POST['numero_res_resp_acad']); 
            $complemento_resp_acad = addslashes($_POST['complemento_resp_acad']);
            $bairro_resp_acad = addslashes($_POST['bairro_resp_acad']);
            $cidade_resp_acad = addslashes($_POST['cidade_resp_acad']); 
            $corresp_resp_acad = addslashes($_POST['corresp_resp_acad']);

            $resp_financ = addslashes($_POST['responsavel_financeiro']);
            $resp_acad = addslashes($_POST['responsavel_academico']);

            if($responsavel_financeiro == "Outro"){
                $resp_financ_data = array(
                    'nome' => $resp_financ_nome,
                    'nascimento' => $estado_civil_resp_financ,
                    'profissao' => $resp_financ_profissao,
                    'cpf' => $resp_financ_cpf,
                    'rg' => $resp_financ_rg,
                    'email' => $resp_financ_email,
                    'empresa' => $resp_financ_empresa,
                    'cargo_empresa' => $resp_financ_cargo_empresa,
                    'ddd_residencial' => $resp_financ_ddd_residencial,
                    'tel_residencial' => $resp_financ_tel_residencial,
                    'numero_residencial' => $resp_financ_obs_numero_residencial,
                    'ddd_comercial' => $resp_financ_ddd_comercial,
                    'tel_comercial' => $resp_financ_tel_comercial,
                    'numero_comercial' => $resp_financ_obs_numero_comercial,
                    'cobranca_comercial' => $resp_financ_cob_num_comercial,
                    'ddd_celular' => $resp_financ_ddd_celular,
                    'numero_celular' => $resp_financ_tel_celular,
                    'observacao_celular' => $resp_financ_obs_numero_celular,
                    'cobranca_celular' => $resp_financ_cob_num_celular,
                    'cep' => $cep_resp_financ,
                    'endereco' => $endereço_resp_financ,
                    'numero_residencial' => $numero_res_resp_financ,
                    'complemento' => $complemento_resp_financ,
                    'bairro' => $bairro_resp_financ,
                    'cidade' => $cidade_resp_financ,
                    'correspondencia' => $corresp_resp_financ
                );
    
                $resp_financ = json_encode($resp_financ_data);
            }
    
            if($responsavel_acad == "Outro"){
                $resp_acad_data = array(
                    'nome' => $resp_acad_nome,
                    'nascimento' => $estado_civil_resp_acad,
                    'profissao' => $resp_acad_profissao,
                    'cpf' => $resp_acad_cpf,
                    'rg' => $resp_acad_rg,
                    'email' => $resp_acad_email,
                    'empresa' => $resp_acad_empresa,
                    'cargo_empresa' => $resp_acad_cargo_empresa,
                    'ddd_residencial' => $resp_acad_ddd_residencial,
                    'tel_residencial' => $resp_acad_tel_residencial,
                    'numero_residencial' => $resp_acad_obs_numero_residencial,
                    'ddd_comercial' => $resp_acad_ddd_comercial,
                    'tel_comercial' => $resp_acad_tel_comercial,
                    'numero_comercial' => $resp_acad_obs_numero_comercial,
                    'cobranca_comercial' => $resp_acad_cob_num_comercial,
                    'ddd_celular' => $resp_acad_ddd_celular,
                    'numero_celular' => $resp_acad_tel_celular,
                    'observacao_celular' => $resp_acad_obs_numero_celular,
                    'cobranca_celular' => $resp_acad_cob_num_celular,
                    'cep' => $cep_resp_acad,
                    'endereco' => $endereço_resp_acad,
                    'numero_residencial' => $numero_res_resp_acad,
                    'complemento' => $complemento_resp_acad,
                    'bairro' => $bairro_resp_acad,
                    'cidade' => $cidade_resp_acad,
                    'correspondencia' => $corresp_resp_acad
                );
    
                $resp_acad = json_encode($resp_acad_data);
            }

            $toDb = array(
                'aluno_nome' => array(
                    'coluna' => 'aluno_nome',
                    'valor' => addslashes($_POST['nome']),
                ),
                'aluno_nome_social' => array(
                    'coluna' => 'aluno_nome_social',
                    'valor' => addslashes($_POST['nome_social']),
                ),
                'aluno_sexo' => array(
                    'coluna' => 'aluno_sexo',
                    'valor' => addslashes($_POST['sexo']),
                ),
                'aluno_nascimento' => array(
                    'coluna' => 'aluno_nascimento',
                    'valor' => addslashes($_POST['nascimento']),
                ),
                'aluno_estado_civil' => array(
                    'coluna' => 'aluno_estado_civil',
                    'valor' => addslashes($_POST['estado_civil']),
                ),
                'aluno_profissao' => array(
                    'coluna' => 'aluno_profissao',
                    'valor' => addslashes($_POST['profissao']),
                ),
                'aluno_raca' => array(
                    'coluna' => 'aluno_raca',
                    'valor' => addslashes($_POST['naturalidade']),
                ),
                'aluno_naturalidade' => array(
                    'coluna' => 'aluno_naturalidade',
                    'valor' => addslashes($_POST['naturalidade']),
                ),
                'aluno_nacionalidade' => array(
                    'coluna' => 'aluno_nacionalidade',
                    'valor' => addslashes($_POST['nacionalidade']),
                ),
                'aluno_uf' => array(
                    'coluna' => 'aluno_uf',
                    'valor' => addslashes($_POST['UF']),
                ),
                'aluno_email' => array(
                    'coluna' => 'aluno_email',
                    'valor' => addslashes($_POST['email']),
                ),
                'aluno_empresa' => array(
                    'coluna' => 'aluno_empresa',
                    'valor' => addslashes($_POST['empresa']),
                ),
                'aluno_cargo' => array(
                    'coluna' => 'aluno_cargo',
                    'valor' => addslashes($_POST['cargo']),
                ),
                // Documentação
                'aluno_cpf' => array(
                    'coluna' => 'aluno_cpf',
                    'valor' => addslashes($_POST['cpf']),
                ),
                'aluno_rg' => array(
                    'coluna' => 'aluno_rg',
                    'valor' => addslashes($_POST['rg']),
                ),
                'aluno_rg_orgao_exp' => array(
                    'coluna' => 'aluno_rg_orgao_exp',
                    'valor' => addslashes($_POST['orgao_expeditor']),
                ),
                'aluno_rg_data_exp' => array(
                    'coluna' => 'aluno_rg_data_exp',
                    'valor' => addslashes($_POST['rg_expedicao']),
                ),
                'aluno_rg_uf' => array(
                    'coluna' => 'aluno_rg_uf',
                    'valor' => addslashes($_POST['rg_uf']),
                ),
                // Certidão
                'aluno_certidao' => array(
                    'coluna' => 'aluno_certidao',
                    'valor' => addslashes($_POST['certidao']),
                ),
                'aluno_certidao_num' => array(
                    'coluna' => 'aluno_certidao_num',
                    'valor' => addslashes($_POST['num_certidao']),
                ),
                'aluno_certidao_cartorio' => array(
                    'coluna' => 'aluno_certidao_cartorio',
                    'valor' => addslashes($_POST['cartorio']),
                ),
                'aluno_certidao_livro' => array(
                    'coluna' => 'aluno_certidao_livro',
                    'valor' => addslashes($_POST['cert_livro']),
                ),
                'aluno_certidao_folha' => array(
                    'coluna' => 'aluno_certidao_folha',
                    'valor' => addslashes($_POST['folha']),
                ),
                'aluno_certidao_cidade' => array(
                    'coluna' => 'aluno_certidao_cidade',
                    'valor' => addslashes($_POST['cert_cidade']),
                ),
                'aluno_certidao_uf' => array(
                    'coluna' => 'aluno_certidao_uf',
                    'valor' => addslashes($_POST['cert_uf']),
                ),
                // Titlulo Eleitor
                'aluno_tit_eleit' => array(
                    'coluna' => 'aluno_tit_eleit',
                    'valor' => addslashes($_POST['titulo_eleitor']),
                ),
                'aluno_tit_eleit_zona' => array(
                    'coluna' => 'aluno_tit_eleit_zona',
                    'valor' => addslashes($_POST['zona_eleitor']),
                ),
                'aluno_tit_eleit_secao' => array(
                    'coluna' => 'aluno_tit_eleit_secao',
                    'valor' => addslashes($_POST['secao_eleitor']),
                ),
                'aluno_tit_eleit_uf' => array(
                    'coluna' => 'aluno_tit_eleit_uf',
                    'valor' => addslashes($_POST['uf_eleitor']),
                ),
                // Aluno Cert Reserv
                'aluno_cert_reserv' => array(
                    'coluna' => 'aluno_cert_reserv',
                    'valor' => addslashes($_POST['certificado_reservista']),
                ),
                'aluno_cert_reserv_numero' => array(
                    'coluna' => 'aluno_cert_reserv_numero',
                    'valor' => addslashes($_POST['num_certificado']),
                ),
                'aluno_cert_reserv_categ' => array(
                    'coluna' => 'aluno_cert_reserv_categ',
                    'valor' => addslashes($_POST['categoria_reservista']),
                ),
                'aluno_cert_reserv_reg' => array(
                    'coluna' => 'aluno_cert_reserv_reg',
                    'valor' => addslashes($_POST['regiao_reservista']),
                ),
                'aluno_cert_reserv_uf' => array(
                    'coluna' => 'aluno_cert_reserv_uf',
                    'valor' => addslashes($_POST['uf_reservista']),
                ),
                // Aluno Endereço
                'aluno_cep' => array(
                    'coluna' => 'aluno_cep',
                    'valor' => addslashes($_POST['cep_residencial']),
                ),
                'aluno_numero' => array(
                    'coluna' => 'aluno_numero',
                    'valor' => addslashes($_POST['numero_residencial']),
                ),
                'aluno_complemento' => array(
                    'coluna' => 'aluno_complemento',
                    'valor' => addslashes($_POST['complemento_residencial']),
                ),
                'aluno_end_corresp' => array(
                    'coluna' => 'aluno_end_corresp',
                    'valor' => addslashes($_POST['corresp_residencial']),
                ),
                'aluno_cobr_cep' => array(
                    'coluna' => 'aluno_cobr_cep',
                    'valor' => addslashes($_POST['cep_cobranca']),
                ),
                'aluno_cobr_numero' => array(
                    'coluna' => 'aluno_cobr_numero',
                    'valor' => addslashes($_POST['numero_cobranca']),
                ),
                'aluno_cobr_complemento' => array(
                    'coluna' => 'aluno_cobr_complemento',
                    'valor' => addslashes($_POST['complemento_cobranca']),
                ),
                // Aluno Telefone
                'aluno_tel_1' => array(
                    'coluna' => 'aluno_tel_1',
                    'valor' => addslashes($_POST['DDD'].' '.$_POST['tel_residencial']),
                ),
                'aluno_tel_1_cobr' => array(
                    'coluna' => 'aluno_tel_1_cobr',
                    'valor' => addslashes($_POST['cob_num_residencial']),
                ),
                'aluno_tel_1_sms' => array(
                    'coluna' => 'aluno_tel_1_sms',
                    'valor' => addslashes($_POST['cob_num_residencial']),
                ),
                'aluno_tel_1_obs' => array(
                    'coluna' => 'aluno_tel_1_obs',
                    'valor' => addslashes($_POST['obs_numero_residencial']),
                ),
                // Deficiencias
                'aluno_def_auditiva' => array(
                    'coluna' => 'aluno_def_auditiva',
                    'valor' => addslashes($_POST['def_auditiva']),
                ),
                'aluno_def_mental' => array(
                    'coluna' => 'aluno_def_mental',
                    'valor' => addslashes($_POST['def_mental']),
                ),
                'aluno_def_baixa_visao' => array(
                    'coluna' => 'aluno_def_baixa_visao',
                    'valor' => addslashes($_POST['baixa_visao']),
                ),
                'aluno_def_visual' => array(
                    'coluna' => 'aluno_def_visual',
                    'valor' => addslashes($_POST['def_visual']),
                ),
                'aluno_def_surdo_cego' => array(
                    'coluna' => 'aluno_def_surdo_cego',
                    'valor' => addslashes($_POST['Def_surdo_cegueira']),
                ),
                'aluno_def_multiplas' => array(
                    'coluna' => 'aluno_def_multiplas',
                    'valor' => addslashes($_POST['def_multiplas']),
                ),
                'aluno_def_multiplas' => array(
                    'coluna' => 'aluno_def_multiplas',
                    'valor' => addslashes($_POST['def_multiplas']),
                ),
                'aluno_def_sindrom_asperger' => array(
                    'coluna' => 'aluno_def_sindrom_asperger',
                    'valor' => addslashes($_POST['sindrome_asperger']),
                ),
                'aluno_def_autism_class' => array(
                    'coluna' => 'aluno_def_autism_class',
                    'valor' => addslashes($_POST['autismo_classico']),
                ),
                'aluno_def_sind_rett' => array(
                    'coluna' => 'aluno_def_sind_rett',
                    'valor' => addslashes($_POST['sindrome_rett']),
                ),
                'aluno_def_tdi' => array(
                    'coluna' => 'aluno_def_tdi',
                    'valor' => addslashes($_POST['transt_desg_infancia']),
                ),
                'aluno_def_psic_infant' => array(
                    'coluna' => 'aluno_def_psic_infant',
                    'valor' => addslashes($_POST['psc_infant']),
                ),
                'aluno_def_altas_hab' => array(
                    'coluna' => 'aluno_def_altas_hab',
                    'valor' => addslashes($_POST['altas_hab']),
                ),
                'aluno_def_outras' => array(
                    'coluna' => 'aluno_def_outras',
                    'valor' => addslashes($_POST['outras']),
                ),
                'aluno_def_laudo' => array(
                    'coluna' => 'aluno_def_laudo',
                    'valor' => addslashes($_POST['laudo']),
                ),
                // Dados Pai
                'pai_nome' => array(
                    'coluna' => 'pai_nome',
                    'valor' => addslashes($_POST['pai_nome']),
                ),
                'pai_nascimento' => array(
                    'coluna' => 'pai_nascimento',
                    'valor' => addslashes($_POST['pai_nascimento']),
                ),
                'pai_estado_civil' => array(
                    'coluna' => 'pai_estado_civil',
                    'valor' => addslashes($_POST['estado_civil_pai']),
                ),
                'pai_cpf' => array(
                    'coluna' => 'pai_cpf',
                    'valor' => addslashes($_POST['pai_cpf']),
                ),
                'pai_rg' => array(
                    'coluna' => 'pai_rg',
                    'valor' => addslashes($_POST['pai_rg']),
                ),
                'pai_email' => array(
                    'coluna' => 'pai_email',
                    'valor' => addslashes($_POST['pai_email']),
                ),
                'pai_empresa' => array(
                    'coluna' => 'pai_empresa',
                    'valor' => addslashes($_POST['pai_empresa']),
                ),
                'pai_cargo' => array(
                    'coluna' => 'pai_cargo',
                    'valor' => addslashes($_POST['pai_cargo_empresa']),
                ),
                'pai_tel_1' => array(
                    'coluna' => 'pai_tel_1',
                    'valor' => addslashes($_POST['pai_ddd_comercial'].' '.$_POST['pai_tel_comercial']),
                ),
                'pai_tel_1_obs' => array(
                    'coluna' => 'pai_tel_1_obs',
                    'valor' => addslashes($_POST['pai_obs_numero_residencial']),
                ),
                'pai_cep' => array(
                    'coluna' => 'pai_cep',
                    'valor' => addslashes($_POST['cep_pai']),
                ),
                'pai_complemento' => array(
                    'coluna' => 'pai_complemento',
                    'valor' => addslashes($_POST['complemento_pai']),
                ),
                'pai_end_corresp' => array(
                    'coluna' => 'pai_end_corresp',
                    'valor' => addslashes($_POST['corresp_pai']),
                ),
                // Dados Mãe
                'mae_nome' => array(
                    'coluna' => 'mae_nome',
                    'valor' => addslashes($_POST['mae_nome']),
                ),
                'mae_nascimento' => array(
                    'coluna' => 'mae_nascimento',
                    'valor' => addslashes($_POST['mae_nascimento']),
                ),
                'mae_estado_civil' => array(
                    'coluna' => 'mae_estado_civil',
                    'valor' => addslashes($_POST['estado_civil_mae']),
                ),
                'mae_profissao' => array(
                    'coluna' => 'mae_profissao',
                    'valor' => addslashes($_POST['mae_profissao']),
                ),
                'mae_cpf' => array(
                    'coluna' => 'mae_cpf',
                    'valor' => addslashes($_POST['mae_cpf']),
                ),
                'mae_rg' => array(
                    'coluna' => 'mae_rg',
                    'valor' => addslashes($_POST['mae_rg']),
                ),
                'mae_email' => array(
                    'coluna' => 'mae_email',
                    'valor' => addslashes($_POST['mae_email']),
                ),
                'mae_empresa' => array(
                    'coluna' => 'mae_empresa',
                    'valor' => addslashes($_POST['mae_empresa']),
                ),
                'mae_cargo' => array(
                    'coluna' => 'mae_cargo',
                    'valor' => addslashes($_POST['mae_cargo_empresa']),
                ),
                'mae_tel_1' => array(
                    'coluna' => 'mae_tel_1',
                    'valor' => addslashes($_POST['mae_ddd_residencial'].' '.$_POST['mae_obs_numero_residencial']),
                ),
                'mae_tel_1_obs' => array(
                    'coluna' => 'mae_tel_1_obs',
                    'valor' => addslashes($_POST['mae_obs_numero_residencial']),
                ),
                'mae_tel_1_cob' => array(
                    'coluna' => 'mae_tel_1_cob',
                    'valor' => addslashes($_POST['mae_cob_num_residencial']),
                ),
                'mae_tel_1_sms' => array(
                    'coluna' => 'mae_tel_1_sms',
                    'valor' => addslashes($_POST['mae_sms_num_residencial']),
                ),
                'mae_cep' => array(
                    'coluna' => 'mae_cep',
                    'valor' => addslashes($_POST['cep_mae']),
                ),
                'mae_numero' => array(
                    'coluna' => 'mae_numero',
                    'valor' => addslashes($_POST['numero_res_mae']),
                ),
                'mae_complemento' => array(
                    'coluna' => 'mae_complemento',
                    'valor' => addslashes($_POST['complemento_mae']),
                ),
                'mae_end_corresp' => array(
                    'coluna' => 'mae_end_corresp',
                    'valor' => addslashes($_POST['corresp_mae']),
                ),
                // Resf Financ
                'resp_financ' => array(
                    'coluna' => 'resp_financ',
                    'valor' => $resp_financ,
                ),
                // Resp Acad
                'resp_academ' => array(
                    'coluna' => 'resp_academ',
                    'valor' => $resp_acad,
                ),
            );
           
            $dataTurma = $g->selectWhere('turmas', "id = '{$_POST['turma']}'");

            $toDb = array(
                'id_aluno' => array(
                    'coluna' => 'id_aluno',
                    'valor' => $g->insert('alunos', $toDb),
                ),
                'id_curso' => array(
                    'coluna' => 'id_curso',
                    'valor' => addslashes($_POST['curso']),
                ),
                'id_turma' => array(
                    'coluna' => 'id_turma',
                    'valor' => addslashes($_POST['turma']),
                ),
                'insc_inep_mec' => array(
                    'coluna' => 'insc_inep_mec',
                    'valor' => addslashes($_POST['inscricao_inep_mec']),
                ),
                'periodo' => array(
                    'coluna' => 'periodo',
                    'valor' => $dataTurma[0]['periodo'],
                ),
            );

            $id_matricula = $g->insert('matriculas', $toDb);
            

            // Plano, dia venc, dia_lim, primeiro_vencimento, vlr_entrada, qtd_parcelas, vlr_parcelas, motivo_cobranca, valor_cobranca, perc, mes_inicial, mes_final, ano_final, cond


        }

        
        $dados['cursos'] = $s->getFromTable('cursos');

        $this->loadTemplate('matricular_aluno', $dados, 'secretaria');
    }

    public function adicionar_documento_aluno(){
        $dados['title'] = "adicionar_documento_aluno";
        $this->loadTemplate('adicionar_documento_aluno', $dados, 'secretaria');
    }

    public function listar_alunos(){
        $dados['title'] = "Lista de alunos";
        $this->loadTemplate('listar_alunos', $dados, 'secretaria');
    }
    public function listar_turmas(){
        $dados['title'] = "Lista de turmas";
        $this->loadTemplate('listar_turmas', $dados, 'secretaria');
    }
    public function add_doc(){
        $dados['title'] = "Adicionar Documento";
        $this->loadTemplate('adicionar_documento', $dados, 'secretaria');
    }
    public function add_doc_aluno(){
        $dados['title'] = "Adicionar Documento ao Aluno";
        $this->loadTemplate('adicionar_documento_aluno', $dados, 'secretaria');
    }
    public function list_doc(){
        $dados['title'] = "Listar Documentos";
        $this->loadTemplate('listar_documentos', $dados, 'secretaria');
    }
    public function list_matriculas(){
        $dados['btnAction'] = array(
            'title' => 'Matricular Aluno',
            'link' => 'matricularAluno/'
        );

        $dados['title'] = 'Listar Matriculas';
        $dados['matriculas'] = array();
        $this->loadTemplate('listar_matriculas', $dados, 'secretaria');
    }
    
}