<?php
/* Template Name: Content Page (Top Strip) */

get_header();

$strip_image = get_the_post_thumbnail_url();
$contact_form_title = get_field ('contact_form_title');
$blur_top_image = get_field ('blur_top_image');
$sub_title = get_field ('sub_title');
?>

<div class="content_page_header">
    <div class="content_page_header_image" style="
            background-image: url('<?php echo $strip_image; ?>');

            <?php
            if($blur_top_image) {
                echo "-webkit-filter: blur(5px);
                -moz-filter: blur(5px);
                -o-filter: blur(5px);
                -ms-filter: blur(5px);
                filter: blur(5px);";
            }
            ?>
            ">
    </div>
    <div class="title_breadcrumbs">
        <h1><?php the_title(); ?></h1>
        <?php if ( function_exists('yoast_breadcrumb') )
        {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
    </div>
</div>

<div id="primary" class="content-area container">
    <main id="main" class="site-main" role="main">

        <h2 class="block_title blue"><?php echo $sub_title; ?></h2><br /><br />

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
        endwhile; endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->


<?php
if($contact_form_title != '') {
    echo "<div class='contact_form_block'>
                <div class='container'>
                <p>{$contact_form_title}</p>
                ";
    echo do_shortcode('[contact-form-7 id="4" title="טופס צור קשר עמודי תוכן"]');
    echo "</div></div>";
}
?>


<?php
get_footer();
