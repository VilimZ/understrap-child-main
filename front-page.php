<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

//$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="front-container">
      


      <div id="theme-right-container" class="">
        <div class="theme-right"><img src="<?php echo get_theme_file_uri('/media/theme-ico-left.png') ?>"></div>
      </div>

      <div id="plugin-left-container" class="">
        <div class="plugin-left"><img src="<?php echo get_theme_file_uri( '/media/theme-ico-right-down.png' ) ?>"></div>
      </div>

      <div id="theme-left-container" class="">
        <div class="theme-left"><img src="<?php echo get_theme_file_uri('/media/plugin-ico-left2.png') ?>"> </div>
      </div>

      <div id="plugin-right-container" class="">
        <div class="plugin-right"><img src="<?php echo get_theme_file_uri('/media/plugin-ico-right-down2.png') ?>"> </div>
      </div>

    </div>

<?php
get_footer();
