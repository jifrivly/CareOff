<?php
defined('BASEPATH') or exit('No direct script access allowed');

include 'Product.php';

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('ProductModel');
        if (isset($_SESSION['roll'])) {
            if ($_SESSION['roll'] != "admin") {
                redirect('', 'refresh');
            }
        } else {
            redirect('', 'refresh');
        }

        getCategoryList();
    }

// ------------------------------------------------------------------------

    public function index()
    {
        $productObject = new Product;

        $this->load->view('navbar');
        $this->load->view('admin/navbar');

        // testArray($productObject->getProductData());

        $data = $productObject->getProductData();
        $this->load->view('admin/dashboard', $data);
    }

// ------------------------------- Functions for product -----------------------------------------

    public function productInsert()
    {
        if (isset($_POST['submit'])) {
            $this->productUpload();
        } else {
            $this->load->view('admin/product_insert');
        }
    }

// ------------------------------------------------------------------------

    private function productUpload()
    {
        testArray($_POST);

        $p_id = $this->ProductModel->createPID();

        $data['p_id'] = $p_id;
        $data['c_id'] = $_POST['category'];
        $data['title'] = $_POST['title'];
        $data['description'] = $_POST['description'];
        $data['price'] = $_POST['price'];

        if ($upload_data = $this->doUpload('mainpic')) {
            $data['mainpic'] = $upload_data['file_name'];
        } else {
            return false;
        }

        if ($upload_data = $this->doUpload('thumbnailpic')) {
            $data['thumbnailpic'] = $upload_data['file_name'];
        } else {
            return false;
        }

        if ($upload_data = $this->doUpload('side1pic')) {
            $data['side1pic'] = $upload_data['file_name'];
        } else {
            return false;
        }

        if ($upload_data = $this->doUpload('side2pic')) {
            $data['side2pic'] = $upload_data['file_name'];
        } else {
            return false;
        }

        testArray($data);

        if ($this->ProductModel->uploadProduct($data)) {
            echo "Uploaded Successfully !";
        } else {
            echo "Error on upload !";
        }
    }

// ------------------------------------------------------------------------

    private function doUpload($file)
    {
        $this->load->library('upload');
        $p_id = $this->ProductModel->createPID();

        $config = array(
            'upload_path' => 'uploads/',
            'file_name' => $p_id . $file,
            'allowed_types' => 'gif|jpg|png',
            'max_size' => 5000,
            'max_width' => 2024,
            'max_height' => 2768,
        );

        $this->upload->initialize($config);

        if (!$this->upload->do_upload($file)) {
            $error = array('error' => $this->upload->display_errors());
            echo $error['error'];

            return false;
        } else {
            $upload_data = $this->upload->data();

            // echo "<h3>Your file was successfully uploaded!</h3><ul>";
            // foreach ($upload_data as $item => $value) {
            //     echo "<li> $item : $value </li>";
            // }
            // echo "</ul>";

            return $upload_data;
        }

    }

// ------------------------------------------------------------------------

    public function deleteProduct($var)
    {
        $this->ProductModel->deleteProduct($var);

        redirect('Dashboard', 'refresh');
    }

// ------------------------------------------------------------------------

    public function updateProduct($p_id)
    {
        $productObject = new Product;

        if (isset($_POST['update'])) {
            // testArray($_POST);
            $data['c_id'] = $_POST['category'];
            $data['title'] = $_POST['title'];
            if ($_POST['description'] != null) {
                $data['description'] = $_POST['description'];
            }
            $data['price'] = $_POST['price'];

            $this->ProductModel->updateProduct($data, $p_id);
            redirect('Dashboard', 'refresh');
        } else {
            $data = $productObject->getProductData($p_id);
            $this->load->view('admin/product_update', $data);
        }

    }

// ------------------------------------------------------------------------

    // public function deletePicture($pic)
    // {
    //     $this->load->helper('file');
    //     if (delete_files('D://IMAGES/delete')) {
    //         echo "files deleted";
    //     } else {
    //         echo "files not deleted";
    //     }

    //     $file = '../careoff/uploads/' . $pic;

    //     if (!unlink($file)) {
    //         echo "Error deleting in $file";
    //     } else {
    //         echo "$file Deleted ";
    //     }

    // }

// --------------------------------- Functions for category ---------------------------------------

    public function createCategory()
    {
        if ($_POST['name'] == '' | $_POST['name'] == ' ') {
            echo 'please enter the name!';

        } else {
            $category = strtoupper($_POST['name']);
            $categories = $this->ProductModel->selectCategory();
            if ($categories->num_rows() > 0) {
                $data = $categories->result_array();
                $a = false;
                foreach ($data as $key) {
                    if ($key['name'] == $category) {
                        $a = true;
                        break;
                    }
                }

                if (!$a) {
                    $this->ProductModel->createCategory($category);
                    echo "Successfully Added";
                    redirect('Dashboard', 'refresh');
                } else {
                    echo "name already exist";
                }
            } else {
                $this->ProductModel->createCategory($category);
                echo "Successfully Added";
                redirect('Dashboard', 'refresh');
            }
        }

    }
// ------------------------------------------------------------------------

// ------------------------------------------------------------------------

    // testing purpous (to delete)
    public function viewProduct()
    {
        $this->load->view('admin/product_view');
    }

}
