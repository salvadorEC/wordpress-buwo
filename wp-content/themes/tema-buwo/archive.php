<?php get_header(); ?>
<body>
 <div class="body-content">
   <!-- Menu-->
    <div class="content-1">
          <nav id="nav2-bar-archive" class="navbar navbar-expand-md ">
            <div class="nav-extra"></div>
            <img class="" style=" margin-left: 210px;  width: auto; height: 71px; position:relative;" src="http://192.168.64.2/wordpress-buwo/wp-content/uploads/2019/08/logo-salmon.png" alt="">
            <div class="nav-item active">
              <h5>BOUTIQUE TRAVEL</h5>
                <h4 id="designer" class="text-muted">DESIGNERS</h4>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="http://192.168.64.2/wordpress-buwo/">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">ABOUT</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">BLOG</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">GALERIES</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">CONTACT</a>
                </li>
              </ul>
        </nav>
      </div>
   <!-- Menu-->
   <!-- Blog header-->
    <div id="font" class="text-center header-container" style="background-image:url('http://192.168.64.2/wordpress-buwo/wp-content/uploads/2019/08/header-cabecera.png');padding-top:10px;padding-bottom:175px;">
        <div class="containerNull">
            <div style="top: 100px;"class="col-md-6 offset-md-3 header-title">
              <img src="http://192.168.64.2/wordpress-buwo/wp-content/uploads/2019/08/Logo-2.png" alt="">
                <h3 class="blog">BLOG</h3>
            </div>
        </div>
      </div>
    <!-- Blog header-->
    <!-- Entradas-->
    <div class="container">
      <?php
      //Mostrar en orden aleatorio
      $query = new WP_Query( array ( 'orderby' => 'rand', 'post_type' => 'post_type_des', 'posts_per_page' => '-1' ) );

              if( $query->have_posts() ):
                      // Start the Loop.
                      while ( $query->have_posts() ) : $query->the_post(); {?>

                      <figure class="destinations">
                          <figcaption>
                              <h5 id="title-card"><?php the_title(); ?></h5>
                              <?php the_content(); ?>
                              <button class="btn-leer" type="button"><a class="btn-leer-link" href=" <?php echo the_permalink(); ?>">VER MAS</a></button>
                          </figcaption>
                        <div class="figure-footer"></div>
                      </figure>
                          <?php  get_template_part( 'content', get_post_format() );
                        }

                      endwhile;
                  else :
                      get_template_part( 'content', 'none' );
                  endif;
              ?>

    </div>
    <!-- Entradas-->
    </div>
 </div>
</body>
</html>

<?php get_footer(); ?>
