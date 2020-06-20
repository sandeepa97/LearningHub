<?php


class Model_userlec extends CI_Model{



    function insertUserdata(){

        $data = array(

            'title' => $this->input->post('title',TRUE),
            'fname' => $this->input->post('fname',TRUE),
            'lname' => $this->input->post('lname',TRUE),
            'gender' => $this->input->post('gender',TRUE),
            'qualification' => $this->input->post('qualification',TRUE),
            'experiance' => $this->input->post('experiance',TRUE),
            'knowledge' => $this->input->post('knowledge',TRUE),
            'pic' => $this->input->post('pic',TRUE),
            'email' => $this->input->post('email',TRUE),
            'password' => sha1($this->input->post('password',TRUE))
      );

         return $this->db->insert('userl',$data);

    }


    function LoginUser(){

        $email =  $this->input->post('email');
        $password = sha1($this->input->post('password'));

        $this->db->where('email',$email);
        $this->db->where('password',$password);

        $respond = $this->db->get('userl');
        if ($respond->num_rows()==1){
            return $respond->row(0);

        }else{

            return false;

        }





    }

}