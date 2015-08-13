<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    <?php 
    if (isset($_COOKIE['LoCambioRegion'])) {
      echo $_COOKIE['LoCambioRegion'];
    }else{
      echo $this->region_model->getRegion('13')->nombre;
    }
    ?>
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <?php foreach ($this->region_model->getRegiones() as $reg) {
      echo "<li><a href=''>".$reg->nombre."</a></li>";
    }?>
 
  </ul>
</div>
<hr>
<div class="col-sm-3">
<ul class="nav nav-stacked nav-pills ">
  <li class="disabled text-uppercase">
    <a href="javascript:;">
      <strong>Categorias</strong>
    </a>
  </li>
  <?php foreach ($this->categoria_model->getCategorias() as $cat) {
    echo "<li><a href='".base_url('categoria/'.$cat->url_categoria)."'>".$cat->categoria."</a></li>";
  }?>
 
</ul>
</div>