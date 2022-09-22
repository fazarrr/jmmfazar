<?php

namespace App\Controllers;

use App\Models\ContactModels;
use CodeIgniter\Controller;
use App\Models\CustomerModel;
use App\Models\ContactModel;

class Home extends BaseController
{
    // index
    public function index()
    {
        $m_customer       = new CustomerModel();
        $m_contact           = new ContactModel();
        $customer         = $m_customer->allCustomer();
        $id_customer      = $this->request->getPost('id_customer');

        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'keterangan'     => 'required|min_length[3]',
            ]
        )) {
            $contact = [
                'id_customer'    => $id_customer,
                'keterangan'    => $this->request->getPost('keterangan'),
                'nomor_telepon'    => $this->request->getPost('nomor_telepon'),
            ];
            $m_contact->create($contact);
            return redirect()->to(base_url())->with('sukses', 'Data Berhasil di Simpan');
        }
        $data = [
            'title'             => 'All Data Customer',
            'customer'        => $customer,
            'content'           => 'dashboard/index'
        ];
        // dd($data);
        echo view('layout/wrapper', $data);
    }

    // index
    public function allDetail()
    {
        $id_customer      = $this->request->getPost('id_customer');
        $m_customer       = new CustomerModel();
        $customer         = $m_customer->allCustomerDetail();

        $data = [
            'title'             => 'All Detail Customer',
            'id_customer'    => $id_customer,
            'customer'        => $customer,
            'content'           => 'dashboard/index'
        ];
        // dd($data);
        echo view('layout/wrapper', $data);
    }

    public function create()
    {
        $m_customer       = new CustomerModel();
        $id_customer      = $this->request->getPost('id_customer');
        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'nama_customer'     => 'required',
                'harga_satu'        => 'required'
            ]
        )) {

            $data = array(
                'nama_customer'    => $this->request->getVar('nama_customer'),
                'alamat'        => $this->request->getVar('alamat'),
                'harga_satu'    => $this->request->getVar('harga_satu'),
                'harga_dua'    => $this->request->getVar('harga_dua'),
                'total'    => $this->request->getVar('total'),
            );
            $m_customer->create($data);
            return redirect()->to(base_url())->with('sukses', 'Data Berhasil di Simpan');
        } else {
            $data = [
                'title'             => 'All Data Customer',
                'content'           => 'dashboard/create'
            ];
            echo view('layout/wrapper', $data);
        }
    }

    // edit
    public function edit($id_customer)
    {
        $id_customer      = $this->request->getPost('id_customer');
        $m_customer         = new CustomerModel();
        $customer         = $m_customer->detail($id_customer);

        // Start validasi
        if ($this->request->getMethod() === 'post' && $this->validate(
            [
                'nama_barang'     => 'required',
                'gambar'         => [
                    'mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]',
                    'max_size[gambar,4096]',
                ],
            ]
        )) {
            $data = array(
                'nama_customer'    => $this->request->getVar('nama_customer'),
                'alamat'        => $this->request->getVar('alamat'),
                'harga_satu'    => $this->request->getVar('harga_satu'),
                'harga_dua'    => $this->request->getVar('harga_dua'),
                'total'    => $this->request->getVar('total'),
            );
            $m_customer->edit($data);
            return redirect()->to(base_url())->with('sukses', 'Data Berhasil di Edit');
        }
        $data = [
            'title'            => 'Edit Data Customer',
            'customer'        => $customer,
            'content'        => 'home/edit'
        ];
        dd($data);
        // echo view('layout/wrapper', $data);
    }

    // Delete
    public function delete($id_customer)
    {
        $id_customer      = $this->request->getPost('id_customer');
        $m_customer = new CustomerModel();
        $data = ['id_customer'    => $id_customer];

        // masuk database
        // $this->session->setFlashdata('sukses', 'Data telah dihapus');
        return redirect()->to(base_url());
    }
}
