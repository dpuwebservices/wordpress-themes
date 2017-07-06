	<header id="masthead" class="site-header" role="banner">		
		<?php
		$travel_diaries_topbar = get_theme_mod( 'travel_diaries_ed_top_bar' );
		if ($travel_diaries_topbar) {
		?>
        <div class="header-t">
			<div class="container">
				<div id="mobile-header">
    				<a id="top-menu-button" href="#top-menu"><span class="fa fa-bars"></span></a>
				</div>
				<?php if( has_nav_menu( 'secondary' ) ){ ?>
                <nav class="top-menu">
					<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu', 'fallback_cb' => false ) ); ?>
				</nav>
				<?php } 
                if( get_theme_mod( 'travel_diaries_ed_social' ) ) do_action( 'travel_diaries_social' ); 
                ?>                
			</div><!-- .container -->
		</div><!-- .header-t -->
        <?php } ?>
		<div class="header-b">
			<div class="container">
				<div class="site-branding">
        			
                    <?php 
                    if( function_exists( 'has_custom_logo' ) && has_custom_logo() ){
                        the_custom_logo();
                    }
                    ?>
                    <div class="text-logo">                    
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>        			
                    <?php
            			$description = get_bloginfo( 'description', 'display' );
            			if ( $description || is_customize_preview() ) : ?>
            				<p class="site-description"><?php echo esc_html( $description ); /* WPCS: xss ok. */ ?></p>
        			<?php
                        endif; 
                    ?>
                    </div>
        		</div><!-- .site-branding -->
				<div class="advertise">
                	<?php
					$header_ad_type = get_theme_mod( 'travel_diaries_headerad_select' );
					$header_ad_code = get_theme_mod( 'travel_diaries_header_adcode' );
					$header_ad_custom_url = get_theme_mod( 'travel_diaries_headerad_custom_url' );
					$header_ad_custom_image = get_theme_mod( 'travel_diaries_headerad_custom_image' );					
					if ($header_ad_type == "custom_ad" && $header_ad_custom_image) {
						echo '<a target="_blank" href="' .esc_url($header_ad_custom_url). '"><img src="' .$header_ad_custom_image. '" /></a>';
					}
					elseif ($header_ad_type == "ad_code" && $header_ad_code) {
						echo $header_ad_code;					
					}					
					?>
                </div>
			</div>
		</div>
	</header>
	<!-- main navigation of the page -->
	<div class="navigation navgination-holder">
		<div class="container">
			<nav id="site-navigation" class="main-navigation">
    			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>				
			</nav>
		</div>
	</div>