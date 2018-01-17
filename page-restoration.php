<?php

get_header();

?>

<!-- Main Content-->
<div class="image-gallery">
  <div id="main-container">
    <div class="row">
      <div class="col">
        <h1>Restoration</h1>
        <p>Restoring historical pieces of stained glass, with the famous names such as Louis Comfort Tiffany, Frank Lloyd Wright, Jaques Gruber, Emel Frei, Emil Galle, and Handel attached to them, is challenging yet awe inspiring. To admire the skill, one of a kind technique, and passion each artist used in their creations is a once in a lifetime opportunity.</p>
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
</div>

<!-- Footer -->
<?php
get_footer();
?>
