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
                    <li class="breadcrumb-item active" aria-current="page">Cadastrar Turma</li>
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
                                <h5 class="card-title">Cadastrar Turma</h5>
                                <p>Area destinada ao cadastro de Turmas. </p>
                                
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Ano Ref </label>
                                        <select id="inputState" class="form-control custom-select" name="ano_turma">
                                            <option selected="">Escolher Ano...</option>
                                            <?php $ano = intval(date('Y')); ?>
                                            <?php for($q=$ano;$q<=($ano+6);$q++): ?>
                                                <option value="<?php echo $q; ?>"><?php echo $q; ?></option>
                                            <?php endfor; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword1">Curso</label>
                                        <select id="inputState" class="form-control custom-select" name="ano_turma">
                                            <option selected="">Escolher Curso...</option>
                                            <!-- Foreach nos cursos -->
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Período/Turma.</label>
                                        <select id="inputState" class="form-control custom-select" name="periodo_turma">
                                            <option selected="">Escolher Periodo / Turma...</option>
                                            <!-- Foreach Com os cursos -->
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
                                <h5 class="card-title">Turma</h5>
                                <!-- <p>Area destinada ao cadastro de Turmas. </p> -->
                                
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Ano </label>
                                        <select id="inputState" class="form-control custom-select" name="ano">
                                            <option selected="">Escolher Ano...</option>
                                            <?php $ano = intval(date('Y')); ?>
                                            <?php for($q=$ano;$q<=($ano+6);$q++): ?>
                                                <option value="<?php echo $q; ?>"><?php echo $q; ?></option>
                                            <?php endfor; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Período.</label>
                                        <select id="inputState" class="form-control custom-select" name="periodo">
                                            <option selected="">Escolher Periodo...</option>
                                            <!-- Foreach Com os cursos -->
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Turno.</label>
                                        <select id="inputState" class="form-control custom-select" name="turno">
                                            <option selected="">Escolher Turno...</option>
                                            <!-- Foreach Com os Turnos -->
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Matriz Curricular.</label>
                                        <select id="inputState" class="form-control custom-select" name="matriz_curricular">
                                            <option selected="">Escolher Matriz Curricular...</option>
                                            
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Vagas </label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="vagas">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Displnível</label>
                                        <select id="inputState" class="form-control custom-select" name="disponivel">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Sala </label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="sala">
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
                                <h5 class="card-title">Informações Complementares </h5>
                                <!-- <p>Area destinada ao cadastro de Turmas. </p> -->
                                
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Turma Complemento </label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="turma_complemento">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword1">Nome da Turma Para a Ata.</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="nome_turma_ata">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Data Início.</label>
                                        <input type="date" class="form-control" id="exampleInputPassword1" name="data_inicio">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Data Fim.</label>
                                        <input type="date" class="form-control" id="exampleInputPassword1" name="data_fim">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Dias Letivos </label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="vagas">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Período Encerrado</label>
                                        <input type="date" class="form-control" id="exampleInputPassword1" name="periodo_encerrado">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputPassword1">Realização.</label>
                                        <textarea name="realizacao" id="" cols="30" rows="10" class="form-control"></textarea>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="exampleInputPassword1">Complemento de contrato.</label>
                                        <textarea name="complemento_contrato" id="" cols="30" rows="10" class="form-control"></textarea>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="exampleInputPassword1">2º Complemento de Contrato.</label>
                                        <textarea name="complemento_contrato_2" id="" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword1">Relatório</label>
                                        <select id="inputState" class="form-control custom-select" name="relatorio">
                                            <option value="">---</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword1">Professor(a) (Para Ens. Fund.I / Ed.Infantil)</label>
                                        <select id="inputState" class="form-control custom-select" name="professor_ensino_fund_infant">
                                            <option value="">---</option>
                                        </select>
                                    </div>  
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword1">Texto de validade da Carteirinha.</label>
                                        <textarea name="text_val_carteirinha" id="" cols="30" rows="10" class="form-control"></textarea>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword1">Texto de Endereço Da Carteirinha.</label>
                                        <textarea name="texto_endereco_carteirinha" id="" cols="30" rows="10" class="form-control"></textarea>
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
                                <h5 class="card-title">Cobranças</h5>
                                <!-- <p>Area destinada ao cadastro de Turmas. </p> -->
                                
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Caixa Padrão</label>
                                        <select id="inputState" class="form-control custom-select" name="caixa_padrão">
                                            <option value="Cartões">Cartões</option>
                                            <option value="Cheques">Cheques</option>
                                            <option value="Tesouraria">Tesouraria</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Anuidade Padrao</label>
                                        <select id="inputState" class="form-control custom-select" name="anuidade_padrão">
                                            <option value="---">---</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Plano Padrão</label>
                                        <select id="inputState" class="form-control custom-select" name="plano_padrão">
                                            <option value="Cartões">Cartões</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Valor Entrada / Taxa de Inscrição</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="taxa_inscricao">
                                    </div>
                                </div>
                                
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Quantidade de Parcelas</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="qt_parc">
                                    
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Valor da Parcela Padrao</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="val_parc">
                                    </div>

                                    <div class="form-group col-md-2">
                                            <label for="exampleInputPassword1">Primeiro Vencimento Padrão</label>
                                            <input type="date" class="form-control" id="exampleInputPassword1" name="primeiro_vencimento">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Conta Padrão</label>
                                        <select id="inputState" class="form-control custom-select" name="anuidade_padrão">
                                            <option value="Biblioteca">Biblioteca</option>
                                            <option value="Mensalidades">Mensalidades</option>
                                            <option value="Processo Seletivo">Processo Seletivo</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Contrato Padrão</label>
                                        <select id="inputState" class="form-control custom-select" name="contrato_padrão">
                                            <option value="---">---</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-10">
                                        <h5 class="card-title">Diferenças</h5>
                                    </div>   
                                    <div class="col-md-2">
                                        <div class="page-options" style="float: right;">
                                            <button type="submit" class="btn btn-primary">+</button>
                                        </div>
                                    </div>
                                </div>

                                
                                <hr>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Motivo</label>
                                        <select id="inputState" class="form-control custom-select" name="motivo">
                                            <option value="---">---</option>
                                        </select>
                                    
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Valor</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="val_dif">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Mês Inicial/Ano</label>
                                        <select id="inputState" class="form-control custom-select" name="mes_inicial">
                                            <?php for($q=1;$q<=12;$q++):?>
                                                <option value="<?php echo $q;?>"><?php echo $q;?></option>
                                            <?php endfor;?>
                                        </select>    
                                    </div>

                                    <div class="form-group col-md-1">
                                        <label for="exampleInputPassword1">&nbsp;</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="dado_mr_m">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Mês Final / Ano</label>
                                        <select id="inputState" class="form-control custom-select" name="mes_final">
                                            <?php for($q=1;$q<=12;$q++):?>
                                                <option value="<?php echo $q;?>"><?php echo $q;?></option>
                                            <?php endfor;?>
                                        </select>  
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputPassword1">&nbsp;</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="dado_mr_m">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Cond.</label>
                                        <select id="inputState" class="form-control custom-select" name="mes_final">
                                            <option value="Não">Não</option>
                                            <option value="sim">Sim</option>
                                        </select>  
                                    </div>
                                </div>

                                
                                <div class="row">
                                    <div class="col-md-10">
                                        <h5 class="card-title">Cobranças Adicionais</h5>
                                    </div>   
                                    <div class="col-md-2">
                                        <div class="page-options" style="float: right;">
                                            <button type="submit" class="btn btn-primary">+</button>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Tipo de Cobrança</label>
                                        <select id="inputState" class="form-control custom-select" name="motivo">
                                            <option value="Mensalidades">Mensalidades</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Caixa</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="val_dif">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Parcelas</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="parcelas">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Valor</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="valor_cobrança_adicional">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">1º Vencimento</label>
                                        <input type="date" class="form-control" id="exampleInputPassword1" name="primeiro_vencimento_cobrancas_adicionais">
                                    </div>

                                    <div class="form-group col-md-2">
                                    <label for="exampleInputPassword1">Intervalo</label>
                                        <select id="inputState" class="form-control custom-select" name="intervalo">
                                            <option value="Mensal">Mensal</option>
                                            <option value="Bimestral">Bimestral</option>
                                            <option value="Trimestral">Trimestral</option>
                                            <option value="Quadrimestral">Quadrimestral</option>
                                            <option value="Semestral">Semestral</option>
                                            <option value="Anual">Anual</option>
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
                                <div class="row">
                                    <div class="col-md-10">
                                        <h4 class="card-title">Componentes Curriculares</h4> 
                                    </div>   
                                    <div class="col-md-2">
                                        <div class="page-options" style="float: right;">
                                            <button type="submit" class="btn btn-primary">+</button>
                                        </div>
                                    </div>
                                </div>
                                <table id="zero-conf" class="display" style="width:100%">
                                    <thead>
                                        <tr style="text-align: center;">
                                            <th width="30%">Disciplina/Professor</th>
                                            <th>Titulação.</th>
                                            <th>Encerrado</th>
                                            <th width="10%">Pauta</th>
                                            <th></th>
                                        <tr>
                                    </thead>
                                    <tbody style="text-align: center;">
                                        <tr>
                                            <td>
                                                <div class="form-group col-md-12">
                                                    <!-- <label for="exampleInputEmail1">Telefone:</label> -->
                                                    <select id="inputState" class="form-control custom-select" name="disciplina/">
                                                        <option value="">Selecionar Disciplina</option>
                                                        <!-- foreach com as disciplinas -->
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group col-md-12">
                                                    <!-- <label for="exampleInputEmail1">OBS:</label> -->
                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="titulação">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group col-md-12">
                                                    <select id="inputState" class="form-control custom-select" name="encerrado/">
                                                        <option value="0">Não</option>
                                                        <option value="1">Sim</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="" class="text-warning">Criar</a>
                                            </td>
                                            <td>
                                                <!-- <a href="#" class="btn btn-outline-primary btn-xs"><span class="material-icons">remove_red_eye</span></a> -->
                                                <a href="#" class="btn btn-outline-danger btn-xs" onclick="return confirm('Tem certeza que deseja excluir este curso?')"><span class="material-icons">delete</span></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr style="text-align: center;">
                                            <th width="30%">Disciplina/Professor</th>
                                            <th>Titulação.</th>
                                            <th>Encerrado</th>
                                            <th width="10%">Pauta</th>
                                            <th></th>
                                        <tr>
                                    </tfoot>
                                </table>

                                <!-- <p>Area destinada ao cadastro de Alunos. </p> 
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">OBS:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="obs_telefone">
                                    </div>

                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Cobranca</label>
                                        <select id="inputState" class="form-control custom-select" name="cobranca_telefone">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Cadastrar Turma</button>

            </form>
            
        </div>
    </div>
<?php require_once(APPPATH.'views/comuns/secretaria/footer.php'); ?>