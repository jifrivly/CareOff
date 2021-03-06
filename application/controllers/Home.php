<?php
defined('BASEPATH') or exit('No direct script access allowed');

include 'Product.php';
class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        getCategoryList();
        $this->load->model('ProductModel');

    }

// ------------------------------------------------------------------------

    public function index()
    {
        $productObject = new Product;

        $this->load->view('navbar');

        $data = $productObject->getProductData();
        $this->load->view('home_view', $data);
    }

// ------------------------------------------------------------------------

    public function checkLogin()
    {
        $this->load->library('session');
        if (isset($_SESSION['logged_in'])) {
            if ($_SESSION['logged_in'] === true && $_SESSION['roll'] == 'admin') {
                return $_SESSION['roll'];
            } elseif ($_SESSION['logged_in'] === true && $_SESSION['roll'] == 'customer') {
                return $_SESSION['roll'];
            } else {
                return false;
            }
        } else {
            return false;
        }

        // simple form, only four lines of code
        // if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        //     return $_SESSION['roll'];
        // } else {
        //     return false;
        // }

    }

// ------------------------------------------------------------------------

    public function viewDetails($var)
    {
        $productObject = new Product;

        $this->load->view('navbar');

        $data = $productObject->getProductData($var);
        $this->load->view('customer/product_detailed_view', $data);
    }

// ------------------------------------------------------------------------

    public function purchase($p_id)
    {
        if ($this->checkLogin() == 'customer') {
            $this->ProductModel->purchaseProduct($p_id);

            // $this->viewCart();
            redirect('Home/ViewCart', 'refresh');

        } else {
            echo "please login to purchase";
        }

    }

// ------------------------------------------------------------------------

    public function viewCart()
    {
        if ($this->checkLogin() == 'customer') {

            $this->load->view('navbar');

            $purchases = $this->ProductModel->selectPurchase(null, $_SESSION['email'])->result_array();
            if ($purchases) {
                $i = 0;
                foreach ($purchases as $key) {
                    $item[$i] = $this->ProductModel->selectProduct($key['p_id'])->result_array()[0];
                    $i++;
                }

                $data = array(
                    'purchases' => $purchases,
                    'item' => $item,
                );
            } else {
                $data = array('purchases' => null);
            }

            $this->load->view('customer/shoping_cart_view', $data);

        } else {
            echo "please login to view your cart";
        }

    }

// ------------------------------------------------------------------------

    public function deletePurchase($var)
    {
        $this->ProductModel->deletePurchase($var);

        redirect('Home/ViewCart', 'refresh');
    }

// ------------------------------------------------------------------------

    public function confirmOrder()
    {

        if ($this->checkLogin() == 'customer') {

            if (isset($_POST['order'])) {

                if ($this->ProductModel->addOrder($_POST)) {
                    echo "Successfully ordered";
                } else {
                    echo "Sorry your order not confirmed go back and try again";
                }
            } else {
                $this->load->view('customer/confirm_order_view');
            }

        } else {
            echo "Please login as customer";
        }

    }

}
