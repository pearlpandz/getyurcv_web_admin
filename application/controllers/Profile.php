<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('login_model');
        $this -> load -> helper('form_helper');
        $this -> load -> library('form_validation');
        
        $this -> load -> helper('url');
        $this -> load -> helper('global_helper');
        $this -> load -> library('session');

    }

    public function index($user='') {
        if($this->uri->segment(2)==''){
            echo "username not found";
            exit;
        }
        else{
            $data['user'] = $this->uri->segment(2);
            $data['message_element'] = "frontend/profile";
            $this->load->view('admin/includes/admin_template',$data);            
        }
        
    }
    
}