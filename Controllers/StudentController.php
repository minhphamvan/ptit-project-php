<?php

class StudentController extends BaseController
{

    public function index()
    {
        return $this->view("admin.xem-tat-ca-sinh-vien");
    }

    public function show()
    {
        return $this->view("admin.xem-tat-ca-sinh-vien");
    }

    public function add()
    {
        return $this->view("admin.them-sinh-vien");
    }

    public function edit()
    {
        return $this->view("admin.sua-sinh-vien");
    }

    public function details()
    {
        return $this->view("admin.sua-sinh-vien");
    }

}
