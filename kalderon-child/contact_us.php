<?php
/* Template Name: Contact Us */

get_header();

$map = get_field('map','option');
$waze_link = get_field('waze_link','option');
$contact_us_details = get_field('contact_us_details');
$opening_times = get_field('opening_times');
?>

<div class="place_map">
    <div class="fullwidth">
        <div class="place_map_overlay" onClick="style.pointerEvents='none'"></div>
             <?php echo $map; ?>
        </div>
        <div class="container">
            <div class="contact_us_form_block">
                <div class="col-xs-12 col-lg-6"><h2 class="block_title blue">צרו איתנו קשר</h2></div>
                <div class="col-xs-12 col-lg-6">
                    <?php echo $contact_us_details; ?>
                </div>
                <div class="clear"></div>
                <a href="<?php echo $waze_link; ?>" class="waze_btn">בואו לבקר אותנו <img src="/wp-content/uploads/2017/03/waze.svg" /></a>
                <?php
                echo do_shortcode('[contact-form-7 id="115" title="טופס בעמוד צור קשר"]');
                ?>
                <div class="opening_times">
                    <?php echo $opening_times; ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();
