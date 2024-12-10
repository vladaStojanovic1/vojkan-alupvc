<?php wp_footer();?>

<footer class="m-footer">
    <div class="_wrapper">
        <div class="_row">
            <div class="_l3 m-footer__textItem">
                <div>
                    <a href="/">
                        <img
                            src="<?php echo get_template_directory_uri() . '/src/images/logo-white.png' ?>"
                            alt="PVC Vojkan Vlasotince"
                            class="m-footer__logo mb-30"
                        >
                    </a>
                    <p>
                        Naša misija je da vaš dom ili poslovni prostor opremimo rešenjima koja kombinuju vrhunski kvalitet, dugotrajnost i estetsku privlačnost.</p>
                </div>
            </div>

            <div class="_l3 m-footer__textItem -work">
                <h4 class="color-white">Radno vreme</h4>
                <div class="line-h"></div>
                <p class="d-flex align-center">Pon - Sub:<span>07:00h - 15:00h</span></p>
                <p class="d-flex align-center">Nedelja:<span>Ne radimo</span></p>
            </div>

            <div class="_l3 m-footer__textItem -work">
                <h4 class="color-white">Kontakt informacije</h4>
                <div class="line-h"></div>
                <p class="d-flex align-center">Telefon:<span><a target="_blank" href="tel:+381600874137">060 087 4137</a></span></p>
                <p class="d-flex align-center">Adresa 1:<span><a target="_blank" href="https://maps.app.goo.gl/pa2MX8vZ6jRN87dS8">Vlasotince, Orašje bb</a></span></p>
                <p class="d-flex align-center">Adresa 2:<span><a target="_blank" href="https://maps.app.goo.gl/3Qt1izkPZo7Hixom7">Pirot, Trg republike 118</a></span></p>
<!--                <a class="a-button -secondary mt-30" href="/contact">Kontakt</a>-->
            </div>

            <div class="_s8 _l3">
                <h4 class="color-white">Nasi projekti</h4>
                <div class="line-h"></div>
                <div class="_row p-10">
                    <?php if( have_rows('our_projects','option') ): ?>
                        <?php while( have_rows('our_projects','option') ): the_row();
                            $image = get_sub_field('image','option');
                            ?>
                                <div class="_4 m-footer__gallery">
                                    <a data-fancybox="images" href="<?php echo $image['url']; ?>">
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                    </a>
                                </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="_row">
            <div class="m-footer__bottomContent d-flex align-center">
                <p>All rights reserved | Vojkan ALU & PVC Stolarija</p>

                <a class="d-flex align-center" target="_blank"
                   href="https://www.instagram.com/vladaasto">&copy;<?php echo date('Y') ?> Created
                    and hosted by
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="20"
                         height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <rect x="4" y="4" width="16" height="16" rx="4" />
                        <circle cx="12" cy="12" r="3" />
                        <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
                    </svg>
                    <span>vladaasto</span>
                </a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
