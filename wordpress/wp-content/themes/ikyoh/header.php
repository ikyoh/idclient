<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ikyoh
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

	

    <header>
        <div class="header-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/picts/id-client.svg" alt="">
        </div>
        <nav>
            <a href="#">Ambition</a>
            <a href="#">Savoir-faire</a>
            <a href="#">Références</a>
            <a href="#">Réalisations</a>
            <a href="#">Contact</a>
        </nav>
        <div class="header-socials">
            <div class="social-pict">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/picts/social-facebook.svg" alt="">
            </div>
            <div class="social-pict">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/picts/social-instagram.svg" alt="">
            </div>
            <div class="social-pict">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/picts/social-linkedin.svg" class="social-linkedin" alt="">
            </div>
            <div class="social-pict">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/picts/social-pinterest.svg" alt="">
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/picts/home.svg" class="pict-home" alt="">
            </div>
        </div>

    </header>

