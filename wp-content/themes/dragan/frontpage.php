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
<section class="blog-individual-content">
        <div class="container">
            <div class="row">
		<?php
		while ( have_posts() ) :
			the_post();

			the_content();


		endwhile; // End of the loop.
		?>


            </div>

        </div>

    </section>

<?php
get_footer();
