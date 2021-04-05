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

        $dados['title'] = 'Matricular Aluno';

        if(isset($_POST['inscricao_inep_mec']) && !empty($_POST['inscricao_inep_mec'])){
            // $inscricao_inep_mec = addslashes($_POST['inscricao_inep_mec']);
            $nome = addslashes($_POST['nome']);
            $nome_social = addslashes($_POST['nome_social']);
            $sexo = addslashes($_POST['sexo']);
            $nascimento = addslashes($_POST['nascimento']);
            $estado_civil = addslashes($_POST['estado_civil']);
            $profissao = addslashes($_POST['profissao']);
            $raca = addslashes($_POST['raca']);
            $naturalidade = addslashes($_POST['naturalidade']);
            $nacionalidade = addslashes($_POST['nacionalidade']);
            $uf = addslashes($_POST['UF']);
            $email = addslashes($_POST['email']);
            $empresa = addslashes($_POST['empresa']);
            $cargo = addslashes($_POST['cargo']);
            // $curso = addslashes($_POST['curso']);
            // $turma = addslashes($_POST['turma']);
// Aluno RG
            $cpf = addslashes($_POST['cpf']);
            $rg = addslashes($_POST['rg']);
            $orgao_expeditor = addslashes($_POST['orgao_expeditor']);
            $rg_expedicao = addslashes($_POST['rg_expedicao']);
            $rg_uf = addslashes($_POST['rg_uf']);
// Aluno Certidao
            $certidao = addslashes($_POST['certidao']);
            $num_certidao = addslashes($_POST['num_certidao']);
            $cartorio = addslashes($_POST['cartorio']);
            $cert_livro = addslashes($_POST['cert_livro']);
            $folha = addslashes($_POST['folha']);
            $cert_cidade = addslashes($_POST['cert_cidade']);
            $cert_uf = addslashes($_POST['cert_uf']);
// Aluno Titulo Eleitor
            $titulo_eleitor = addslashes($_POST['titulo_eleitor']);
            $zona_eleitor = addslashes($_POST['zona_eleitor']);
            $secao_eleitor = addslashes($_POST['secao_eleitor']);
            $uf_eleitor = addslashes($_POST['uf_eleitor']);
// Aluno Certificado Reservista
            $certificado_reservista = addslashes($_POST['certificado_reservista']);
            $num_certificado = addslashes($_POST['num_certificado']);
            $categoria_reservista = addslashes($_POST['categoria_reservista']);
            $regiao_reservista = addslashes($_POST['regiao_reservista']);
            $uf_reservista = addslashes($_POST['uf_reservista']);
// Aluno Endereco
            $cep_residencial = addslashes($_POST['cep_residencial']);
            $endereco_residencial = addslashes($_POST['endereco_residencial']);
            $numero_residencial = addslashes($_POST['numero_residencial']);
            $complemento_residencial = addslashes($_POST['complemento_residencial']);
            $bairro_residencial = addslashes($_POST['bairro_residencial']);
            $uf_residencial = addslashes($_POST['uf_residencial']);
            $corresp_residencial = addslashes($_POST['corresp_residencial']);
            $cep_cobranca = addslashes($_POST['cep_cobranca']);
            $endereco_cobranca = addslashes($_POST['endereco_cobranca']);
            $numero_cobranca = addslashes($_POST['numero_cobranca']);
            $complemento_cobranca = addslashes($_POST['complemento_cobranca']);
            $bairro_cobranca = addslashes($_POST['bairro_cobranca']);
            $uf_cobranca = addslashes($_POST['uf_cobranca']);
            $corresp_cobranca = addslashes($_POST['corresp_cobranca']);
// Aluno Telefone
            $ddd = addslashes($_POST['DDD']);
            $tel_residencial = addslashes($_POST['tel_residencial']);
            $obs_numero_residencial = addslashes($_POST['obs_numero_residencial']);
            $cob_num_residencial = addslashes($_POST['cob_num_residencial']);
            $ddd_comercial = addslashes($_POST['ddd_comercial']);
            $tel_comercial = addslashes($_POST['tel_comercial']);
            $obs_numero_comercial = addslashes($_POST['obs_numero_comercial']);
            $cob_num_comercial = addslashes($_POST['cob_num_comercial']);
// Deficiencias
            $def_auditiva = addslashes($_POST['def_auditiva']);
            $def_mental = addslashes($_POST['def_mental']);
            $baixa_visao = addslashes($_POST['baixa_visao']);
            $cegueira = addslashes($_POST['cegueira']);
            $def_visual = addslashes($_POST['def_visual']);
            $def_surdo_cegueira = addslashes($_POST['Def_surdo_cegueira']);
            $def_multiplas = addslashes($_POST['def_multiplas']);
            $sindrome_asperger = addslashes($_POST['sindrome_asperger']);
            $autismo_classico = addslashes($_POST['autismo_classico']);
            $sindrome_rett = addslashes($_POST['sindrome_rett']);
            $transt_desg_infancia = addslashes($_POST['transt_desg_infancia']);
            $psc_infant = addslashes($_POST['psc_infant']);
            $altas_hab = addslashes($_POST['altas_hab']);
            $laudo = addslashes($_POST['laudo']);
            $outras = addslashes($_POST['outras']);
// Dados Pai

            $pai_nome = addslashes($_POST['pai_nome']);
            $pai_nascimento = addslashes($_POST['pai_nascimento']);
            $estado_civil_pai = addslashes($_POST['estado_civil_pai']);
            $pai_profissao = addslashes($_POST['pai_profissao']);
            $pai_cpf = addslashes($_POST['pai_cpf']);
            $pai_rg = addslashes($_POST['pai_rg']);
            $pai_email = addslashes($_POST['pai_email']);
            $pai_empresa = addslashes($_POST['pai_empresa']);
            $pai_cargo_empresa = addslashes($_POST['pai_cargo_empresa']);
            $pai_ddd_residencial = addslashes($_POST['pai_ddd_residencial']);
            $pai_obs_numero_residencial = addslashes($_POST['pai_obs_numero_residencial']);
            $pai_cob_num_residencial = addslashes($_POST['pai_cob_num_residencial']);
            $pai_sms_num_residencial = addslashes($_POST['pai_sms_num_residencial']);
            $pai_ddd_comercial = addslashes($_POST['pai_ddd_comercial']);
            $pai_tel_comercial = addslashes($_POST['pai_tel_comercial']);
            $pai_obs_numero_comercial = addslashes($_POST['pai_obs_numero_comercial']);
            $pai_cob_num_comercial = addslashes($_POST['pai_cob_num_comercial']);
            $pai_sms_num_comercial = addslashes($_POST['pai_sms_num_comercial']);
            $cep_pai = addslashes($_POST['cep_pai']);
            $endereço_pai = addslashes($_POST['endereço_pai']);
            $numero_res_pai = addslashes($_POST['numero_res_pai']);
            $complemento_pai = addslashes($_POST['complemento_pai']);
            $bairro_pai = addslashes($_POST['bairro_pai']);
            $cidade_pai = addslashes($_POST['cidade_pai']);
            $corresp_pai = addslashes($_POST['corresp_pai']);

// Dados Mãe
            $mae_nome = addslashes($_POST['mae_nome']);
            $mae_nascimento = addslashes($_POST['mae_nascimento']);
            $estado_civil_mae = addslashes($_POST['estado_civil_mae']);
            $mae_profissao = addslashes($_POST['mae_profissao']);
            $mae_cpf = addslashes($_POST['mae_cpf']);
            $mae_rg = addslashes($_POST['mae_rg']);
            $mae_email = addslashes($_POST['mae_email']);
            $mae_empresa = addslashes($_POST['mae_empresa']);
            $mae_cargo_empresa = addslashes($_POST['mae_cargo_empresa']);
            $mae_ddd_residencial = addslashes($_POST['mae_ddd_residencial']);
            $mae_tel_residencial = addslashes($_POST['mae_tel_residencial']);
            $mae_obs_numero_residencial = addslashes($_POST['mae_obs_numero_residencial']);
            $mae_cob_num_residencial = addslashes($_POST['mae_cob_num_residencial']);
            $mae_sms_num_residencial = addslashes($_POST['mae_sms_num_residencial']);
            $mae_ddd_comercial = addslashes($_POST['mae_ddd_comercial']);
            $mae_tel_comercial = addslashes($_POST['mae_tel_comercial']);
            $mae_obs_numero_comercial = addslashes($_POST['mae_obs_numero_comercial']);
            $mae_cob_num_comercial = addslashes($_POST['mae_cob_num_comercial']);
            $mae_sms_num_comercial = addslashes($_POST['mae_sms_num_comercial']);
            $cep_mae = addslashes($_POST['cep_mae']);
            $endereço_mae = addslashes($_POST['endereço_mae']);
            $numero_res_mae = addslashes($_POST['numero_res_mae']);
            $complemento_mae = addslashes($_POST['complemento_mae']);
            $bairro_mae = addslashes($_POST['bairro_mae']);
            $cidade_mae = addslashes($_POST['cidade_mae']);
            $corresp_mae = addslashes($_POST['corresp_mae']);

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
            
            // $id_aluno = $s->matricularAluno($nome, $nome_social, $sexo, $nascimento, $estado_civil, $profissao, $raca, $naturalidade, $nacionalidade, $uf, $email, $empresa, $cargo, $cpf, $rg, $orgao_expeditor, $rg_expedicao, $rg_uf,  $certidao, $num_certidao, $cartorio, $cert_livro, $folha, $cert_cidade, $cert_uf, $titulo_eleitor, $zona_eleitor, $secao_eleitor, $uf_eleitor, $certificado_reservista, $num_certificado, $categoria_reservista, $regiao_reservista, $uf_reservista, $cep_residencial, $endereco_residencial, $numero_residencial, $complemento_residencial, $bairro_residencial, $uf_residencial, $corresp_residencial, $cep_cobranca, $endereco_cobranca, $numero_cobranca, $complemento_cobranca, $bairro_cobranca, $uf_cobranca, $corresp_cobranca, $ddd, $tel_residencial, $obs_numero_residencial, $cob_num_residencial, $ddd_comercial, $tel_comercial, $obs_numero_comercial, $cob_num_comercial, $def_auditiva, $def_mental, $baixa_visao, $cegueira, $def_visual, $def_surdo_cegueira, $def_multiplas, $sindrome_asperger, $autismo_classico, $sindrome_rett, $transt_desg_infancia, $psc_infant, $altas_hab, $laudo, $outras, $pai_nome, $pai_nascimento, $estado_civil_pai, $pai_profissao, $pai_cpf, $pai_rg, $pai_email, $pai_empresa, $pai_cargo_empresa, $pai_ddd_residencial, $pai_obs_numero_residencial, $pai_cob_num_residencial, $pai_sms_num_residencial, $pai_ddd_comercial, $pai_tel_comercial, $pai_obs_numero_comercial, $pai_cob_num_comercial, $pai_sms_num_comercial, $cep_pai, $endereço_pai, $numero_res_pai, $complemento_pai, $bairro_pai, $cidade_pai, $corresp_pai, $mae_nome, $mae_nascimento, $estado_civil_mae, $mae_profissao, $mae_cpf, $mae_rg, $mae_email, $mae_empresa, $mae_cargo_empresa, $mae_ddd_residencial, $mae_tel_residencial, $mae_obs_numero_residencial, $mae_cob_num_residencial, $mae_sms_num_residencial, $mae_ddd_comercial, $mae_tel_comercial, $mae_obs_numero_comercial, $mae_cob_num_comercial, $mae_sms_num_comercial, $cep_mae, $endereço_mae, $numero_res_mae, $complemento_mae, $bairro_mae, $cidade_mae, $corresp_mae, $responsavel_financeiro, $resp_financ_nome, $resp_financ_nascimento, $estado_civil_resp_financ, $resp_financ_profissao, $resp_financ_cpf, $resp_financ_rg, $resp_financ_email, $resp_financ_empresa, $resp_financ_cargo_empresa, $resp_financ_ddd_residencial, $resp_financ_tel_residencial, $resp_financ_obs_numero_residencial, $resp_financ_cob_num_residencial, $resp_financ_ddd_comercial, $resp_financ_tel_comercial, $resp_financ_obs_numero_comercial, $resp_financ_cob_num_comercial,$resp_financ_ddd_celular, $resp_financ_tel_celular, $resp_financ_obs_numero_celular, $resp_financ_cob_num_celular, $resp_financ_ddd_adicional, $resp_financ_tel_adicional, $resp_financ_cob_num_adicional, $cep_resp_financ, $endereço_resp_financ, $numero_res_resp_financ, $complemento_resp_financ, $bairro_resp_financ, $cidade_resp_financ, $corresp_resp_financ, $responsavel_acad, $resp_acad_nome, $resp_acad_nascimento, $estado_civil_resp_acad, $resp_acad_profissao, $resp_acad_cpf, $resp_acad_rg, $resp_acad_email, $resp_acad_empresa, $resp_acad_cargo_empresa, $resp_acad_ddd_residencial, $resp_acad_tel_residencial, $resp_acad_obs_numero_residencial, $resp_acad_cob_num_residencial, $resp_acad_ddd_comercial, $resp_acad_tel_comercial, $resp_acad_obs_numero_comercial,$resp_acad_cob_num_comercial, $resp_acad_ddd_celular, $resp_acad_tel_celular, $resp_acad_obs_numero_celular, $resp_acad_cob_num_celular, $resp_acad_ddd_adicional, $resp_acad_tel_adicional, $resp_acad_cob_num_adicional, $cep_resp_acad, $endereço_resp_acad, $numero_res_resp_acad, $complemento_resp_acad, $bairro_resp_acad, $cidade_resp_acad, $corresp_resp_acad );

            // Plano, dia venc, dia_lim, primeiro_vencimento, vlr_entrada, qtd_parcelas, vlr_parcelas, motivo_cobranca, valor_cobranca, perc, mes_inicial, mes_final, ano_final, cond


        }

        
        $dados['cursos'] = $s->getFromTable('cursos');

        $this->loadTemplate('matricular_aluno', $dados, 'secretaria');
    }
}