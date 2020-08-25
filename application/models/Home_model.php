<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function Home()
    {
        $query = $this->db->get('article');
        return $query->result_array();
    }

    public function Tweets()
    {
        $query = $this->db->get('tweets');
        return $query->result_array();
    }

    public function Diaries()
    {
        $query = $this->db->get('diaries');
        return $query->result_array();
    }

    public function Learn()
    {
        $query = $this->db->get('article');
        return $query->result_array();
    }

    public function Guestbook()
    {
        $query = $this->db->get('guestbook');
        return $query->result_array();
    }
}