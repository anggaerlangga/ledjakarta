<?php defined('BASEPATH') OR exit('No direct script access allowed');

class reserve_model extends CI_Model 
{
    // nama table
    private $_table = "reservation";

    // nama kolom di tabel
    public $reserve_id;
    public $schedule_date;
    public $name;
    public $mobile_phone;
    public $ukuran;
    public $lokasi;

    public function rules() {
        return [

            ['field' => 'schedule_date',
            'label' => 'Schedule Date',
            'rules' => 'required'],

            ['field' => 'name',
            'label' => 'name'],

            ['field' => 'mobile_phone',
            'label' => 'Mobile Phone'],

            ['field' => 'ukuran',
            'label' => 'Ukuran'],

            ['field' => 'lokasi',
            'label' => 'Lokasi']
        ];
    }

    public function getAll() {
        return $this->db->get($this->_table)->result();
        // SELECT * FROM barang
        // method ini akan mengembalikan sebuah array
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["reserve_id" => $id])->row();
        // SELECT * FROM barang WHERE id_barang=$id
        // method ini akan mengembalikan sebuah objek
    }
  
    // public function save() 
    // {
    //     $post = $this->input->post(); // ambil data dari form
    //     $this->reserve_id = uniqid(); // membuat id unik
    //     $this->schedule_date = $post["schedule_date"]; 
    //     $this->time = $post["time"];
    //     $this->name = $post["name"];
    //     $this->mobile_phone = $post["mobile_phone"];
    //     $this->treatment = $post["treatment"];
    //     $this->therapist = $post["therapist"];
    //     return $this->db->insert($this->_table, $this); // simpan ke database
    // }

    function save() 
    {
        $data = array(
            'reserve_id' => uniqid(),
            'schedule_date' => $this->input->post('schedule_date'),
            'produk' => $this->input->post('produk'),
            'name' => $this->input->post('name'),
            'mobile_phone' => $this->input->post('mobile_phone'),
            'ukuran' => $this->input->post('ukuran'),
            'lokasi' => $this->input->post('lokasi'),
        );
        $result=$this->db->insert('reservation',$data);
        return $result;
    }

    public function update()
    {
        $post = $this->input->post();
        $this->reserve_id = $post["reserve_id"];
        $this->schedule_date = $post["schedule_date"]; 
        $this->produk = $post["produk"]; 
        $this->name = $post["name"];
        $this->mobile_phone = $post["mobile_phone"];
        $this->ukuran = $post["ukuran"];
        $this->lokasi = $post["lokasi"];
        
        return $this->db->update($this->_table, $this, array('reserve_id' => $post['reserve_id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("reserve_id" => $id));
    }
}