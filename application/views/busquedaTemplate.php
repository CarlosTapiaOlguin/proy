<div class="col-sm-9">
  <div class="gallery">
    <?php foreach($productos as $prod) { ?>
    <a href="<?= $prod->url_prod ?>">
    <div class="col-sm-4 col-lg-4 col-md-4 ficha-prod">
          <div class="thumbnail">
               
              <div class="tumb">
                <p> <?= ($prod->cant_visitas > 1)?$prod->cant_visitas." visitas":$prod->cant_visitas." visita" ?> </p>
                <img src="<?php echo "http://www.locambio.cl/profile/imgProductosMini/".$prod->imgprin ;?>" alt="">

              </div>
              <div class="caption">
                  <h4><?php if(strlen($prod->titulo) > 25 ){ echo substr(ucwords($prod->titulo),0,25)."..." ;}else{echo ucwords($prod->titulo);} ?>
                  </h4>

                  <p><span class="icon-repeat"></span> <?= $prod->que_busco ?></p>
              </div>
              <div class="ratings">
                <p class="pull-right">$<?= number_format($prod->valor,0,",",".") ?></p>
                 
                  <a href="<?= base_url('perfil/'.$prod->user) ?>"><p class="bold"><?= $prod->user ?></p></a>
                  
              </div>
          </div>
      </div>
      </a>
    <?php } ?>
  </div>
  <ul class="pagination clearfix block">
  <?php 
    if (!empty($categoria)) {
      $metodo = 'categoria';
    }else{
      $metodo = 'buscar';
    }

    if($pagina != "1"){
      echo "<li><a href=".base_url($metodo."/".$match."/".($pagina-1)).">←</a></li>";
    }
    for ($i=1; $i <= $totalPaginas; $i++) { 
      if($pagina == $i){
        echo "<li class='active'><a  href=".base_url($metodo."/".$match."/".($i)).">".$i."</a></li>";
      }else{
        echo "<li><a href=".base_url($metodo."/".$match."/".($i)).">".$i."</a></li>";
      }
    }
    if($pagina != $totalPaginas){
      echo "<li><a href=".base_url($metodo."/".$match."/".($pagina+1)).">→</a></li>";
    }
    
  ?>
  </ul>      
</div>