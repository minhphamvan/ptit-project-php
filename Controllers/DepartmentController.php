<?php

class DepartmentController extends BaseController
{

    public function index()
    {
        return $this->view("admin.xem-tat-ca-khoa");
    }

    public function show()
    {
        return $this->view("admin.xem-tat-ca-khoa");
    }

    public function add()
    {
        return $this->view("admin.them-khoa");
    }

    public function edit()
    {
        return $this->view("admin.sua-khoa");
    }

    public function details()
    {
        return $this->view("admin.sua-khoa");
    }
}
