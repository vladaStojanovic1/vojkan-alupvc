<?php
/**
 * Header for pages
 * Custom header image functionality
 * @package WordPress
 */

/**
 * @return mixed|string in case there is a image array in field, returns random image from it, otherwise returns random.jpg from images
 *
 */
function randomHeaderImage() {

    $images = array();

    if( have_rows('imgs', 'options') ):
        while( have_rows('imgs', 'options')): the_row();
            $image = get_sub_field('img');

            array_push($images, $image);
        endwhile;
        $random_counter = rand(0, count($images)-1);

    endif;
    if( !empty($images) ) return $images[$random_counter];
    else return get_template_directory_uri() . '/src/images/random.jpg';
}

/**
 * Custom header for home page
 * Change name of images that show up by default if nothing is selected (from random.jpg)
 */
function headerHomePage() {
    $header_image = get_field('header_image');
    $header_title = get_field('header_title');
    $header_text = get_field('header_text');
    $arrow = get_template_directory() . '/src/images/arrow.svg';
    $header_contact = get_field('header_contact');
    ?>

    <header class="m-header" aria-label="Pvc stolarija Vlasotince i Pirot | Vojkan ALU & PVC | Vojkan ALU & PVC nudi prozore, vrata, garažna vrata, roletne, komarnike i ALU kapije-ograde po meri. Posetite nas u Vlasotincu i Pirotu." style="background-image: url(<?php echo $header_image;?>)">
        <div class="_wrapper height-100">
            <div class="_row justify-end height-100">
                <div class="_l4">
                    <h1 class="m-header__blueTitle">PVC stolarija <strong>Vlasotince</strong></h1>
                </div>
                <div class="_l6 mt-auto">
                   <div class="m-header__content">

                       <h1 id="typing-title" class="m-header__content--title" data-title="<?php echo esc_attr($header_title); ?>"></h1>
                       <p id="typing-subtext" class="m-header__content--text"><?php echo $header_text; ?></p>

                       <a class="a-button -primary mt-20 opacityAnim" style="opacity: 0;"  href="<?php echo $header_contact['url'] ?>">
                           <?php echo $header_contact['title'] ?>
                           <?php
                           if (file_exists($arrow)) {
                               echo file_get_contents($arrow);
                           }
                           ?>
                       </a>
                   </div>
                </div>
            </div>
        </div>
    </header>

    <?php
}

/**
 * Custom header for all other pages
 * Change name of images that show up by default if nothing is selected (from random.jpg)
 */
function headerPage() {
    $header_image = get_field('header_image');
    $header_title = get_field('header_title');
    ?>

    <header class="m-header -about" style="background-image: url(<?php echo $header_image;?>)">
        <div class="_wrapper height-100">
            <div class="_row justify-end height-100">
                <div class="_l6 mt-auto">
                    <div class="m-header__content anim-fromTop">
                        <h1 class="m-header__content--title"><?php echo $header_title;?></h1>
                        <div class="line-h"></div>
<!--                        <div class="m-header__breadcrumb mt-20">-->
<!--                            <a href="/">Početna</a> <span>/</span>-->
<!--                            <a class="m-header__breadcrumb--current" href="">--><?php //echo $header_title; ?><!--</a>-->
<!--                        </div>-->


                        <?php
                        if (function_exists('yoast_breadcrumb')) {
                            yoast_breadcrumb('<div class="m-header__breadcrumb mt-20">', '</div>');
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <?php
}

function headerPostPage() {
    $header_image = get_field('header_image');
    $header_title = get_field('header_title');
    ?>

    <header class="m-header -about" style="background-image: url(<?php echo $header_image;?>)">
        <div class="_wrapper height-100">
            <div class="_row justify-end height-100">
                <div class="_l7 mt-auto">
                    <div class="m-header__content anim-fromTop">
                        <h1 class="m-header__content--title"><?php echo the_title();?></h1>
                        <div class="line-h"></div>
<!--                        <div class="m-header__breadcrumb mt-20">-->
<!--                            <a href="/">Početna</a> <span>/</span>-->
<!--                            <a class="m-header__breadcrumb--current" href="">--><?php //the_title(); ?><!--</a>-->
<!--                        </div>-->

                        <?php
                        if (function_exists('yoast_breadcrumb')) {
                            yoast_breadcrumb('<div class="m-header__breadcrumb mt-20">', '</div>');
                        }
                        ?>


                    </div>
                </div>
            </div>
        </div>

    </header>
    <?php
}

?>