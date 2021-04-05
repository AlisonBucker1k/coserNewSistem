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
                    <li class="breadcrumb-item active" aria-current="page">Listar Turmas</li>
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
                            <h5 class="card-title">Listar Turmas</h5>
                            <!-- <p>Area destinada ao cadastro de Diciplinas. </p> -->

                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <table id="zero-conf" class="display" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Nome da Turma</th>
                                                        <!-- <th>Nome do Curso</th> -->
                                                        <th>Abrev.</th>
                                                        <th>Codigo (INEP)</th>
                                                        <th>Coordenador</th>
                                                        <th>Área</th>
                                                        <th>Ações</th>
                                                    <tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>aaaa</td>
                                                        <td>System Architect</td>
                                                        <td>Edinburgh</td>
                                                        <td>61</td>
                                                        <td>2011/04/25</td>
                                                        <td>
                                                            <!-- <a href="#" class="btn btn-outline-primary btn-xs"><span class="material-icons">remove_red_eye</span></a> -->
                                                            <a href="<?php echo site_url('secretaria/cursos/editar/1');?>" class="btn btn-outline-primary btn-xs"><span class="material-icons">edit</span></a>
                                                            <a href="#" class="btn btn-outline-danger btn-xs" onclick="return confirm('Tem certeza que deseja excluir este curso?')"><span class="material-icons">delete</span></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Nome da turma</th>
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
    </div>

<script src="<?php echo base_url();?>assets/plugins/jquery/jquery-3.4.1.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/DataTables/datatables.min.js"></script>

<script>
    $(document).ready( function () {
        $('#zero-conf').DataTable({
            language: {
                url: '<?php echo base_url('assets/plugins/DataTables/pt-br.json');?>'
            }
        });
    } );
</script>
<?php require_once(APPPATH.'views/comuns/secretaria/footer.php'); ?>