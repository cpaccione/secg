<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the </nav>.
 *
 * @package WordPress
 * @subpackage SECGwp
 *
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">

		<?php wp_head(); ?>
	</head>

		<body <?php get_body_class(); ?>>

      <div class="container">
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>">
            <img class="logo" src="<?php bloginfo('template_url');?>/img/secgTaxLogo.png">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

            <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'menu_class'        => 'navbar-nav ml-auto',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
            ?>
				</nav>
			</div>
