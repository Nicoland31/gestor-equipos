<?php

class RolController extends BaseController
{
    private $rolModel;

    public function __construct()
    {
        $this->rolModel = $this->model('RolModel');
    }

    public function index()
    {
        $roles = $this->rolModel->listar();

        $this->jsonResponse([
            'ok' => true,
            'roles' => $roles
        ]);
    }
}