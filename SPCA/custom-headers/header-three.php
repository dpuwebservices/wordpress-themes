	<!-- header of the site -->
	<header id="masthead" class="site-header" role="banner">		
		<div class="header-b">
			<div class="container">
				<div class="row">
					<?php if( get_theme_mod( 'travel_diaries_ed_social' ) ) do_action( 'travel_diaries_social' );  ?>
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
        		</div>					
				<?php if( get_theme_mod( 'travel_diaries_ed_header_info' ) ) do_action( 'travel_diaries_header_info' ); ?>					
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