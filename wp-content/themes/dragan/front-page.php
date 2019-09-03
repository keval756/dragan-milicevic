<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dragan-test
 */

get_header();
?>
  <?php if(get_theme_mod( 'header_display' ) == 'home') {  ?>
    <section class="banner">
        <div class="banner-img">
            <img src="<?php echo get_theme_mod( 'header_image' ); ?>" class="img-fluid">
        </div>
        <div class="banner-content">
            <div class="container">
                <div class="banner-text">
                    <h2><?php echo get_theme_mod( 'header_title' ); ?></h2>
                    <p><?php echo get_theme_mod( 'banner_description' ); ?></p>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<section class="blog-individual-content">
        <div class="container">
			<?php
			 while ( have_posts() ) : the_post();
				  the_content();
			 endwhile; // End of the loop.
			?>
        </div>
    </section>
<?php
get_footer();
