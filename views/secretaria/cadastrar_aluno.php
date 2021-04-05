
        <div class="main-wrapper">
            <form method="POST">
                <div class="row">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Cadastrar Aluno</h5>
                                <p>Area destinada ao cadastro de Alunos. </p>
                                
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
                                            <label for="exampleInputPassword1">Curso.</label>
                                            <select id="inputState" class="form-control custom-select" name="curso">
                                                <option selected="">Escolher Area...</option>
                                                <!-- Foreach Com os cursos -->
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Inscrição INEP/MEC</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="inscricao_inep_mec">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputPassword1">Matr. Longa</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name="matr_longa">
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
                                <h4 class="card-title">Dados Pessoais</h4>
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
                                
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Naturalidade</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="naturalidade">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Nacionalidade</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="nacionalidade">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Estado Civíl</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="estado_civil">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Profissão</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="profissao">
                                    </div>
                                </div>
                                
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Pai</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pai">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword1">Mãe</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="mae">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class ="form-group col-md-8">
                                        <label for="exampleInputEmail1">Responsável Financeiro</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="irresponsavel_financeiro">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputPassword1">Parentesco</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="parentesco_financeiro">
                                    </div>
                                </div>
                                
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="exampleInputEmail1">Responsável Acadêmico</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="responsavel_academico">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputPassword1">Parentesco</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="parentesco_academico">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label for="exampleInputEmail1">Avalista ou Fiador</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="avalista_fiador_1">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputPassword1">2º Avalista ou Fiador</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="avalista_fiador_2">
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
                                <h4 class="card-title">Dados Pessoais</h4>
                                <!-- <p>Area destinada ao cadastro de Alunos. </p> -->
                                
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Sexo </label>
                                        <select id="inputState" class="form-control custom-select" name="sexo">
                                            <option value="M">Macho</option>
                                            <option value="F">Femea</option>
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
                                
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Naturalidade</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="naturalidade">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Nacionalidade</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="nacionalidade">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Estado Civíl</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="estado_civil">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Profissão</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="profissao">
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
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Certidão </label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="certidao">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Num. Certidao</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="numero_certidao">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Raça.</label>
                                        <input type="date" class="form-control" id="exampleInputPassword1" name="raca">
                                    </div>
                                </div>
                                
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Cartório</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cartorio">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Livro</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="livro">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Folha</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="folha">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Cidade</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="cidade">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">UF</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="uf">
                                    </div>
                                </div>
                                
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">CPF</label>
                                        <input type="text" class="form-control" id="cpf" aria-describedby="emailHelp" name="cpf">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">RG</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="rg">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Órgão Expeditor</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="orgao_expeditor">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">UF</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="uf_cpf">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">data</label>
                                        <input type="date" class="form-control" id="exampleInputPassword1" name="data_cpf">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Tit. Eleitor</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="titlulo_eleitor">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Zona</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="zona">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Seção</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="secao">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">UF</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="uf_titulo_eleitor">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Cert. Reservista</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="certificado_reservista">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Núm. Cert</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="num_reservista">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Categoria</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="categoria_reservista">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Região</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="regiao_reservista">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">UF</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="uf_rereservista">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">CNH Cat.</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cat_cnh">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">CNH Registro</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="registro_cnh">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">CNH Validade</label>
                                        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="validade_cnh">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">CRO</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cro">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">CRM</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="crm">
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
                                <h4 class="card-title">Endereço</h4>
                                <!-- <p>Area destinada ao cadastro de Alunos. </p> -->
                                <div class="form-row">
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Local</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="local">
                                    </div>
                                    
                                    <div class="form-group col-md-5">
                                        <label for="exampleInputEmail1">Endereço</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="endereco">
                                    </div>

                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Bairro</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bairro">
                                    </div>

                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Cidade</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cidade">
                                    </div>

                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">UF</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="uf_pessoa">
                                    </div>

                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">CEP</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cep_pessoa">
                                    </div>

                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Correspondencia</label>
                                        <select id="inputState" class="form-control custom-select" name="correspondencia">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Cobrança</label>
                                        <select id="inputState" class="form-control custom-select" name="cobranca">
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
                                <h4 class="card-title">Telefone</h4>
                                <!-- <p>Area destinada ao cadastro de Alunos. </p> -->
                                <div class="form-row">
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Local</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="local_celular">
                                    </div>
                                    
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">DDD</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="DDD">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Telefone:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="telefone">
                                    </div>

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

                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">SMS</label>
                                        <select id="inputState" class="form-control custom-select" name="sms">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

                <button type="submit" class="btn btn-primary">Cadastrar Aluno</button>

            </form>
            
        </div>
    </div>
