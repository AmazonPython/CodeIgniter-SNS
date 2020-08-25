<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();//加载数据库
    }

    public function friends()
    {
        $query = $this->db->get('friends');
        return $query->result_array();
    }
}