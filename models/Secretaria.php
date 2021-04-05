<?php
class Secretaria extends Model{
    public function isLogged(){
        if(isset($_SESSION['secretaria']) && !empty($_SESSION['secretaria'])){
            return true;
        }else{
            return false;
        }
    }

    public function login($email, $pass){
        $sql = "SELECT id FROM admin WHERE email = :email AND pass = :pass";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':pass', md5($pass));
        $sql->execute();

        if($sql->rowCount() > 0){
            $data = $sql->fetch();

            $_SESSION['secretaria'] = $data['id'];
            return true;
        }else{
            return false;
        }
    }

    public function logout(){
        unset($_SESSION['secretaria']);
        header('Location: '.BASE_URL.'secretaria');
    }

    public function cadastrarCurso($nome_curso, $abrev, $area, $curso_nos_documentos, $cod_inep, $cod_modalidade_inep, $cod_polo_de_ed_dist_inep, $grade_unica, $grade_unica_excecao, $educacao_a_distancia, $coordenador_curso, $coordenador_estagio, $titulo, $titulacao, $eixo_tecnologico, $area_conhecimento, $area_concentracao, $habilitacao, $autorizacao, $reconhecimento, $renovacao_reconhecimento, $amparo_legal, $perfil_profissional, $observacao, $prefixo_curso, $mostrar_faltas, $separar_garga_horaria_pratica, $separar_carga_horaria_dispensa, $mostrar_ano_semestre, $mostrar_titulo_periodo, $subistituir_dispensa, $subistituir_pendente, $nome_ch, $abrev_ch, $nome_ch_anual, $abrev_ch_anual, $curso_equival, $observacao_historico, $periodo_letivo, $desbloquear_prof){
        $sql = "INSERT INTO cursos SET id_coordenador = :id_coordenador, nome_curso = :nome_curso, abrev = :abrev, area = :area, curso_no_doc = :curso_no_doc, cod_inep = :cod_inep, cod_mod_inep = :cod_mod_inep, cod_polo_ed_dist = :cod_polo_ed_dist, grade_unica = :grade_unica, grade_unica_excecao = :grade_unica_excecao, educacao_distancia = :educacao_distancia, titulo = :titulo, titulacao = :titulacao, eixo_tecnologico = :eixo_tecnologico, area_conhecimento = :area_conhecimento, area_concentracao = :area_concentracao, habilitacao = :habilitacao, autorizacao = :autorizacao, reconhecimento = :reconhecimento, renovacao_conhecimento = :renovacao_conhecimento, amparo_legal = :amparo_legal, perfil_profissional = :perfil_profissional, observacao = :observacao, prefixo_curso = :prefixo_curso, mostrar_faltas = :mostrar_faltas, separar_carg_hor_pratica = :separar_carg_hor_pratica, separar_carg_hor_dispensa = :separar_carg_hor_dispensa, mostrar_ano_semestre = :mostrar_ano_semestre, mostrar_titulo_periodo = :mostrar_titulo_periodo, substituir_dispensa_aproveitamento = :substituir_dispensa_aproveitamento, substituir_pendente_acursar = :substituir_pendente_acursar, nome_ch = :nome_ch, abrev_ch = :abrev_ch, nome_ch_anual = :nome_ch_anual, abrev_ch_anual = :abrev_ch_anual, id_curso_equivalencia = :id_curso_equivalencia, observacao_historico = :observacao_historico, periodo_letivo_encerrado = :periodo_letivo_encerrado, desbloq_prof_ano_let_1 = :desbloq_prof_ano_let_1, id_inst = :id_inst";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_coordenador', $coordenador_curso);
        $sql->bindValue(':nome_curso', $nome_curso);
        $sql->bindValue(':abrev', $abrev);
        $sql->bindValue(':area', $area);
        $sql->bindValue(':curso_no_doc', $curso_nos_documentos);
        $sql->bindValue(':cod_inep', $cod_inep);
        $sql->bindValue(':cod_mod_inep', $cod_modalidade_inep);
        $sql->bindValue(':cod_polo_ed_dist', $cod_polo_de_ed_dist_inep);
        $sql->bindValue(':grade_unica', $grade_unica);
        $sql->bindValue(':grade_unica_excecao', $grade_unica_excecao);
        $sql->bindValue(':educacao_distancia', $educacao_a_distancia);
        $sql->bindValue(':titulo', $titulo);
        $sql->bindValue(':titulacao', $titulacao);
        $sql->bindValue(':eixo_tecnologico', $eixo_tecnologico);
        $sql->bindValue(':area_conhecimento', $area_conhecimento);
        $sql->bindValue(':area_concentracao', $area_concentracao);
        $sql->bindValue(':habilitacao', $habilitacao);
        $sql->bindValue(':autorizacao', $autorizacao);
        $sql->bindValue(':reconhecimento', $reconhecimento);
        $sql->bindValue(':renovacao_conhecimento', $renovacao_reconhecimento);
        $sql->bindValue(':amparo_legal', $amparo_legal);
        $sql->bindValue(':perfil_profissional', $perfil_profissional);
        $sql->bindValue(':observacao', $observacao);
        $sql->bindValue(':prefixo_curso', $prefixo_curso);
        $sql->bindValue(':mostrar_faltas', $mostrar_faltas);
        $sql->bindValue(':separar_carg_hor_pratica', $separar_garga_horaria_pratica);
        $sql->bindValue(':separar_carg_hor_dispensa', $separar_carga_horaria_dispensa);
        $sql->bindValue(':mostrar_ano_semestre', $mostrar_ano_semestre);
        $sql->bindValue(':mostrar_titulo_periodo', $mostrar_titulo_periodo);
        $sql->bindValue(':substituir_dispensa_aproveitamento', $subistituir_dispensa);
        $sql->bindValue(':substituir_pendente_acursar', $subistituir_pendente);
        $sql->bindValue(':nome_ch', $nome_ch);
        $sql->bindValue(':abrev_ch', $abrev_ch);
        $sql->bindValue(':nome_ch_anual', $nome_ch_anual);
        $sql->bindValue(':abrev_ch_anual', $abrev_ch_anual);
        $sql->bindValue(':id_curso_equivalencia', $curso_equival);
        $sql->bindValue(':observacao_historico', $observacao_historico);
        $sql->bindValue(':periodo_letivo_encerrado', $periodo_letivo);
        $sql->bindValue(':desbloq_prof_ano_let_1', $desbloquear_prof);
        $sql->bindValue(':id_inst', $_SESSION['secretaria']);
        $sql->execute();

        $idCurso = $this->db->lastInsertId();

        header('Location: '.BASE_URL.'secretaria/editarCurso/'.$idCurso.'?success=true'); 
    }

    public function getCursoInfo($idCurso){
        $array = array();

        $sql = "SELECT * FROM cursos WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $idCurso);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }

        return $array;
    }

    public function getFromTable($table){
        $array = array();

        $sql = "SELECT * FROM $table";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
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

    public function deleteFromTableWhere($table, $where){
        $sql = "DELETE FROM $table WHERE $where";
        $sql = $this->db->query($sql);

        return true;
    }

    public function getPeriodos($id_curso){
        $array = array();

        $sql = "SELECT * FROM periodos WHERE  id_curso = $id_curso ORDER BY sequencia ASC";
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();

            for($q=0;$q<count($array);$q++){
                $array[$q]['curso'] = $this->getFromTableWhere('cursos', 'id ='.$id_curso);
            }
        }

        return $array;
    }

    public function editarCurso($nome_curso, $abrev, $area, $curso_nos_documentos, $cod_inep, $cod_modalidade_inep, $cod_polo_de_ed_dist_inep, $grade_unica, $grade_unica_excecao, $educacao_a_distancia, $coordenador_curso, $coordenador_estagio, $titulo, $titulacao, $eixo_tecnologico, $area_conhecimento, $area_concentracao, $habilitacao, $autorizacao, $reconhecimento, $renovacao_reconhecimento, $amparo_legal, $perfil_profissional, $observacao, $prefixo_curso, $mostrar_faltas, $separar_garga_horaria_pratica, $separar_carga_horaria_dispensa, $mostrar_ano_semestre, $mostrar_titulo_periodo, $subistituir_dispensa, $subistituir_pendente, $nome_ch, $abrev_ch, $nome_ch_anual, $abrev_ch_anual, $curso_equival, $observacao_historico, $periodo_letivo, $desbloquear_prof, $id){
        $sql = "UPDATE cursos SET id_coordenador = :id_coordenador, nome_curso = :nome_curso, abrev = :abrev, area = :area, curso_no_doc = :curso_no_doc, cod_inep = :cod_inep, cod_mod_inep = :cod_mod_inep, cod_polo_ed_dist = :cod_polo_ed_dist, grade_unica = :grade_unica, grade_unica_excecao = :grade_unica_excecao, educacao_distancia = :educacao_distancia, titulo = :titulo, titulacao = :titulacao, eixo_tecnologico = :eixo_tecnologico, area_conhecimento = :area_conhecimento, area_concentracao = :area_concentracao, habilitacao = :habilitacao, autorizacao = :autorizacao, reconhecimento = :reconhecimento, renovacao_conhecimento = :renovacao_conhecimento, amparo_legal = :amparo_legal, perfil_profissional = :perfil_profissional, observacao = :observacao, prefixo_curso = :prefixo_curso, mostrar_faltas = :mostrar_faltas, separar_carg_hor_pratica = :separar_carg_hor_pratica, separar_carg_hor_dispensa = :separar_carg_hor_dispensa, mostrar_ano_semestre = :mostrar_ano_semestre, mostrar_titulo_periodo = :mostrar_titulo_periodo, substituir_dispensa_aproveitamento = :substituir_dispensa_aproveitamento, substituir_pendente_acursar = :substituir_pendente_acursar, nome_ch = :nome_ch, abrev_ch = :abrev_ch, nome_ch_anual = :nome_ch_anual, abrev_ch_anual = :abrev_ch_anual, id_curso_equivalencia = :id_curso_equivalencia, observacao_historico = :observacao_historico, periodo_letivo_encerrado = :periodo_letivo_encerrado, desbloq_prof_ano_let_1 = :desbloq_prof_ano_let_1 WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_coordenador', $coordenador_curso);
        $sql->bindValue(':nome_curso', $nome_curso);
        $sql->bindValue(':abrev', $abrev);
        $sql->bindValue(':area', $area);
        $sql->bindValue(':curso_no_doc', $curso_nos_documentos);
        $sql->bindValue(':cod_inep', $cod_inep);
        $sql->bindValue(':cod_mod_inep', $cod_modalidade_inep);
        $sql->bindValue(':cod_polo_ed_dist', $cod_polo_de_ed_dist_inep);
        $sql->bindValue(':grade_unica', $grade_unica);
        $sql->bindValue(':grade_unica_excecao', $grade_unica_excecao);
        $sql->bindValue(':educacao_distancia', $educacao_a_distancia);
        $sql->bindValue(':titulo', $titulo);
        $sql->bindValue(':titulacao', $titulacao);
        $sql->bindValue(':eixo_tecnologico', $eixo_tecnologico);
        $sql->bindValue(':area_conhecimento', $area_conhecimento);
        $sql->bindValue(':area_concentracao', $area_concentracao);
        $sql->bindValue(':habilitacao', $habilitacao);
        $sql->bindValue(':autorizacao', $autorizacao);
        $sql->bindValue(':reconhecimento', $reconhecimento);
        $sql->bindValue(':renovacao_conhecimento', $renovacao_reconhecimento);
        $sql->bindValue(':amparo_legal', $amparo_legal);
        $sql->bindValue(':perfil_profissional', $perfil_profissional);
        $sql->bindValue(':observacao', $observacao);
        $sql->bindValue(':prefixo_curso', $prefixo_curso);
        $sql->bindValue(':mostrar_faltas', $mostrar_faltas);
        $sql->bindValue(':separar_carg_hor_pratica', $separar_garga_horaria_pratica);
        $sql->bindValue(':separar_carg_hor_dispensa', $separar_carga_horaria_dispensa);
        $sql->bindValue(':mostrar_ano_semestre', $mostrar_ano_semestre);
        $sql->bindValue(':mostrar_titulo_periodo', $mostrar_titulo_periodo);
        $sql->bindValue(':substituir_dispensa_aproveitamento', $subistituir_dispensa);
        $sql->bindValue(':substituir_pendente_acursar', $subistituir_pendente);
        $sql->bindValue(':nome_ch', $nome_ch);
        $sql->bindValue(':abrev_ch', $abrev_ch);
        $sql->bindValue(':nome_ch_anual', $nome_ch_anual);
        $sql->bindValue(':abrev_ch_anual', $abrev_ch_anual);
        $sql->bindValue(':id_curso_equivalencia', $curso_equival);
        $sql->bindValue(':observacao_historico', $observacao_historico);
        $sql->bindValue(':periodo_letivo_encerrado', $periodo_letivo);
        $sql->bindValue(':desbloq_prof_ano_let_1', $desbloquear_prof);
        $sql->bindValue(':id', $id);
        $sql->execute();

        return true;
    }

    public function matricularAluno($nome, $nome_social, $sexo, $nascimento, $estado_civil, $profissao, $raca, $naturalidade, $nacionalidade, $uf, $email, $empresa, $cargo, $cpf, $rg, $orgao_expeditor, $rg_expedicao, $rg_uf, $certidao, $num_certidao, $cartorio, $cert_livro, $folha, $cert_cidade, $cert_uf, $titulo_eleitor, $zona_eleitor, $secao_eleitor, $uf_eleitor, $certificado_reservista, $num_certificado, $categoria_reservista, $regiao_reservista, $uf_reservista, $cep_residencial, $endereco_residencial, $numero_residencial, $complemento_residencial, $bairro_residencial, $uf_residencial, $corresp_residencial, $cep_cobranca, $endereco_cobranca, $numero_cobranca, $complemento_cobranca, $bairro_cobranca, $uf_cobranca, $corresp_cobranca, $ddd, $tel_residencial, $obs_numero_residencial, $cob_num_residencial, $ddd_comercial, $tel_comercial, $obs_numero_comercial, $cob_num_comercial, $def_auditiva, $def_mental, $baixa_visao, $cegueira, $def_visual, $def_surdo_cegueira, $def_multiplas, $sindrome_asperger, $autismo_classico, $sindrome_rett, $transt_desg_infancia, $psc_infant, $altas_hab, $laudo, $outras, $pai_nome, $pai_nascimento, $estado_civil_pai, $pai_profissao, $pai_cpf, $pai_rg, $pai_email, $pai_empresa, $pai_cargo_empresa, $pai_ddd_residencial, $pai_obs_numero_residencial, $pai_cob_num_residencial, $pai_sms_num_residencial, $pai_ddd_comercial, $pai_tel_comercial, $pai_obs_numero_comercial, $pai_cob_num_comercial, $pai_sms_num_comercial, $cep_pai, $endereço_pai, $numero_res_pai, $complemento_pai, $bairro_pai, $cidade_pai, $corresp_pai, $mae_nome, $mae_nascimento, $estado_civil_mae, $mae_profissao, $mae_cpf, $mae_rg, $mae_email, $mae_empresa, $mae_cargo_empresa, $mae_ddd_residencial, $mae_tel_residencial, $mae_obs_numero_residencial, $mae_cob_num_residencial, $mae_sms_num_residencial, $mae_ddd_comercial, $mae_tel_comercial, $mae_obs_numero_comercial, $mae_cob_num_comercial, $mae_sms_num_comercial, $cep_mae, $endereço_mae, $numero_res_mae, $complemento_mae, $bairro_mae, $cidade_mae, $corresp_mae, $responsavel_financeiro, $resp_financ_nome, $resp_financ_nascimento, $estado_civil_resp_financ, $resp_financ_profissao, $resp_financ_cpf, $resp_financ_rg, $resp_financ_email, $resp_financ_empresa, $resp_financ_cargo_empresa, $resp_financ_ddd_residencial, $resp_financ_tel_residencial, $resp_financ_obs_numero_residencial, $resp_financ_cob_num_residencial, $resp_financ_ddd_comercial, $resp_financ_tel_comercial, $resp_financ_obs_numero_comercial, $resp_financ_cob_num_comercial,$resp_financ_ddd_celular, $resp_financ_tel_celular, $resp_financ_obs_numero_celular, $resp_financ_cob_num_celular, $resp_financ_ddd_adicional, $resp_financ_tel_adicional, $resp_financ_cob_num_adicional, $cep_resp_financ, $endereço_resp_financ, $numero_res_resp_financ, $complemento_resp_financ, $bairro_resp_financ, $cidade_resp_financ, $corresp_resp_financ, $responsavel_acad, $resp_acad_nome, $resp_acad_nascimento, $estado_civil_resp_acad, $resp_acad_profissao, $resp_acad_cpf, $resp_acad_rg, $resp_acad_email, $resp_acad_empresa, $resp_acad_cargo_empresa, $resp_acad_ddd_residencial, $resp_acad_tel_residencial, $resp_acad_obs_numero_residencial, $resp_acad_cob_num_residencial, $resp_acad_ddd_comercial, $resp_acad_tel_comercial, $resp_acad_obs_numero_comercial,$resp_acad_cob_num_comercial, $resp_acad_ddd_celular, $resp_acad_tel_celular, $resp_acad_obs_numero_celular, $resp_acad_cob_num_celular, $resp_acad_ddd_adicional, $resp_acad_tel_adicional, $resp_acad_cob_num_adicional, $cep_resp_acad, $endereço_resp_acad, $numero_res_resp_acad, $complemento_resp_acad, $bairro_resp_acad, $cidade_resp_acad, $corresp_resp_acad ){

        $resp_financ = $responsavel_financeiro;
        $resp_acad = $responsavel_acad;

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

       $sql = "INSERT INTO alunos SET aluno_nome = :aluno_nome, aluno_nome_social = :aluno_nome_social, aluno_sexo = :aluno_sexo, aluno_nascimento = :aluno_nascimento, aluno_estado_civil = :aluno_estado_civil, aluno_profissao = :aluno_profissao, aluno_raca = :aluno_raca, aluno_naturalidade = :aluno_naturalidade, aluno_uf = :aluno_uf, aluno_nacionalidade = :aluno_nacionalidade, aluno_email = :aluno_email, aluno_empresa = :aluno_empresa, aluno_cargo = :aluno_cargo, aluno_cpf = :aluno_cpf, aluno_rg = :aluno_rg, aluno_rg_orgao_exp = :aluno_rg_orgao_exp, aluno_rg_data_exp = :aluno_rg_data_exp, aluno_rg_uf = :aluno_rg_uf, aluno_certidao = :aluno_certidao, aluno_certidao_num = :aluno_certidao_num, aluno_certidao_cartorio = :aluno_certidao_cartorio, aluno_certidao_livro = :aluno_certidao_livro, aluno_certidao_folha = :aluno_certidao_folha, aluno_certidao_cidade = :aluno_certidao_cidade, aluno_certidao_uf = :aluno_certidao_uf, aluno_tit_eleit = :aluno_tit_eleit, aluno_tit_eleit_zona = :aluno_tit_eleit_zona, aluno_tit_eleit_secao = :aluno_tit_eleit_secao, aluno_tit_eleit_uf = :aluno_tit_eleit_uf, aluno_cert_reserv = :aluno_cert_reserv, aluno_cert_reserv_numero = :aluno_cert_reserv_numero, aluno_cert_reserv_categ = :aluno_cert_reserv_categ, aluno_cert_reserv_reg = :aluno_cert_reserv_reg, aluno_cert_reserv_uf = :aluno_cert_reserv_uf, aluno_cep = :aluno_cep, aluno_rua = :aluno_rua, aluno_numero = :aluno_numero, aluno_complemento = :aluno_complemento, aluno_bairro = :aluno_bairro, aluno_cidade = :aluno_cidade, aluno_end_uf = :aluno_end_uf, :aluno_end_corresp = :aluno_end_corresp, aluno_cobr_cep = :aluno_cobr_cep, aluno_cobr_rua = :aluno_cobr_rua, aluno_cobr_numero = :aluno_cobr_numero, aluno_cobr_complemento = :aluno_cobr_complemento, aluno_cobr_bairro = :aluno_cobr_bairro, aluno_cobr_cidade = :aluno_cobr_cidade, aluno_cobr_uf = :aluno_cobr_uf, aluno_cobr_corresp = :aluno_cobr_corresp, aluno_tel_1 = :aluno_tel_1, aluno_tel_1_obs = :aluno_tel_1_obs, aluno_tel_2_cobr = :aluno_tel_2_cobr, aluno_tel_1_cobr = :aluno_tel_1_cobr, aluno_tel_1_sms = :aluno_tel_1_sms,  aluno_tel_2 = :aluno_tel_2, aluno_tel_2_obs = :aluno_tel_2_obs, aluno_tel_2_cob = :aluno_tel_2_cob, aluno_tel_2_sms = :aluno_tel_2_sms, aluno_def_auditiva = :aluno_def_auditiva, aluno_def_mental = :aluno_def_mental, aluno_def_baixa_visao = :aluno_def_baixa_visao, aluno_def_visual = :aluno_def_visual, aluno_def_surdo_cego = :aluno_def_surdo_cego, aluno_def_multiplas = :aluno_def_multiplas, aluno_def_sindrom_asperger = :aluno_def_sindrom_asperger, aluno_def_autism_class = :aluno_def_autism_class, aluno_def_sind_rett = :aluno_def_sind_rett, aluno_def_tdi = :aluno_def_tdi, aluno_def_psic_infant = :aluno_def_psic_infant, aluno_def_altas_hab = :aluno_def_altas_hab, aluno_def_outras = :aluno_def_outras, aluno_def_laudo = :aluno_def_laudo, pai_nome = :pai_nome, pai_nascimento = :pai_nascimento, pai_estado_civil = :pai_estado_civil, pai_cpf = :pai_cpf, pai_rg = :pai_rg, pai_email = :pai_email, pai_empresa = :pai_empresa, pai_cargo = :pai_cargo, pai_tel_1 = :pai_tel_1, pai_tel_1_obs = :pai_tel_1_obs, pai_tel_2 = :pai_tel_2, pai_tel_2_obs = :pai_tel_2_obs, pai_cep = :pai_cep, pai_rua = :pai_rua, pai_num = :pai_num, pai_complemento = :pai_complemento, pai_cidade = :pai_cidade, pai_uf = :pai_uf, pai_end_corresp = :pai_end_corresp, mae_nome = :mae_nome, mae_nascimento = :mae_nascimento, mae_estado_civil = :mae_estado_civil, mae_profissao = :mae_profissao, mae_cpf = :mae_cpf, mae_rg = :mae_rg, mae_email = :mae_email, mae_empresa = :mae_empresa, mae_cargo = :mae_cargo, mae_tel_1 = :mae_tel_1, mae_tel_1_obs = :mae_tel_1_obs, mae_tel_1_cob = :mae_tel_1_cob, mae_tel_1_sms = :mae_tel_1_sms, mae_tel_2 = :mae_tel_2, mae_tel_2_obs = :mae_tel_2_obs, mae_tel_2_cob = :mae_tel_2_cob, mae_tel_2_sms = :mae_tel_2_sms, mae_cep = :mae_cep, mae_rua = :mae_rua, mae_numero = :mae_numero, mae_complemento = :mae_complemento, mae_bairro = :mae_bairro, mae_cidade = :mae_cidade, mae_uf = :mae_uf, mae_end_corresp = :mae_end_corresp, resp_financ = :resp_financ, resp_academ = :resp_academ";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':aluno_nome', $nome);
        $sql->bindValue(':aluno_nome_social', $nome_social);
        $sql->bindValue(':aluno_sexo', $sexo);
        $sql->bindValue(':aluno_nascimento', $nascimento);
        $sql->bindValue(':aluno_estado_civil', $estado_civil);
        $sql->bindValue(':aluno_profissao', $profissao);
        $sql->bindValue(':aluno_raca', $raca);
        $sql->bindValue(':aluno_naturalidade', $naturalidade);
        $sql->bindValue(':aluno_nacionalidade', $nacionalidade);
        $sql->bindValue(':aluno_uf', $uf);
        $sql->bindValue(':aluno_email', $email);
        $sql->bindValue(':aluno_empresa', $empresa);
        $sql->bindValue(':aluno_cargo', $cargo);
        $sql->bindValue(':aluno_cpf', $cpf);
        $sql->bindValue(':aluno_rg', $rg);
        $sql->bindValue(':aluno_rg_orgao_exp', $orgao_expeditor);
        $sql->bindValue(':aluno_rg_data_exp', $rg_expedicao);
        $sql->bindValue(':aluno_rg_uf', $rg_uf);
        $sql->bindValue(':aluno_certidao', $certidao);
        $sql->bindValue(':aluno_certidao_num', $num_certidao);
        $sql->bindValue(':aluno_certidao_cartorio', $cartorio);
        $sql->bindValue(':aluno_certidao_livro', $cert_livro);
        $sql->bindValue(':aluno_certidao_folha', $folha);
        $sql->bindValue(':aluno_certidao_cidade', $cert_cidade);
        $sql->bindValue(':aluno_certidao_uf', $cert_uf);
        $sql->bindValue(':aluno_tit_eleit', $titulo_eleitor);
        $sql->bindValue(':aluno_tit_eleit_zona', $zona_eleitor);
        $sql->bindValue(':aluno_tit_eleit_secao', $secao_eleitor);
        $sql->bindValue(':aluno_tit_eleit_uf', $uf_eleitor);
        $sql->bindValue(':aluno_cert_reserv', $certificado_reservista);
        $sql->bindValue(':aluno_cert_reserv_numero', $num_certificado);
        $sql->bindValue(':aluno_cert_reserv_categ', $categoria_reservista);
        $sql->bindValue(':aluno_cert_reserv_reg', $regiao_reservista);
        $sql->bindValue(':aluno_cert_reserv_uf', $uf_reservista);
        $sql->bindValue(':aluno_cep', $cep_residencial);
        $sql->bindValue(':aluno_rua', $endereco_residencial);
        $sql->bindValue(':aluno_numero', $numero_residencial);
        $sql->bindValue(':aluno_complemento', $complemento_residencial);
        $sql->bindValue(':aluno_bairro', $bairro_residencial);
        $sql->bindValue(':aluno_cidade', 'providenciar');
        $sql->bindValue(':aluno_end_uf', $uf_residencial);
        $sql->bindValue(':aluno_end_corresp', $corresp_residencial);
        $sql->bindValue(':aluno_cobr_cep', $cep_cobranca);
        $sql->bindValue(':aluno_cobr_rua', $endereco_cobranca);
        $sql->bindValue(':aluno_cobr_numero', $numero_cobranca);
        $sql->bindValue(':aluno_cobr_complemento', $complemento_cobranca);
        $sql->bindValue(':aluno_cobr_bairro', $bairro_cobranca);
        $sql->bindValue(':aluno_cobr_cidade', 'providenciar');
        $sql->bindValue(':aluno_cobr_uf', $uf_cobranca);
        $sql->bindValue(':aluno_cobr_corresp', $corresp_cobranca);
        $sql->bindValue(':aluno_tel_1', $ddd.$tel_residencial);
        $sql->bindValue(':aluno_tel_1_cobr', $cob_num_residencial);
        $sql->bindValue(':aluno_tel_1_sms', 'providenciar');
        $sql->bindValue(':aluno_tel_1_obs', $obs_numero_residencial);
        $sql->bindValue(':aluno_tel_2', $ddd_comercial.$tel_comercial);
        $sql->bindValue(':aluno_tel_2_obs', $obs_numero_comercial);
        $sql->bindValue(':aluno_tel_2_cob', $cob_num_comercial);
        $sql->bindValue(':aluno_tel_2_sms', 'providenciar');
        $sql->bindValue(':aluno_def_auditiva', $def_auditiva);
        $sql->bindValue(':aluno_def_mental', $def_mental);
        $sql->bindValue(':aluno_def_baixa_visao', $baixa_visao);
        $sql->bindValue(':aluno_def_visual', $def_visual);
        $sql->bindValue(':aluno_def_surdo_cego', $def_surdo_cegueira);
        $sql->bindValue(':aluno_def_multiplas', $def_multiplas);
        $sql->bindValue(':aluno_def_sindrom_asperger', $sindrome_asperger);
        $sql->bindValue(':aluno_def_autism_class', $autismo_classico);
        $sql->bindValue(':aluno_def_sind_rett', $sindrome_rett);
        $sql->bindValue(':aluno_def_tdi', $transt_desg_infancia);
        $sql->bindValue(':aluno_def_psic_infant', $psc_infant);
        $sql->bindValue(':aluno_def_altas_hab', $altas_hab);
        $sql->bindValue(':aluno_def_outras', $outras);
        $sql->bindValue(':aluno_def_laudo', $laudo);
        $sql->bindValue(':pai_nome', $pai_nome);
        $sql->bindValue(':pai_nascimento', $pai_nascimento);
        $sql->bindValue(':pai_estado_civil', $estado_civil_pai);
        $sql->bindValue(':pai_cpf', $pai_cpf);
        $sql->bindValue(':pai_rg', $pai_rg);
        $sql->bindValue(':pai_email', $pai_email);
        $sql->bindValue(':pai_empresa', $pai_empresa);
        $sql->bindValue(':pai_cargo', $pai_cargo_empresa);
        $sql->bindValue(':pai_tel_1', $pai_ddd_residencial.'providenciar');
        $sql->bindValue(':pai_tel_1_obs', $pai_obs_numero_residencial);
        $sql->bindValue(':pai_tel_2', $pai_ddd_comercial.$pai_tel_comercial);
        $sql->bindValue(':pai_tel_2_obs', $pai_obs_numero_comercial);
        $sql->bindValue(':pai_cep', $cep_pai);
        $sql->bindValue(':pai_rua', $endereço_pai);
        $sql->bindValue(':pai_num', $numero_res_pai);
        $sql->bindValue(':pai_complemento', $complemento_pai);
        $sql->bindValue(':pai_cidade', $cidade_pai);
        $sql->bindValue(':pai_uf', 'providenciar');
        $sql->bindValue(':pai_end_corresp', $corresp_pai);
        $sql->bindValue(':mae_nome', $mae_nome);
        $sql->bindValue(':mae_nascimento', $mae_nascimento);
        $sql->bindValue(':mae_estado_civil', $estado_civil_mae);
        $sql->bindValue(':mae_profissao', $mae_profissao);
        $sql->bindValue(':mae_cpf', $mae_cpf);
        $sql->bindValue(':mae_rg', $mae_rg);
        $sql->bindValue(':mae_email', $mae_email);
        $sql->bindValue(':mae_empresa', $mae_empresa);
        $sql->bindValue(':mae_cargo', $mae_cargo_empresa);
        $sql->bindValue(':mae_tel_1', $mae_ddd_residencial.$mae_tel_residencial);
        $sql->bindValue(':mae_tel_1_obs', $mae_obs_numero_residencial);
        $sql->bindValue(':mae_tel_1_cob', $mae_cob_num_residencial);
        $sql->bindValue(':mae_tel_1_sms', $mae_sms_num_residencial);
        $sql->bindValue(':mae_tel_2', $mae_ddd_comercial.$mae_tel_comercial);
        $sql->bindValue(':mae_tel_2_obs', $mae_obs_numero_comercial);
        $sql->bindValue(':mae_tel_2_cob', $mae_cob_num_comercial);
        $sql->bindValue(':mae_tel_2_sms', $mae_sms_num_comercial);
        $sql->bindValue(':mae_cep', $cep_mae);
        $sql->bindValue(':mae_rua', $endereço_mae);
        $sql->bindValue(':mae_numero', $numero_res_mae);
        $sql->bindValue(':mae_complemento', $complemento_mae);
        $sql->bindValue(':mae_bairro', $bairro_mae);
        $sql->bindValue(':mae_cidade', $cidade_mae);
        $sql->bindValue(':mae_uf', 'Providenciar');
        $sql->bindValue(':mae_end_corresp', $corresp_mae);
        $sql->bindValue(':resp_financ', $resp_financ);
        $sql->bindValue(':resp_academ', $resp_acad);
        $sql->execute();

        return $this->db->lastInsertId();
    }
}