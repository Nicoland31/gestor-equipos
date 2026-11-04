<?php

class RolModel
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function listar()
    {
        $this->db->query("SELECT id, nombre, descripcion FROM rol ORDER BY id");
        return $this->db->registers();
    }
}