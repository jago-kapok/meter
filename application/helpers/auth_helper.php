<?php

function authentication()
{
    $CI = get_instance();

    if(!$CI->session->userdata('id')) {
        redirect('auth');
    }
}
