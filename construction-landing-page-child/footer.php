<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the #content div and all content after.

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package Construction_Landing_Page

 */



if( !is_page_template( 'template-home.php' ) ) echo '</div></div></div>';

?>



    <footer id="colophon" class="site-footer" role="contentinfo">

        <?php if( is_active_sidebar( 'footer-one' ) || is_active_sidebar( 'footer-two' ) || is_active_sidebar( 'footer-three' ) ) { ?>



        <div class="footer-t">

            <div class="container">

                <div class="row">

                    <?php if( is_active_sidebar( 'footer-one' ) ){ ?>

                    <div class="column">

                        <?php dynamic_sidebar( 'footer-one' ); ?>

                    </div>

                    <?php } ?>



                    <?php if( is_active_sidebar( 'footer-two' ) ){ ?>

                    <div class="column">

                        <?php dynamic_sidebar( 'footer-two' ); ?>

                    </div>

                    <?php } ?>



                    <?php if( is_active_sidebar( 'footer-three' ) ){ ?>

                    <div class="column">

                        <?php dynamic_sidebar( 'footer-three' ); ?>

                    </div>

                    <?php } ?>

                </div>

            </div>

        </div>

        <?php } ?>


        <!-- social media links -->

        <div class="social-media-icons">
            <a class="fb social-blue" href="http://www.facebook.com/dpulibraries">Facebook</a>
            <a class="twitter social-blue" href="http://twitter.com/intent/follow?screen_name=dpulibrarian">Twitter</a>
            <a class="youtube social-blue" href="http://www.youtube.com/user/DePaulLibraries">Youtube</a>
            <a class="pinterest social-blue" href="http://www.pinterest.com/dpulibrarian/">Pinterest</a>
        </div>

        <div class="site-info">

            <div class="container">


                <!-- start custom footer for dh.depaul.press website -->
                <div class="university-address">
                    <h5>DePaul University Library</h5>
                    <ul class="no-bullets">
                        <li>Administrative Offices</li>
                        <li>2350 N Kenmore Ave.</li>
                        <li>Chicago, IL 60614</li>
                        <li><a href="tel:773-325-7862">(773) 325-7862</a></li>
                    </ul>
                </div>
                <div class="footer-external-links">
                    <ul class="no-bullets">
                        <a href="http://libguides.depaul.edu/GovernmentInformation">
                            <li>
                                <div class="footer-logos"><img alt="Federal Depository Library Program" src="/wp-content/themes/construction-landing-page-child/images/logo-fdlp.png"> </div>
                            </li>
                        </a>
                        <a href="http://chicagocollections.org/">
                            <li>
                                <div class="footer-logos"><img alt="Chicago Collections Consortium" src="/wp-content/themes/construction-landing-page-child/images/logo-CC_member_badge_color.png"> </div>
                            </li>
                        </a>
                    </ul>
                </div>


                <!-- end custom footer for dh.depaul.press website -->


                <div class="copyright">
                    <?php echo esc_html__( '&copy; Copyright ', 'construction-landing-page' ) . esc_html( date_i18n( __( 'Y', 'construction-landing-page' ) ) ); ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
                    </a>
                </div>

                <div class="by">

                    <a href="<?php echo esc_url( 'https://raratheme.com/wordpress-themes/construction-landing-page/' ); ?>" rel="author">
                        <?php esc_html_e( 'Construction Landing Page Theme by: Rara Theme', 'construction-landing-page' ); ?>
                    </a>

                    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'construction-landing-page' ) ); ?>">
                        <?php printf( esc_html__( 'Powered by %s', 'construction-landing-page' ), 'WordPress' ); ?>
                    </a>

                </div>

            </div>
            <div class="footer-links">
                <p class="unit size5of5 small"><a href="http://www.depaul.edu/Pages/copyright.aspx">© 2001-2017</a> DePaul University | <a href="http://www.depaul.edu/Pages/disclaimer.aspx">Disclaimer</a> | <a href="http://www.depaul.edu/Pages/contact-us.aspx">Contact Us</a> | <a href="http://emergencyplan.depaul.edu/Pages/default.aspx">Emergency Plan</a> | <a href="http://www.depaul.edu/Pages/consumer-info.aspx">Consumer Information</a> | <a href="http://go.depaul.edu/privacy">Privacy Statement</a></p>
            </div>
        </div>

    </footer>

    </div>
    <!-- #page -->



    <?php wp_footer(); ?>



    </body>

    </html>
