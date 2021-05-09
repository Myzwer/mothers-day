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

    <div class="full-width main-background margin-bottom">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="large-12 center padding-top cell">
                    <h3>How to Access Your Photos</h3>
                    <div class="grid-x grid-padding-x">
                        <div class="small-12 medium-6 large-4 padding-top cell">
                            <h3>1</h3>
                            <hr>
                            <h4 class="no-spacing lr-padding"><?php the_field("step_1_title"); ?></h4>
                            <p class="left no-spacing lr-padding"><?php the_field("step_1_process"); ?></p>
                        </div>

                        <div class="small-12 medium-6 large-4 padding-top cell">
                            <h3>2</h3>
                            <hr>
                            <h4 class="no-spacing lr-padding"><?php the_field("step_2_title"); ?></h4>
                            <p class="left no-spacing lr-padding"><?php the_field("step_2_process"); ?></p>
                        </div>

                        <div class="small-12 medium-6 large-4 padding-top cell">
                            <h3>3</h3>
                            <hr>
                            <h4 class="no-spacing lr-padding"><?php the_field("step_3_title"); ?></h4>
                            <p class="left no-spacing lr-padding"><?php the_field("step_3_process"); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width main-background">
        <div class="grid-x grid-padding-x">
            <div class="small-12 cell">
                <div id='cssmenu'>
                    <nav class="slidemenu">

                        <ul class="tabs" data-tabs id="example-tabs">
                            <button class="all tabs-title is-active"><a href="#panel1" aria-selected="true"><span>9AM</span></a>
                            <button class="work tabs-title"><a href="#panel2"><span class="work">In Between</span></a>
                            <button class="free tabs-title"><a href="#panel3"><span class="free">11AM</span></a>

                        </ul>

                        <div class="tabs-content" data-tabs-content="example-tabs">
                            <?php the_content(); ?>

                                <?php if( get_field('gallery_unavailable_1') ): ?>
                                    <p class = "center"> <?php the_field("gallery_unavailable_1"); ?></p>
                                <?php endif; ?>

                        </div>

                    </nav>
                </div>
            </div>
        </div>

    </div>


<?php get_footer();
