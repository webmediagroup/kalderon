<?php
/* Template Name: MANTopused */

get_header();

$bg_img = get_the_post_thumbnail_url();
?>

    <div class="mantopused_block" style="background-image: url('<?php echo $bg_img; ?>');">
        <div class="nav">
            <h1 class="title">מצטערים, הגעת לעמוד שאינו קיים...</h1>
            <p>
                <?php echo $red_title_sub_content; ?>
            </p>
            <div class="mantopused_buttons">
                <a class="mantopused_button" href="/">חזרה לעמוד הבית</a>
            </div>
        </div>
    </div>



<?php
get_footer();
