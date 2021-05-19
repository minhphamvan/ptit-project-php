<?php

class AdminController extends BaseController
{

    public function index()
    {
        return $this->view("admin.dashboard");
    }
}
