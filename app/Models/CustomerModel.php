<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'id_customer';
    protected $allowedFields = ['id_customer', 'nama_customer', 'alamat', 'nomor_telepon', 'harga_satu', 'harga_dua', 'total'];

    public function allCustomer()
    {
        $builder = $this->db->table('customer');
        $builder->select('customer.id_customer,customer.nama_customer,customer.alamat,customer.harga_satu, customer.harga_dua,customer.total, contact.*');
        // $builder->select('customer.*, contact.*');
        $builder->join('contact', 'customer.id_customer = contact.id_contact', 'LEFT');
        $builder->orderBy('customer.nama_customer', 'ASC');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function allCustomerDetail()
    {
        $builder = $this->db->table('customer');
        $builder->select('customer.id_customer,customer.nama_customer,customer.alamat,customer.harga_satu, customer.harga_dua,customer.total, contact.*');
        $builder->join('contact', 'customer.id_customer = contact.id_contact', 'LEFT');
        $builder->groupBy('customer.id_customer');
        $builder->orderBy('customer.nama_customer', 'ASC');
        $query = $builder->get();
        return $query->getResultArray();
    }

    // detail
    public function detail($id_customer)
    {
        $builder = $this->db->table('customer');
        $builder->select('customer.*, contact.*');
        // $builder->join('kategori', 'kategori.id_kategori = berita.id_kategori', 'LEFT');
        $builder->join('contact', 'customer.id_customer = contact.id_customer', 'LEFT');
        $builder->where('customer.id_customer', $id_customer);
        $builder->orderBy('customer.id_customer', 'DESC');
        $query = $builder->get();
        return $query->getRowArray();
    }

    // tambah
    public function create($data)
    {
        $builder = $this->db->table('customer');
        $builder->insert($data);
    }

    // edit
    public function edit($data)
    {
        $builder = $this->db->table('customer');
        $builder->where('id_customer', $data['id_customer']);
        $builder->update($data);
    }
}
