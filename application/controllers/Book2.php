<?php
defined('BASEPATH') or exit('No direct script access allowed');
use App/Models/Karyawan_model;
use CodeIgniter/API/ResponseTrait;
use CodeIgniter/RESTful/ResourceController;

class Book2 extends ResourceController
{
    use ResponseTrait;
    public function show($id = null) {
        $model = new Karyawan_model();
        $data = $model->find($id);
        return $this->respond($data);
    }
}

