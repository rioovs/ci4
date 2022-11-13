<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Test_view  extends Controller
{
    public function index()
    {
        $data['title'] = 'Tutorial Membuat CRUD Menggunakan CI4';
        $data['msg1'] = 'Selamat Datang Di Website';
        $data['msg2'] = 'Membuat CRUD Sederhana';
        echo view('test_view', $data);
    }
};