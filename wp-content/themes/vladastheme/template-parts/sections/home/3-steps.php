<?php
$steps_title = get_field('steps_title');
$steps_text = get_field('steps_text');
$step_1_title = get_field('step_1_title');
$step_1_text = get_field('step_1_text');
$step_2_title = get_field('step_2_title');
$step_2_text = get_field('step_2_text');
$step_3_title = get_field('step_3_title');
$step_3_text = get_field('step_3_text');
$steps_button = get_field('steps_button');
$steps_button = get_field('steps_button');
$arrow = get_template_directory() . '/src/images/arrow.svg';
?>
<section class="m-3steps">
    <div class="_wrapper">
        <div class="mb-70">
            <h2 class="text-center mb-10"><?php echo $steps_title ?></h2>
            <div class="line-h"></div>
            <p><?php echo $steps_text ?></p>
        </div>

        <div class="_row justify-center">
            <div class="_l4">
                <div class="m-3steps__step text-center">
                    <div class="circle mb-20"><h1 class="color-white">1</h1><p>korak</p></div>
                    <p><?php echo $step_1_text ?></p>
                </div>
            </div>
            <div class="_l4">
                <div class="m-3steps__step text-center">
                    <div class="circle mb-20"><h1 class="color-white">2</h1><p>korak</p></div>
                    <p><?php echo $step_2_text ?></p>
                </div>
            </div>
            <div class="_l4">
                <div class="m-3steps__step text-center">
                    <div class="circle mb-20"><h1 class="color-white">3</h1><p>korak</p></div>
                    <p><?php echo $step_3_text ?></p>
                </div>
            </div>
        </div>

        <div class="text-center mt-50">
            <a class="a-button -primary" href="<?php echo $steps_button['url']; ?>">
                <?php echo $steps_button['title']; ?>
                <?php
                if (file_exists($arrow)) {
                    echo file_get_contents($arrow);
                }
                ?>
            </a>
        </div>
    </div>
</section>