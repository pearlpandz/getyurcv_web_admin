<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this -> load -> helper('form_helper');
        $this -> load -> library('form_validation');
        $this -> load -> helper('url');
        $this -> load -> helper('global_helper');
        $this -> load -> library('session');
    }

    public function index() { 
        if(!$this->session->userdata('user_admin')){
            $data['message_element'] = "admin/user/signin";
            $this->load->view('admin/includes/admin_template',$data);
        }
        else {
            redirect('admin/users/userlist');
        }
    }

    public function signin() {   
        if(!$this->session->userdata('user_admin')){
            if($this->input->post()){
                $user = $this->input->post('user');
                $password =$this->input->post('password');

               $firebase_user = $this->input->post('firebase_user');
               $firebase_password = $this->input->post('firebase_password');

                if( ($firebase_user==$user) && ($firebase_password==$password) ) {
                    $messge = array('message' => 'welcome to adminpanel','class' => 'alert alert-success fade in');
                    $this->session->set_flashdata('item', $messge);
                    
                    $sessiondata = array(
                        'user_admin' => $user,
                        'password' => $password,
                        'logged_in' => TRUE
                    );
                    $this->session->set_userdata($sessiondata);
                    redirect('admin/users/userlist');
                }
            }    
        }
        else{
            $messge = array('message' => 'welcome to adminpanel','class' => 'alert alert-success fade in');
            $this->session->set_flashdata('item', $messge);
            redirect('admin/users/userlist');
        }
    }

    public function userlist(){
       
            $data['message_element'] = "admin/user/userlist";
            $this->load->view('admin/includes/admin_template',$data);
                
    }

    public function newuser() { 
       
            $data['message_element'] = "admin/user/newuser";
            $this->load->view('admin/includes/admin_template',$data);
        
    }

    public function signout(){       
        $this->session->sess_destroy();
        redirect('/');
    }

}