<?php
/* Template Name: Home */

get_header();

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <div class="homepage_top_block">
                <div class="col-sm-12 col-lg-8 right_block">
                    <div class="slider fade">
                    <?php
                    $homepage_slider = get_field('homepage_slider');
                    if ($homepage_slider) :
                        $k = 1;
                        foreach ($homepage_slider as $homepage_slider_item) :
                            $title = $homepage_slider_item['homepage_slider_slide_title'];
                            $img = $homepage_slider_item['homepage_slider_slide_image']['url'];
                            $cat = $homepage_slider_item['homepage_slider_slide_cat'];
                            $link = $homepage_slider_item['homepage_slider_slide_link'];
                            ?>
                            <div>
                                <span class="slideDetails">
                                    <h4><?php echo $title; ?></h4>
                                    <h3><?php echo $cat; ?></h3>
                                    <br />
                                    <a class="read_more_link" href="<?php echo $link; ?>"> קרא עוד&nbsp;<i class="fa fa-angle-left" aria-hidden="true"></i></a>
                                 </span>
                                <div class="image"><img src="<?php echo $img; ?>"/></div>
                            </div>
                            <?php
                            $k++;
                        endforeach;
                    endif;
                    ?>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 left_block">
                    <?php
                    $homepage_cubes = get_field('homepage_cubes');
                    if ($homepage_cubes) :
                        foreach ($homepage_cubes as $homepage_cubes_item) :
                        $title = $homepage_cubes_item['homepage_cube_title'];
                        $bg = $homepage_cubes_item['homepage_cube_background_image']['url'];
                        $cat = $homepage_cubes_item['homepage_cube_cat'];
                        $link = $homepage_cubes_item['homepage_cube_link'];
                        ?>
                        <div class="col-sm-12 col-lg-6 homepage_cube_item" style="background-image: url('<?php echo $bg; ?>');">
                            <br />
                                <h4><a href="<?php echo $link; ?>"><?php echo $title; ?></a></h4>
                                <h3><a href="<?php echo $link; ?>"><?php echo $cat; ?></a></h3>
                            <br />
                            <a class="read_more_link" href="<?php echo $link; ?>"> קרא עוד&nbsp;<i class="fa fa-angle-left" aria-hidden="true"></i></a>
                        </div>
                        <?php
                    endforeach;
                    endif;
                    ?>
                </div>
            </div>

            <div class="clear"></div>

            <div class="col-xs-12 about_block">
                <div class="container">
                  <h2 class="block_title blue">אודות מוסך קלדרון</h2>
                    <?php
                    the_content();
                    ?>
                    <p>
                        <a href="הסיפור-שלנו">הסיפור שלנו</a>
                    </p>
                </div>
                <div class="clear"></div>
            </div>

            <div class="col-xs-12 top_vehicles_block">
                <div class="container">
                    <h2 class="block_title white">רכבים חמים MANTtopused</h2>
                    <div class="slider autoplay">
                        <?php
                        query_posts(array(
                            'post_type' => 'vehicles',
                            'post_status' => 'publish'
                        ));
                        while (have_posts()) : the_post();
                            $title = get_the_title();
                            $price = get_field('vehicle_price');
                            $year = get_field('vehicle_year');
                            $mileage = get_field('vehicle_mileage');
                            $image = get_the_post_thumbnail_url();
                            $vehicle_type = get_field('vehicle_type');
                            $vehicle_status = get_field('vehicle_status');
                            switch ($vehicle_status) {
                                case "נמכר":
                                    $ribboncolor = "black";
                                    break;
                                case "במכירה":
                                    $ribboncolor = "white";
                                    break;
                                case "במבצע":
                                    $ribboncolor = "red";
                                    break;
                            }
                            ?>
                            <div class="vehicles_details_box vehicles_boxes col-xs-12 col-lg-4">
                                <div class="ribbon <?php echo $ribboncolor; ?>"><span><?php echo $vehicle_status; ?></span></div>
                                <div class="img_box">
                                    <img src="<?php echo $image; ?>" />
                                    <div class="overly"></div>
                                    <div class="buttons">
                                        <a href="<?php echo get_permalink(); ?>" class="moreDetailsButton">לפרטים נוספים</a>
                                    </div>
                                </div><br /><br />
                                <h3 class="vehicle_name"><a href="<?php echo get_permalink(); ?>"><?php echo $title; ?></a></h3>
                                <span class="vehicle_details"> מחיר: <?php echo $price; ?> ₪</span><br />
                                <span class="vehicle_details">שנת ייצור: <?php echo $year; ?></span><br />
                                <span class="vehicle_details">קילומטרז': <?php echo $mileage; ?></span>
                            </div>
                        <?php
                        endwhile;
                        wp_reset_query();
                        ?>
                    </div>
                </div>
                <div class="clear"></div>
                <a href="/mantopused/קונה" class="all_vehicles_btn">לרשימת הרכבים המלאה <i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->


    <script>
        jQuery( document ).ready(function($) {
            $('.autoplay').slick({
                rtl:true,
                slidesToShow: <?php echo (my_wp_is_mobile()) ? 1 : 3 ?>,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: true,
            });
        })
    </script>
<?php
get_footer();
