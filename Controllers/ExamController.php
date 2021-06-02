<?php

class ExamController extends BaseController
{

    public function index()
    {
        return $this->view("admin.xem-tat-ca-giang-vien");
    }

    public function show()
    {
        return $this->view("admin.xem-tat-ca-giang-vien");
    }

    public function add()
    {
        return $this->view("admin.them-giang-vien");
    }

    public function edit()
    {
        return $this->view("admin.sua-giang-vien");
    }

    public function details()
    {
        return $this->view("admin.sua-giang-vien");
    }

}
