<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Travel_Diaries
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(''); ?>>
<?php do_action( 'travel_diaries_fb_page_box' ); ?>
<div id="page" class="site">
	<?php
        /* Switch different header layouts */
        $header_layout = get_theme_mod( 'travel_diaries_header_layout', 'one' );
        switch( $header_layout ){
            case 'one':
            get_template_part( 'custom-headers/header', 'one' );
            break;

            case 'two':
            get_template_part( 'custom-headers/header', 'two' );
            break;

            case 'three':
            get_template_part( 'custom-headers/header', 'three' );
            break;

            case 'four':
            get_template_part( 'custom-headers/header', 'four' );
            break;

            case 'five':
            get_template_part( 'custom-headers/header', 'five' );
            break;

            case 'six':
            get_template_part( 'custom-headers/header', 'six' );
            break;

            default:
            get_template_part( 'custom-headers/header', 'one' );
            break;
        }
		
		$ed_breadcrumb = get_theme_mod( 'travel_diaries_ed_breadcrumb', '0' );			
		if( $ed_breadcrumb ) do_action( 'travel_diaries_pro_breadcrumbs' );

        /* Display slider only on front page. */
	    if( is_front_page() ){
	        $travel_diaries_ed_hero = get_theme_mod( 'travel_diaries_hero_select', 'none' );
	        $travel_diaries_ed_featuredon = get_theme_mod( 'travel_diaries_ed_featuredon_section', '0' );			

	        /* If hero type if slider show sldier elseif banner then show banner or else do nothing */
			if ($travel_diaries_ed_hero == 'slider') {
				do_action( 'travel_diaries_slider' );
			}
			elseif ($travel_diaries_ed_hero == 'staticbanner') {
				do_action( 'travel_diaries_newsletterbanner' );
			}
			else {
			// do nothing
			}

			// logic for featured on section
			if ($travel_diaries_ed_featuredon) {
				do_action( 'travel_diaries_featuredon' ); // show featured on logo section
			}
        }
?>


<?php
if( !is_page_template( 'template-home.php' ) && !is_page_template( 'template-pagebuilder.php' ) ){?>
	<div id="content" class="site-content">
        <div class="container">
            <div class="row">
<?php } ?>
