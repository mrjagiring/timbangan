<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load libraryHome
        $this->load->library(array("form_validation","pagination"));
        //load models
        $this->load->model('home_model','home');      
    }  
    public function index()
    {
        $this->actionShow();
    }
    function actionShow()
    {
        if($this->session->userdata('is-gpblogged-in'))
        {
            $this->form_validation->set_rules('date','date','required');
            if($this->form_validation->run()==FALSE)
            {
                $config['base_url'] = base_url().'/home/actionShow/';            
                $config['total_rows'] = $this->home->count_all_data();
                $config['per_page'] = '30';

                $this->pagination->initialize($config);

                $data['weight']     = $this->home->select_all_data($config['per_page'],$this->uri->segment(3));

                $this->template->load('show',$data);
            }
            else
            {
                $search = $this->home->get_data_by_search();
                $date = $this->input->post('date');
                if(!$search)
                {
                    $this->template->load('zero');
                }
                else
                {
                    $data['sort']   = $search;
                    $data['date']   = $date;    

                    $this->template->load('results',$data);
                }        
            }    
            
        }
        else
        {
            redirect('login','location',302);
        }
    }
    function truckout()
    {
        if($this->session->userdata('is-gpblogged-in'))
        {
            $this->form_validation->set_rules('date','date','required');
            if($this->form_validation->run()==FALSE)
            {
                $this->template->load('select');
            }
            else
            {
                $search = $this->home->get_truckout_by_date();
                $date = $this->input->post('date');
                if(!$search)
                {
                    $this->template->load('zero');
                }
                else
                {
                    $data['sort']   = $search;
                    $data['date']   = $date;
                    $data['count']  = $this->home->count_data_by_selected_date();

                    $this->template->load('truckout',$data);
                }       
            }
        }
        else
        {
            redirect('login','location',302);
        }
    }
}    