<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kalderon_Template
 */


$footer_text = get_field ('footer_text', 'option');

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-6 footer_right">
                <?php echo $footer_text; ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 footer_left">
                    <a style="line-height: 30px;" href="http://www.wmg.co.il"><img class="size-full wp-image-1659" src="/wp-content/uploads/2017/03/wmg_logow.png" alt="wmg_logow" width="177" height="19"></a> | <a style="color: #4a4e51; font-size:16px;" href="http://www.wmg.co.il">בניית אתרים</a>
            </div>
            <div class="clear"></div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
