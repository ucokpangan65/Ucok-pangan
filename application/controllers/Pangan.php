<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pangan extends Operator_Controller
{


    public function __construct()
    {
        parent::__construct();
    }

    public function index($page = null)
    {
        $pangans = $this->pangan->getAll($page);
        $jumlah = $this->pangan->total();
        $pagination = $this->pangan->makePagination(site_url("Pangan"), 2, $jumlah);
        $main_view = "Pangan/Index";
        $this->load->view("Template", compact("main_view", "jumlah", "pangans", "pagination"));
    }

    public function create()
    {
        if (!$_POST) {
            $input = (object) $this->pangan->getDefaultValues();
        } else {
            $input = (object) $this->input->post(null, true);
        }

        if (!$this->pangan->validate()) {
            $main_view = "Pangan/Form";
            $form_action = "Pangan/create";
            $this->load->view("Template", compact("input", "main_view", "form_action"));
            return;
        }

        // if (!empty($_FILES) && $_FILES['image']['size'] > 0) {
        //     $ext = "";
        //     if ($_FILES['image']['type'] == 'image/png') {
        //         $ext = 'png';
        //     } else {
        //         $ext = 'jpg';
        //     }

        //     $imageFileName = date('YmdHis');
        //     $uploads = $this->pangan->uploadimage('image', $imageFileName);

        //     if ($uploads) {
        //         $input->image = "$imageFileName." . $ext;
        //         $this->pangan->coverResize("image", "./image/$imageFileName." . $ext, 455, 341);
        //     }
        // }


        if ($this->db->insert("pangan", $input)) {
            $this->session->set_flashdata("success", "Data Berhasil Tambahkan");
        } else {
            $this->session->set_flashdata("error", "Data Gagal di Jalankan");
        }

        redirect("Pangan");
    }

    public function edit($id)
    {
        $pangan = $this->db->where("id", $id)->get("pangan")->row();

        if (!$pangan) {
            $this->session->set_flashdata("error", "Data Tidak Di Temukan");
            redirect("Pangan");
        }

        if (!$_POST) {
            $input = (object) $pangan;
        } else {
            $input = (object) $this->input->post(null, true);
        }

        // if (!empty($_FILES) && $_FILES['image']['size'] > 0) {
        //     $ext = "";
        //     if ($_FILES['image']['type'] == 'image/png') {
        //         $ext = 'png';
        //     } else {
        //         $ext = 'jpg';
        //     }

        //     $imageFileName = date('YmdHis');
        //     $upload = $this->pangan->uploadimage('image', $imageFileName);

        //     if ($upload) {
        //         $input->image = "$imageFileName." . $ext;
        //         $this->pangan->coverResize("image", "./image/$imageFileName." . $ext, 455, 341);

        //         if ($pangan->image) {
        //             $this->pangan->deleteimage($pangan->image);
        //         }
        //     }
        // }


        if (!$this->pangan->validate()) {
            $main_view = "Pangan/Form";
            $form_action = "Pangan/edit/$id";
            $this->load->view("Template", compact("main_view", "input", "form_action"));
            return;
        }

        if ($this->pangan->where("id", $id)->update($input)) {
            $this->session->set_flashdata("success", "Data Berhasil Di Update");
        } else {
            $this->session->set_flashdata("error", "Data Gagal di Update");
        }

        redirect("Pangan");
    }

    public function delete()
    {
        $id = $this->input->post("id", true);
        $image = $this->input->post("image", true);

        $pangan = $this->pangan->get($id);
        if (!$pangan) {
            $this->session->set_flashdata("error", "Data Gagal Di Hapus");
            redirect("Pangan");
        }

        if ($this->pangan->where("id", $id)->delete()) {
            $this->pangan->deleteCover($image);
            $this->session->set_flashdata("success", "Data Berhasil Di hapus");
        } else {
            $this->session->set_flashdata("error", "Data Gagal Di Hapus");
        }

        redirect('Pangan');
    }
}
