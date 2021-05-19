<?php

class SubjectController extends BaseController
{

    public function index()
    {
        return $this->view("admin.xem-tat-ca-mon-hoc");
    }

    public function show()
    {
        return $this->view("admin.xem-tat-ca-mon-hoc");
    }

    public function add()
    {
        return $this->view("admin.them-mon-hoc");
    }

    public function edit()
    {
        return $this->view("admin.sua-mon-hoc");
    }

    public function details()
    {
        return $this->view("admin.sua-mon-hoc");
    }

}
