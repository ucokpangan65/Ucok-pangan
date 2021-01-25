<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembelian_model extends MY_Model
{

    public $perPage = 9;

    public function getAll($page = null)
    {
        $offset = $this->calculateRealOffset($page);

        $sql = "SELECT *
				FROM pembelian
				ORDER BY id DESC
				LIMIT $this->perPage
				OFFSET $offset";

        return $this->db->query($sql)->result();
    }

    public function total()
    {
        $sql = "SELECT COUNT(id) as total FROM pembelian";
        return $this->db->query($sql)->row()->total;
    }

    public function getDefaultValues()
    {
        return
            [
                "id" => "",
                "nama_pembeli" => "",
                "nama_bahan" => "",
                "jumlah_bahan" => "",
                "total_harga" => "",
                "is_blokir" => 'n'
            ];
    }

    public function getValidationRules()
    {

        $validationRules = [
            [
                "field" => "nama_pembeli",
                "label" => "Nama_Pembeli",
                "rules" => "trim|required"
            ],
            [
                "field" => "nama_bahan",
                "label" => "Nama_Bahan",
                "rules" => "trim|required"
            ],
            [
                "field" => "jumlah_bahan",
                "label" => "Jumlah_Bahan",
                "rules" => "trim|required"
            ],
            [
                "field" => "total_harga",
                "label" => "Total_Harga",
                "rules" => "trim|required"
            ]
        ];

        return $validationRules;
    }
}
