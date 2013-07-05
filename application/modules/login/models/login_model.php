<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{
    
    var $log = 'tbluser';
    public function __construct()
    {
        parent::__construct();
    }
    function check_login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', SHA1($password));
        $query = $this->db->get($this->log);

            if ( $query->num_rows == 1 )
            {
                // person has account with us
                return $query->row();
            }
      return false;
    }
}