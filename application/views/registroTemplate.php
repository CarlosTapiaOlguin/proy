
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>urban admin ui kit html</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">
  <link rel="shortcut icon" href="<?php echo base_url("public//favicon.ico"); ?>" >

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

  <!-- page level plugin styles -->
  <!-- /page level plugin styles -->

  <!-- build:css({.tmp,app}) styles/app.min.css -->
  <link rel="stylesheet" href="<?php echo base_url("public/vendor/bootstrap/dist/css/bootstrap.css"); ?>" >
  <link rel="stylesheet" href="<?php echo base_url("public/vendor/perfect-scrollbar/css/perfect-scrollbar.css"); ?>" >
  <link rel="stylesheet" href="<?php echo base_url("public/styles/roboto.css"); ?>" >
  <link rel="stylesheet" href="<?php echo base_url("public/styles/font-awesome.css"); ?>" >
  <link rel="stylesheet" href="<?php echo base_url("public/styles/panel.css"); ?>" >
  <link rel="stylesheet" href="<?php echo base_url("public/styles/feather.css"); ?>" >
  <link rel="stylesheet" href="<?php echo base_url("public/styles/animate.css"); ?>" >
  <link rel="stylesheet" href="<?php echo base_url("public/styles/urban.css"); ?>" >
  <link rel="stylesheet" href="<?php echo base_url("public/styles/urban.skins.css"); ?>" >
  <link rel="stylesheet" href="<?php echo base_url("public/vendor/sweetalert/lib/sweet-alert.css"); ?>">
  <!-- endbuild -->

</head>

<body>

  <div class="app layout-fixed-header bg-white usersession">
    <div class="full-height">
      <div class="center-wrapper">
        <div class="center-content">
          <div class="row no-margin">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
              <?php echo form_open("login/registro",array('class' => 'form-layout')); ?>
                <div class="text-center mb15">
                  <h1>LoCambio</h1>
                </div>

                <p class="text-center mb30">Bienvenido, cree su cuenta.</p>

                <div class="form-inputs">
                  <input name="nombre" value="<?= set_value('nombre'); ?>" type="text" class="form-control input-lg" placeholder="Nombre">
                  <input name="apellidos"  value="<?= set_value('apellidos'); ?>" type="text" class="form-control input-lg" placeholder="Apellidos">
                  <input name="email" value="<?= set_value('email'); ?>" type="email" class="form-control input-lg" placeholder="Email">
                  <input name="pass" type="password" class="form-control input-lg" placeholder="Password">
                  <select name="region" class="form-control input-lg">
                      <?php foreach ($this->region_model->getRegiones() as $reg) {
                        echo "<option value='".$reg->codigo."'>".$reg->nombre."</option>";
                      }?>
                  </select>
                  <br>
                </div>

                <button class="btn btn-primary btn-block btn-lg mb15" type="submit">Registrarme</button>

                <p class="text-left">Al registrarse acepta nuestros <a href="<?php echo base_url("terminos"); ?>">Terminos y condiciones</a>.</p>

              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- build:js({.tmp,app}) scripts/app.min.js -->
  <script src="<?php echo base_url("public/scripts/extentions/modernizr.js"); ?>"></script>
  <script src="<?php echo base_url("public/vendor/jquery/dist/jquery.js"); ?>"></script>
  <script src="<?php echo base_url("public/vendor/bootstrap/dist/js/bootstrap.js"); ?>"></script>
  <script src="<?php echo base_url("public/vendor/jquery.easing/jquery.easing.js"); ?>"></script>
  <script src="<?php echo base_url("public/vendor/fastclick/lib/fastclick.js"); ?>"></script>
  <script src="<?php echo base_url("public/vendor/onScreen/jquery.onscreen.js"); ?>"></script>
  <script src="<?php echo base_url("public/vendor/jquery-countTo/jquery.countTo.js"); ?>"></script>
  <script src="<?php echo base_url("public/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.js"); ?>"></script>
  <script src="<?php echo base_url("public/scripts/ui/accordion.js"); ?>"></script>
  <script src="<?php echo base_url("public/scripts/ui/animate.js"); ?>"></script>
  <script src="<?php echo base_url("public/scripts/ui/link-transition.js"); ?>"></script>
  <script src="<?php echo base_url("public/scripts/ui/panel-controls.js"); ?>"></script>
  <script src="<?php echo base_url("public/scripts/ui/preloader.js"); ?>"></script>
  <script src="<?php echo base_url("public/scripts/ui/toggle.js"); ?>"></script>
  <script src="<?php echo base_url("public/scripts/urban-constants.js"); ?>"></script>
  <script src="<?php echo base_url("public/scripts/extentions/lib.js"); ?>"></script>
  <!-- endbuild -->

  <script src="<?php echo base_url("public/vendor/sweetalert/lib/sweet-alert.min.js"); ?>"></script>

  <?php echo  validation_errors('<div class="hide" id="errores">','</div>'); ?>
  <?php   if(isset($error)) { echo '<div class="hide" id="errores">'.$error.'</div>';}  ?>

  <script type="text/javascript">
    var mensaje = $("#errores").text();
    if(mensaje!=""){
      swal('Error!', mensaje , 'warning');
    }
  </script> 



</body>

</html>
