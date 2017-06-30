<?php
    $ci =& get_instance();

    $config['upload_path']          = $ci->config->item('data_files');
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 10000;
    $config['max_width']            = 10024;
    $config['max_height']           = 7068;
    $config['encrypt_name'] = TRUE;
    

