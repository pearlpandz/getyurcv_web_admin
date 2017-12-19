<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('login_model');
        $this -> load -> helper('form_helper');
        $this -> load -> library('form_validation');
        $this->load->model('Common_model');
        $this -> load -> helper('url');
        $this -> load -> helper('global_helper');
        $this -> load -> library('session');

    }

     public function index() { 
        $this->load->view('frontend/account/signin');
    }

    public function signin()
    {      
        if(!$this->session->userdata('logged_in')){
             
             if($this->input->post()){
        $email =$this->input->post('email');
        $password =$this->input->post('password');
        
        $base_url = base_url().'mobile/Users/';

      $users = json_decode(file_get_contents($base_url.'/signInanan/email/'.$email.'/password/'.$password));
       // print_r($users);
        if(isset($users)){
            foreach($users as $user){}                   
        }

      if($user->status == "Success"){

        if($user->verify_status == 1){   

            $data['userid']=$user->userid;
            $data['email']=$user->email; 
            $data['user_name']=$user->user_name;   
            $session_array=array(
                'logged_in' => TRUE,
                 'userid'   => $data['userid'],
                 'email'    => $data['email'],
                 'user_name'=> $data['user_name']
            );
       
            $this->session->set_userdata($session_array);            
          
            redirect('frontend/posts');
        }
        else{
           $messge = array('message' => 'Your are Not Verified by Email','class' => 'alert alert-danger fade in');
            $this->session->set_flashdata('item', $messge);            
            redirect('/'); 
        }
        
      }
       else{
          
         $messge = array('message' => $user->message,'class' => 'alert alert-danger fade in');
            $this->session->set_flashdata('item', $messge);            
            redirect('/');
                  
            
        }
     
  }
       $this->load->view('frontend/includes/header');
         $this->load->view('frontend/account/signin');
         // $this->load->view('frontend/includes/footer'); 
}
else{
    redirect('frontend/posts');
}        
    }



    public function signup()
    {    
         if( !$this->session->userdata('logged_in')){    
             if($this->input->post()){

        $email =$this->input->post('email');
        $password =$this->input->post('password');
        $first_name =$this->input->post('first_name');
        $last_name =$this->input->post('last_name');
        $user_name =$this->input->post('user_name');

        // print_r($_FILES);





            if($_FILES["image"]["name"]){
                                {                                   
                                                            
                 require_once APPPATH.'libraries/cloudinary/autoload.php';
                \Cloudinary::config(array( 
                  "cloud_name" => 'cogzidel-tech', 
                  "api_key" => '864337578354595', 
                  "api_secret" => 'b3sQaZOI1AxVUbX4wYqSjniBTP8'
                ));
                $temp1 = explode('.', $_FILES["image"]["name"]);
                $ext1  = array_pop($temp1);
                $image = implode('.', $temp1);
                $imguniq = uniqid();
        //print_r($_FILES);exit;
                try{
                    $cloudimage=\Cloudinary\Uploader::upload($_FILES["image"]["tmp_name"],
                    array(
                    "resource_type" => "image", 
                    "public_id" => "users/profilepic/".$imguniq));
                    // print_r($cloudimage);exit;
                 $final['status']="Success";

                 $final['image_name']= $cloudimage['url'];

                 $image1 = $final['image_name'];
                }
                catch (Exception $e) {
                    $error = $e->getMessage();
                    $final['status']="Fail";
                    $final['message']= $error ;
                    }
                }
                // json_encode(array($final),JSON_UNESCAPED_SLASHES);
                // $image1 = $final['image_name'];          
            }
        else{
            $image1 = "http://res.cloudinary.com/cogzidel-tech/image/upload/v1512552404/users/profilepic/no_avatar.jpg";
        }
        
        $base_url = base_url().'mobile/Users';      

      $users = json_decode(file_get_contents($base_url.'/signUpanan?email='.$email.'&password='.$password.'&first_name='.$first_name.'&last_name='.$last_name.'&user_name='.$user_name.'&image='.$image1));

        foreach($users as $user){}  
      if($user->status == "Success"){  

            $signup_id = $user->userid;
      $users_verify = json_decode(file_get_contents($base_url.'/verifyUser/email/'.$email));
      if(isset($users_verify)){
       foreach($users_verify as $users_verify){}
        
         if($users_verify->status == "Success"){
           $messge = array('message' => 'Email Has sent to your mail','class' => 'alert alert-success fade in');
            $this->session->set_flashdata('item', $messge);        
             $this->load->view('frontend/account/Status_view');  
 
         }
         else{
 
       $messge = array('message' => 'Sign Up completed! Check your mail and Verify your account.','class' => 'alert alert-success fade in');
            $this->session->set_flashdata('item', $messge);   
             $this->load->view('frontend/account/Status_view');  

         }
         }
        }
        else{
            
              $messge = array('message' => $user->message,'class' => 'alert alert-danger fade in');
            $this->session->set_flashdata('item', $messge);            
            $this->load->view('frontend/account/Status_view');
                    
        }       
      
     }       

        $this->load->view('frontend/includes/header');
        $this->load->view('frontend/account/signup');
        // $this->load->view('frontend/includes/footer');
  }       
       
else{
    redirect('frontend/posts');
}
    }



public function signout(){       
    $this->session->sess_destroy();
    redirect('/');
}



}