<?php
/**
 * Template Name: 11am Page
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

    <div class="grid-container full-width">
        <div class="grid-x grid-padding-x full-background"
             style="background: url(<?php the_field("background_image"); ?>);
                 background-position: center center;">
            <div class="large-12 cell">
                <div class="content-middle">
                    <h1 class="center light-color-invert"><span class = "show-for-desktop">-</span> <?php the_field("headline_title_1"); ?> <span class = "show-for-desktop">-</span></h1>
                    <h3 class="center tagline"><span class = "show-for-desktop">-</span> <?php the_field("headline_title_2"); ?> <span class = "show-for-desktop">-</span></h3>
                    <h3 class="center"><i class="fas fa-heart"></i></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width main-background">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="large-12 center padding-top cell">
                    <h3><?php the_field("main_title"); ?></h3>
                    <p class="left no-spacing lr-padding"><?php the_field("paragraph"); ?></p>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="full-width main-background">
        <div class="grid-x grid-padding-x">
            <div class="small-12 cell">
                <div id='cssmenu'>
                    <nav class="slidemenu">
                        <ul>
                            <button class="all"><a href='/frontpage#cssmenu'><span>9am</span></a></button>
                            <button class="work"><a href='/between#cssmenu'><span class="work">In Between</span></a></button>
                            <button class="free is-active"><a href='/11am#cssmenu'><span class="free">11am</span></a></button>
                        </ul>
                    </nav>
                </div>

                <div class="full-width main-background">
                    <div class="grid-x grid-padding-x">
                        <?php
                        // Start the Repeater Loop
                        if (have_rows('gallery')):
                            // Card Start
                            // Begin looping data
                            while (have_rows('gallery')) : the_row();
                                echo '<div class="small-12 medium-4 large-3 cell">';

                                //image
                                echo '<img src="';
                                the_sub_field('image');
                                echo '" alt="Mothers day photo">';

                                //Download
                                echo '<div class="padding-top-small margin-bottom"><i class="fas fa-download"></i>';
                                echo '<a href="';
                                the_sub_field('image');
                                echo '" download>';
                                echo ' Click to Download</a></div>';

                                echo '</div>';
                            endwhile;
                        else :
                            // no rows found
                        endif;
                        ?>

                    </div>
                </div>

            </div>
        </div>

    </div>


<?php get_footer();
