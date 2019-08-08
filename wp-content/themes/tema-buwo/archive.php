<?php get_header(); ?>
      <!-- Menu-->
      <div class="">
          <nav id="nav2-bar-archive" class="navbar navbar-expand-md ">
            <img class="" style=" margin-left: 1px;  width: auto; height: 71px; position:absolute;" src="http://192.168.64.2/wordpress-buwo/wp-content/uploads/2019/08/rectangle-salmon.png" alt="">
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
                  <a class="nav-link" href="#">HOME</a>
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
      <!-- Blog-->
      <div id="font" class="text-center header-container" style="background-image:url('http://192.168.64.2/wordpress-buwo/wp-content/uploads/2019/08/header-cabecera.png');padding-top:100px;padding-bottom:175px;">
        <div class="container">
            <div class="col-md-6 offset-md-3 header-title">
              <img class="" src="http://192.168.64.2/wordpress-buwo/wp-content/uploads/2019/08/Logo-2.png" alt="">
                <h3 class="blog">BLOG</h3>
            </div>
        </div>
    </div>
    <!-- Blog-->

  <!-- Entradas-->

  <?php
  //loop entradas
      if ( have_posts() ) :
        while ( have_posts() ) : the_post();
   ?>

    <div class="container">

      <figure class="destinations">
          <figcaption>
              <h5 id="title-card"><?php the_title(); ?></h5>
              <?php the_content( $more_link_text = null, $strip_teaser = false ); ?>
              <button class="btn-leer " type="button" name="button">VER MAS</button>
          </figcaption>
        <div class="figure-footer"></div>
      </figure>

  </div>
  <?php
    endwhile;
      endif;
  ?>

 <!-- Entradas-->
<?php // get_footer(); ?>
