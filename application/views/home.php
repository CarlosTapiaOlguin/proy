<div class="col-sm-9">
  <div class="gallery">
    <?php foreach($this->producto_model->getProductos(48) as $prod) { ?>
    <div class="col-md-3 col-sm-4 col-xs-6">
      <a href="http://placeimg.com/800/440" title="Gallery Demo" data-gallery="">
        <div class="tumb">
        </div>
      </a>
      <span class="h5 bold"><?php //if(strlen($prod->titulo) > 20){ echo substr($prod->titulo,0,20)."..." ;}else{echo $prod->titulo;} ?></span>
      <div class="fa-hover col-md-3 col-sm-4">
        <a href="javascript:;">
          <span class="icon-repeat"></span>
          <span>icon-repeat</span>
        </a>
      </div>
      <hr>
    </div>
    <?php } ?>
  </div>
</div>