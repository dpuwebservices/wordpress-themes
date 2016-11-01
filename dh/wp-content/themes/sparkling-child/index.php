<?php
/**
 * The main template file.
 * Advait Patel Sample comment
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package sparkling
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
                    <article> 
                        <div class="blog-item-wrap">
                            <div class="post-inner-content">
                                <h1>Reading Chicago Reading</h1>
            <p>
                Who reads? What do they read? How do they read? These are questions essential to the study of literacy, yet fine-grained answers to these 
                questions are difficult to come by, as noted in To Read or Not To Read, a 2007 report from the NEA. Our project <strong><em>Reading Chicago Reading</em></strong> 
                represents a rare opportunity to seek empirical answers to these questions within a large metropolitan area, with a wide variety of texts, 
                and across a great diversity of readers. <a href="http://dh.depaul.press/reading-chicago/about/">Learn more...</a>
            </p>  
                        </div>
                        </div>
            </article>       


			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php sparkling_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>