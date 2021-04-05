
<div class="main-wrapper">
<div class="row">
    <div class="col-xl">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Editar Curso</h5>
                <p>Area destinada a edição de cursos. </p>
                <?php if(isset($_GET['success']) && $_GET['success'] == 'true'):?>
                    <div class="alert alert-success">Curso Editado</div>
                <?php endif;?>
                <?php if(isset($success) && $success == 'true'):?>
                    <div class="alert alert-success">Curso Editado</div>
                <?php endif;?>
                <form method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Nome do Curso</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome_curso" value="<?php echo (!empty($cursoInfo['nome_curso'])?$cursoInfo['nome_curso']:''); ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputPassword1">Abrev.</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="abrev" value="<?php echo (!empty($cursoInfo['abrev'])?$cursoInfo['abrev']:''); ?>">
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
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cursos_nos_documentos" value="<?php echo (!empty($cursoInfo['curso_no_doc'])?$cursoInfo['curso_no_doc']:''); ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputPassword1">Cod. INEP</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="cod_inep" value="<?php echo (!empty($cursoInfo['cod_inep'])?$cursoInfo['cod_inep']:''); ?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="exampleInputPassword1">Cod. Modalidade INEP</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="cod_modalidade_inep" value="<?php echo (!empty($cursoInfo['cod_mod_inep'])?$cursoInfo['cod_mod_inep']:''); ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputPassword1">Cód. polo de Ed. Dist. (INEP).</label> 
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cod_polo_de_ed_dist_inep" value="<?php echo (!empty($cursoInfo['cod_polo_ed_dist'])?$cursoInfo['cod_polo_ed_dist']:''); ?>">
                        </div>
                        
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Grade Única</label>
                            <select id="inputState" class="form-control custom-select" name="grade_unica">
                                <option value="0" <?php echo ($cursoInfo['grade_unica'] == 0)?'selected':''?>>Não</option>
                                <option value="1" <?php echo ($cursoInfo['grade_unica'] == 1)?'selected':''?>>Sim</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputPassword1">Grade única (EXCEÇÃO)</label>
                            <select id="inputState" class="form-control custom-select" name="grade_unica_excecao">
                                <option value="0" <?php echo ($cursoInfo['grade_unica_excecao'] == 0)?'selected':''?>>Não</option>
                                <option value="1" <?php echo ($cursoInfo['grade_unica_excecao'] == 1)?'selected':''?>>Sim</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputPassword1">Educação A Distancia</label>
                            <select id="inputState" class="form-control custom-select" name="educacao_a_distancia">
                                <option value="0" <?php echo ($cursoInfo['educacao_distancia'] == 0)?'selected':''?>>Não</option>
                                <option value="1" <?php echo ($cursoInfo['educacao_distancia'] == 1)?'selected':''?>>Sim</option>
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
                            <input type="text" class="form-control" id="exampleInputPassword1" name="titulo" value="<?php echo (!empty($cursoInfo['titulo'])?$cursoInfo['titulo']:''); ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputPassword1">Titulação</label> 
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="titulacao" value="<?php echo (!empty($cursoInfo['titulacao'])?$cursoInfo['titulacao']:''); ?>">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Eixo Tecnológico</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="eixo_tecnologico" value="<?php echo (!empty($cursoInfo['eixo_tecnologico'])?$cursoInfo['eixo_tecnologico']:''); ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Área do Conhecimento</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="area_conhecimento" value="<?php echo (!empty($cursoInfo['area_conhecimento'])?$cursoInfo['area_conhecimento']:''); ?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="exampleInputPassword1">Área de Concentração</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="area_concentracao" value="<?php echo (!empty($cursoInfo['area_concentracao'])?$cursoInfo['area_concentracao']:''); ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputPassword1">Habilitação</label> 
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="habilitacao" value="<?php echo (!empty($cursoInfo['habilitacao'])?$cursoInfo['habilitacao']:''); ?>">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Autorização</label>
                            <textarea name="autorizacao" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" id="" cols="30" rows="10"><?php echo (!empty($cursoInfo['autorizacao'])?$cursoInfo['autorizacao']:''); ?></textarea>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Reconhecimento</label>
                            <textarea name="reconhecimento" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" id="" cols="30" rows="10"><?php echo (!empty($cursoInfo['reconhecimento'])?$cursoInfo['reconhecimento']:''); ?></textarea>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputPassword1">Renovação do Reconhecimento</label>
                            <textarea name="renovacao_reconhecimento" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" id="" cols="30" rows="10"><?php echo (!empty($cursoInfo['renovacao_conhecimento'])?$cursoInfo['renovacao_conhecimento']:''); ?></textarea>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputPassword1">Amparo Legal (Certificado/Diploma)</label> 
                            <textarea name="amparo_legal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" id="" cols="30" rows="10"><?php echo (!empty($cursoInfo['amparo_legal'])?$cursoInfo['amparo_legal']:''); ?></textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Perfil Profissional</label>
                            <textarea name="perfil_profissional" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" id="" cols="30" rows="10"><?php echo (!empty($cursoInfo['perfil_profissional'])?$cursoInfo['perfil_profissional']:''); ?></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Observação</label>
                            <textarea name="observacao" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" id="" cols="30" rows="10"><?php echo (!empty($cursoInfo['observacao'])?$cursoInfo['observacao']:''); ?></textarea>
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
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="prefixo_curso" value="<?php echo (!empty($cursoInfo['prefix_curso'])?$cursoInfo['prefix_curso']:''); ?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="exampleInputEmail1">Mostrar Faltas</label>
                            <select id="inputState" class="form-control custom-select" name="mostrar_faltas">
                                <option value="0" <?php echo ($cursoInfo['mostrar_faltas'] == 0)?'selected':''?>>Não</option>
                                <option value="1" <?php echo ($cursoInfo['mostrar_faltas'] == 1)?'selected':''?>>Sim</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="exampleInputEmail1">Separar Carga Horaria Prática</label>
                            <select id="inputState" class="form-control custom-select" name="separar_carga_horaria_pratica">
                                <option value="0" <?php echo ($cursoInfo['separar_carg_hor_pratica'] == 0)?'selected':''?>>Não</option>
                                <option value="1" <?php echo ($cursoInfo['separar_carg_hor_pratica'] == 1)?'selected':''?>>Sim</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="exampleInputEmail1">Separar carga horária de dispensa</label>
                            <select id="inputState" class="form-control custom-select" name="separar_carga_horaria_dispensa">
                                <option value="0" <?php echo ($cursoInfo['separar_carg_hor_dispensa'] == 0)?'selected':''?>>Não</option>
                                <option value="1" <?php echo ($cursoInfo['separar_carg_hor_dispensa'] == 1)?'selected':''?>>Sim</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="exampleInputEmail1">Mostrar Ano / Semestre</label>
                            <select id="inputState" class="form-control custom-select" name="mostrar_ano_semestre">
                                <option value="0" <?php echo ($cursoInfo['mostrar_ano_semestre'] == 0)?'selected':''?>>Não</option>
                                <option value="1" <?php echo ($cursoInfo['mostrar_ano_semestre'] == 1)?'selected':''?>>Sim</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="exampleInputEmail1">Mostrar título de período</label>
                            <select id="inputState" class="form-control custom-select" name="mostrar_titulo_periodo">
                                <option value="0" <?php echo ($cursoInfo['mostrar_titulo_periodo'] == 0)?'selected':''?>>Não</option>
                                <option value="1" <?php echo ($cursoInfo['mostrar_titulo_periodo'] == 1)?'selected':''?>>Sim</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Substituir o nome "dispensa" por "aproveitamento de estudos"</label>
                            <select id="inputState" class="form-control custom-select" name="subistituir_dispensa">
                                <option value="0" <?php echo ($cursoInfo['substituir_dispensa_aproveitamento'] == 0)?'selected':''?>>Não</option>
                                <option value="1" <?php echo ($cursoInfo['substituir_dispensa_aproveitamento'] == 1)?'selected':''?>>Sim</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Substituir o nome "pendente" por "a cursar".</label>
                            <select id="inputState" class="form-control custom-select" name="subistituir_pendente">
                                <option value="0" <?php echo ($cursoInfo['substituir_pendente_acursar'] == 0)?'selected':''?>>Não</option>
                                <option value="1" <?php echo ($cursoInfo['substituir_pendente_acursar'] == 1)?'selected':''?>>Sim</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Nome da CH</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome_ch" value="<?php echo (!empty($cursoInfo['nome_ch'])?$cursoInfo['nome_ch']:''); ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Abreviatura da CH</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="abrev_ch" value="<?php echo (!empty($cursoInfo['abrev_ch'])?$cursoInfo['abrev_ch']:''); ?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="exampleInputEmail1">Nome da CH Anual</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome_ch_anual" value="<?php echo (!empty($cursoInfo['nome_ch_anual'])?$cursoInfo['nome_ch_anual']:''); ?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="exampleInputEmail1">Abreviatura da CH Anual</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="abrev_ch_anual"value="<?php echo (!empty($cursoInfo['abrev_ch_anual'])?$cursoInfo['abrev_ch_anual']:''); ?>">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="exampleInputEmail1">Curso Equivalência</label>
                            <select id="inputState" class="form-control custom-select" name="curso_equival">
                                <option value="">Selecionar</option>   
                                <?php foreach($cursos as $curso):?>
                                    <option <?php echo ($curso['id'] == $cursoInfo['id_curso_equivalencia'])?'selected':''?> value="<?php echo $curso['id'];?>"><?php echo $curso['nome_curso'];?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Observação do Histórico</label>
                            <textarea name="observacao_historico" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" id="" cols="30" rows="10"><?php echo (!empty($cursoInfo['observacao_historico'])?$cursoInfo['observacao_historico']:''); ?></textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                           
                            <label for="exampleInputEmail1">Período letivo de 1/1 encerrado para este curso.</label>
                            <select id="inputState" class="form-control custom-select" name="periodo_letivo1">
                                <option value="0" <?php echo ($cursoInfo['periodo_letivo_encerrado'] == 0)?'selected':''?>>Não</option>
                                <option value="1" <?php echo ($cursoInfo['periodo_letivo_encerrado'] == 1)?'selected':''?>>Sim</option>
                                <!-- Foreach com os Cursos -->
                            </select>
                        </div>

                        
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Desbloquear professores para o período letivo de 1/1</label>
                            <select id="inputState" class="form-control custom-select" name="desbloquear_professores">
                                <option value="0" <?php echo ($cursoInfo['desbloq_prof_ano_let_1'] == 0)?'selected':''?>>Não</option>
                                <option value="1" <?php echo ($cursoInfo['desbloq_prof_ano_let_1'] == 1)?'selected':''?>>Sim</option>
                                <!-- Foreach com os Cursos -->
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Editar Curso</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="<?php echo $btnModal['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Adicionar Períodos </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formAddPeriodo">
            <input type="hidden" name="id_curso" value="<?php echo $cursoInfo['id'];?>">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Titulo:</label>
            <input type="text" class="form-control" id="recipient-name" name="titulo_2">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Sequencia:</label>
            <input type="number" class="form-control" id="recipient-name" name="sequencia_2">
          </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <input type="submit" value="Adicionar" class="btn btn-primary">
            <!-- <button type="button" class="btn btn-primary">Adicionar</button> -->
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg" id="<?php echo $btnSecondary['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <?php echo $btnSecondary['title'];?> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table id="complex-header" class="display" style="width:100%">
            <thead>
                <tr>
                    <th rowspan="2">Titulo</th>
                    <th colspan="2">Curso</th>
                    <th colspan="3"></th>
                </tr>
                
            </thead>
            <tbody>
                <?php foreach($periodos as $periodo):?>
                    <tr>
                        <td><?php echo $periodo['titulo'];?></td>
                        <td><?php echo $periodo['curso'][0]['nome_curso'];?></td>
                        <td>
                            remover
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        <table>
    </div>
  </div>
</div>

<script src="<?php echo BASE_URL;?>assets/plugins/jquery/jquery-3.4.1.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/js/ajax.js"></script>