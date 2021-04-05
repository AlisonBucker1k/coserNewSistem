
<div class="main-wrapper">
    <form method="POST">
        <div class="row">
            <div class="col-xl">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Matricular Aluno</h5>
                        <p>Area destinada à matricula de Alunos. </p>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Inscrição INEP/MEC</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="inscricao_inep_mec">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Nome </label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="exampleInputPassword1">Nome Social (Opcional)</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="nome_social">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="exampleInputPassword1">Sexo</label>
                                    <select id="inputState" class="form-control custom-select" name="sexo">
                                        <option value="M">Masculino</option>
                                        <option value="F">Feminino</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="exampleInputPassword1">Nascimento</label>
                                    <input type="date" class="form-control" id="exampleInputPassword1" name="nascimento">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="exampleInputPassword1">Estado Cívil</label>
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
                                <div class="form-group col-md-3">
                                    <label for="exampleInputPassword1">Profissão</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="profissao">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="exampleInputPassword1">Raça.</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="raca">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="exampleInputEmail1">Naturalidade</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="naturalidade">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword1">Nacionalidade</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="nacionalidade">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword1">UF</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="UF">
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword1">Empresa</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="empresa">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword1">Cargo</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="cargo">
                                </div>

                            </div>

                            <!-- <button type="submit" class="btn btn-primary">Cadastrar Curso</button> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Informações Pedagógicas</h4>
                        <!-- <p>Area destinada ao cadastro de Alunos. </p> -->
                        
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Curso </label>
                                <select id="inputCursos" class="form-control custom-select" name="curso">
                                    <option value="">Selecionar Curso</option>
                                    <?php foreach($cursos as $curso):?>
                                        <option value="<?php echo $curso['id'];?>"><?php echo $curso['nome_curso'];?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>

                            <div class="form-group col-md-12" id="divInpTurmas" style="display:none;">
                                <label for="exampleInputEmail1">Turma </label>
                                <select id="inputTurmas" class="form-control custom-select" name="turma">
                                    <option value="">Selecionar Período</option>
                                    <!-- Foreach com os períodos -->
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
                                <h4 class="card-title">Informações Financeiras</h4> 
                            </div>   
                            <!-- <div class="col-md-2">
                                <div class="page-options" style="float: right;">
                                    <button type="submit" class="btn btn-primary">+</button>
                                </div>
                            </div> -->
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Plano </label>
                                <select id="inputState" class="form-control custom-select" name="plano">
                                    <option value="0">00 (0x)</option>

                                </select>
                            </div>
                            
                            <div class="form-group col-md-4">
                                <label for="exampleInputPassword1">Dia Venc.</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="dia_venc">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="exampleInputPassword1">Dia Lim.</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="dia_lim">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-10">
                                <h4 class="card-title">Cobranças</h4> 
                            </div>   
                            <div class="col-md-2">
                                <div class="page-options" style="float: right;">
                                    <button type="submit" class="btn btn-primary">+</button>
                                    <!-- este btn adiciona mais uma div class="form-row" identica a proxima div com o id='primeira_cobranca' -->
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">1º Vencimento.</label>
                                <input type="date" class="form-control" id="exampleInputPassword1" name="primeiro_vencimento">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">Valr. Entr.</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="vlr_entrada">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">Dia Venc.</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="dia_venc">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">Dia Venc.</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="dia_venc">
                            </div>
                        </div>

                        <div class="form-row" id="primeira_cobranca">
                            <div class="form-group col-md-3">
                                <!-- <label for="exampleInputPassword1">1º Vencimento.</label>
                                <input type="date" class="form-control" id="exampleInputPassword1" name="primeiro_vencimento"> -->
                            </div>
                            <div class="form-group col-md-3">
                                <!-- <label for="exampleInputPassword1">Valr. Entr.</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="vlr_entrada"> -->
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">Qtd. Parcelas.</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="qtd_parcelas">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">Vlr da parc..</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="vlr_parcelas">
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
                                <h4 class="card-title">Diferenças</h4> 
                            </div>   
                            <div class="col-md-2">
                                <div class="page-options" style="float: right;">
                                    <button type="submit" class="btn btn-primary">+</button>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">Motivo </label>
                                <select id="inputState" class="form-control custom-select" name="motivo_cobranca">
                                    <option value="0"> (*x)</option>

                                </select>
                            </div>
                            
                            <div class="form-group col-md-2">
                                <label for="exampleInputPassword1">Valor</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="valor_cobranca">
                            </div>

                            <div class="form-group col-md-1">
                                <label for="exampleInputPassword1">Perc.</label>
                                <select id="inputState" class="form-control custom-select" name="perc">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>

                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">Mês Inicial </label>
                                <select id="inputState" class="form-control custom-select" name="mes_inicial">
                                    <option value="1">Janeiro</option>
                                    <option value="2">Fevereiro</option>
                                    <option value="3">Março</option>
                                    <option value="4">Abril</option>
                                    <option value="5">Maio</option>
                                    <option value="6">Junho</option>
                                    <option value="7">Julho</option>
                                    <option value="8">Agosto</option>
                                    <option value="9">Setembro</option>
                                    <option value="10">Outubro</option>
                                    <option value="11">Novembro</option>
                                    <option value="12">Dezembro</option>
                                </select>
                            </div>
                            
                            <div class="form-group col-md-1">
                                <label for="exampleInputPassword1">Ano.</label>
                                <select name="ano_inicial" id="" class="form-control">
                                    <?php for($q = date('Y');$q<=date('Y')+8;$q++):?>
                                        <option value="<?php echo $q;?>"><?php echo $q;?></option>
                                    <?php endfor;?>
                                </select>
                            </div>

                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">Mês Inicial </label>
                                <select id="inputState" class="form-control custom-select" name="mes_final">
                                    <option value="1">Janeiro</option>
                                    <option value="2">Fevereiro</option>
                                    <option value="3">Março</option>
                                    <option value="4">Abril</option>
                                    <option value="5">Maio</option>
                                    <option value="6">Junho</option>
                                    <option value="7">Julho</option>
                                    <option value="8">Agosto</option>
                                    <option value="9">Setembro</option>
                                    <option value="10">Outubro</option>
                                    <option value="11">Novembro</option>
                                    <option value="12">Dezembro</option>
                                </select>
                            </div>
                            
                            <div class="form-group col-md-1">
                                <label for="exampleInputPassword1">Ano.</label>
                                <select name="ano_final" id="" class="form-control">
                                    <?php for($q = date('Y');$q<=date('Y')+8;$q++):?>
                                        <option value="<?php echo $q;?>"><?php echo $q;?></option>
                                    <?php endfor;?>
                                </select>
                            </div>

                            <div class="form-group col-md-1">
                                <label for="exampleInputPassword1">Cond.</label>
                                <select id="inputState" class="form-control custom-select" name="cond">
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
                        <h4 class="card-title">Informações Adicionais</h4>
                        <!-- <p>Area destinada ao cadastro de Alunos. </p> -->
                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Sexo </label>
                                <select id="inputState" class="form-control custom-select" name="sexo">
                                    <option value="M">Masculino</option>
                                    <option value="F">Feminino</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">Nascimento</label>
                                <input type="date" class="form-control" id="exampleInputPassword1" name="nascimento">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">Raça.</label>
                                <input type="date" class="form-control" id="exampleInputPassword1" name="raca">
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
                        <h4 class="card-title">Documentação</h4>
                        <!-- <p>Area destinada ao cadastro de Alunos. </p> -->
                        
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="exampleInputEmail1">CPF </label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="cpf">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">RG</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="rg">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">Orgão Expeditor</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="orgao_expeditor">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleInputPassword1">Data</label>
                                <input type="date" class="form-control" id="exampleInputPassword1" name="rg_expedicao">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputPassword1">UF</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="rg_uf">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="exampleInputEmail1">Certidão </label>
                                <select id="inputState" class="form-control custom-select" name="certidao">
                                    <option value="nao">Não apresentou</option>
                                    <option value="nascimento">Nascimento</option>
                                    <option value="casamento">Casamento</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
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
                        
                            <div class="form-group col-md-2">
                                <label for="exampleInputPassword1">Titulo de Eleitor</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="titulo_eleitor">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="exampleInputPassword1">Zona</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="zona_eleitor">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="exampleInputPassword1">Seção</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="secao_eleitor">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="exampleInputPassword1">UF</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="uf_eleitor">
                            </div>

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

                            <div class="form-group col-md-3">
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
                        <h4 class="card-title">Endereço</h4>
                        <!-- <p>Area destinada ao cadastro de Alunos. </p> -->
                        
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">CEP </label>
                                <input type="text" class="form-control" id="cep" name="cep_residencial">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">Endereço Residencial</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="endereco_residencial">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleInputPassword1">Nº</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="numero_residencial">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleInputPassword1">Complemento</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="complemento_residencial">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputPassword1">Bairro</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="bairro_residencial">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputPassword1">Cidade UF</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="uf_residencial">
                            </div>

                            <div class="form-group col-md-1">
                                <label for="exampleInputEmail1">Corresp. </label>
                                <select id="inputState" class="form-control custom-select" name="corresp_residencial">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>

                        </div>


                        
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">CEP de Cobranca </label>
                                <input type="text" class="form-control" id="cep" name="cep_cobranca">
                                <small id="emailHelp" class="form-text text-muted" >* Preencher se for diferente do endereço residencial.</small>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">Endereço Residencial</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="endereco_cobranca">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleInputPassword1">Nº</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="numero_cobranca">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleInputPassword1">Complemento</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="complemento_cobranca">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputPassword1">Bairro</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="bairro_cobranca">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputPassword1">Cidade UF</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="uf_cobranca">
                            </div>

                            <div class="form-group col-md-1">
                                <label for="exampleInputEmail1">Corresp. </label>
                                <select id="inputState" class="form-control custom-select" name="corresp_cobranca">
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
                        <h4 class="card-title">Telefones</h4>
                        <!-- <p>Area destinada ao cadastro de Alunos. </p> -->
                        
                        <div class="form-row">
                            <div class="form-group col-md-1">
                                <label for="exampleInputEmail1">DDD </label>
                                <input type="text" class="form-control" id="cep" name="DDD">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputPassword1">Tel. Residencial</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="tel_residencial">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="exampleInputPassword1">OBS</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="obs_numero_residencial">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputPassword1">Cob.</label>
                                <select id="inputState" class="form-control custom-select" name="cob_num_residencial">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputPassword1">SMS.</label>
                                <select id="inputState" class="form-control custom-select" name="cob_num_residencial">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-1">
                                <label for="exampleInputEmail1">DDD </label>
                                <input type="text" class="form-control" id="cep" name="ddd_comercial">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputPassword1">Tel. Comercial</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="tel_comercial">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="exampleInputPassword1">OBS</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="obs_numero_comercial">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputPassword1">Cob.</label>
                                <select id="inputState" class="form-control custom-select" name="cob_num_comercial">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputPassword1">SMS.</label>
                                <select id="inputState" class="form-control custom-select" name="cob_num_comercial">
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
                        <h4 class="card-title">Necessidades Especiais</h4>
                        <!-- <p>Area destinada ao cadastro de Alunos. </p> -->
                        
                        <div class="form-row">
                            <div class="form-group col-md-1">
                                <label for="exampleInputEmail1">Def. Auditiva</label>
                                <select id="inputState" class="form-control custom-select" name="def_auditiva">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputEmail1">Def. Mental</label>
                                <select id="inputState" class="form-control custom-select" name="def_mental">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputEmail1">Baixa Visão</label>
                                <select id="inputState" class="form-control custom-select" name="baixa_visao">
                                <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputEmail1">Cegueira</label>
                                <select id="inputState" class="form-control custom-select" name="cegueira">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputEmail1">Def. Visual</label>
                                <select id="inputState" class="form-control custom-select" name="def_visual">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputEmail1">Surdo Cegueira</label>
                                <select id="inputState" class="form-control custom-select" name="Def_surdo_cegueira">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            
                            <div class="form-group col-md-1">
                                <label for="exampleInputEmail1">Def. Multiplas</label>
                                <select id="inputState" class="form-control custom-select" name="def_multiplas">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputEmail1">Sínd. de Asperger</label>
                                <select id="inputState" class="form-control custom-select" name="sindrome_asperger">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputEmail1">Autismo Clássico</label>
                                <select id="inputState" class="form-control custom-select" name="autismo_classico">
                                <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputEmail1">Sínd. de Rett</label>
                                <select id="inputState" class="form-control custom-select" name="sindrome_rett">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputEmail1">Transt. Desint. da Infância</label>
                                <select id="inputState" class="form-control custom-select" name="transt_desg_infancia">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputEmail1">Psicose Infantil</label>
                                <select id="inputState" class="form-control custom-select" name="psc_infant">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="exampleInputEmail1">Altas Habilidades/Superdotação</label>
                                <select id="inputState" class="form-control custom-select" name="altas_hab">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="exampleInputEmail1">Laudo</label>
                                <select id="inputState" class="form-control custom-select" name="laudo">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Outras (Descreva)</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="outras">
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
                        <h4 class="card-title">Pai</h4>
                        <!-- <p>Area destinada ao cadastro de Alunos. </p> -->
                        
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="exampleInputEmail1">Nome</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pai_nome">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">Data de nascimento</label>
                                <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pai_nascimento">
                            </div>
                            
                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">Estado Civil</label>
                                <select id="inputState" class="form-control custom-select" name="estado_civil_pai">
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
                            
                            <div class="form-group col-md-3">
                                <label for="exampleInputEmail1">Profissao</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pai_profissao">
                            </div>

                            <div class="form-group col-md-1">
                                <label for="exampleInputEmail1">CPF</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pai_cpf">
                            </div>
                            
                            <div class="form-group col-md-1">
                                <label for="exampleInputEmail1">RG</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pai_rg">
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">E-mail</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pai_email">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Empresa</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pai_empresa">
                            </div>
                        

                        
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Cargo</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pai_cargo_empresa">
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-1">
                                <label for="exampleInputEmail1">DDD </label>
                                <input type="text" class="form-control" id="cep" name="pai_ddd_residencial">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputPassword1">Tel. Residencial</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="pai_tel_residencial">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="exampleInputPassword1">OBS</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="pai_obs_numero_residencial">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputPassword1">Cob.</label>
                                <select id="inputState" class="form-control custom-select" name="pai_cob_num_residencial">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputPassword1">SMS.</label>
                                <select id="inputState" class="form-control custom-select" name="pai_sms_num_residencial">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-1">
                                <label for="exampleInputEmail1">DDD </label>
                                <input type="text" class="form-control" id="cep" name="pai_ddd_comercial">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputPassword1">Tel. Comercial</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="pai_tel_comercial">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="exampleInputPassword1">OBS</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="pai_obs_numero_comercial">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputPassword1">Cob.</label>
                                <select id="inputState" class="form-control custom-select" name="pai_cob_num_comercial">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputPassword1">SMS.</label>
                                <select id="inputState" class="form-control custom-select" name="pai_sms_num_comercial">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                        </div>
                        
                        

                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">Cep </label>
                                <input type="text" class="form-control" id="cep" name="cep_pai">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">Endereço</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="endereço_pai">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputPassword1">Nº</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="numero_res_pai">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleInputPassword1">Complemento</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="complemento_pai">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleInputPassword1">Bairro</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="bairro_pai">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputPassword1">Cidade - UF</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="cidade_pai">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputPassword1">Corresp.</label>
                                <select id="inputState" class="form-control custom-select" name="corresp_pai">
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
                        <h4 class="card-title">Mãe</h4>
                        <!-- <p>Area destinada ao cadastro de Alunos. </p> -->
                        
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="exampleInputEmail1">Nome</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mae_nome">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">Data de nascimento</label>
                                <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mae_nascimento">
                            </div>
                            
                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">Estado Civil</label>
                                <select id="inputState" class="form-control custom-select" name="estado_civil_mae">
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
                            
                            <div class="form-group col-md-3">
                                <label for="exampleInputEmail1">Profissao</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mae_profissao">
                            </div>

                            <div class="form-group col-md-1">
                                <label for="exampleInputEmail1">CPF</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mae_cpf">
                            </div>
                            
                            <div class="form-group col-md-1">
                                <label for="exampleInputEmail1">RG</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mae_rg">
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">E-mail</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mae_email">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Empresa</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mae_empresa">
                            </div>
                        

                        
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Cargo</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mae_cargo_empresa">
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-1">
                                <label for="exampleInputEmail1">DDD </label>
                                <input type="text" class="form-control" id="cep" name="mae_ddd_residencial">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputPassword1">Tel. Residencial</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="mae_tel_residencial">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="exampleInputPassword1">OBS</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="mae_obs_numero_residencial">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputPassword1">Cob.</label>
                                <select id="inputState" class="form-control custom-select" name="mae_cob_num_residencial">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputPassword1">SMS.</label>
                                <select id="inputState" class="form-control custom-select" name="mae_sms_num_residencial">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-1">
                                <label for="exampleInputEmail1">DDD </label>
                                <input type="text" class="form-control" id="cep" name="mae_ddd_comercial">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputPassword1">Tel. Comercial</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="mae_tel_comercial">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="exampleInputPassword1">OBS</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="mae_obs_numero_comercial">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputPassword1">Cob.</label>
                                <select id="inputState" class="form-control custom-select" name="mae_cob_num_comercial">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputPassword1">SMS.</label>
                                <select id="inputState" class="form-control custom-select" name="mae_sms_num_comercial">
                                    <option value="0">Não</option>
                                    <option value="1">Sim</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">Cep </label>
                                <input type="text" class="form-control" id="cep" name="cep_mae">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">Endereço</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="endereço_mae">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputPassword1">Nº</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="numero_res_mae">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleInputPassword1">Complemento</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="complemento_mae">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleInputPassword1">Bairro</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="bairro_mae">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputPassword1">Cidade - UF</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="cidade_mae">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="exampleInputPassword1">Corresp.</label>
                                <select id="inputState" class="form-control custom-select" name="corresp_mae">
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
                        <h4 class="card-title">Responsável Financeiro</h4>
                        <!-- <p>Area destinada ao cadastro de Alunos. </p> -->
                        
                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="exampleInputPassword1">Responsável.</label>
                                <select id="resp_financ" class="form-control custom-select" name="responsavel_financeiro">
                                    <option value="Aluno">Aluno</option>
                                    <option value="Pai">Pai</option>
                                    <option value="Mãe">Mãe</option>
                                    <option value="Outro">Outro</option>
                                </select>
                            </div>
                        </div>

                        <div id="div_campos_id_resp_financ_outros" style="display: none;">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="exampleInputEmail1">Nome</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="resp_financ_nome">
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="exampleInputEmail1">Data de nascimento</label>
                                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="resp_financ_nascimento">
                                </div>
                                
                                <div class="form-group col-md-2">
                                    <label for="exampleInputEmail1">Estado Civil</label>
                                    <select id="inputState" class="form-control custom-select" name="estado_civil_resp_financ">
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
                                
                                <div class="form-group col-md-3">
                                    <label for="exampleInputEmail1">Profissao</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="resp_financ_profissao">
                                </div>

                                <div class="form-group col-md-1">
                                    <label for="exampleInputEmail1">CPF</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="resp_financ_cpf">
                                </div>
                                
                                <div class="form-group col-md-1">
                                    <label for="exampleInputEmail1">RG</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="resp_financ_rg">
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="exampleInputEmail1">E-mail</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="resp_financ_email">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="exampleInputEmail1">Empresa</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="resp_financ_empresa">
                                </div>
                            

                            
                                <div class="form-group col-md-4">
                                    <label for="exampleInputEmail1">Cargo</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="resp_financ_cargo_empresa">
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-1">
                                    <label for="exampleInputEmail1">DDD </label>
                                    <input type="text" class="form-control" id="cep" name="resp_financ_ddd_residencial">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword1">Tel. Residencial</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="resp_financ_tel_residencial">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="exampleInputPassword1">OBS</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="resp_financ_obs_numero_residencial">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="exampleInputPassword1">Cob.</label>
                                    <select id="inputState" class="form-control custom-select" name="resp_financ_cob_num_residencial">
                                        <option value="0">Não</option>
                                        <option value="1">Sim</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="exampleInputPassword1">SMS.</label>
                                    <select id="inputState" class="form-control custom-select" name="resp_financ_cob_num_residencial">
                                        <option value="0">Não</option>
                                        <option value="1">Sim</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-1">
                                    <label for="exampleInputEmail1">DDD </label>
                                    <input type="text" class="form-control" id="cep" name="resp_financ_ddd_comercial">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword1">Tel. Comercial</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="resp_financ_tel_comercial">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="exampleInputPassword1">OBS</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="resp_financ_obs_numero_comercial">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="exampleInputPassword1">Cob.</label>
                                    <select id="inputState" class="form-control custom-select" name="resp_financ_cob_num_comercial">
                                        <option value="0">Não</option>
                                        <option value="1">Sim</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="exampleInputPassword1">SMS.</label>
                                    <select id="inputState" class="form-control custom-select" name="resp_financ_cob_num_comercial">
                                        <option value="0">Não</option>
                                        <option value="1">Sim</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-1">
                                    <label for="exampleInputEmail1">DDD </label>
                                    <input type="text" class="form-control" id="cep" name="resp_financ_ddd_celular">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword1">Tel. Celular</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="resp_financ_tel_celular">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="exampleInputPassword1">OBS</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="resp_financ_obs_numero_celular">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="exampleInputPassword1">Cob.</label>
                                    <select id="inputState" class="form-control custom-select" name="resp_financ_cob_num_celular">
                                        <option value="0">Não</option>
                                        <option value="1">Sim</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="exampleInputPassword1">SMS.</label>
                                    <select id="inputState" class="form-control custom-select" name="resp_financ_cob_num_celular">
                                        <option value="0">Não</option>
                                        <option value="1">Sim</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-1">
                                    <label for="exampleInputEmail1">DDD </label>
                                    <input type="text" class="form-control" id="cep" name="resp_financ_ddd_adicional">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword1">Tel. adicional</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="resp_financ_tel_adicional">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="exampleInputPassword1">OBS</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="resp_financ_obs_numero_adicional">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="exampleInputPassword1">Cob.</label>
                                    <select id="inputState" class="form-control custom-select" name="resp_financ_cob_num_adicional">
                                        <option value="0">Não</option>
                                        <option value="1">Sim</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="exampleInputPassword1">SMS.</label>
                                    <select id="inputState" class="form-control custom-select" name="resp_financ_cob_num_adicional">
                                        <option value="0">Não</option>
                                        <option value="1">Sim</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="exampleInputEmail1">Cep </label>
                                    <input type="text" class="form-control" id="cep" name="cep_resp_financ">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="exampleInputPassword1">Endereço</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="endereço_resp_financ">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="exampleInputPassword1">Nº</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="numero_res_resp_financ">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="exampleInputPassword1">Complemento</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="complemento_resp_financ">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="exampleInputPassword1">Bairro</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="bairro_resp_financ">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="exampleInputPassword1">Cidade - UF</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="cidade_resp_financ">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="exampleInputPassword1">Corresp.</label>
                                    <select id="inputState" class="form-control custom-select" name="corresp_resp_financ">
                                        <option value="0">Não</option>
                                        <option value="1">Sim</option>
                                    </select>
                                </div>
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
                        <h4 class="card-title">Responsável Acadêmico e/ou Segundo Responsável</h4>
                        <!-- <p>Area destinada ao cadastro de Alunos. </p> -->
                        
                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <label for="exampleInputPassword1">Responsável.</label>
                                <select id="resp_acad" class="form-control custom-select" name="responsavel_academico">
                                    <option value="Aluno">Aluno</option>
                                    <option value="Pai">Pai</option>
                                    <option value="Mãe">Mãe</option>
                                    <option value="Outro">Outro</option>
                                </select>
                            </div>
                        </div>

                        <div id="div_campos_id_resp_acad_outros" style="display: none;">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="exampleInputEmail1">Nome</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="resp_acad_nome">
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="exampleInputEmail1">Data de nascimento</label>
                                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="resp_acad_nascimento">
                                </div>
                                
                                <div class="form-group col-md-2">
                                    <label for="exampleInputEmail1">Estado Civil</label>
                                    <select id="inputState" class="form-control custom-select" name="estado_civil_resp_acad">
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
                                
                                <div class="form-group col-md-3">
                                    <label for="exampleInputEmail1">Profissao</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="resp_acad_profissao">
                                </div>

                                <div class="form-group col-md-1">
                                    <label for="exampleInputEmail1">CPF</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="resp_acad_cpf">
                                </div>
                                
                                <div class="form-group col-md-1">
                                    <label for="exampleInputEmail1">RG</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="resp_acad_rg">
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="exampleInputEmail1">E-mail</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="resp_acad_email">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="exampleInputEmail1">Empresa</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="resp_acad_empresa">
                                </div>
                            

                            
                                <div class="form-group col-md-4">
                                    <label for="exampleInputEmail1">Cargo</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="resp_acad_cargo_empresa">
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-1">
                                    <label for="exampleInputEmail1">DDD </label>
                                    <input type="text" class="form-control" id="cep" name="resp_acad_ddd_residencial">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword1">Tel. Residencial</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="resp_acad_tel_residencial">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="exampleInputPassword1">OBS</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="resp_acad_obs_numero_residencial">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="exampleInputPassword1">Cob.</label>
                                    <select id="inputState" class="form-control custom-select" name="resp_acad_cob_num_residencial">
                                        <option value="0">Não</option>
                                        <option value="1">Sim</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="exampleInputPassword1">SMS.</label>
                                    <select id="inputState" class="form-control custom-select" name="resp_acad_cob_num_residencial">
                                        <option value="0">Não</option>
                                        <option value="1">Sim</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-1">
                                    <label for="exampleInputEmail1">DDD </label>
                                    <input type="text" class="form-control" id="cep" name="resp_acad_ddd_comercial">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword1">Tel. Comercial</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="resp_acad_tel_comercial">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="exampleInputPassword1">OBS</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="resp_acad_obs_numero_comercial">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="exampleInputPassword1">Cob.</label>
                                    <select id="inputState" class="form-control custom-select" name="resp_acad_cob_num_comercial">
                                        <option value="0">Não</option>
                                        <option value="1">Sim</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="exampleInputPassword1">SMS.</label>
                                    <select id="inputState" class="form-control custom-select" name="resp_acad_cob_num_comercial">
                                        <option value="0">Não</option>
                                        <option value="1">Sim</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-1">
                                    <label for="exampleInputEmail1">DDD </label>
                                    <input type="text" class="form-control" id="cep" name="resp_acad_ddd_celular">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword1">Tel. Celular</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="resp_acad_tel_celular">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="exampleInputPassword1">OBS</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="resp_acad_obs_numero_celular">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="exampleInputPassword1">Cob.</label>
                                    <select id="inputState" class="form-control custom-select" name="resp_acad_cob_num_celular">
                                        <option value="0">Não</option>
                                        <option value="1">Sim</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="exampleInputPassword1">SMS.</label>
                                    <select id="inputState" class="form-control custom-select" name="resp_acad_cob_num_celular">
                                        <option value="0">Não</option>
                                        <option value="1">Sim</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-1">
                                    <label for="exampleInputEmail1">DDD </label>
                                    <input type="text" class="form-control" id="cep" name="resp_acad_ddd_adicional">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword1">Tel. adicional</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="resp_acad_tel_adicional">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="exampleInputPassword1">OBS</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="resp_acad_obs_numero_adicional">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="exampleInputPassword1">Cob.</label>
                                    <select id="inputState" class="form-control custom-select" name="resp_acad_cob_num_adicional">
                                        <option value="0">Não</option>
                                        <option value="1">Sim</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="exampleInputPassword1">SMS.</label>
                                    <select id="inputState" class="form-control custom-select" name="resp_acad_cob_num_adicional">
                                        <option value="0">Não</option>
                                        <option value="1">Sim</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="exampleInputEmail1">Cep </label>
                                    <input type="text" class="form-control" id="cep" name="cep_resp_acad">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="exampleInputPassword1">Endereço</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="endereço_resp_acad">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="exampleInputPassword1">Nº</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="numero_res_resp_acad">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="exampleInputPassword1">Complemento</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="complemento_resp_acad">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="exampleInputPassword1">Bairro</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="bairro_resp_acad">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="exampleInputPassword1">Cidade - UF</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="cidade_resp_acad">
                                </div>
                                <div class="form-group col-md-1">
                                    <label for="exampleInputPassword1">Corresp.</label>
                                    <select id="inputState" class="form-control custom-select" name="corresp_resp_acad">
                                        <option value="0">Não</option>
                                        <option value="1">Sim</option>
                                    </select>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Matricular Aluno</button>

    </form>
    
</div>
</div>

<script src="<?php echo BASE_URL;?>assets/plugins/jquery/jquery-3.4.1.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/js/ajax.js"></script>

<script>
    $(document).ready(function(){
        let select_resp = $('#resp_financ');

        select_resp.on('change', function(){
            if(this.value == 'Outro'){
                $('#div_campos_id_resp_financ_outros').slideDown();
            }else{
                $('#div_campos_id_resp_financ_outros').slideUp();
            }
        });

        // div_campos_id_resp_acad_outros

        let select_resp_acad = $('#resp_acad');

        select_resp_acad.on('change', function(){
            if(this.value == 'Outro'){
                $('#div_campos_id_resp_acad_outros').slideDown();
            }else{
                $('#div_campos_id_resp_acad_outros').slideUp();
            }
        });

    });
</script>