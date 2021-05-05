<?php
/**
 * Template Name: Front Page
 *
 * The Frontpage of the Yestau Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Yestau
 * @since 1.0.0
 */

get_header(); ?>




<div class="full-width main-background">
    <div class = "grid-container">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell">
                <?php if( function_exists('photo_gallery') ) { photo_gallery(1); } ?>
            </div>
        </div>
    </div>
</div>







<?php get_footer();
