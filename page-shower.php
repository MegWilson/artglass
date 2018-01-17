<?php

get_header();

?>

<!-- Main Content-->
<div class="image-gallery">
  <div id="main-container">
    <div class="row">
      <div class="col">
        <h1>Shower</h1>
        <p>Frameless shower enclosures are great places to create a design element, whether you want privacy or just a design. Art Glass can measure, design, fabricate, and install your frameless shower, using heavy glass either 3/8" or 1/2" thick tempered safety glass.  There are quite a few choices in the clear textured glasses, that can be used instead of the usual plain clear.</p>
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
