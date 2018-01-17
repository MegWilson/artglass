<?php

get_header();

?>

<!-- Main Content-->
<div class="contact">
  <div class="col" id="header-img"></div>
  <div id="main-container">
    <!--Contact Us-->
    <div id="contact">
      <h1>Send Us A Message </h1>
      <div class="row">
        <div class="col">
          <?php
          if (have_posts()) :
            while (have_posts()) : the_post(); the_content(); ?>


          <?php endwhile;

          else :
            echo '<p>No Content Found</p>';

          endif;
          ?>
        </div>
      </div>
      <h2>E-mails</h2>
      <div class="row">
        <div class="col" id="emails">
          <div>Sales - Steve Wilson
            <div> <a href='mailto:info@artglassbywells.com' id='shop-email'>info@artglassbywells.com</a></div>
          </div>
          <div>Accounting - Liz Miller
            <div> <a href='mailto:liz@artglassbywells.com' id='shop-email'>liz@artglassbywells.com</a></div>
          </div>
          <div>Owner - Margaret Wells
            <div> <a href='mailto:artglassbywells2@yahoo.com' id='shop-email'>artglassbywells2@yahoo.com</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php
  get_footer();
  ?>
