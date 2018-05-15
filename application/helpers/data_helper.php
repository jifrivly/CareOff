<?php

defined('BASEPATH') or exit('No direct script access allowed');

function getCategoryList()
{
    $object = &get_instance();

    $object->load->model('ProductModel');

    if ($categories = $object->ProductModel->selectCategory()->result_array()) {
        foreach ($categories as $key) {
            $data[$key['c_id']] = $key['name'];
        }
    } else {
        $data = null;
    }
    define('CATEGORY_LIST', $data);

}

/* End of file data_helper.php */
