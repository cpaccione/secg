<?php

/*

Template Name: Home Page

*/


?>

<?php get_header(); ?>

  <div class="main-image d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="text-overlay">
            <h1>Accountability, Leadership, Excellence.  It’s who we are.</h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="about d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="about-wrap">
            <h2 class="text-center text-uppercase">about us</h2>
            <p>SECG, Inc. is a local Chicago independent tax practice, servicing individuals and businesses, including non-profit organizations as well as international business.  Tax laws are constantly changing, and new developments require competent tailored services.</p>
            <p>We are attuned to the newest trends, and key issues that affect our clients. We provide research advice and possess the resources to assist our clients to maximize their profits, while legally minimizing their tax obligations.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="logos d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="text-center">
            <img class="natp" src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/natp_logo.png">
            <p>The President of SECG is a member of: The <a href="http://www.natptax.com/Pages/default.aspx" target="_blank">National Association Of Tax Professionals</a> (NATP)</p>
          </div>
        </div>
        <div class="col-6">
          <div class="text-center">
            <img class="iaai" src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/IAAI_logo.png">
            <p>The <a href="http://www.illinoisaccountants.com/" target="_blank">Independent Accountants Association Of Illinois</a> (IAAI)</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mission d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="mission-wrap">
            <h2 class="text-center text-uppercase">mission statement</h2>
            <p>Our mission is to provide an unrivaled level of service by addressing our clients’ needs as required by the taxing authorities or by helping them solve their toughest tax problem; and to contribute to the sustained growth of the economy by assisting our business clients succeed in the long-term growth of their business.</p>
            <!-- <hr class="style-two"> -->
          </div>
        </div>
      </div>
    </div>
  </section>


<?php get_footer(); ?>
