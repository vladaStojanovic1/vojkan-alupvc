<?php
$contact_title = get_field( 'contact_title' );
$contact_text = get_field( 'contact_text' );
$contact_form = get_field( 'contact_form' );
?>
<section id="contact-form" class="m-contact color-silver">
    <div class="_wrapper">
        <div class="_row justify-center">
            <div class="_m6 <?php echo is_front_page() ? '_xl5' : '_xl4'; ?>">
                <div class="mb-30 d-flex align-center">
                    <div class="m-contact__icon">
                        <svg fill="#393185" height="256px" width="256px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 204.877 204.877" xml:space="preserve" stroke="#393185">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                            <g id="SVGRepo_iconCarrier"> <path d="M111.39,0H93.487C44.284,0,4.255,40.029,4.255,89.232v3.61v26.783v17.787c0,2.762,2.239,5,5,5h2h5.505v3.521 c0,2.762,2.239,5,5,5h9.074c8.971,0,16.269-7.298,16.269-16.269V95.589c0-8.971-7.298-16.269-16.269-16.269H21.76 c-2.761,0-5,2.238-5,5v3.522h-2.47C15.037,44.795,50.264,10,93.487,10h17.903c43.222,0,78.45,34.795,79.197,77.843h-2.47V84.32 c0-2.762-2.239-5-5-5h-9.073c-8.971,0-16.269,7.298-16.269,16.269v39.077c0,8.971,7.298,16.269,16.269,16.269h9.073 c1.385,0,2.638-0.564,3.543-1.474v10.792c0,14.475-11.776,26.25-26.25,26.25h-29.729c-1.985-4.903-6.789-8.375-12.396-8.375h-13.5 c-7.375,0-13.375,6-13.375,13.375s6,13.375,13.375,13.375h13.5c5.607,0,10.411-3.472,12.396-8.375h29.729 c19.988,0,36.25-16.262,36.25-36.25v-17.95c2.263-0.478,3.962-2.484,3.962-4.889v-17.787V92.843v-3.61 C200.622,40.029,160.593,0,111.39,0z"/> </g>
                        </svg>
                    </div>
                    <div class="line-up"></div>
                    <h2 class="color-primary"><?php echo $contact_title ?></h2>
                </div>
                <p><?php echo $contact_text; ?></p>
            </div>
            <div class="_m6 _xl4 m-contact__form">
                <?php echo $contact_form; ?>
            </div>
        </div>
    </div>

</section>