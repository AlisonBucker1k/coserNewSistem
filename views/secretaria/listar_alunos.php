
        <div class="main-wrapper">
            <div class="row">
                <div class="col-xl">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Listar Alunos</h5>
                            <!-- <p>Area destinada ao cadastro de Diciplinas. </p> -->

                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <table id="zero-conf" class="display" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Nome do Aluno</th>
                                                        <!-- <th>Nome do Curso</th> -->
                                                        <th>RA.</th>
                                                        <th>CPF</th>
                                                        <th>Ações</th>
                                                    <tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>aaaa</td>
                                                        <td>System Architect</td>
                                                        <td>Edinburgh</td>
                                                        <td>
                                                            <!-- <a href="#" class="btn btn-outline-primary btn-xs"><span class="material-icons">remove_red_eye</span></a> -->
                                                            <a href="<?php echo site_url('secretaria/cursos/editar/1');?>" class="btn btn-outline-primary btn-xs"><span class="material-icons">edit</span></a>
                                                            <a href="#" class="btn btn-outline-danger btn-xs" onclick="return confirm('Tem certeza que deseja excluir este curso?')"><span class="material-icons">delete</span></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Nome do Aluno</th>
                                                        <!-- <th>Nome do Curso</th> -->
                                                        <th>RA.</th>
                                                        <th>CPF</th>
                                                        <th>Ações</th
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
<?php require_once(APPPATH.'views/comuns/secretaria/footer.php'); ?>