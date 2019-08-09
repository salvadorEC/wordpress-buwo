<?php get_header();


?>

<body class="body-index">
<div class="">
  <div class="col-md-6">
    <div class="center-izq">

    </div>
  </div>
  <div class="col-md-6">
    <div class="center-der">

    </div>
  </div>
</div>
  <!-- Entradas-->
  <div class="container">
    <?php
    //mostrar solo post destacados
    query_posts('post_type=post_type_des&featured=yes');
    //loop entradas
        if ( have_posts() ) :
          while ( have_posts() ) : the_post();
     ?>
        <figure class="destinationsindex">
            <figcaption>
                <h5 id="title-card"><?php the_title(); ?></h5>
                <?php the_content( $more_link_text = null, $strip_teaser = false ); ?>
                <button class="btn-leer" type="button"><a class="btn-leer-link" href=" <?php echo the_permalink(); ?>">VER MAS</a></button>
            </figcaption>
          <div class="figure-footer"></div>
        </figure>


    <?php
      endwhile;
        endif;
    ?>


  </div>
  <!-- Entradas-->

</body>
