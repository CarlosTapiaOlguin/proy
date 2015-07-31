<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>urban admin ui kit html</title>
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
            <img src="<?php echo base_url("public/images/sublogo.png"); ?>" height="60" alt="">
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

          <li>
            <a href="javascript:;" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <div class="status bg-danger border-danger animated bounce"></div>
            </a>
            <ul class="dropdown-menu notifications">
              <li class="notifications-header">
                <p class="text-muted small">Tienes x nuevas notificaciones</p>
              </li>
              <li>
                <ul class="notifications-list">
                  <li>
                    <a href="javascript:;">
                      <span class="pull-left mt2 mr15">
                                                <img src="<?php echo base_url("public/images/avatar.jpg"); ?>" class="avatar avatar-xs img-circle" alt="">
                                            </span>
                      <div class="overflow-hidden">
                        <span>Sean launched a new application</span>
                        <span class="time">2 seconds ago</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <div class="pull-left mt2 mr15">
                        <div class="circle-icon bg-danger">
                          <i class="fa fa-chain-broken"></i>
                        </div>
                      </div>
                      <div class="overflow-hidden">
                        <span>Removed chrome from app list</span>
                        <span class="time">4 Hours ago</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <span class="pull-left mt2 mr15">
                                                <img src="<?php echo base_url("public/images/face3.jpg"); ?>" class="avatar avatar-xs img-circle" alt="">
                                            </span>
                      <div class="overflow-hidden">
                        <span class="text-muted">Jack Hunt has registered</span>
                        <span class="time">9 hours ago</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="notifications-footer">
                <a href="javascript:;">See all messages</a>
              </li>
            </ul>
          </li>

          <li>
            <a href="javascript:;" data-toggle="dropdown">
              <img src="<?php echo base_url("public/images/avatar.jpg"); ?>" class="header-avatar img-circle ml10" alt="user" title="user">
              <span class="pull-left">Samuel Perkins</span>
            </a>
            <ul class="dropdown-menu">

              <li>
                <a href="javascript:;">Ayuda</a>
              </li>
              <li>
                <a href="javascript:;">Sugerencias</a>
              </li>
              <li>
                <a href="signin.html">Salir</a>
              </li>
            </ul>

          </li>
        </ul>
      </header>
      <!-- /top header -->

      <!-- main area -->
      <div class="main-content">
       