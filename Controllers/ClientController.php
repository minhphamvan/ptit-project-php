<?php

class ClientController extends BaseController
{

    public function index()
    {
        return $this->view("client.index");
    }

    public function login()
    {
        return $this->view("client.login");
    }

    public function register()
    {
        return $this->view("client.register");
    }

    public function forgot_password()
    {
        return $this->view("client.forgot-password");
    }
}