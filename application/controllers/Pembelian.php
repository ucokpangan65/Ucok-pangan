<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembelian extends Operator_Controller
{


    public function __construct()
    {
        parent::__construct();
    }

    public function index($page = null)
    {
        $pembelians = $this->pembelian->getAll($page);
        $jumlah = $this->pembelian->total();
        $pagination = $this->pembelian->makePagination(site_url("Pembelian"), 2, $jumlah);
        $main_view = "Pembelian/Index";
        $this->load->view("Template", compact("main_view", "jumlah", "pembelians", "pagination"));
    }

    public function delete()
    {
        $id = $this->input->post("id", true);

        $pembelian = $this->pembelian->get($id);
        if (!$pembelian) {
            $this->session->set_flashdata("error", "Data Gagal Di Hapus");
            redirect("Pembelian");
        }

        if ($this->pembelian->where("id", $id)->delete()) {
            $this->session->set_flashdata("success", "Data Berhasil Di hapus");
        } else {
            $this->session->set_flashdata("error", "Data Gagal Di Hapus");
        }
        redirect('Pembelian');
    }
}
