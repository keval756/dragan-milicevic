<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dragan-test
 */
?>
<footer>
    <div class="container">
        <div class="top-footer">
            <div class="row">
                <div class="col-sm-3 col-6">
                    <?php dynamic_sidebar('footer-1'); ?>
                </div>
                <div class="col-sm-3 col-6">
                    <?php dynamic_sidebar('footer-2'); ?>
                </div>
                <div class="col-sm-6 col-12">
                	<?php dynamic_sidebar('footer-3'); ?>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <p>© <?php echo date('Y'); ?>, All Right Reserved.</p>
        </div>
    </div>
 </footer>
<?php wp_footer(); ?>
</body>
</html>
