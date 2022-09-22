<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contact';
    protected $primaryKey = 'id_contact';
    protected $allowedFields = ['id_customer', 'keterangan', 'nomor_telepon'];

    public function allContact()
    {
        $builder = $this->db->table('contact');
        // $builder->select('customer.*, contact.*');
        // $builder->join('contact', 'customer.id_customer = contact.id_contact', 'LEFT');
        // $builder->where('permintaan_barang.id_user', $id_user[0]);
        $builder->orderBy('contact.id_contact', 'ASC');
        $query = $builder->get();
        return $query->getResultArray();
    }

    // detail
    public function detail($id_permintaan)
    {
        $builder = $this->db->table('permintaan_barang');
        $builder->select('permintaan_barang.*, users.nama');
        // $builder->join('kategori', 'kategori.id_kategori = berita.id_kategori', 'LEFT');
        $builder->join('users', 'users.id_user = permintaan_barang.id_user', 'LEFT');
        $builder->where('permintaan_barang.id_permintaan', $id_permintaan);
        $builder->orderBy('permintaan_barang.id_permintaan', 'DESC');
        $query = $builder->get();
        return $query->getRowArray();
    }

    // tambah
    public function create($data)
    {
        $builder = $this->db->table('contact');
        $builder->insert($data);
    }

    // edit
    public function edit($data)
    {
        $builder = $this->db->table('contact');
        $builder->where('id_contact', $data['id_contact']);
        $builder->update($data);
    }
}
