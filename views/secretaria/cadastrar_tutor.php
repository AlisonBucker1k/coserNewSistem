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
                    <li class="breadcrumb-item active" aria-current="page">Cadastrar Tutor</li>
                </ol>
            </nav>
            <div class="page-options">
                <a href="#" class="btn btn-secondary">Settings</a>
                <a href="#" class="btn btn-primary">Upgrade</a>
            </div>
        </div>
        <div class="main-wrapper">
            <form method="POST">
                <div class="row">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Cadastrar Tutor </h5>
                                <p>Area destinada ao cadastro de Tutores. </p>
                                
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Nome:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Nascimento:</label>
                                        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nascimento">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Estado Civil:</label>
                                        <select id="inputState" class="form-control custom-select" name="estado_civil">
                                            <option value="Falecido">Falecido</option>
                                            <option value="Não Cadastrado">(Não Cadastrado)</option>
                                            <option value="Casado">Casado(a)</option>
                                            <option value="Solteiro">Solteiro(a)</option>
                                            <option value="Divorciado">Divorciado(a)</option>
                                            <option value="Desquitado">Desquitado(a)</option>
                                            <option value="Viuvo">Viuvo(a)</option>
                                            <option value="Falecido(a)">Falecido(a)</option>
                                            <option value="Não Informado">Não Informado</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Profissão:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="profissao">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Estado Civil:</label>
                                        <select id="inputState" class="form-control custom-select" name="sexo">
                                            <option value="M">Masculino</option>
                                            <option value="F">Feminino</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">CPF:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cpf">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">RG:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="rg">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Orgão Expeditor:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="orgao_expeditor">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">UF:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="rg">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Data de Expedição:</label>
                                        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="data_expedicao">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Email:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Contato Da Empresa:</label>
                                        <select name="contato_empresa" id="" class="form-control">
                                            <option value="">-</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Função Na Empresa:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="funcao_empresa">
                                    </div>
                                </div>

                                <hr>

                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Certidão </label>
                                        <select id="inputState" class="form-control custom-select" name="certidao">
                                            <option value="nao">Não apresentou</option>
                                            <option value="nascimento">Nascimento</option>
                                            <option value="casamento">Casamento</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Num. Certidão</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="num_certidao">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Cartório</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="cartorio">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Livro</label>
                                        <input type="date" class="form-control" id="exampleInputPassword1" name="cert_livro">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputPassword1">Folha</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="folha">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputPassword1">Cidade</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="cert_cidade">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputPassword1">UF</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="cert_uf">
                                    </div>
                                </div>

                                <hr>

                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Titulo de Eleitor</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="titulo_eleitor">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Zona</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="zona_eleitor">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Seção</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="secao_eleitor">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">UF</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="uf_eleitor">
                                    </div>
                                </div>
                                
                                <hr>

                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Certificado de Reservista</label>
                                        <select id="inputState" class="form-control custom-select" name="certificado_reservista">
                                            <option value="nao">Não apresentou</option>
                                            <option value="alistamento">Alistamento</option>
                                            <option value="reservista">Reservista</option>
                                            <option value="disp">Disp. Corporação</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Num. Certificado</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="num_certificado">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Categoria</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="categoria_reservista">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Região</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="regiao_reservista">
                                    </div>

                                    <div class="form-group col-md-1">
                                        <label for="exampleInputPassword1">UF</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="uf_reservista">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Endereço</h5>
                                <!-- <p>Area destinada ao cadastro de Professores. </p> -->
                                
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Cep:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cep_residencial">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Endereço Residencial:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="endereco_residencial">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Bairro:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bairro_residencial">
                                    </div>

                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Número:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="numero_residencial">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Complemento:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="complemento_residencial">
                                    </div>

                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Cidade - UF:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ciade_uf_residencial">
                                    </div>

                                    <div class="form-group col-md-1">
                                        <label for="exampleInputPassword1">Corresp.</label>
                                        <select id="inputState" class="form-control custom-select" name="corresp_residencial">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Cep:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cep_comercial">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Endereço Comercial:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="endereco_comercial">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Bairro:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bairro_comercial">
                                    </div>

                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Número:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="numero_comercial">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Complemento:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="complemento_comercial">
                                    </div>

                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Cidade - UF:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ciade_uf_comercial">
                                    </div>

                                    <div class="form-group col-md-1">
                                        <label for="exampleInputPassword1">Corresp.</label>
                                        <select id="inputState" class="form-control custom-select" name="corresp_comercial">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Telefones</h5>
                                <!-- <p>Area destinada ao cadastro de Professores. </p> -->
                                
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">DDD:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ddd_residencial">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Telefone Residencial:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="telefone_residencial">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">OBS:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="obs_telefone_residencial">
                                    </div>
                                </div>

                                
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">DDD:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ddd_comercial">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Telefone Residencial:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="telefone_comercial">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">OBS:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="obs_telefone_comercial">
                                    </div>
                                </div>
                                
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">DDD:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ddd_movel">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Telefone Residencial:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="telefone_movel">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">OBS:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="obs_telefone_movel">
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Informações Funcionais</h5>

                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Data de Admição:</label>
                                        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="data_admicao">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Cargo:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cargo">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">OBS:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="obs_cargo">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Salário:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="salario">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Vale Transporte.</label>
                                        <select id="inputState" class="form-control custom-select" name="vale_transporte">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Data de Demissão:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="data_demissao">
                                    </div>

                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">CTPS Número:</label>
                                        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="numero_ctps">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">CTPS Série:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="serie_ctps">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">CTPS UF:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="uf_ctps">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">CTPS Data:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="data_ctps">
                                    </div>

                                   

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">OBS</h5>
                                <!-- <p>Area destinada ao cadastro de Professores. </p> -->
                                
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputEmail1">Habilitação:</label>
                                        <textarea name="habilitacao" id="" cols="30" rows="10" class="form-control"></textarea>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="exampleInputEmail1">OBS:</label>
                                        <textarea name="obs" id="" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                <div>
                            </div>
                        </div>
                    </div>
                </div>
                

                <button type="submit" class="btn btn-primary">Cadastrar Tutor</button>

            </form>
            
        </div>
    </div>
<?php require_once(APPPATH.'views/comuns/secretaria/footer.php'); ?>