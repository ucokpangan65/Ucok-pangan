<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Person_model extends MY_Model
{

    public $perPage = 9;

    public function getAll($page = null)
    {
        $offset = $this->calculateRealOffset($page);

        $sql = "SELECT *
				FROM person
				ORDER BY id DESC
				LIMIT $this->perPage
				OFFSET $offset";

        return $this->db->query($sql)->result();
    }

    public function total()
    {
        $sql = "SELECT COUNT(id) as total FROM person";
        return $this->db->query($sql)->row()->total;
    }

    public function getDefaultValues()
    {
        return
            [
                "id" => "",
                "nama" => "",
                "email" => "",
                "password" => "",
                "satuan" => "",
                "alamat" => "",
                "is_blokir" => 'n'
            ];
    }

    public function getValidationRules()
    {

        $validationRules = [
            [
                "field" => "nama",
                "label" => "Nama",
                "rules" => "trim|required"
            ],
            [
                "field" => "email",
                "label" => "Email",
                "rules" => "trim|required"
            ],
            [
                "field" => "password",
                "label" => "Password",
                "rules" => "trim|required"
            ],
            [
                "field" => "satuan",
                "label" => "Satuan",
                "rules" => "trim|required"
            ],
            [
                "field" => "alamat",
                "label" => "Alamat",
                "rules" => "trim|required"
            ]
        ];

        return $validationRules;
    }
}
