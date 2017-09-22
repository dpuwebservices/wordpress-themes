<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Matata
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<?php get_sidebar( 'footer' ); ?>

		<!-- social media links -->

        <div class="social-media-icons">
            <a class="fb social-blue" href="http://www.facebook.com/dpulibraries">Facebook</a>
            <a class="twitter social-blue" href="http://twitter.com/intent/follow?screen_name=dpulibrarian">Twitter</a>
            <a class="youtube social-blue" href="http://www.youtube.com/user/DePaulLibraries">Youtube</a>
            <a class="pinterest social-blue" href="http://www.pinterest.com/dpulibrarian/">Pinterest</a>
        </div>

		<div class="site-info">


<div class="container">


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
                        <a href="http://libguides.depaul.edu/GovernmentInformation">
                            <li>
                                <div class="footer-logos"><img alt="Federal Depository Library Program" src="/wp-content/themes/glimpsesofthegreatwar/images/logo-fdlp.png"> </div>
                            </li>
                        </a>
                        <a href="http://chicagocollections.org/">
                            <li>
                                <div class="footer-logos"><img alt="Chicago Collections Consortium" src="/wp-content/themes/glimpsesofthegreatwar/images/logo-CC_member_badge_color.png"> </div>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>


			<div class="wordpress-links">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'matata' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'matata' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'matata' ), 'matata', '<a href="'. esc_url('http://justhemes.com/').'" rel="designer">JusThemes.com</a>' ); ?>
			</div>

			<div class="footer-links">
                <p class="unit size5of5 small"><a href="http://www.depaul.edu/Pages/copyright.aspx">© 2001-2017</a> DePaul University | <a href="http://www.depaul.edu/Pages/disclaimer.aspx">Disclaimer</a> | <a href="http://www.depaul.edu/Pages/contact-us.aspx">Contact Us</a> | <a href="http://emergencyplan.depaul.edu/Pages/default.aspx">Emergency Plan</a> | <a href="http://www.depaul.edu/Pages/consumer-info.aspx">Consumer Information</a> | <a href="http://go.depaul.edu/privacy">Privacy Statement</a></p>
            </div>

		</div><!-- .site-info -->


		

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
