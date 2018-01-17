<?php

get_header();

?>
<!-- Main Content-->
<div class="image-gallery">
  <div id="main-container">
    <div class="row">
      <div class="col">
        <h1>Etchings</h1>
        <p>Etched glass is a art form that is produced, in basic terms, by protecting the surface of the glass by applying a protective resist material and then cutting the design out to reveal the design or pattern. There are several techniques to achieve the desired look, from deep carving, or solid frost, to degrees of shading. A skilled steady hand and trained eye is required to cut out the art work.</p>
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
