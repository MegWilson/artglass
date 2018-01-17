<?php

get_header();

?>
<!-- Main Content-->
<div class="image-gallery">
  <div id="main-container">
    <div class="row">
      <div class="col">
        <h1>Religious</h1>
        <p>Religious church stained glass windows are unique as a art form because of the relationship that exists between the glass and the light. Natural light by which the world is made visible, has been symbolically equated with goodness and beauty since the beginning of time. Colored stained glass has a spiritual quality that when energize by light has a kinetic quality like no other medium that connects to the hearts and souls of all that view them.</p>
        <p class="center">Click on one of the images to view a close up.</p>
      </div>
    </div>

    <?php
    if (have_posts()) :
      while (have_posts()) : the_post(); the_content(); ?>


    <?php endwhile;

    else :
      echo '<p>No Content Found</p>';

    endif;
    ?>

    <div class="row">
      <div class="col">
        <p>
          <div class="fa fa-arrow-left"></div>
          <a href="gallery">back to gallery</a>
        </p>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<?php
get_footer();
?>
