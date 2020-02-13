<?php

function authentication()
{
    $CI = get_instance();

    if (!$CI->session->userdata('email')) {
        $CI->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akses ditolak. Anda belum login!! </div>');
        redirect('auth');
    } else {
        $role_id = $CI->session->userdata('role_id');
    }
}
