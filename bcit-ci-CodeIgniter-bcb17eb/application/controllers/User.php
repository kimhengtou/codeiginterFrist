<?php

class User extends CI_controller{

    //private $CI_contronller;
    function index() {
        $this->load->model('User_model');
        $users = $this->User_model->all();
        $data = array();
        $data['users']=$users;
        $this->load->view('list',$data);
    }
     function create(){

        $this->load->model('User_model');
        $this->form_validation->set_rules('name','name','required');
        $this->form_validation->set_rules('email','email','required|valid_email');

        if ($this->form_validation->run() == false) {

        
        $this->load->view('create');
        }else{
            //save user to database
            $formArray = array();
            $formArray['name']=$this->input->post('name');
            $formArray['email']=$this->input->post('email');
            //$formArray['created_at']=date('y-m-d');

$this->User_model->create($formArray);
$this->session->set_flashdata('success','Record added successfully');
redirect(base_url().'index.php/user/index');

        }
    }

    function edit($userID){
        $this->load->model('User_model');
        $user = $this->User_model->getUser($userID);
        $data = array();
        $data['users'] = $user;

        $this->form_validation->set_rules('name','name','required');
        $this->form_validation->set_rules('email','email','required|valid_email');
        if($this->form_validation->run() == false) {

        
        $this->load->view('edit',$data);
        }else{
            //update user record
            $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['email'] = $this->input->post('email');
            $this->User_model->updateUser($userID,$formArray);
            $this->session->flashdata('success','record updated successfully');
            redirect(base_url().'index.php/user/index');
        }

    }

    function delete($userID){

    }
}

//return $this->display_error(array('Error Number: '.$error['code'], $error['message'], $sql));
?>