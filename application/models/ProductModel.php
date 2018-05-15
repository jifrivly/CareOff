<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ProductModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

// ------------------------------ Fuctions to manage products ------------------------------------------

    public function uploadProduct($data)
    {
        return $this->db->insert('products', $data);
    }

// ------------------------------------------------------------------------

    public function createPID()
    {
        $q = $this->selectProduct();

        $number = $q->num_rows();
        $number += 100000;

        do {
            $number++;
            $p_id = 'product' . $number;
        } while ($this->selectProduct($p_id)->num_rows() > 0);

        return $p_id;
    }

// ------------------------------------------------------------------------

    public function selectProduct($var = null)
    {
        if ($var == null) {
            return $this->db->query('SELECT * FROM products');
        } else {
            return $this->db->query("SELECT * FROM products WHERE p_id = '$var'");
        }

    }

// ------------------------------------------------------------------------

    public function deleteProduct($p_id)
    {
        $this->db->where('p_id', $p_id);
        $this->db->delete('products');
    }

// ------------------------------------------------------------------------

    public function updateProduct($data, $p_id)
    {
        $this->db->where('p_id', $p_id);
        $this->db->update('products', $data);
    }

// ------------------------------ Functions to manage purchasing ------------------------------------------

    public function purchaseProduct($p_id)
    {
        $data = array(
            'purchase_id' => $this->createPurchaseID(),
            'p_id' => $p_id,
            'email' => $_SESSION['email'],
            // 'date' => '', assigning default value from phpmyadmin currentdatetime
        );

        $this->db->insert('purchases', $data);
    }

// ------------------------------------------------------------------------

    private function createPurchaseID()
    {
        $q = $this->selectPurchase();

        $number = $q->num_rows();
        $number += 1000000;

        do {
            $number++;
            $purchase_id = 'purchase' . $number;
        } while ($this->selectPurchase($purchase_id)->num_rows() > 0);

        return $purchase_id;
    }

// ------------------------------------------------------------------------

    public function selectPurchase($purchase_id = null, $email = null, $p_id = null)
    {
        if ($purchase_id == null && $email == null && $p_id == null) {
            return $this->db->query('SELECT * FROM purchases');
        } elseif ($purchase_id != null && $email == null && $p_id == null) {
            return $this->db->query("SELECT * FROM purchases WHERE purchase_id = '$purchase_id'");
        } elseif ($purchase_id == null && $email != null && $p_id == null) {
            return $this->db->query("SELECT * FROM purchases WHERE email = '$email'");
        } elseif ($purchase_id == null && $email == null && $p_id != null) {
            return $this->db->query("SELECT * FROM purchases WHERE p_id = '$p_id'");
        }

    }

// ------------------------------------------------------------------------

    public function deletePurchase($var)
    {
        $this->db->where('purchase_id', $var);
        $this->db->delete('purchases');
    }

// ------------------------------- Fuctions to manage categories -----------------------------------------

    public function createCategory($var)
    {
        $data = array(
            'c_id' => $this->createCID(),
            'name' => $var,
        );
        return $this->db->insert('categories', $data);
    }

// ------------------------------------------------------------------------

    private function createCID()
    {
        $q = $this->selectCategory();

        $number = $q->num_rows();
        $number += 10000;

        do {
            $number++;
            $c_id = 'category' . $number;
        } while ($this->selectCategory($c_id)->num_rows() > 0);

        return $c_id;

    }

// ------------------------------------------------------------------------

    public function selectCategory($var = null)
    {
        if ($var == null) {
            return $this->db->query('SELECT * FROM categories');
        } else {
            return $this->db->query("SELECT * FROM categories WHERE c_id = '$var'");
        }

    }

}

// ------------------------------------------------------------------------

/* End of file ProductModel.php */
