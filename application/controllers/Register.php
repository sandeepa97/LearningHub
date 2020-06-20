<?php

class Register extends CI_Controller {


    public function RegisterUser(){

        $this->form_validation->set_rules('country', 'Country', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Surname', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('bday', 'Birthday', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('pic', 'Profile Image', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('passwordagain', 'Again Password', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('Register');
        }
        else {

            $this->load->model('Model_user');
            $response = $this->Model_user->insertUserdata();
            if ($response){

                $this->session->set_flashdata('msg','Registered Successfully..please Login');
                redirect('Home/Register');
            }else {
                $this->session->set_flashdata('msg','something went wrong');
                redirect('Home/Register');
            }

        }

    }


}