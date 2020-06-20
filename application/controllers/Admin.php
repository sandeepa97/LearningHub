<?php

/**
 * Created by PhpStorm.
 * User: rajiii
 * Date: 9/9/2017
 * Time: 4:51 PM
 */
class Admin extends CI_Controller {

    public function index(){
    $this->load->view('Admin/dashboard');

    }

    public function AddPost(){
        $this->load->view('Admin/Add');

    }

    public function level1(){
        $this->load->view('Admin/level1');

    }
    public function level2(){
        $this->load->view('Admin/level2');

    }

    public function level3(){
        $this->load->view('Admin/level3');

    }

	public function Llesson1(){
        $this->load->view('Admin/Llesson1');

    }
    public function Llesson2(){
        $this->load->view('Admin/Llesson2');

    }

    public function Llesson3(){
        $this->load->view('Admin/Llesson3');

    }
	
	public function Llesson1Quiz(){
        $this->load->view('Admin/Llesson1Quiz');

    }	
	public function successexam(){
        $this->load->view('Admin/successexam');

    }	
	
	public function mod1exam(){
        $this->load->view('Admin/mod1exam');

    }	
//module exam starts

    public function modexam(){

        $this->form_validation->set_rules('ans1', 'Please Provide Your Answers', 'required');
        $this->form_validation->set_rules('ans2', 'Please Provide Your Answers', 'required');
        $this->form_validation->set_rules('ans3', 'Please Provide Your Answers', 'required');
        $this->form_validation->set_rules('ans4', 'Please Provide Your Answers', 'required');
        $this->form_validation->set_rules('ans5', 'Please Provide Your Answers', 'required');



            $this->load->model('Model_exam');
            $response = $this->Model_exam->insertans();
			if ($response){

                $this->session->set_flashdata('onesignal','Subitted Successfully..You will recieve results soon');
                redirect('Admin/successexam');
            }

    


//module exam ends
	
	
	
}

}