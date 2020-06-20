<?php

class RegisterLec extends CI_Controller {


    public function RegisterUserLec(){

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Surname', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('qualification', 'Highest Qualification', 'required');
		$this->form_validation->set_rules('experiance', 'Number of Years of Experiance', 'required');
		$this->form_validation->set_rules('knowledge', 'Domain Knowledge', 'required');
		$this->form_validation->set_rules('pic', 'Profile Image', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('passwordagain', 'Again Password', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('RegisterLec');
        }
        else {

            $this->load->model('Model_userlec');
            $response = $this->Model_userlec->insertUserdata();
            if ($response){

                $this->session->set_flashdata('msg','Registered Successfully..please Login');
                redirect('Home/LoginLec');
            }else {
                $this->session->set_flashdata('msg','something went wrong');
                redirect('Home/RegisterLec');
            }

        }

    }


}