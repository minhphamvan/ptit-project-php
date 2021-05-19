<?php

class MajorController extends BaseController
{

    public function index()
    {
        return $this->view("admin.xem-tat-ca-nganh");
    }

    public function show()
    {
        return $this->view("admin.xem-tat-ca-nganh");
    }

    public function add()
    {
        return $this->view("admin.them-nganh");
    }

    public function edit()
    {
        return $this->view("admin.sua-nganh");
    }

    public function details()
    {
        return $this->view("admin.sua-nganh");
    }

}
