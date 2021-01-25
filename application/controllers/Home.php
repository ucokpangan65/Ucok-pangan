<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends Operator_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model("Pangan_model", "pangan");
    }

    public function index($page = null)
    {
        $data_sayuran = (int) $this->pangan->sayuran();
        $data_laukPauk = (int) $this->pangan->lauk_pauk();
        $data_bumbu = (int) $this->pangan->bumbu();
        $data_buah = (int) $this->pangan->buah();
        $data_sembako = (int) $this->pangan->sembako();

        $main_view = "Home/Index";
        $this->load->view("Template", compact("main_view", "data_sayuran", "data_laukPauk", "data_bumbu", "data_buah", "data_sembako"));
    }
}
