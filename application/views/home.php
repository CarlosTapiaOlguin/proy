<div class="col-sm-9">
  <div class="gallery">
    <?php foreach($this->producto_model->getProductos(48) as $prod) { ?>
    <div class="col-md-3 col-sm-4 col-xs-6">
      <a href="#">
        <div class="tumb">  
            <img src="<?php echo "http://www.locambio.cl/profile/imgProductosMini/".$prod->imgprin ;?>" alt="">
        </div>
      </a>
      <span class="h5 bold"><?php if(strlen($prod->titulo) > 20){ echo substr(ucwords($prod->titulo),0,20)."..." ;}else{echo ucwords($prod->titulo);} ?></span>
      <hr>
    </div>
    <?php } ?>
  </div>
</div>