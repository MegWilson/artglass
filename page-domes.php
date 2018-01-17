<?php

get_header();

?>

<!-- Main Content-->
<div class="image-gallery">
  <div id="main-container">
    <div class="row">
      <div class="col">
        <h1>Domes</h1>
        <p>Stained Glass Domes and Stained Glass ceilings are comprised of two elements in essence: a steel frame that is configured into divisions or sections, and of course the beautiful stained glass panels. The glass panels are curved to give a true domed shape that is more pleasing to the eye and senses. These are magnificent architectural art glass elements that will draw you in once discovered in a room.</p>
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
