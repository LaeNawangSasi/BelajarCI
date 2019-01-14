<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_model extends CI_Model
{
    private $_table = "supplier";

    public $Supplier_id;
    public $Supplier_name;
    public $Supplier_addres;

    public function rules()
    {
        return [
            ['field' => 'supplier_name',
            'label' => 'Supplier_name',
            'rules' => 'required'],

            ['field' => 'supplier_address',
            'label' => 'Supplier_address',
            'rules' => 'numeric'],

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}