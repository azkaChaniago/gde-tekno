<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model
{
    private $table = 'peserta';
    private $nama;
    private $email;

    // public function rules()
    // {
    //     return [
    //         ['field' => 'id_outlet', 'label' => 'ID Outlet','rules' => 'required'],
    //         ['field' => 'nama_outlet', 'label' => 'Nama Outlet','rules' => 'required'],
    //         ['field' => 'kabupaten', 'label' => 'Kabupaten','rules' => 'required'],
    //         ['field' => 'kecamatan', 'label' => 'Kecamatan','rules' => 'required'],
    //         ['field' => 'alamat', 'label' => 'Alamat','rules' => 'required'],
    //         ['field' => 'nama_pemilik', 'label' => 'Nama Pemilik','rules' => 'required'],
    //         ['field' => 'no_hp', 'label' => 'Nomor HP','rules' => 'required'],
    //         ['field' => 'hari_kunjungan', 'label' => 'Hari Kunjungan','rules' => 'required'],
    //         ['field' => 'nomor_rs', 'label' => 'Nomor RS','rules' => 'required'],
    //         ['field' => 'kategori_outlet', 'label' => 'Kategori Outlet','rules' => 'required'],
    //         ['field' => 'kode_tdc', 'label' => 'Nama TDC','rules' => 'required'],
    //         ['field' => 'kode_marketing', 'label' => 'Nama Marketing','rules' => 'required'],
    //     ];
    // }

    public function save()
    {
        $post = $this->input->post();
        
        $data = array(
            'nama' => $this->nama = $post['nama'],
            'email' => $this->email = $post['email']
        );
        
        $this->db->set($data);
        $this->db->insert($this->table, $this);
    }

}

