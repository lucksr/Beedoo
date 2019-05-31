<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

    /**
     * @var Posts_model
     */
    public $Model;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Posts_model','Model');
    }

    public function index()
    {
        $this->load->view('login', $this->viewData);
    }

    public function login()
    {
        $this->load->library('session');

        $this->load->model('Default_model', 'defaultModel');

        $this->session->set_userdata('team', $this->defaultModel->team);

        $this->load->helper('url');
        redirect('http://'.$_SERVER['HTTP_HOST'].'/home', 'refresh');
    }
}