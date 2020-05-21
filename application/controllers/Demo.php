<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('demo_model');
    }

    public function index()
    {
        $data['rows'] = $this->demo_model->friends();
        $this->load->view('index',$data);
    }

    public function about()
    {
        $this->load->view('about_us');
    }

    public function data()
    {
        $this->load->view('data');
    }

    public function feedback()
    {
        $this->load->view('feedback');
    }

    public function loading()
    {
        $this->load->view('loading');
    }

    public function login()
    {
        $this->load->view('login');
    }

    public function register()
    {
        $this->load->view('register');
    }

    public function test()
    {
        $data['rows'] = $this->demo_model->friends();
        $this->load->view('test',$data);
    }

    public function test1()
    {
        $this->load->view('test1');
    }
}