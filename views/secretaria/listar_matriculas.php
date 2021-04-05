
<div class="main-wrapper">
    <div class="row">
        <div class="col-xl">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Listar Matriculas</h5>
                    <!-- <p>Area destinada ao cadastro de Diciplinas. </p> -->

                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <table id="zero-conf" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Nome do Curso</th>
                                                <!-- <th>Nome do Curso</th> -->
                                                <th>Abrev.</th>
                                                <th>Codigo (INEP)</th>
                                                <th>Coordenador</th>
                                                <th>Área</th>
                                                <th>Ações</th>
                                            <tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($matriculas as $matricula):?>
                                                <tr>
                                                    <td><?php echo $matricula['nome_curso'];?></td>
                                                    <td><?php echo $matricula['abrev'];?></td>
                                                    <td><?php echo $matricula['cod_inep'];?></td>
                                                    <td><?php echo $matricula['id_coordenador'];?></td>
                                                    <td><?php echo $matricula['area'];?></td>
                                                    <td>
                                                        <!-- <a href="#" class="btn btn-outline-primary btn-xs"><span class="material-icons">remove_red_eye</span></a> -->
                                                        <a href="<?php echo BASE_URL.'secretaria/editarCurso/'.$matricula['id'];?>" class="btn btn-outline-primary btn-xs"><span class="material-icons">edit</span></a>
                                                        <a href="#" class="btn btn-outline-danger btn-xs" onclick="return confirm('Tem certeza que deseja excluir este curso?')"><span class="material-icons">delete</span></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Nome do Curso</th>
                                                <th>Abrev.</th>
                                                <th>Codigo (INEP)</th>
                                                <th>Coordenador</th>
                                                <th>Área</th>
                                                <th></th>
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
<!-- </div> -->

<script src="<?php echo BASE_URL;?>assets/plugins/jquery/jquery-3.4.1.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/plugins/DataTables/datatables.min.js"></script>

<script>
    $(document).ready( function () {
        $('#zero-conf').DataTable({
            language: {
                url: '<?php echo BASE_URL.'assets/plugins/DataTables/pt-br.json';?>'
            }
        });
    } );
</script>