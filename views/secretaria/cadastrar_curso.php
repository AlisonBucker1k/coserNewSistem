
<div class="main-wrapper">
<div class="row">
    <div class="col-xl">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Cadastrar Curso</h5>
                <p>Area destinada ao cadastro de cursos. </p>
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
                                <?php foreach($coordenadores as $coordenador):?>
                                    <option value="<?php echo $coordenador['id'];?>"><?php echo $coordenador['nome'];?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Coordenador do Estágio</label>
                            <select id="inputState" class="form-control custom-select" name="coordenador_estagio">
                                <option value="">Selecionar</option>
                                <?php foreach($coordenadores as $coordenador):?>
                                    <option value="<?php echo $coordenador['id'];?>"><?php echo $coordenador['nome'];?></option>
                                <?php endforeach;?>
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


                    <!-- <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Link para matricula </label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="link_matricula">
                        </div>
                        
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Link para matricula online em 1</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="link_matricula">
                            <small id="emailHelp" class="form-text text-muted">(para preenchimento do campo destino na criação dos menus. No link acima o período letivo encontra-se precediso por "an=" e o período precedido por "pr=", caso seja necessário alterar.)</small>
                        </div>
                    </div> -->

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
                            <select id="inputState" class="form-control custom-select" name="mostrar_titulo_periodo">
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
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome_ch">
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
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="abrev_ch_anual">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="exampleInputEmail1">Curso Equivalência</label>
                            <select id="inputState" class="form-control custom-select" name="curso_equival">
                                <option value="">Selecionar</option>    
                                <?php foreach($cursos as $curso):?>
                                    <option value="<?php echo $curso['id'];?>"><?php echo $curso['nome_curso'];?></option>
                                <?php endforeach;?>
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
                           
                            <label for="exampleInputEmail1">Período letivo de 1/1 encerrado para este curso.</label>
                            <select id="inputState" class="form-control custom-select" name="periodo_letivo1">
                                <option value="0">Não</option>
                                <option value="1">Sim</option>
                                <!-- Foreach com os Cursos -->
                            </select>
                        </div>

                        
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Desbloquear professores para o período letivo de 1/1</label>
                            <select id="inputState" class="form-control custom-select" name="desbloquear_professores">
                                <option value="0">Não</option>
                                <option value="1">Sim</option>
                                <!-- Foreach com os Cursos -->
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Cadastrar Curso</button>
                </form>
            </div>
        </div>
    </div>
</div>