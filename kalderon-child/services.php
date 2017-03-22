<?php
/* Template Name: Services */

get_header();

$strip_image = get_the_post_thumbnail_url();
$contact_form_title = get_field ('contact_form_title');
$blur_top_image = get_field ('blur_top_image');
$sub_title = get_field ('sub_title');
$top_text = get_field ('top_text');
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

            <?php echo $top_text; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php

    if(wp_is_mobile()) :
    ?>
    <div class="service_info fullwidth">
        <div class="container">
            <h2>מכונאות</h2><br />
            <?php
            the_content();
            ?>
        </div>
    </div>
    <?php endif; ?>

    <div class="services_icons fullwidth">
        <div class="container">
            <a href="/מכונאות/"><div class="service_icon"><div class="iconDiv"><img src="/wp-content/uploads/2017/03/icon_01<?php if($post->ID == 116) echo '_hover'; ?>.svg"><?php if($post->ID == 116) echo '<div class="arrow"></div>'; ?></div><br />מכונאות</div></a>
            <a href="/פחחות-וצבע/"><div class="service_icon"><div class="iconDiv"><img src="/wp-content/uploads/2017/03/icon_02<?php if($post->ID == 225) echo '_hover'; ?>.svg"><?php if($post->ID == 225) echo '<div class="arrow"></div>'; ?></div><br />פחחות וצבע</div></a>
            <a href="/חשמל-ודיאגלוסטיקה/"><div class="service_icon"><div class="iconDiv"><img src="/wp-content/uploads/2017/03/icon_03<?php if($post->ID == 226) echo '_hover'; ?>.svg"><?php if($post->ID == 226) echo '<div class="arrow"></div>'; ?></div><br />חשמל ודיאגלוסטיקה</div></a>
            <a href="/מיזוג-אוויר/"><div class="service_icon"><div class="iconDiv"><img src="/wp-content/uploads/2017/03/icon_04<?php if($post->ID == 227) echo '_hover'; ?>.svg"><?php if($post->ID == 227) echo '<div class="arrow"></div>'; ?></div><br />מיזוג אוויר</div></a>
            <a href="/מרכב-לאוטובוסים/"><div class="service_icon"><div class="iconDiv"><img src="/wp-content/uploads/2017/03/icon_05<?php if($post->ID == 228) echo '_hover'; ?>.svg"><?php if($post->ID == 228) echo '<div class="arrow"></div>'; ?></div><br />מרכב לאוטובוסים</div></a>
            <a href="/רישוי-צמה/"><div class="service_icon"><div class="iconDiv"><img src="/wp-content/uploads/2017/03/icon_06<?php if($post->ID == 229) echo '_hover'; ?>.svg"><?php if($post->ID == 229) echo '<div class="arrow"></div>'; ?></div><br />רישוי צמ"ה</div></a>
            <a href="/שירותי-מוסך-ניידות/"><div class="service_icon"><div class="iconDiv"><img src="/wp-content/uploads/2017/03/icon_07<?php if($post->ID == 230) echo '_hover'; ?>.svg"><?php if($post->ID == 230) echo '<div class="arrow"></div>'; ?></div><br />שירותי מוסך ניידות</div></a>
        </div>
    </div>

    <?php
    if(!wp_is_mobile()) :
    ?>
    <div class="service_info fullwidth">
        <div class="container">
            <h2>מכונאות</h2><br />
            <?php
            the_content();
            ?>
        </div>
    </div>
    <?php
    endif;
    ?>

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
