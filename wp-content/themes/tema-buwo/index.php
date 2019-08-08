<?php get_header();


?>
<!-- Menu--><nav class="navbar navbar-dark bg-dark">
<!-- Navbar content -->
</nav>

<body class="body-index">

  <!-- contenido principal del blog -->

      <div class="d-flex bd-highlight">
        <div class="p-2 w-25 bd-highlight bg-dark">Flex item</div>
        <div class="p-2 w-100 flex-shrink-1 bd-highlight bg-primary">Flex item</div>
      </div>

  <!-- contenido principal del blog -->
  <!-- Entradas-->

  <?php
  //loop entradas
      if ( have_posts() ) :
        while ( have_posts() ) : the_post();
   ?>

    <div>
      <figure class="destinations">
        <?php
        //mostrar solo la imagen (tiene que estar destacada desde wordpress)
        $thumb_id = get_post_thumbnail_id();
        $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
        ?>
          <img src="<?php echo $thumb_url[0];?>"/>
          <figcaption>
              <h5 id="title-card"><?php the_title(); ?></h5>
              <p id="parrafos-card"><?php the_content(); ?></p>
              <button type="button" name="button"></button>
          </figcaption>
      </figure>
  </div>
  <?php
    endwhile;
      endif;
  ?>

  <!-- Entradas-->

</body>
