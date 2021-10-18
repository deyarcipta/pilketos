<?php
class Web extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->helper(array('form', 'url'));
    $this->load->library(array('session'));
    $this->load->model(array('Web_Model'));
  }
  public function index()
  {
    $data['datacalon']  = $this->Web_Model->datamodel();
    $data['vote']    = $this->Web_Model->hasilvote();
    $data['jmlpemilih']  = $this->Web_Model->countpemilih();
    $data['jmlvote']  = $this->Web_Model->countvote();
    $this->load->view('web/head');
    $this->load->view('web/index', $data);
    $this->load->view('web/footer');
  }

  public function hasilvote()
  {
    $data['vote']    = $this->Web_Model->hasilvote();
    $data['jmlpemilih']  = $this->Web_Model->countpemilih();
    $data['jmlvote']  = $this->Web_Model->countvote();
    $this->load->view('web/head');
    $this->load->view('web/index', $data);
    $this->load->view('web/footer');
  }
}
