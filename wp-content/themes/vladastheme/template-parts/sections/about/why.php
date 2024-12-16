<?php
$w_left_title = get_field( 'w_left_title' );
$w_left_text = get_field( 'w_left_text' );
$w_box_1_title = get_field( 'w_box_1_title' );
$w_box_1_text = get_field( 'w_box_1_text' );
$w_box_2_title = get_field( 'w_box_2_title' );
$w_box_2_text = get_field( 'w_box_2_text' );
$w_box_3_title = get_field( 'w_box_3_title' );
$w_box_3_text = get_field( 'w_box_3_text' );
$w_box_4_title = get_field( 'w_box_4_title' );
$w_box_4_text = get_field( 'w_box_4_text' );
$w_box_1_icon = get_field( 'w_box_1_icon' );
$w_box_2_icon = get_field( 'w_box_2_icon' );
$w_box_3_icon = get_field( 'w_box_3_icon' );
$w_box_4_icon = get_field( 'w_box_4_icon' );
?>

<section class="m-why">
    <div class="_wrapper">
        <div class="_row align-center">
            <div class="_l4 m-why__left">
                <h2 class="mb-10"><?php echo $w_left_title; ?></h2>
                <p class="fw-300"><?php echo $w_left_text; ?></p>
            </div>

            <div class="_l8">
                <div class="_row">
                    <div class="_m6 m-why__box">
                        <div class="m-why__box--content">
                            <div class="d-flex align-center mb-20">
                                <?php echo $w_box_1_icon; ?>
                                <h4><?php echo $w_box_1_title; ?></h4>
                            </div>
                            <p class="mb-0 color-gray"><?php echo $w_box_1_text; ?></p>
                        </div>

                    </div>

                    <div class="_m6 m-why__box">
                       <div class="m-why__box--content">
                           <div class="d-flex align-center mb-20">
                               <?php echo $w_box_2_icon; ?>
                               <h4><?php echo $w_box_2_title; ?></h4>
                           </div>
                           <p class="mb-0 color-gray"><?php echo $w_box_2_text; ?></p>
                       </div>
                    </div>


                    <div class="_m6 m-why__box">
                        <div class="m-why__box--content">
                            <div class="d-flex align-center mb-20">
                                <?php echo $w_box_3_icon; ?>
                                <h4><?php echo $w_box_3_title; ?></h4>
                            </div>
                            <p class="mb-0 color-gray"><?php echo $w_box_3_text; ?>.</p>
                        </div>
                    </div>
                    <div class="_m6 m-why__box">
                        <div class="m-why__box--content">
                            <div class="d-flex align-center mb-20">
                                <?php echo $w_box_4_icon; ?>
                                <h4><?php echo $w_box_4_title; ?></h4>
                            </div>
                            <p class="mb-0 color-gray"><?php echo $w_box_4_text; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>