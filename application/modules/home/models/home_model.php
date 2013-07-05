<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model{
    
    var $trans = 'tblTransactions';
    
    public function __construct()
    {
        parent::__construct();
    }
    
    function count_all_data()
    {
        return $this->db->count_all_results($this->trans);
    }
    
    function select_all_data($num, $offset)
    {
        $this->db->select("");
        $this->db->order_by("DateTime1","DESC");
        $query = $this->db->get($this->trans, $num, $offset);
        
        return $query->result();
    }
    function get_data_by_search()
    {
        $input = $this->input->post('date');
        $this->db->select('');
        $this->db->like("DateTime1",$input);
        $this->db->order_by("DateTime1","DESC");
        
        $query = $this->db->get($this->trans);
        
        return $query->result();
    }
    function get_truckout_by_date()
    {
        $input = $this->input->post('date');
        $this->db->select('');
        $this->db->like("DateTime2",$input);
        
        $query = $this->db->get($this->trans);
        
        return $query->result();
    }
    function count_data_by_selected_date()
    {
        $input = $this->input->post('date');
        $this->db->like("DateTime2",$input);
        return $this->db->count_all_results($this->trans);
    }
}    