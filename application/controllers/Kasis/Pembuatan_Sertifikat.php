<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembuatan_Sertifikat extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if (!$this->session->userdata('kasi')) {
            redirect(site_url('login/kasi'));
        }
    }
    public function index()
    {
        $data['title'] = "Pembuatan Sertifikat";
        $data['header'] = $this->load->view('kasi/template/header',null, TRUE);
        $data['sidebar'] = $this->load->view('kasi/template/sidebar',["page"=>"pembuatan_sertifikat"], TRUE);
        $data['main'] = null;
        $this->load->view('master',$data);
    }
}
