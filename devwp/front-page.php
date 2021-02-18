<?php
/**
 * Template Name: Front Page
 *
 * The Frontpage of the Let's Go Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Let's Go
 * @since 1.0.0
 */

get_header(); ?>

    <div class="grid-container full-width">
        <div class="grid-x grid-padding-x blue-background padding-top ">
            <div class="small-12 medium-8 large-offset-1 large-7 cell ">
                <img class = "padding-bottom" src="http://lets-go.local/wp-content/uploads/2021/02/LETS_GO_LOGO.png" alt="">
                <h3 class="dark-color-invert">Making It Count In Our Community. </h3>
            </div>

            <div class="small-10 small-offset-1 medium-4 medium-offset-0 large-3 padding-bottom">
                <img src="http://lets-go.local/wp-content/uploads/2021/02/Buildings-model-isometric-vector-material-02-copy.png"
                     alt="">
            </div>
        </div>
    </div>

    <div class="full-width">
        <div class="grid-x ">
            <div class="small-12 low-z-index cell">
                <img class="waves" src="http://lets-go.local/wp-content/uploads/2021/02/Header-Small.png" alt="">
            </div>
        </div>
    </div>

    <div class="grid-container full-width">
        <div class="grid-x grid-padding-x">
            <div class="small-12 cell">
                <h2 class="center">What is Let's Go?</h2>
            </div>

            <div class="small-12 medium-4 cell">
                <div class="glyphs center">
                    <img src="http://lets-go.local/wp-content/uploads/2021/02/Homepage-What.png"
                         alt="">
                </div>
                <h3 class="center padding-top-small">What</h3>
                <p class="no-padding lr-padding margin-bottom">Let’s Go is a movement of FC people serving in our
                    community to show love and support as we partner with organizations and groups right where we
                    live. </p>
            </div>

            <div class="small-12 medium-4 cell middle-glyph-push">
                <div class="glyphs center">
                    <img src="http://lets-go.local/wp-content/uploads/2021/02/Homepage-Where.png"
                         alt="">
                </div>
                <h3 class="center padding-top-small">WHere</h3>
                <p class="no-padding lr-padding margin-bottom">We will serve throughout Blount and Knox County at area
                    organizations and also at locations you select through our Choose Your Own Adventure option.</p>
            </div>

            <div class="small-12 medium-4 cell">
                <div class="glyphs center">
                    <img src="http://lets-go.local/wp-content/uploads/2021/02/Homepage-How.png"
                         alt="">
                </div>
                <h3 class="center padding-top-small">How</h3>
                <p class="no-padding lr-padding margin-bottom">You can be part of Let’s Go by choosing an area to serve
                    as an individual, family, or small group! Just sign up, and then show up at the location that you
                    registered for on the day/time you selected-ready to help, smile, encourage, and make a
                    difference.</p>
            </div>
        </div>
    </div>


    <div class="full-width">
        <div class="grid-x ">
            <div class="small-12 cell">
                <img class="waves" src="http://lets-go.local/wp-content/uploads/2021/02/Vector.png" alt="">
            </div>
        </div>
    </div>

    <div class="blue-background serve-margin-pull full-width">
        <div class="grid-x grid-container">
            <div class="small-12 cell">
                <h2 class="center dark-color-invert padding-bottom small-font-mobile">Serving Opportunties</h2>
                <div class="orange-background rounded-corners margin-bottom">
                    <h3 class="center dark-color-invert padding-top">Notice</h3>
                    <p class="dark-color-invert no-spacing lr-padding padding-bottom">Please do not bring any extra
                        people to serve who have not registered for the event. Although it sounds helpful, our serve
                        organizations have specified the number of people allowed and we want to honor this.</p>
                </div>
            </div>
        </div>

        <div class="grid-x grid-container">
            <div class="small-12 medium-6 large-4 cell serve-card">
                <img src="http://lets-go.local/wp-content/uploads/2021/02/KARM.png"
                     alt="">



                <div class="main-background">
                    <h3>Karm Stores</h3>
                    <p>Proin maximus sem ut justo lacinia, quis posuere nisl pretium. Integer interdum vulputate
                        pharetra. Curabitur pellentesque, neque ac dapibus.</p>
                    <div class="grid-x icon-box">
                        <div class="small-4 cell off">
                            <div class="center">
                                <img class="center"
                                     src="https://img.icons8.com/pastel-glyph/40/000000/check-file--v3.png"/>
                            </div>
                            <p class="center no-spacing">Background Check</p>
                        </div>
                        <div class="small-4 cell">
                            <div class="center">
                                <img class="center"
                                     src="https://img.icons8.com/ios/40/000000/children--v1.png"/>
                            </div>
                            <p class="center no-spacing">Family Friendly</p>
                        </div>
                        <div class="small-4 cell off">
                            <div class="center">
                                <img class="center"
                                     src="https://img.icons8.com/ios/40/000000/protection-mask.png"/>
                            </div>
                            <p class="center no-spacing">Mask Required</p>
                        </div>
                    </div>

                    <div class="center margin-bottom">
                        <a href="#"></a>
                        <button class="btn btn-v1">Register</button>
                    </div>
                </div>


            </div>
        </div>
    </div>


<?php get_footer();
