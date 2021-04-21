<?php

function is_logged_in()
{
    $meong = get_instance();
    if (!$meong->session->userdata('email')) {
        redirect('tutor/auth');
    } else {
        $role_id = $meong->session->userdata('role_id');
        $menu = $meong->uri->segment(1);

        $queryMenu = $meong->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $menu_id = $queryMenu['id'];

        $userAccess = $meong->db->get_where('user_access_menu', [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect('tutor/auth/blocked');
        }
    }
}


function cek_akses($role_id, $menu_id)
{
    $meong = get_instance();

    $meong->db->where('role_id', $role_id);
    $meong->db->where('menu_id', $menu_id);

    $result = $meong->db->get('user_access_menu');

    if ($result->num_rows() > 0) {
        return "checked = 'checked'";
    }
}
