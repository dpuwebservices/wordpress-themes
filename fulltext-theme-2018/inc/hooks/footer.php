<?php
if ( ! function_exists( 'newslite_before_footer' ) ) :
    /**
     * Footer content
     *
     * @since newslite 1.0.0
     *
     * @param null
     * @return false | void
     *
     */
    function newslite_before_footer() {
    ?>
        </div><!-- #content -->
    </div>
    </section>
        <!-- *****************************************
             Footer section starts
    ****************************************** -->
    <footer class="container wrapper wrap-footer">
    <?php
    }
endif;
add_action( 'newslite_action_before_footer', 'newslite_before_footer', 10 );

if ( ! function_exists( 'newslite_widget_before_footer' ) ) :
    /**
     * Footer content
     *
     * @since newslite 1.0.0
     *
     * @param null
     * @return false | void
     *
     */
    function newslite_widget_before_footer() {
        global $newslite_customizer_all_values;
        $newslite_footer_widgets_number = $newslite_customizer_all_values['newslite-footer-sidebar-number'];
        if( !is_active_sidebar( 'footer-col-one' ) && !is_active_sidebar( 'footer-col-two' ) && !is_active_sidebar( 'footer-col-three' ) && !is_active_sidebar( 'footer-col-four' )){
            return false;
        }
        if( 1 == $newslite_footer_widgets_number ){
                $col = 'col-md-12';
            }
        elseif( 2 == $newslite_footer_widgets_number ){
            $col = 'col-md-6 col-sm-6 col-xs-12';
        }
        elseif( 3 == $newslite_footer_widgets_number ){
            $col = 'col-md-4 col-sm-4 col-xs-12';
        }
        else{
            $col = 'col-md-3 col-sm-3 col-xs-12';
        }
        ?>
        <!-- footer widget -->
        <section id="footer-top-container" class="wrapper footer-widget">
            <div class="container">
                <div class="row">
                     <?php if( is_active_sidebar( 'footer-col-one' ) && $newslite_footer_widgets_number > 0 ) : ?>
                        <div class="contact-list">
                            <?php dynamic_sidebar( 'footer-col-one' ); ?>
                        </div>
                    <?php endif; ?>
                    <?php if( is_active_sidebar( 'footer-col-two' ) && $newslite_footer_widgets_number > 1 ) : ?>
                        <div class="contact-list">
                            <?php dynamic_sidebar( 'footer-col-two' ); ?>
                        </div>
                    <?php endif; ?>
                    <?php if( is_active_sidebar( 'footer-col-three' ) && $newslite_footer_widgets_number > 2 ) : ?>
                        <div class="contact-list">
                            <?php dynamic_sidebar( 'footer-col-three' ); ?>
                        </div>
                    <?php endif; ?>
                    <?php if( is_active_sidebar( 'footer-col-four' ) && $newslite_footer_widgets_number > 3 ) : ?>
                        <div class="contact-list">
                            <?php dynamic_sidebar( 'footer-col-four' ); ?>
                        </div>
                    <?php endif; ?>
                    
                </div>
            </div>
        </section>
    <?php
    }
endif;
add_action( 'newslite_action_widget_before_footer', 'newslite_widget_before_footer', 10 );

if ( ! function_exists( 'newslite_footer' ) ) :
    /**
     * Footer content
     *
     * @since newslite 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function newslite_footer() {
        global $newslite_customizer_all_values;
        ?> 
		
<section id="depaul-footer" class="site-footer" role="contentinfo">
		<div class="container">
			
		<?php get_sidebar( 'footer' ); ?>

		<!-- social media links -->

        <div class="social-media-icons">
            <a class="fb social-blue" href="http://www.facebook.com/dpulibraries">Facebook</a>
            <a class="twitter social-blue" href="http://twitter.com/intent/follow?screen_name=dpulibrarian">Twitter</a>
            <a class="youtube social-blue" href="https://www.youtube.com/channel/UCnObPtOCoJD2Ga69FrRGGaw ">Youtube</a>
             <a class="instagram social-blue" href=" https://www.instagram.com/depaul_library/">Instagram</a>
        </div>

		<div class="site-info">



                <!-- start custom footer -->
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
                        <li>
							<a href="http://libguides.depaul.edu/GovernmentInformation">
                                <div class="footer-logos"><img alt="Federal Depository Library Program" src="/wp-content/uploads/sites/2/2018/05/fdlp_logo.png"> </div>
							</a>
                        </li>
                        
                        <li>
							<a href="http://chicagocollections.org/">
                                <div class="footer-logos"><img alt="Chicago Collections Consortium" src="/wp-content/uploads/sites/2/2018/05/logo-CC_member_badge_color.png"> </div>
							</a>
                        </li>

                    </ul>
                </div>
		</div><!-- .site-info -->
	  </div>
	</section>
		
        <!-- footer site info -->
        <section id="colophon" class="site-footer" role="contentinfo">
            <div class="footer-links">
                <p class="unit size5of5 small"><a href="http://www.depaul.edu/Pages/copyright.aspx">© 2001-2018</a> DePaul University | <a href="http://www.depaul.edu/Pages/disclaimer.aspx">Disclaimer</a> | <a href="http://www.depaul.edu/Pages/contact-us.aspx">Contact Us</a> | <a href="http://emergencyplan.depaul.edu/Pages/default.aspx">Emergency Plan</a> | <a href="http://www.depaul.edu/Pages/consumer-info.aspx">Consumer Information</a> | <a href="http://go.depaul.edu/privacy">Privacy Statement</a>
				<span class="admin-quick-links">
					<a href="/wp-admin/">Site Admin</a> | <a href="/feed/">RSS</a>
				</span>
				</p>
				
            </div>
        </section><!-- #colophon -->     
    </footer><!-- #colophon -->
    <!-- *****************************************
             Footer section ends
    ****************************************** -->
    <?php
    }
endif;
add_action( 'newslite_action_footer', 'newslite_footer', 10 );

if ( ! function_exists( 'newslite_page_end' ) ) :
    /**
     * Page end
     *
     * @since newslite 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function newslite_page_end() {
    global $newslite_customizer_all_values;
        ?>
    <?php
     if( 1 == $newslite_customizer_all_values['newslite-enable-back-to-top']) {
        ?>
            <a id="gotop" class="evision-back-to-top" href="#page"><i class="fa fa-angle-up"></i></a>
        <?php
        } ?>
    </div><!-- #page -->
    <?php }
endif;
add_action( 'newslite_action_after', 'newslite_page_end', 10 );