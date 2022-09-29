<?php
defined("BASEPATH") OR exit ('No direct script access allowed');
class web extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $this->load->view('v_index');
    }
    public function about()
    {
        $this->load->view('v_about');
    }

}