<?php

get_header();

if (have_posts()) :
  while (have_posts()) : the_post(); the_content(); ?>


<?php endwhile;

else :
  echo '<p>No Content Found</p>';

endif;
?>

<!-- Main Content-->
<div class="about">
  <div class="col" id="header-img"></div>
  <div id="main-container">
    <!--About-->
    <div class="row">
      <div class="col" id="about">
        <h1>ABOUT US</h1>
        <p>Art Glass by Wells has been owned and operated by the Wells family in Houston, Texas for 50 years. Joe and Margaret Wells started the company in 1962, mainly producing lamps. Now run by their son, Steve Wilson, Art Glass produces custom leaded glass windows, front doors and entryways, domes, showers, etchings, and offers antique mirror. </p>
        <p>With a commitment to excellence and a passion for our work we produce true works of art for residential, commercial and ecclesiastical clients. Art Glass can take your vision and turn it into a reality; transforming different parts of your home, work or worship center into what you had always hoped it could be.</p>
        <h2>GETTING STARTED</h2>
        <p>Feel free to call or come in to our workshop to get started on your custom project today. We can give you on the spot quotes for custom work with as little as your dimensions. From there our team will guide you through the entire process, from the initial concept to an installed finished piece. We can also crate and ship our products. We hope to work with you soon and turn your dream into a reality!</p>
        <h2>THE PROCESS</h2>
        <ul>
          <li>Customer starts with dimensions and a design idea</li>
          <li>Art Glass will provide a quote and a sketch</li>
          <li>Customer provides 50% deposit to start project</li>
          <li>Customer works with Art Glass to choose glass color and placement, this is done in our studio. </li>
          <li>Custom work is built in our studio and ready for installation</li>
          <li>Art Glass provides complete installation of windows, doors, cabinet panels, domes and frameless shower doors</li>
        </ul>
      </div>
    </div>
  </div>
  <!--Contact Us-->
  <div class="row">
    <div class="col">
      <div id="call-to-action">
        <a href="contact">
          <button class="button">
            Contact Us
          </button>
        </a>
      </div>
    </div>
  </div>

<!-- Footer -->
<?php
get_footer();
?>
