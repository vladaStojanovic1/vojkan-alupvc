<?php
$c_small_title = get_field('c_small_title');
$c_big_title = get_field('c_big_title');
$c_text = get_field('c_text');
$c_address = get_field('c_address');
$c_email =get_field('c_email');
$c_phone = get_field('c_phone');
$google_map = get_field('google_map');
$addressIcon = get_template_directory() . '/src/images/pin.svg';
$emailIcon = get_template_directory() . '/src/images/email.svg';
$phoneIcon = get_template_directory() . '/src/images/phone.svg';
?>
<section class="m-contactPage">
    <div class="_wrapper">
        <div class="_row justify-center">
            <div class="_l7">
                <div class="text-center">
                    <p class="a-text -small"><?php echo $c_small_title; ?></p>
                    <h2><?php echo $c_big_title; ?></h2>
                    <div class="line-h mb-40"></div>
                    <?php echo $c_text; ?>
                </div>

            </div>
        </div>

        <div class="_row text-center mt-40">
            <div class="_m4 m-contactPage__item">
                <div>
                    <?php
                    if (file_exists($addressIcon)) {
                        echo file_get_contents($addressIcon);
                    }
                    echo $c_address;
                    ?>
                </div>
            </div>
            <div class="_m4 m-contactPage__item">
                <div>
                    <?php
                    if (file_exists($emailIcon)) {
                        echo file_get_contents($emailIcon);
                    }
                    echo $c_email;
                    ?>
                </div>
            </div>
            <div class="_m4 m-contactPage__item">
                <div>
                    <?php
                    if (file_exists($phoneIcon)) {
                        echo file_get_contents($phoneIcon);
                    }
                    echo $c_phone;
                    ?>
                </div>
            </div>
        </div>

        <div class="_row justify-center">
            <div class="_l6">
                <div class="m-contactPage__mapDiv">
                    <iframe title="Lokacija Vlasotince, Orašje bb - Vojkan ALU & PVC Stolarija" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2920.205703502002!2d22.094100777012056!3d42.95286937114393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47557b2707401631%3A0xaab41c7ca4ac8f3!2sVojkan!5e0!3m2!1ssr!2srs!4v1732815041488!5m2!1ssr!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div id="spinner" class="d-flex justify-center">
                            <span class="loader"></span>
                        </div>
                </div>
            </div>

            <div class="_l6">
                <div class="m-contactPage__mapDiv">
                <iframe title="Lokacija Pirot, Trg republike 118 - Vojkan ALU & PVC Stolarija" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2910.3077450249334!2d22.588974477019978!3d43.161063971129764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47553da1de4a2f45%3A0x68359c15260383b9!2sALU%20PVC%20stolarija%20%22Vojkan%22!5e0!3m2!1ssr!2srs!4v1733759532579!5m2!1ssr!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div id="spinner" class="d-flex justify-center">
                        <span class="loader"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
