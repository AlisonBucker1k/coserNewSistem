<?php require_once(APPPATH.'views/comuns/secretaria/header.php'); ?>
<div class="page-container">
    <div class="page-header">
        <nav class="navbar navbar-expand">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav">
                <li class="nav-item small-screens-sidebar-link">
                    <a href="#" class="nav-link"><i class="material-icons-outlined">menu</i></a>
                </li>
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo base_url();?>assets/images/avatars/profile-image-1.png" alt="profile image">
                        <span>Nancy Moore</span><i class="material-icons dropdown-icon">keyboard_arrow_down</i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Calendar<span class="badge badge-pill badge-info float-right">2</span></a>
                        <a class="dropdown-item" href="#">Settings &amp Privacy</a>
                        <a class="dropdown-item" href="#">Switch Account</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Log out</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="material-icons-outlined">mail</i></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="material-icons-outlined">notifications</i></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" id="dark-theme-toggle"><i class="material-icons-outlined">brightness_2</i><i class="material-icons">brightness_2</i></a>
                </li>
            </ul>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Tasks</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Reports</a>
                    </li>
                </ul>
            </div>
            <div class="navbar-search">
                <form>
                    <div class="form-group">
                        <input type="text" name="search" id="nav-search" placeholder="Search...">
                    </div>
                </form>
            </div>
        </nav>
    </div>
    <div class="page-content">
        <div class="page-info">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Apps</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cadastrar Diciplina</li>
                </ol>
            </nav>
            <div class="page-options">
                <a href="#" class="btn btn-secondary">Settings</a>
                <a href="#" class="btn btn-primary">Upgrade</a>
            </div>
        </div>
        <div class="main-wrapper">
            <div class="row">
                <div class="col-xl">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Cadastrar Diciplina</h5>
                            <p>Area destinada ao cadastro de Diciplinas. </p>
                            <form method="POST">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Nome do Curso</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome_curso">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Abrev.</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="abrev">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Area.</label>
                                        <select id="inputState" class="form-control custom-select" name="area">
                                            <option selected="">Escolher Area...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Curso nos Documentos</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cursos_nos_documentos">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Cod. INEP</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="cod_inep">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Cod. Modalidade INEP</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="cod_modalidade_inep">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Cód. polo de Ed. Dist. (INEP).</label> 
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cod_polo_de_ed_dist_inep">
                                    </div>
                                   
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Grade Única</label>
                                        <select id="inputState" class="form-control custom-select" name="grade_unica">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputPassword1">Grade única (EXCEÇÃO)</label>
                                        <select id="inputState" class="form-control custom-select" name="grade_unica_excecao">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputPassword1">Educação A Distancia</label>
                                        <select id="inputState" class="form-control custom-select" name="educacao_a_distancia">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                   
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Coordenador do Curso</label>
                                        <select id="inputState" class="form-control custom-select" name="coordenador_curso">
                                            <option value="">Selecionar</option>
                                            <!-- Foreach com os coordenadores -->
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Coordenador do Estágio</label>
                                        <select id="inputState" class="form-control custom-select" name="coordenador_estagio">
                                            <option value="">Selecionar</option>
                                            <!-- Foreach com os coordenadores -->
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Titulo</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="titulo">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Titulação</label> 
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="titulacao">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Eixo Tecnológico</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="eixo_tecnologico">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Área do Conhecimento</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="area_conhecimento">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Área de Concentração</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="area_concentracao">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Habilitação</label> 
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="habilitacao">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Autorização</label>
                                        <textarea name="autorizacao" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" id="" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Reconhecimento</label>
                                        <textarea name="reconhecimento" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" id="" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Renovação do Reconhecimento</label>
                                        <textarea name="renovacao_reconhecimento" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" id="" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Amparo Legal (Certificado/Diploma)</label> 
                                        <textarea name="amparo_legal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Perfil Profissional</label>
                                        <textarea name="perfil_profissional" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" id="" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Observação</label>
                                        <textarea name="observacao" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Link para matricula </label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="eixo_tecnologico">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Área do Conhecimento</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="area_conhecimento">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Área de Concentração</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="area_concentracao">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Habilitação</label> 
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="habilitacao">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputEmail1">Link para matricula online em 1</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="link_matricula">
                                        <small id="emailHelp" class="form-text text-muted">(para preenchimento do campo destino na criação dos menus. No link acima o período letivo encontra-se precediso por "an=" e o período precedido por "pr=", caso seja necessário alterar.)</small>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Prefixo do Curso</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="prefixo_curso">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Mostrar Faltas</label>
                                        <select id="inputState" class="form-control custom-select" name="mostrar_faltas">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Separar Carga Horaria Prática</label>
                                        <select id="inputState" class="form-control custom-select" name="separar_carga_horaria_pratica">
                                        <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Separar carga horária de dispensa</label>
                                        <select id="inputState" class="form-control custom-select" name="separar_carga_horaria_dispensa">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Mostrar Ano / Semestre</label>
                                        <select id="inputState" class="form-control custom-select" name="mostrar_ano_semestre">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Mostrar título de período</label>
                                        <select id="inputState" class="form-control custom-select" name="mostrar_atitulo_periodo">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputEmail1">Substituir o nome "dispensa" por "aproveitamento de estudos"</label>
                                        <select id="inputState" class="form-control custom-select" name="subistituir_dispensa">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputEmail1">Substituir o nome "pendente" por "a cursar".</label>
                                        <select id="inputState" class="form-control custom-select" name="subistituir_pendente">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Nome da CH</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Nome_CH">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Abreviatura da CH</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="abrev_ch">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Nome da CH Anual</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome_ch_anual">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Abreviatura da CH Anual</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="abrev__ch_anual">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Curso Equivalência</label>
                                        <select id="inputState" class="form-control custom-select" name="coordenador_curso">
                                            <option value="">Selecionar</option>
                                            <!-- Foreach com os Cursos -->
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputEmail1">Observação do Histórico</label>
                                        <textarea name="observacao_historico" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="custom-control custom-checkbox form-group">
                                            <input type="checkbox" class="custom-control-input" id="exampleCheck1" name="periodo_letivo">
                                            <label class="custom-control-label" for="exampleCheck1">Período letivo de 1/1 encerrado para este curso.</label>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <div class="custom-control custom-checkbox form-group">
                                                <input type="checkbox" class="custom-control-input" id="exampleCheck2" name="desbloquear_professores">
                                                <label class="custom-control-label" for="exampleCheck2">Desbloquear professores para o período letivo de 1/1</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Cadastrar Curso</button>
                            </form>

                            <h5 class="card-title" style="margin-top: 50px;">Cadastrar Períodos</h5>
                            <p>Area destinada ao cadastro de Períodos. </p>

                            <form action="" >
                               <div class="form-row">
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Período</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="periodo">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Abrev.</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="abrev">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Documento</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="documento">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Nível</label>
                                        <select id="inputState" class="form-control custom-select" name="nivel">
                                            <option value="">Selecionar</option>
                                            <!-- Foreach com os Cursos -->
                                        </select>
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Cod. Etapa (INEP)</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cod_etapa">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <div class="custom-control custom-checkbox form-group">
                                            <label for="exampleInputEmail1">Faltas Por Dia</label>
                                            <select id="inputState" class="form-control custom-select" name="faltas_dia">
                                                <option value="1">Sim</option>
                                                <option value="0">Não</option>
                                                <!-- Foreach com os Cursos -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <div class="custom-control custom-checkbox form-group">
                                            <label for="exampleInputEmail1">Certificado</label>
                                            <select id="inputState" class="form-control custom-select" name="certificado">
                                                <option value="1">Sim</option>
                                                <option value="0">Não</option>
                                                <!-- Foreach com os Cursos -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <div class="custom-control custom-checkbox form-group">
                                            <div class="custom-control custom-checkbox form-group">
                                                <label for="exampleInputEmail1">Diploma</label>
                                                <select id="inputState" class="form-control custom-select" name="diploma">
                                                    <option value="1">Sim</option>
                                                    <option value="0">Não</option>
                                                    <!-- Foreach com os Cursos -->
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Equiv.</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="equiv">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Excl.</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="excl">
                                    </div>
                                    
                                </div>
                                <button type="submit" class="btn btn-primary">Cadastrar Períodos</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require_once(APPPATH.'views/comuns/secretaria/footer.php'); ?>