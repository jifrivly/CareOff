<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function signin() {
        if (isset($_POST['signin'])) {
            $this->load->model('AuthModel');
            $this->load->library('session');
            $customer = $this->AuthModel->getCustomers($_POST);
            $admin = $this->AuthModel->getAdmins($_POST);
            if ($customer->num_rows() > 0) {
                $sessiondata = array(
                    'roll' => 'customer',
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($sessiondata);
            } else if ($admin->num_rows() > 0) {
                $sessiondata = array(
                    'roll' => 'admin',
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($sessiondata);
            } else {
                echo 'user name or password incorrect';
            }
        }
    }
    
    public function logout() {
        $this->load->library('session');
        $this->session->sess_destroy();
    }

    public function register() {
        if (isset($_POST['register'])) {
            $this->load->model('AuthModel');
            $this->AuthModel->setCustomer($_POST);
        }
    }

}
