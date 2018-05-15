<?php

defined('BASEPATH') or exit('No direct script access allowed');

// Class product which wraps methods related to product and needed by the both admin and customer modules
class Product
{

    public function __construct()
    {

    }

// ------------------------------------------------------------------------

    public function getProductData($var = null)
    {
        $CI = &get_instance();

        if ($var == null) {
            $q = $CI->ProductModel->selectProduct();
            $data['p_count'] = $q->num_rows();
            $data['p_data'] = $q->result_array();

        } else {
            $q = $CI->ProductModel->selectProduct($var);
            $data['p_data'] = $q->result_array()[0];
            $data['c_name'] = $CI->ProductModel->selectCategory($data['p_data']['c_id'])->result_array()[0]['name'];

        }
        return $data;
    }

// ------------------------------------------------------------------------
}

/* End of file Product.php */
