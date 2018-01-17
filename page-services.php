<?php

get_header();

if (have_posts()) :
  while (have_posts()) : the_post(); the_content(); ?>


<?php endwhile;

else :
  echo '<p>No Content Found</p>';

endif;
?>
<!-- Main Container-->
<!-- Main Content-->
<div class="services">
  <div class="col" id="header-img"></div>
  <div id="main-container">
    <!--Services-->
    <div class="row">
      <div class="col">
        <h1>Services</h1>
        <p class='services-nav'>
          <a href='#glass'>glass</a> | <a href='#labor'>labor & installation</a> | <a href='#shower'>shower</a>
        </p>
        <div class="h2-container">
          <h2 id="glass">GLASS PROJECTS</h2>
        </div>
        <p class="info">All of our glass products are billed per square foot, with a minimum charge of 3 square feet. These are the baseline price points for each type of project per square foot.</p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h3>Stained Glass</h3>
        <div class="container">
          <h4>PRICE: $115+ per sq. ft.</h4>
          <p>Our leaded glass projects are completely fabricated in our studio by hand. This cost includes the design, materials and building. Additional charges for measurement and installation are not included in this price.</p>
        </div>
      </div>
      <div class="col">
        <h3>Cabinet Glass</h3>
        <div class="container">
          <h4>PRICE: $12-60 per sq. ft.</h4>
          <p>Many people use glass to quickly and cost-effectively update their space. If you bring your open cabinets to our shop we will install the glass at no additional charge!</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h3>Etchings</h3>
        <div class="container">
          <h4>PRICE: $80+ per sq. ft.</h4>
          <p>We can etch any design into clear glass, whether it be your address or a company logo. Additional charges for graphics and installation are not included in this price.</p>
        </div>
      </div>
      <div class="col">
        <h3>Antique Mirror</h3>
        <div class="container">
          <h4>PRICE: $65 per sq. ft. </h4>
          <p>Custom ordered from New York, our antique mirror takes approximately 2 weeks to arrive and is available in large sheets that are 4' x 8'. Please see our 'Antique Mirror and Special Projects' section in our photo gallery for inspiration on the many ways you can add this to your home today.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h3>Restoration	</h3>
        <div class="container">
          <h4>PRICE: $75+ per sq. ft.</h4>
          <p>Art Glass can restore most leaded glass pieces to their original beauty. Your cost will vary depending on the extent of the damage of your piece, with each window or door being very different this price is only an estimate.</p>
        </div>
      </div>
      <div class="col">
        <h3>Mirror</h3>
        <div class="container">
          <h4>PRICE: $7+ per sq. ft.</h4>
          <p>From floating mirrors in your bathroom to mirrored walls in your home gym please let us give you a quote! Floating mirror backing, optional beveled edges and labor to fabricate holes for sconces, outlets, etc. not included in this pricing.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="h2-container">
          <h2 id="labor">LABOR & INSTALLATION‎
            <p class="info"></p>
          </h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h3>Measure</h3>
        <div class="container">
          <h4>PRICE: $75+ per trip</h4>
          <p>This cost will be added to your project if we need to measure an opening in your home to ensure a perfect fit for your window, door panel, etching, dome or shower door.</p>
        </div>
      </div>
      <div class="col">
        <h3>Installation</h3>
        <div class="container">
          <h4>PRICE: $150+ per trip</h4>
          <p>This cost will be added to your project if we need to install your completed project. This can vary from small to large projects that may need to include trim, scaffold or many team members.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="h2-container">
          <h2 id="shower">FRAMELESS SHOWERS & SHOWER DOORS</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h3>Showers</h3>
        <div class="container">
          <p>Due to the many variables with shower projects such as glass thickness, hardware choices and sizing we ask that you please call for a price! Whether you need a single shower door or a five piece walk-in shower, we can accommodate you.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<?php
get_footer();
?>
