<?php
$info_address1 = get_field('info_address_1', 'option');
$info_address2 = get_field('info_address_2', 'option');
$info_phone = get_field('info_phone', 'option');
?>

<section class="m-info">
    <div class="_wrapper">
        <div class="d-flex align-center justify-space">
            <div class="d-flex m-info__address">
                <div class="d-flex align-center m-info__address--item">
                    <svg fill="#ffffff" height="64px" width="64px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 297 297" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M148.5,0C87.43,0,37.747,49.703,37.747,110.797c0,91.026,99.729,179.905,103.976,183.645 c1.936,1.705,4.356,2.559,6.777,2.559c2.421,0,4.841-0.853,6.778-2.559c4.245-3.739,103.975-92.618,103.975-183.645 C259.253,49.703,209.57,0,148.5,0z M148.5,272.689c-22.049-21.366-90.243-93.029-90.243-161.892 c0-49.784,40.483-90.287,90.243-90.287s90.243,40.503,90.243,90.287C238.743,179.659,170.549,251.322,148.5,272.689z"></path> <path d="M148.5,59.183c-28.273,0-51.274,23.154-51.274,51.614c0,28.461,23.001,51.614,51.274,51.614 c28.273,0,51.274-23.153,51.274-51.614C199.774,82.337,176.773,59.183,148.5,59.183z M148.5,141.901 c-16.964,0-30.765-13.953-30.765-31.104c0-17.15,13.801-31.104,30.765-31.104c16.964,0,30.765,13.953,30.765,31.104 C179.265,127.948,165.464,141.901,148.5,141.901z"></path> </g> </g></svg>
                    <a target="_blank" class="color-white mb-0" href="https://maps.app.goo.gl/pa2MX8vZ6jRN87dS8"><?php echo $info_address1; ?></a>
                </div>

                <div class="d-flex align-center m-info__address--item">
                    <svg fill="#ffffff" height="64px" width="64px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 297 297" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M148.5,0C87.43,0,37.747,49.703,37.747,110.797c0,91.026,99.729,179.905,103.976,183.645 c1.936,1.705,4.356,2.559,6.777,2.559c2.421,0,4.841-0.853,6.778-2.559c4.245-3.739,103.975-92.618,103.975-183.645 C259.253,49.703,209.57,0,148.5,0z M148.5,272.689c-22.049-21.366-90.243-93.029-90.243-161.892 c0-49.784,40.483-90.287,90.243-90.287s90.243,40.503,90.243,90.287C238.743,179.659,170.549,251.322,148.5,272.689z"></path> <path d="M148.5,59.183c-28.273,0-51.274,23.154-51.274,51.614c0,28.461,23.001,51.614,51.274,51.614 c28.273,0,51.274-23.153,51.274-51.614C199.774,82.337,176.773,59.183,148.5,59.183z M148.5,141.901 c-16.964,0-30.765-13.953-30.765-31.104c0-17.15,13.801-31.104,30.765-31.104c16.964,0,30.765,13.953,30.765,31.104 C179.265,127.948,165.464,141.901,148.5,141.901z"></path> </g> </g></svg>
                    <a target="_blank" class="color-white mb-0" href="https://maps.app.goo.gl/3Qt1izkPZo7Hixom7"><?php echo $info_address2; ?></a>
                </div>

            </div>

            <div class="d-flex align-center m-info__address--tel">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M757.23-160q-101.15 0-207.38-50.65-106.23-50.66-197.77-142.2-90.77-91.53-141.43-197.38Q160-656.08 160-757.23q0-18 12-30.39Q184-800 202-800h98.92q16.31 0 28.46 10.27 12.16 10.27 16.47 26.35L365.69-668q2.77 16.77-1 29.31t-13.31 20.54l-87.76 81.84q24.61 44.69 54.42 83.04 29.81 38.35 63.58 72.65 34.84 34.85 75 64.81 40.15 29.96 88.15 56.58l85.54-87.08q9.77-10.54 21.96-13.88 12.19-3.35 26.96-1.35l84.15 17.23q16.31 4 26.47 16.43Q800-315.46 800-299.38V-202q0 18-12.38 30-12.39 12-30.39 12Z"/></svg>
                <a class="color-white" href="tel:<?php echo $info_phone ?>"><?php echo $info_phone ?></a>
            </div>
        </div>
    </div>
</section>

