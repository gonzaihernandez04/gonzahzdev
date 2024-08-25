<!--Refactorizar swiper en un rtemplate aparte-->

<div class="secciones container">

    <div class="swiper mySwiper">
        <div class="secciones__enlaces swiper-wrapper">
            <a href="/" class="secciones__enlace seccion__enlace--actual swiper-slide">Sobre Mi</a>
            <a href="/experiencia" class="secciones__enlace swiper-slide">Experiencia</a>
            <a href="/proyectos" class="secciones__enlace seccion__enlace--actual swiper-slide">Proyectos</a>
            <a href="/estudios" class="secciones__enlace swiper-slide">Estudios</a>
            <a href="/titulos" class="secciones__enlace seccion__enlace--actual swiper-slide">Titulos y certificados</a>
            <a href="/tecnologias" class="secciones__enlace seccion__enlace--actual swiper-slide">Tecnologias</a>
            <a href="/docencia" class="secciones__enlace">Docencia</a>
            <a href="/docencia/opiniones" class="secciones__enlace swiper-slide">Opiniones de alumnos</a>
            <a href="/blog" class="secciones__enlace ">Blog</a>
            <a href="/redes" class="secciones__enlace ">Contacto</a>

            <span class="secciones__enlace swiper-slide secciones__enlace--inactivo btn-abrir-modal">Redes Sociales</span>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>

    </div>



    <?php include_once __DIR__ . '/modal_base.php';?>

        <div class="modal__content-title">
            <h2>Redes sociales</h2>
        </div>  
        <div class="modal__items">
        <a class="modal__items-enlace" href="https://www.linkedin.com/in/gonza-hernandez/">
            <div class="modal__items-item modal__items-item--linkedin">
                 Linkedin
            </div>

            </a>
            <a class="modal__items-enlace " href="https://github.com/gonzaihernandez04">
            <div class="modal__items-item modal__items-item--git">
              GitHub
            </div>
            </a>
        </div>
    
    <!--Cierra divs del modal--> 
    </div>
    </div>

</div>

