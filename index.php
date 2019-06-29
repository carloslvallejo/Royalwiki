<?php get_header(); ?>

  <!------------------------------- CAROUSEL DE NOTICIAS --------------------------->
  <section class="container slide">
      <div id="carouselExampleControls" class="carousel slide border-bottom" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php bloginfo('template_url');?>/img/sample-1.jpg" class="d-block w-100" alt="..." height="400px">
          </div>
          <div class="carousel-item">
            <img src="<?php bloginfo('template_url');?>/img/sample-2.jpg" class="d-block w-100" alt="..." height="400px">
          </div>
          <div class="carousel-item">
            <img src="<?php bloginfo('template_url');?>/img/sample-3.jpg" class="d-block w-100" alt="..." height="400px">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </section>

  <!------------------------------------ BOTONES --------------------------------->
  <section class="container wid my-5">
      <div class="col-12">
        <div class="row">
          <div class="col-12 col-md-4">
              <div class="btn btn-lg btn-dark d-inline-flex justify-content-center my-1" id="boton">
                <div class="icono">
                  <span style="font-size:35px"><i class="fas fa-download"></i></span>
                </div>
                <div class="contenido">
                  <a href="#"><h1 class="h3">DESCARGAR</h1></a>
                </div>
              </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="btn btn-lg btn-dark d-inline-flex justify-content-center my-1" id="boton">
              <div class="icono">
                <span style="font-size:35px"><i class="fas fa-hat-wizard"></i></span>
              </div>
              <div class="contenido">
                <a href="#"><h1 class="h3">EQUIPAMENTO</h1></a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="btn btn-lg btn-dark d-inline-flex justify-content-center my-1" id="boton">
              <div class="icono">
                <span style="font-size:35px"><i class="fas fa-spider"></i>
              </div>
              <div class="contenido">
                <a href="#"><h1 class="h3">CRIATURAS</h1></a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <!------------------------------------- ULTIMAS NOTICIAS ---------------------------->
  <section class="container my-4">
    <div class="col-12 d-flex align-items-center pb-2">
      <div class="col-md-1 d-none d-md-block">
        <hr style="border: 2px solid grey;border-radius:5px;">
      </div>
      <div class="col-12 col-md-4">
        <h1 class="h1 text-danger">Últimas <strong class="text-white">Quest</strong></h1>
      </div>
      <div class="col-md-7 d-none d-md-block">
        <hr style="border: 2px solid grey;border-radius:5px;">
      </div>
    </div>
    
    <div class="row">
      <div class="col-12 col-md-5 px-0">
       <div class="list-group">
         <?php if (have_posts()) : while (have_posts() ) : the_post();?>
          <a href="<?php the_permalink(); ?>" class="list-group-item list-group-item-action bg-dark p-0">
            <div class="panel bg-dark">
              <div class="panel-img p-2">
              <?php if(has_post_thumbnail()) {
                  the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid img-left'));
                }
              ?> 
              </div>
              <div class="panel-contenido py-3">
                <p class="text-white"><?php the_title(); ?></p>
                <span class="text-white mr-2"><i class="fas fa-calendar"></i> <?php the_time('F j, Y'); ?></span>
              </div>
            </div>
          </a>
         <?php endwhile; endif;?>
       </div>
      </div>
      
      <div class="col-12 col-md-7 p-0">
        <div id="carousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?php bloginfo('template_url');?>/img/wintertodt.jpg"" class="d-block w-100" alt="..." height="291px">
            </div>
            <div class="carousel-item">
              <img src="<?php bloginfo('template_url');?>/img/fc.png" class="d-block w-100" alt="..." height="291px">
            </div>
            <div class="carousel-item">
              <img src="<?php bloginfo('template_url');?>/img/mm2.png" class="d-block w-100" alt="..." height="291px">
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
<?php get_footer(); ?>