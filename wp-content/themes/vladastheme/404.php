<?php
if (is_404()) {
    wp_redirect(home_url('/404-page/'));
    exit;
}

