<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fitnessness
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'fitnessness' ); ?></a>


	<header id="masthead" class="site-header">

		<div class="site-branding text-center pt-4 pb-1">
			<?php
			the_custom_logo();
			
			$fitnessness_description = get_bloginfo( 'description', 'display' );
			if ( $fitnessness_description || is_customize_preview() ) :
				?>
				<p class="site-description"><strong><?php echo $fitnessness_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		<nav id="site-navigation" class="main-navigation bg-light p-4 border-top border-bottom">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'fitnessness' ); ?></button>

				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>

		</nav><!-- #site-navigation -->
		<img src="<?php echo get_template_directory_uri(); ?>/img/fitness-header.jpg" class="img-fluid" alt="Lorem Ipsum">
	</header><!-- #masthead -->
