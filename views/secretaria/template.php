<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title><?php echo $viewData['title'];?> | Secretaria</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        <link href="<?php echo BASE_URL;?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo BASE_URL;?>assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
        <link href="<?php echo BASE_URL;?>assets/plugins/DataTables/datatables.min.css" rel="stylesheet">
      
        <!-- Theme Styles -->
        <link href="<?php echo BASE_URL;?>assets/css/connect.min.css" rel="stylesheet">
        <link href="<?php echo BASE_URL;?>assets/css/dark_theme.css" rel="stylesheet">
        <link href="<?php echo BASE_URL;?>assets/css/custom.css" rel="stylesheet">

        <link rel="stylesheet" href="cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class='loader'>
            <div class='spinner-grow text-primary' role='status'>
                <span class='sr-only'>Loading...</span>
            </div>
        </div>
        <div class="connect-container align-content-stretch d-flex flex-wrap">
            <div class="page-sidebar">
                <div class="logo-box"><a href="<?php echo BASE_URL.'secretaria/';?>" class="logo-text"><img src="<?php echo BASE_URL.'assets/images/logo-silver.png';?>" style="margin: 0;width: 150px;" alt=""></a><a href="#" id="sidebar-close"><i class="material-icons">close</i></a> <a href="#" id="sidebar-state"><i class="material-icons">adjust</i><i class="material-icons compact-sidebar-icon">panorama_fish_eye</i></a></div>
                <div class="page-sidebar-inner slimscroll">
                <ul class="accordion-menu" >
                        <li class="sidebar-title">
                            Apps
                        </li>
                        <li class="active-page">
                            <a href="<?php echo BASE_URL.'secretaria/';?>" class="active"><i class="material-icons-outlined">dashboard</i>Dashboard</a>
                        </li>

                        <li class="sidebar-title">
                            Menu
                        </li>
                        <li>
                            <a href="#"><i class="material-icons">text_format</i>Cursos<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?php echo BASE_URL.'secretaria/verCursos';?>">Ver Cursos</a>
                                </li>
                                <li>
                                    <a href="">Ver Diciplinas</a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li class="sidebar-title">
                            Alunos
                        </li> -->
                        <li>
                            <a href="#"><i class="material-icons">text_format</i>Alunos<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?php echo BASE_URL.'secretaria/alunos';?>">Alunos</a>
                                </li>
                                <li>
                                    <a href="<?php echo BASE_URL.'secretaria/matricularAluno';?>">Matricular Aluno</a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li class="sidebar-title">
                            Turmas
                        </li> -->
                        <li>
                            <a href="#"><i class="material-icons">text_format</i>Turmas<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?php echo BASE_URL.'secretaria/listar_turmas';?>">Lista de Turmas</a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li class="sidebar-title">
                            Documentos
                        </li> -->
                        <li>
                            <a href="#"><i class="material-icons">text_format</i>Documentos<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?php echo BASE_URL.'secretaria/add_doc';?>">Adicionar Documentos</a>
                                </li>
                                <li>
                                    <a href="<?php echo BASE_URL.'secretaria/add_doc_aluno';?>">Adicionar Documento ao Aluno</a>
                                </li>
                                <li>
                                    <a href="<?php echo BASE_URL.'secretaria/list_doc';?>">Listar Documentos</a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li class="sidebar-title">
                            Matriculas
                        </li> -->
                        <li>
                            <a href="#"><i class="material-icons">text_format</i>Matriculas<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?php echo BASE_URL.'secretaria/list_matriculas';?>">Matriculas</a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li class="sidebar-title">
                            Contratos
                        </li> -->
                        <li>
                            <a href="#"><i class="material-icons">text_format</i>Contratos<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="styles-typography.html">Adicionar Contrato</a>
                                </li>
                                <li>
                                    <a href="styles-typography.html">Lista de Contratos</a>
                                </li>
                                <li>
                                    <a href="styles-typography.html">Relatório de Contratos</a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li class="sidebar-title">
                            Relatórios
                        </li> -->
                        <li>
                            <a href="#"><i class="material-icons">text_format</i>Relatórios<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="styles-typography.html">Filtrar Relatórios</a>
                                </li>
                                
                            </ul>
                        </li>

                        <!-- <li class="sidebar-title">
                            Email Marketing
                        </li> -->
                        <li>
                            <a href="#"><i class="material-icons">text_format</i>Peças Promocionais<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="styles-typography.html">Adicionar</a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li class="sidebar-title">
                            Portal do Aluno
                        </li> -->
                        <li>
                            <a href="#"><i class="material-icons">text_format</i>Portal do Aluno<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="styles-typography.html">Adicionar Comunicado</a>
                                </li>
                                <li>
                                    <a href="styles-typography.html">Lista de Comunicados</a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li class="sidebar-title">
                            Livro de Ocorrencia
                        </li> -->
                        <li>
                            <a href="#"><i class="material-icons">text_format</i>Livro de Ocorrência<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="styles-typography.html">Ocorrência do Aluno</a>
                                </li>
                                <li>
                                    <a href="styles-typography.html">Ocorrência da Turma</a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li class="sidebar-title">
                            Calendario da Turma
                        </li> -->
                        <li>
                            <a href="#"><i class="material-icons">text_format</i>Calendario da Turma<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="styles-typography.html">Lista de Turmas</a>
                                </li>
                            </ul>
                        </li>
                        
                        <!-- <li class="sidebar-title">
                            Cadastros
                        </li> -->
                        <li>
                            <a href="#"><i class="material-icons">text_format</i>Cadastros Gerais<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="">Cadastrar Unidades</a>
                                </li>
                                <li>
                                    <a href="">Cadastrar Professor</a>
                                </li>
                                <li>
                                    <a href="">Cadastrar Tutor</a>
                                </li>
                                <li>
                                    <a href="">Cadastrar Coordenador</a>
                                </li>
                            </ul>
                        </li>

                        

                        
                    </ul> 
                </div>
            </div>
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
                                    <img src="<?php echo BASE_URL;?>assets/images/avatars/profile-image-2.png" alt="profile image">
                                    <span>Alison Bucker</span><i class="material-icons dropdown-icon">keyboard_arrow_down</i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Calendar<span class="badge badge-pill badge-info float-right">2</span></a>
                                    <a class="dropdown-item" href="#">Settings &amp Privacy</a>
                                    <a class="dropdown-item" href="#">Switch Account</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?php echo BASE_URL.'secertaria/logout';?>">Log out</a>
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
                                    <a href="<?php echo BASE_URL.'secretaria/logout';?>" class="nav-link">Sair</a>
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
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                        <div class="page-options">
                            <?php if(isset($viewData['btnSecondary'])):?>
                                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#<?php echo $viewData['btnSecondary']['id'];?>" data-whatever="@mdo"><?php echo $viewData['btnSecondary']['title'];?></button>
                            <?php endif;?>
                            <?php if(isset($viewData['btnAction']) && !isset($viewData['btnModal'])):?>
                                <a href="<?php echo $viewData['btnAction']['link'];?>" class="btn btn-primary"><?php echo $viewData['btnAction']['title'];?></a>
                            <?php endif;?>
                            <?php if(isset($viewData['btnModal']) && !isset($viewData['btnAction'])):?>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $viewData['btnModal']['id'];?>" data-whatever="@mdo"><?php echo $viewData['btnModal']['title'];?></button>
                            <?php endif;?>
                        </div>
                    </div>
                    

                    <?php $this->loadViewInTemplate($viewName, $viewData, 'secretaria'); ?>



                <div class="page-footer">
                    <div class="row">
                        <div class="col-md-12">
                            <span class="footer-text"><?php echo date('Y') ?> © <a href="https://bckcode.com.br">BCKCode</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Javascripts -->
        <script src="<?php echo BASE_URL;?>assets/plugins/jquery/jquery-3.4.1.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="<?php echo BASE_URL;?>assets/plugins/bootstrap/popper.min.js"></script>
        <script src="<?php echo BASE_URL;?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo BASE_URL;?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo BASE_URL;?>assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="<?php echo BASE_URL;?>assets/plugins/apexcharts/dist/apexcharts.min.js"></script>
        <script src="<?php echo BASE_URL;?>assets/plugins/blockui/jquery.blockUI.js"></script>
        <script src="<?php echo BASE_URL;?>assets/plugins/flot/jquery.flot.min.js"></script>
        <script src="<?php echo BASE_URL;?>assets/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="<?php echo BASE_URL;?>assets/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="<?php echo BASE_URL;?>assets/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="<?php echo BASE_URL;?>assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo BASE_URL;?>assets/js/connect.min.js"></script>
        <script src="<?php echo BASE_URL;?>assets/js/pages/dashboard.js"></script>
        <script> const base_url = '<?php echo BASE_URL;?>'; </script>
    </body>
</html>