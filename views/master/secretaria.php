<div class="main-wrapper">
    <div class="row">
        <div class="col-xl">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Secretarias</h5>
                    <!-- <p>Area destinada ao cadastro de Diciplinas. </p> -->

                    <?php if(isset($success) && $success === true):?>
                        <div class="alert alert-success">Secretaria cadastrada com sucesso!</div>
                    <?php endif;?>

                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <table id="zero-conf" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <!-- <th>Nome do Aluno</th>
                                                <th>Nome do Curso</th> 
                                                <th>RA.</th>
                                                <th>CPF</th>
                                                <th>Ações</th> -->
                                            <tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($listSecretary as $secretary):?>
                                                <tr>
                                                    <td><?php echo $secretary['name'];?></td>
                                                    <td><?php echo $secretary['email'];?></td>
                                                    <td>
                                                        <?php if($secretary['active'] == 1):?>
                                                            <span class="badge badge-success">Ativo</span>
                                                        <?php elseif($secretary['active'] == 0):?>
                                                            <span class="badge badge-danger">Inativo</span>
                                                        <?php endif;?>
                                                    </td>
                                                    <td>
                                                        <!-- <a href="#" class="btn btn-outline-primary btn-xs"><span class="material-icons">remove_red_eye</span></a> -->
                                                        <a href="" class="btn  btn-xs"><span class="material-icons">edit</span></a>
                                                        <a href="#" class="btn btn-outline-danger btn-xs" onclick="return confirm('Tem certeza que deseja excluir este curso?')"><span class="material-icons">delete</span></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Nome</th>
                                                <!-- <th>Nome do Curso</th> -->
                                                <th>Email</th>
                                                <th>Status</th>
                                                <!-- <th>Ações</th> -->
                                            <tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="<?php echo $btnAdd['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar Secretária</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nome:</label>
            <input type="text" class="form-control" id="recipient-name" name="name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">E-mail:</label>
            <input type="text" class="form-control" id="recipient-name" name="email">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Senha de Acesso:</label>
            <input type="password" class="form-control" id="recipient-name" name="pass">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Empresa:</label>
            <select id="inputState" class="form-control custom-select" name="company">
                <option value="">Selecionar Empresa</option>
                <?php foreach($companyList as $company):?>
                    <option value="<?php echo $company['id'];?>"><?php echo $company['name'];?></option>
                <?php endforeach;?>
                
            </select>
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

<script src="<?php echo BASE_URL;?>assets/plugins/jquery/jquery-3.4.1.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/plugins/DataTables/datatables.min.js"></script>

<script>
    $(document).ready( function () {
        $('#zero-conf').DataTable({
            language: {
                url: '<?php echo BASE_URL."assets/plugins/DataTables/pt-br.json";?>'
            }
        });
    } );
</script>