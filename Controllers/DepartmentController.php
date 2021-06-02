<?php

class DepartmentController extends BaseController
{

    public function index()
    {
        $pageTitle = 'Xem tất cả khoa';

        $department = [
            ['id'=> 1,
            'name' => 'CNTT'],
            ['id'=> 2,
            'name' => 'ATTT']
        ];

        return $this->view("admin.xem-tat-ca-khoa", 
                            ['department' => $department,
                            'pageTitle' => $pageTitle
                            ]);
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
