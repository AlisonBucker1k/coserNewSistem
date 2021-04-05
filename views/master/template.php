<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php echo $viewData['title'];?> | Gerenciador Master">
        <meta name="keywords" content="<?php echo $viewData['title'];?> | Gerenciador Master">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title><?php echo $viewData['title'];?> | Gerenciador Master</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        <link href="<?php echo  BASE_URL;?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo  BASE_URL;?>assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
        <link href="<?php echo  BASE_URL;?>assets/plugins/DataTables/datatables.min.css" rel="stylesheet">

      
        <!-- Theme Styles -->
        <link href="<?php echo  BASE_URL;?>assets/css/connect.min.css" rel="stylesheet">
        <link href="<?php echo  BASE_URL;?>assets/css/admin2.css" rel="stylesheet">
        <link href="<?php echo  BASE_URL;?>assets/css/dark_theme.css" rel="stylesheet">
        <link href="<?php echo  BASE_URL;?>assets/css/custom.css" rel="stylesheet">

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
            <div class="page-container">
                <div class="page-header" style="background-color: #a71116;">
                    <nav class="navbar navbar-expand container">
                        <div class="logo-box"><a href="#" class="logo-text"><img src="<?php echo BASE_URL.'assets/images/logo-silver.png';?>" width="120px" alt=""></a></div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <?php if(isset($_SESSION['master']) && !empty($_SESSION['master'])):?>
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
                                        <a class="dropdown-item" href="<?php echo BASE_URL.'master/logout'?>">Log out</a>
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
                                    <!-- <li class="nav-item">
                                        <a href="#" class="nav-link">Projects</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Tasks</a>
                                    </li> -->
                                    <li class="nav-item">
                                        <a href="<?php echo BASE_URL.'master/logout'?>" class="nav-link">Sair</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="navbar-search">
                                <form>
                                    <div class="form-group">
                                        <input type="text" name="search" id="nav-search" placeholder="Pesquisar Aluno...">
                                    </div>
                                </form>
                            </div>
                        <?php endif;?>
                    </nav>
                </div>
                <div class="horizontal-bar">
                    <div class="logo-box"><a href="#" class="logo-text">Connect</a></div>
                    <a href="#" class="hide-horizontal-bar"><i class="material-icons">close</i></a>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="horizontal-bar-menu">
                                    <?php if(isset($_SESSION['master']) && !empty($_SESSION['master'])):?>
                                        <ul>
                                            <li><a href="<?php echo BASE_URL.'master'?>" class="active">Dashboard</a></li>
                                            <li><a href="<?php echo BASE_URL.'master/secretaria/'?>">Secretaria</a></li>
                                            
                                            <li><a href="<?php echo BASE_URL.'master/empresas/'?>">Empresas</a></li>
                                           <!--  <li><a href="charts.html">Charts</a></li>
                                           
                                            <li><a href="#">Components<i class="material-icons">keyboard_arrow_down</i></a>
                                                <ul>
                                                    <li>
                                                        <a href="ui-alerts.html">Alerts</a>
                                                    </li>
                                                    <li>
                                                        <a href="ui-badge.html">Badge</a>
                                                    </li>
                                                </ul>
                                            </li>
                                             -->
                                        </ul>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-content">
                    <?php if(isset($_SESSION['master']) && !empty($_SESSION['master'])):?>
                        <div class="page-info container">
                            <div class="row">
                                <div class="col">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL.'master/';?>">Apps</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"><?php echo $viewData['title'];?></li>
                                        </ol>
                                    </nav>
                                    <div class="page-options">
                                        <a href="#" class="btn btn-secondary">Settings</a>
                                        <?php if(isset($viewData['btnAdd'])):?>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $viewData['btnAdd']['id'];?>" data-whatever="@mdo"><?php echo $viewData['btnAdd']['title'];?></button>
                                            <!-- <a href="#" id="<?php echo $viewData['btnAdd']['id'];?>" class="btn btn-primary"><?php echo $viewData['btnAdd']['title'];?></a> -->
                                        <?php endif;?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif;?>
                    <div class="main-wrapper container">
                        <?php $this->loadViewInTemplate($viewName, $viewData, 'master'); ?>
                    </div>
                </div>
                <div class="page-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <span class="footer-text"><?php echo date('Y')?> © <a href="https://bckcode.com.br">BCKCODE</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Javascripts -->
        <script src="<?php echo  BASE_URL;?>assets/plugins/jquery/jquery-3.4.1.min.js"></script>
        <script src="<?php echo  BASE_URL;?>assets/plugins/bootstrap/popper.min.js"></script>
        <script src="<?php echo  BASE_URL;?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo  BASE_URL;?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo  BASE_URL;?>assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="<?php echo  BASE_URL;?>assets/plugins/apexcharts/dist/apexcharts.min.js"></script>
        <script src="<?php echo  BASE_URL;?>assets/plugins/blockui/jquery.blockUI.js"></script>
        <script src="<?php echo  BASE_URL;?>assets/plugins/flot/jquery.flot.min.js"></script>
        <script src="<?php echo  BASE_URL;?>assets/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="<?php echo  BASE_URL;?>assets/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="<?php echo  BASE_URL;?>assets/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="<?php echo  BASE_URL;?>assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo  BASE_URL;?>assets/js/connect.min.js"></script>
        <script src="<?php echo  BASE_URL;?>assets/js/pages/dashboard.js"></script>
        <script src="<?php echo BASE_URL;?>assets/plugins/DataTables/datatables.min.js"></script>
    </body>
</html>