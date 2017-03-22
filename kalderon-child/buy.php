<?php
/* Template Name: Buy */

get_header();

$strip_image = get_the_post_thumbnail_url();
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

    <div id="primary" class="content-area fullwidth buy-block">
        <main id="main" class="site-main" role="main">

            <div class="container">
                <h2 class="block_title white"><?php echo $sub_title; ?></h2><br /><br />


                <div class="tab">
                    <button class="tablinks active" onclick="openCity(event, 'all')">הכל</button>
                    <button class="tablinks" onclick="openCity(event, 'track')">משאיות</button>
                    <button class="tablinks" onclick="openCity(event, 'private')">פרטי</button>
                </div>

                <div id="all" class="tabcontent">
                    <?php
                    query_posts(array(
                        'post_type' => 'vehicles',
                        'post_status' => 'publish',
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
                            <span class="vehicle_details"> מחיר: <?php echo $price; ?> ₪</span><br />
                            <span class="vehicle_details">שנת ייצור: <?php echo $year; ?></span><br />
                            <span class="vehicle_details">קילומטרז': <?php echo $mileage; ?></span>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_query();
                    ?>
                    <div class="clear"></div>
                    <div class="loadMoreDiv"><a href="#" class="loadMore" data-type="all">טען עוד</a></div>
                </div>

                <div id="track" class="tabcontent">
                    <?php
                    query_posts(array(
                        'post_type' => 'vehicles',
                        'post_status' => 'publish',
                        'meta_key'		=> 'vehicle_type',
                        'meta_value'	=> 'track'
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
                            <span class="vehicle_details"> מחיר: <?php echo $price; ?> ₪</span><br />
                            <span class="vehicle_details">שנת ייצור: <?php echo $year; ?></span><br />
                            <span class="vehicle_details">קילומטרז': <?php echo $mileage; ?></span>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_query();
                    ?>
                    <div class="clear"></div>
                    <div class="loadMoreDiv"><a href="#" class="loadMore" data-type="track">טען עוד</a></div>
                </div>

                <div id="private" class="tabcontent">
                    <?php
                    query_posts(array(
                        'post_type' => 'vehicles',
                        'post_status' => 'publish',
                        'meta_key'		=> 'vehicle_type',
                        'meta_value'	=> 'private'
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
                            <span class="vehicle_details"> מחיר: <?php echo $price; ?> ₪</span><br />
                            <span class="vehicle_details">שנת ייצור: <?php echo $year; ?></span><br />
                            <span class="vehicle_details">קילומטרז': <?php echo $mileage; ?></span>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_query();
                    ?>
                    <div class="clear"></div>
                    <div class="loadMoreDiv"><a href="#" class="loadMore" data-type="private">טען עוד</a></div>
                </div>
            </div>

        </main><!-- #main -->
    </div><!-- #primary -->


<?php
get_footer();
