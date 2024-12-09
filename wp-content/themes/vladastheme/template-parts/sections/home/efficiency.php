<?php
$e_text = get_field('e_text');
$e_title = get_field('e_title');
$e_bigger_text = get_field('e_bigger_text');
$e_item_1_image = get_field('e_item_1_image');
$e_item_1_title = get_field('e_item_1_title');
$e_item_1_text = get_field('e_item_1_text');
$e_item_2_image = get_field('e_item_2_image');
$e_item_2_title = get_field('e_item_2_title');
$e_item_2_text = get_field('e_item_2_text');
$e_item_3_image = get_field('e_item_3_image');
$e_item_3_title = get_field('e_item_3_title');
$e_item_3_text = get_field('e_item_3_text');


?>

<section class="m-efficiency">
    <div class="_wrapper">
      <div class="_row justify-center">
          <div class="_l7">
              <div class="text-center">
                  <p class="a-text -small"><?php echo $e_text; ?></p>
                  <h2 class="mb-10"><?php echo $e_title; ?></h2>
                  <div class="line-h"></div>
                  <p class="mt-30"><?php echo $e_bigger_text; ?></p>
              </div>
          </div>
      </div>

        <div class="_row mt-70 m-efficiency__mobCenter">
            <div class="_m6 _l4 m-efficiency__item text-center">
                <div>
                    <div class="m-efficiency__item--img mb-30">
                        <img src="<?php echo $e_item_1_image['url']; ?>" alt="<?php echo $e_item_1_image['alt']; ?>">
                    </div>
                    <h4 class="mb-10 a-text -title"><?php echo $e_item_1_title; ?></h4>
                    <p class="color-gray fs-14"><?php echo $e_item_1_text; ?></p>
                </div>
            </div>
            <div class="_m6 _l4 m-efficiency__item text-center">
                <div>
                    <div class="m-efficiency__item--img mb-30">
                        <img src="<?php echo $e_item_2_image['url']; ?>" alt="<?php echo $e_item_2_image['alt']; ?>">
                    </div>
                    <h4 class="mb-10 a-text -title"><?php echo $e_item_2_title; ?></h4>
                    <p class="color-gray fs-14"><?php echo $e_item_2_text; ?></p>
                </div>
            </div>
            <div class="_m6 _l4 m-efficiency__item text-center">
                <div>
                    <div class="m-efficiency__item--img mb-30">
                        <img src="<?php echo $e_item_3_image['url']; ?>" alt="<?php echo $e_item_3_image['alt']; ?>">
                    </div>
                    <h4 class="mb-10 a-text -title"><?php echo $e_item_3_title; ?></h4>
                    <p class="color-gray fs-14"><?php echo $e_item_3_text; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

