<?php

class user extends CI_controller{
    function index(){
        $this->load->model('user_model');
        $users = $this->user_model->all();
         $data = array();
        $data['users'] = $users;
        $this->load->view('list',$data);
    }

    function create(){
        $this->load->model('user_model');
        $this->form_validation->set_rules('name','Name','required');                   //validation method.
        $this->form_validation->set_rules('email_id','Email id','required|valid_email');
    
        
        if($this->form_validation->run() == false) {
            $this->load->view('create');
        }else{
          //save user to database
          $formArray = array();
          $formArray['name'] = $this->input->post('name');
          $formArray['email_id'] = $this->input->post('email_id');
          $formArray['mobile_no'] = $this->input->post('mobile_no');
          $formArray['date_of_birth'] = $this->input->post('date_of_birth');
          $formArray['pin_code'] = $this->input->post('pin_code');
          

          $this->user_model->create($formArray);
          $this->session->set_flashdata('success','Record added Successfully!');
          redirect(base_url().'index.php/user/index');
        }
    }
    function edit($userId)
    {
            $this->load->model('user_model');
            $user = $this->user_model->getUser($userId);
            $data = array();
            $data['user'] = $user;

            $this->form_validation->set_rules('name','Name','required');                   //validation method.
            $this->form_validation->set_rules('email_id','Email id','required|valid_email');
            


            if($this->form_validation->run() == false) {
                $this->load->view('edit',$data);
            }else{
                //update user record
                $formArray = array();
                $formArray['name'] = $this->input->post('name');
                $formArray['email_id'] = $this->input->post('email_id');
                $formArray['mobile_no'] = $this->input->post('mobile_no');
                $formArray['date_of_birth'] = $this->input->post('date_of_birth');
                $formArray['pin_code'] = $this->input->post('pin_code');
                $this->user_model->updateUser($userId,$formArray);
                $this->session->set_flashdata('success','Record Update Successfully');
                redirect(base_url().'index.php/user/index');
            }     
    }
    function delete($userId)
    {
        $this->load->model('user_model');
        $user =  $this->user_model->getUser($userId);
        if(empty($user)){
            $this->session->set_flashdata('failure','Record not found in database');
                redirect(base_url().'index.php/user/index');
        }
        $this->user_model->deleteUser($userId);
        $this->session->set_flashdata('success','Record deleted successfully');
                redirect(base_url().'index.php/user/index');
    }
}
?>