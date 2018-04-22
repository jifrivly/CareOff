<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function getCustomers($data) {
        $email = $data['email'];
        $password = md5($data['password']);
        $result = $this->db->get_where('customers', array('email' => $email,'password' => $password));
        return $result;
    }

}
