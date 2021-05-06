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
             style="background: url(http://mothers-day.local/wp-content/uploads/2021/05/Mothers-Day-Background.jpg);
             background-position: center center;">
            <div class="large-12 cell">
                <div class="content-middle">
                    <h1 class="center light-color-invert">- Happy Mother's Day -</h1>
                    <h3 class="center">- From Foothills Church -</h3>
                    <h3 class="center"><i class="fas fa-heart"></i></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width main-background">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="large-12 center padding-top cell">
                    <h3>Thank you for Celebrating Mother's Day With Us!</h3>
                    <p class="left no-spacing lr-padding">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Accusantium consectetur deleniti, distinctio dolore eaque eligendi, est facilis fugit iusto
                        laudantium modi molestiae necessitatibus nisi optio tempora temporibus voluptatem voluptatum?
                        Amet?</p>
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
                            <h4 class="no-spacing lr-padding">Select Your Service.</h4>
                            <p class="left no-spacing lr-padding">Click the tabs below to filter what service you had
                                your photo taken at.</p>
                        </div>

                        <div class="small-12 medium-6 large-4 padding-top cell">
                            <h3>2</h3>
                            <hr>
                            <h4 class="no-spacing lr-padding">Download Your Photos</h4>
                            <p class="left no-spacing lr-padding">Click the buttons below to filter what service you had
                                your photo taken at.</p>
                        </div>

                        <div class="small-12 medium-6 large-4 padding-top cell">
                            <h3>3</h3>
                            <hr>
                            <h4 class="no-spacing lr-padding">Share them On Socials</h4>
                            <p class="left no-spacing lr-padding">Click the buttons below to filter what service you had
                                your photo taken at.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--    <div class="full-width main-background">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="large-12 cell">
                    <ul class="tabs" data-tabs id="example-tabs">
                        <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">9am Service</a></li>
                        <li class="tabs-title"><a href="#panel2">In Between</a></li>
                        <li class="tabs-title"><a href="#panel3">11am Service</a></li>
                    </ul>

                    <div class="tabs-content" data-tabs-content="example-tabs">
                        <div class="tabs-panel is-active" id="panel1">
                            <?php /*if (function_exists('photo_gallery')) {
                        photo_gallery(1);
                    } */ ?>
                        </div>
                        <div class="tabs-panel" id="panel2">
                            <p>Two</p>
                            <img class="thumbnail"
                                 src="//foundation.zurb.com/sites/docs/assets/img/generic/rectangle-7.jpg">
                        </div>
                        <div class="tabs-panel" id="panel3">
                            <p>Three</p>
                            <p>Check me out! I'm a super cool Tab panel with text content!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

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
                                <div class="tabs-panel is-active" id="panel1">
                                    <?php if (function_exists('photo_gallery')) {
                                        photo_gallery(1);
                                    } ?>
                                </div>
                                <div class="tabs-panel" id="panel2">
                                    <p>Two</p>
                                    <img class="thumbnail"
                                         src="//foundation.zurb.com/sites/docs/assets/img/generic/rectangle-7.jpg">
                                </div>
                                <div class="tabs-panel" id="panel3">
                                    <p>Three</p>
                                    <p>Check me out! I'm a super cool Tab panel with text content!</p>
                                </div>
                            </div>

                        </nav>
                    </div>
                </div>
            </div>

    </div>


<?php get_footer();
