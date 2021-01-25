<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pangan_model extends MY_Model
{

    public $perPage = 20;

    public function getAll($page = null)
    {
        $offset = $this->calculateRealOffset($page);

        $sql = "SELECT *
				FROM pangan
				ORDER BY id DESC
				LIMIT $this->perPage
				OFFSET $offset";

        return $this->db->query($sql)->result();
    }

    public function total()
    {
        $sql = "SELECT COUNT(id) as total FROM pangan";
        return $this->db->query($sql)->row()->total;
    }

    public function sayuran()
    {
        $sql = "SELECT COUNT(id) as total FROM pangan WHERE jenis_bahan = 'Sayuran' ";
        return $this->db->query($sql)->row()->total;
    }

    public function lauk_pauk()
    {
        $sql = "SELECT COUNT(id) as total FROM pangan WHERE jenis_bahan = 'Lauk Pauk' ";
        return $this->db->query($sql)->row()->total;
    }

    public function bumbu()
    {
        $sql = "SELECT COUNT(id) as total FROM pangan WHERE jenis_bahan = 'Bumbu' ";
        return $this->db->query($sql)->row()->total;
    }

    public function buah()
    {
        $sql = "SELECT COUNT(id) as total FROM pangan WHERE jenis_bahan = 'Buah' ";
        return $this->db->query($sql)->row()->total;
    }

    public function sembako()
    {
        $sql = "SELECT COUNT(id) as total FROM pangan WHERE jenis_bahan = 'Sembako' ";
        return $this->db->query($sql)->row()->total;
    }


    public function getDefaultValues()
    {
        return
            [
                "id" => "",
                "jenis_bahan" => "",
                "nama" => "",
                "image" => "",
                "harga" => "",
                "nama" => "",
                "satuan" => ""
            ];
    }

    public function getValidationRules()
    {

        $validationRules = [
            [
                "field" => "id",
                "label" => "Id",
                "rules" => "trim"
            ],
            [
                "field" => "jenis_bahan",
                "label" => "Jenis Bahan",
                "rules" => "trim|required"
            ],
            [
                "field" => "nama",
                "label" => "Nama",
                "rules" => "trim|required"
            ],
            [
                "field" => "harga",
                "label" => "Harga",
                "rules" => "trim|required"
            ],
            [
                "field" => "nama",
                "label" => "Nama",
                "rules" => "trim|required"
            ],
            [
                "field" => "satuan",
                "label" => "Satuan",
                "rules" => "trim|required"
            ]
        ];

        return $validationRules;
    }

    public function uploadimage($fieldname, $filename)
    {
        $config = [
            'upload_path'      => './uploads/',
            'file_name'        => $filename,
            'allowed_types'    => 'jpg',    // Hanya *.jpg saja
            'max_size'         => 1024,     // 1MB
            'max_width'        => 0,
            'max_height'       => 0,
            'overwrite'        => true,
            'file_ext_tolower' => true,
        ];

        $this->load->library('upload', $config);
        if ($this->upload->do_upload($fieldname)) {
            // Upload OK, return uploaded file info.
            return $this->upload->data();
        } else {
            // Add error to $_error_array

            return false;
        }
    }

    public function deleteCover($imgFile)
    {

        if (file_exists("./uploads/$imgFile")) {
            unlink("./uploads/$imgFile");
        }
    }

    public function coverResize($fieldname, $source_path, $width, $height)
    {
        $config = [
            'image_library'  => 'gd2',
            'source_image'   => $source_path,
            'maintain_ratio' => true,
            'width'          => $width,
            'height'         => $height,
        ];

        $this->load->library('image_lib', $config);

        if ($this->image_lib->resize()) {
            return true;
        } else {

            return false;
        }
    }
}
