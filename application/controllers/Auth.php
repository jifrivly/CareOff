<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function signin()
    {
        if (isset($_POST['signin'])) {
            $this->load->model('AuthModel');
            $this->load->library('session');
            $customer = $this->AuthModel->getCustomers($_POST);
            $admin = $this->AuthModel->getAdmins($_POST);
            if ($customer->num_rows() > 0) {
                $sessiondata = array(
                    'roll' => 'customer',
                    'logged_in' => true,
                    'email' => $customer->result_array()[0]['email'],
                    'phone' => $customer->result_array()[0]['phone'],
                    'name' => strtok($customer->result_array()[0]['fullname'], " "),
                    'fullname' => $customer->result_array()[0]['fullname'],
                );
                $this->session->set_userdata($sessiondata);
                redirect($_SERVER['HTTP_REFERER']);
            } else if ($admin->num_rows() > 0) {
                $sessiondata = array(
                    'roll' => 'admin',
                    'logged_in' => true,
                );
                $this->session->set_userdata($sessiondata);
                // $dashboardurl = site_url()."/"."Dashboard";
                // redirect($dashboardurl);
                redirect(Dashboard);
            } else {
                echo 'user name or password incorrect';
            }
        }
    }

    public function logout()
    {
        $this->load->library('session');
        $this->session->sess_destroy();
        redirect('', 'refresh');
    }

    public function register()
    {
        if (isset($_POST['register'])) {
            $this->load->model('AuthModel');
            $this->AuthModel->setCustomer($_POST);
        }
    }

}
