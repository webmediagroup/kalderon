<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kalderon_Template
 */

get_header();

$strip_image = get_the_post_thumbnail_url();
$contact_form_title = get_field ('contact_form_title');
$blur_top_image = get_field ('blur_top_image');
$team = get_field ('team');
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

    <?php
        $title = get_the_title();
        $price = get_field('vehicle_price');
        $year = get_field('vehicle_year');
        $mileage = get_field('vehicle_mileage');
        $image = get_the_post_thumbnail_url();
        $vehicle_type = get_field('vehicle_type');
        $vehicle_status = get_field('vehicle_status');
        $vehicle_engine = get_field('vehicle_engine');
        $vehicle_gear = get_field('vehicle_gear');
        $vehicle_owner = get_field('vehicle_owner');
        $vehicle_listprice = get_field('vehicle_listprice');
        $vehicle_company = get_field('vehicle_company');
    ?>
    <div class="fullwidth single_vehicle_block">
        <div class="container">
            <div class="single_vehicle_block_right col-xs-12 col-lg-5">
                <span class="vehicle_price">מחיר: <?php echo $price; ?> ₪</span><br />
                <span class="vehicle_details">שנת ייצור: <?php echo $year; ?></span><br />
                <span class="vehicle_details">קילומטרז': <?php echo $mileage; ?></span><br />
                <span class="vehicle_details">מנוע: <?php echo $vehicle_engine; ?></span><br />
                <span class="vehicle_details">גיר: <?php echo $vehicle_gear; ?></span><br />
                <span class="vehicle_details">בעלות (יד): <?php echo $vehicle_owner; ?></span><br />
                <span class="vehicle_details">מחיר מחירון: <?php echo $vehicle_listprice; ?></span><br />
                <span class="vehicle_details">מותג: <?php echo $vehicle_company; ?></span>
                <br /><br />
                <?php
                    echo the_content();
                ?>
            </div>
            <div class="single_vehicle_block_left col-xs-12 col-lg-7">
                <div class="slider fade">
                    <?php
                    $vehicle_slider = get_field('vehicle_slider');
                    if ($vehicle_slider) :
                        $k = 1;
                        foreach ($vehicle_slider as $vehicle_slider_item) :
                            $img = $vehicle_slider_item['vehicle_slider_img']['url'];
                            ?>
                            <div>
                                <div class="image"><img src="<?php echo $img; ?>"/></div>
                            </div>
                            <?php
                            $k++;
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php
$contact_form_title = "לתיאום פגישה מלא את הטופס ואנחנו נחזור אלייך";
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