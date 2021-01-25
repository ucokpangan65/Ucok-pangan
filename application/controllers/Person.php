<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Person extends Admin_Controller
{


    public function __construct()
    {
        parent::__construct();
    }

    public function index($page = null)
    {
        $persons = $this->person->getAll($page);
        $jumlah = $this->person->total();
        $pagination = $this->person->makePagination(site_url("person"), 2, $jumlah);
        $main_view = "Person/Index";
        $this->load->view("Template", compact("main_view", "jumlah", "persons", "pagination"));
    }

    public function delete()
    {
        $id = $this->input->post("id", true);
        $person = $this->person->get($id);
        if (!$person) {
            $this->session->set_flashdata("error", "Data Gagal Di Hapus");
            redirect("Person");
        }

        if ($this->person->where("id", $id)->delete()) {
            $this->session->set_flashdata("success", "Data Berhasil Di hapus");
        } else {
            $this->session->set_flashdata("error", "Data Gagal Di Hapus");
        }

        redirect('Person');
    }
}
