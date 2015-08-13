<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>LoCambio Chile - Donde cambiar y vender es fácil.</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">
  <link rel="shortcut icon" href="<?php echo base_url("public/images/favicon.png"); ?>">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory --> 

  <!-- page level plugin styles -->
  <link rel="stylesheet" href="<?php echo base_url("public/styles/climacons-font.css"); ?>">
 
  <!-- /page level plugin styles -->

  <!-- build:css({.tmp,app}) styles/app.min.css -->
  <link rel="stylesheet" href="<?php echo base_url("public/vendor/bootstrap/dist/css/bootstrap.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("public/vendor/perfect-scrollbar/css/perfect-scrollbar.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("public/styles/roboto.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("public/styles/font-awesome.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("public/styles/panel.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("public/styles/feather.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("public/styles/animate.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("public/styles/urban.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("public/styles/urban.skins.css"); ?>">
  <!-- endbuild -->
</head>
<body>

   <div class="app layout-fixed-header layout-small-menu">

  

    <!-- content panel -->
    <div class="main-panel">

      <!-- top header -->
      <header class="header navbar">


        <ul class="nav navbar-nav navbar-left">
      
          <div class="brand-logo">
            <a href="<?=  base_url("home") ?>">
              <img src="<?=  base_url("public/images/sublogo.png") ?>" height="60" alt="">
            </a>
          </div>
        

        </ul>

    
          <div class="col-sm-6" style="margin-top: 10px;">

              <div class="input-group mb15">

                  <input type="text" class="form-control" placeholder="Ej : Iphone 6 16GB">
                  <span class="input-group-btn">
                      <button class="btn btn-primary" type="button">Buscar</button>
                  </span>
              </div>
            </div>
        
        <ul class="nav navbar-nav navbar-right">
          <?php if(!empty($this->session->userdata('user'))){ ?>
              <li>
                <a href="<?php echo base_url($this->session->userdata('user')."/notificaciones"); ?>" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <div class="status bg-danger border-danger animated bounce"></div>
                </a>
              </li>

              <li>
                <a href="javascript:;" data-toggle="dropdown">
                  <img src="<?php echo "http://www.locambio.cl/profile/fotoPerfilMini/".$this->session->userdata('imgperfil'); ?>" class="header-avatar img-circle ml10" alt="user" title="user">
                  <span class="pull-left"><?php echo $this->session->userdata('user'); ?></span>
                </a>
                <ul class="dropdown-menu">

                  <li>
                    <a href="javascript:;">Ayuda</a>
                  </li>
                  <li>
                    <a href="javascript:;">Sugerencias</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('login/salir'); ?>">Salir</a>
                  </li>
                </ul>
              </li>
            <?php }else {?>
                <li><a href="<?php echo base_url("login"); ?>">Entrar</a></li>
                <li><a href="<?php echo base_url("login/registro"); ?>">Registrate</a></li>
                <li><a href="<?php echo base_url("ayuda"); ?>">Ayuda</a></li>
                <li><a href="<?php echo base_url("sugerencias"); ?>">Sugerencias</a></li>
            <?php }?>



        </ul>
      </header>
      <!-- /top header -->

      <!-- main area -->
      <div class="main-content">
       