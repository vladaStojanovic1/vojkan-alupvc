<?php
$comment_title = get_field( 'comment_title' );
?>
<section class="m-comments">
    <div class="_wrapper">
        <div class="_row justify-center">
            <div class="_l6">
                <div class="text-center">
                    <p class="a-text -small ">Mi kroz vaše oči</p>
                    <h2><?php  echo $comment_title; ?></h2>
                </div>
                <div class="mb-50 line-h"></div>
                <div class="swiper-container comments">
                    <div class="swiper-wrapper">
                        <?php if( have_rows('comments',) ): ?>
                            <?php while( have_rows('comments') ): the_row();
                                $comment_text = get_sub_field('comment_text');
                                $comment_name = get_sub_field('comment_name');
                                ?>

                                <div class="swiper-slide">
                                   <div class="m-comments__comment">
                                       <h3><?php echo $comment_name; ?></h3>
                                       <div class="m-comments__comment--star">
                                           <?php
                                           $stars = get_template_directory() . '/src/images/stars.svg';
                                           if (file_exists($stars)) {
                                               echo file_get_contents($stars);
                                           }
                                           ?>
                                       </div>
                                       <p class="mt-20 fw-300"><?php echo $comment_text; ?></p>
                                       <div class="m-comments__comment--quotes">
                                           <?php
                                           $quotes = get_template_directory() . '/src/images/quotes.svg';
                                           if (file_exists($quotes)) {
                                               echo file_get_contents($quotes);
                                           }
                                           ?>
                                       </div>
                                   </div>
                                </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

