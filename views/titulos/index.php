<section class="seccion container seccion-titulos">
    <div class="seccion__titulo">
        <h2>Titulos y certificaciones 📑</h2>
    </div>
    
    <div class="swiper2 mySwiper">
    <div class="swiper-wrapper">
        <?php foreach($titulos as $tituloIns):?>
      <div class="swiper-slide">
            <div class="seccion__card">
                <div class="seccion__card-img">
                    
                    <picture>
                        <source srcset="build/img/<?php echo $tituloIns->imagen; ?>.webp" type="image/webp">
                        
                        
                        <?php if(str_contains($tituloIns->imagen,"nil") ){?>
                       
                            <video src="build/img/puntos.gif" alt="ptm abuela" >
                        <?php }else{?>
                            <img src="build/img/<?php echo $tituloIns->imagen; ?>.png" alt="<?php echo $tituloIns->imagen;?>" >
                        <?php }   ?>
                    </picture>
                </div>
                <div class="seccion__texto">
                    <h3><?php echo $tituloIns->nombre ?? '';?></h3>
                    <p>Duracion: <?php echo $tituloIns->duracion?></p>
                </div>
            </div>

      </div>
      <?php endforeach?>
    
    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>