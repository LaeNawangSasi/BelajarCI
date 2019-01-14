<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Karyawan_model extends CI_Model
{
    private $_table = "karyawan";

    public $Karyawan_id;
    public $Karyawan_nama;
    public $Karyawan_alamat;
    public $Karyawan_telepon;

    public function rules()
    {
        return [
            ['field' => 'karyawan_nama',
            'label' => 'Karyawan_nama',
            'rules' => 'required'],

            ['field' => 'karyawan_alamat',
            'label' => 'Karyawan_alamat',
            'rules' => 'required'],

            ['field' => 'karyawan_telepon',
            'label' => 'Karyawan_telepon',
            'rules' => 'numeric'],
        ];
    }
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
}