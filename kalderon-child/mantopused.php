<?php
/* Template Name: MANTopused */

get_header();

$bg_img = get_the_post_thumbnail_url();
$red_title = get_field('red_title');
$red_title_sub_content = get_field('red_title_sub_content');
$white_block_title = get_field('white_block_title');
$carousel_shortcode = get_field('carousel_shortcode');
?>

<div class="mantopused_block" style="background-image: url('<?php echo $bg_img; ?>');">
    <div class="nav">
        <h1 class="title"><?php echo  $red_title; ?></h1>
        <p>
            <?php echo $red_title_sub_content; ?>
        </p>
        <div class="mantopused_buttons">
          <a class="mantopused_button" href="mantopused/קונה">קונה</a>
          <a class="mantopused_button" href="mantopused/מוכר">מוכר</a>
        </div>
    </div>
</div>

<div class="fullwidth">
    <div id="primary" class="content-area container">
        <main id="main" class="site-main" role="main">

            <h2><?php echo $white_block_title; ?></h2>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
            endwhile; endif; ?>
            <br />
            <?php echo do_shortcode(''.$carousel_shortcode.''); ?>
        </main><!-- #main -->
    </div><!-- #primary -->
</div>




<?php
get_footer();
