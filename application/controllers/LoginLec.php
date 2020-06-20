<?php


class LoginLec extends CI_Controller{


    public function LoginUser(){

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('LoginLec');
        }
        else {

            $this->load->model('Model_userlec');
            $result = $this->Model_userlec->LoginUser();

            if ($result != false){

                $user_data = array(
                    'user_id'=>$result->id,
                    'fname'=>$result->fname,
                    'lname'=>$result->lname,
                    'email'=>$result->email,
                    'loggedin'=>TRUE
                );

                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('welocme','Welcome back');
                redirect('AdminLec/index');



            }else{

                $this->session->set_flashdata('errmsg','Wrong email and password');
                redirect('Home/LoginLec');

            }


        }

    }

    public function LogoutUser()
    {

        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('fname');
        $this->session->unset_userdata('lname');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('loggedin');
        redirect('Home/LoginLec');
    }

}