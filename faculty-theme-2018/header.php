<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package newslite
 */

/**
 * newslite_action_before_head hook
 * @since newslite 1.0.0
 *
 * @hooked newslite_set_global -  0
 * @hooked newslite_doctype -  10
 */
do_action( 'newslite_action_before_head' );?>



<head>

	<?php
	/**
	 * newslite_action_before_wp_head hook
	 * @since newslite 1.0.0
	 *
	 * @hooked newslite_before_wp_head -  10
	 */
	do_action( 'newslite_action_before_wp_head' );

	wp_head();

	/**
	 * newslite_action_after_wp_head hook
	 * @since newslite 1.0.0
	 *
	 * @hooked null
	 */
	do_action( 'newslite_action_after_wp_head' );
	?>
	<link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,400italic,600italic|Open+Sans+Condensed:300,700,300italic" />

</head>

<body <?php body_class(); ?>>
<div class="top-bar clear">
	<div>
		<a href="https://www.depaul.edu/Pages/default.aspx">
			<div class="img-responsive dpu-logo-short pull-left"></div>
		</a>
		<span class="dpu-banner-text pull-left">	     
        <a class="h1 site-title-long" href="https://library.depaul.edu">University Library</a>
        <a class="h1 site-title-short" href="https://library.depaul.edu">DePaul Library</a>
    </span> 
	</div>
</div>

<?php
/**
 * newslite_action_before hook
 * @since newslite 1.0.0
 *
 * @hooked newslite_page_start - 15
 */
do_action( 'newslite_action_before' );

/**
 * newslite_action_before_header hook
 * @since newslite 1.0.0
 *
 * @hooked newslite_skip_to_content - 10
 */
do_action( 'newslite_action_before_header' );

/**
 * newslite_action_header hook
 * @since newslite 1.0.0
 *
 * @hooked newslite_after_header - 10
 */
do_action( 'newslite_action_header' );

/**
 * newslite_action_nav_page_start hook
 * @since newslite 1.0.0
 *
 * @hooked page start and navigations - 10
 */
do_action( 'newslite_action_nav_page_start' );

/**
 * newslite_action_on_header hook
 * @since newslite 1.0.0
 *
 * @hooked page start and navigations - 10
 */
do_action( 'newslite_action_on_header' );

/**
 * newslite_action_before_content hook
 * @since newslite 1.0.0
 *
 * @hooked null
 */
do_action( 'newslite_action_before_content' );
?>


	</div>