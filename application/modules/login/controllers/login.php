<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load libraryHome
        $this->load->library("form_validation");
        //load models
        $this->load->model('login_model','log');
        
    }
    public function index()
    {
        if($this->session->userdata('is-gpblogged-in'))
        {
           redirect('home','location',302);
        }
        else
        {
            $this->actionForm();
        }    
    }
    function actionForm()
    {
        $rules = array(
            array(
                'field' => 'username',
                'label' => 'username',
                'rules' => 'required'
            ),
            array(
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required|callback_checklogin'
            )
        );
        $this->form_validation->set_rules($rules);
        if($this->form_validation->run()==FALSE)
        {
            $this->template->load('login');
        }
        else
        {
            redirect('home','location',302);
        }    
    }
    function checklogin($password)
    {
        $username = $this->input->post('username');
        
        $result = $this->log->check_login($username, $password);
        
        if($result)
        {            
               $sess_array = array(
                   'id'         => $result->userid,
                   'username'   => $result->username
               );
               $this->session->set_userdata('is-gpblogged-in', $sess_array);
         
            return TRUE;
        }   
        else
        {
            $this->form_validation->set_message('checklogin', 'sorry username and password not match');
            
            return FALSE;
        }
    }
    function out()
    {
        $this->session->unset_userdata('is-gpblogged-in');
        
        session_destroy();
        redirect('login/','location',302);
    }
}    