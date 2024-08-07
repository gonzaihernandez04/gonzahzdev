<?php include_once __DIR__ . '/../templates/seccion_container.php';?>

    
    <div class="swiper2 mySwiper">
    <div class="swiper-wrapper">
        <?php foreach($titulos as $tituloIns):?>
      <div class="swiper-slide">
            <div class="seccion__card">
                <div class="seccion__card-img">
                    
                    <picture>
                        <source srcset="/public/build/img/<?php echo $tituloIns->imagen; ?>.webp" type="image/webp">
                        
                        
                        <?php if(str_contains($tituloIns->imagen,"nil") ){?>
                                               <?php }else{?>
                            <img src="/public/build/img/<?php echo $tituloIns->imagen; ?>.png" alt="<?php echo $tituloIns->imagen;?>" >
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