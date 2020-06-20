<?php


class Model_exam extends CI_Model{
            
    function insertans(){

        $data = array(

            'question' => $this->input->post('question1',TRUE),
            'ans' => $this->input->post('ans1',TRUE),


      );

        $this->db->insert('exam',$data);
        $data = array(

            'question' => $this->input->post('question2',TRUE),
            'ans' => $this->input->post('ans2',TRUE),


      );

        $this->db->insert('exam',$data);
        $data = array(

            'question' => $this->input->post('question3',TRUE),
            'ans' => $this->input->post('ans3',TRUE),


      );

        $this->db->insert('exam',$data);
        $data = array(

            'question' => $this->input->post('question4',TRUE),
            'ans' => $this->input->post('ans4',TRUE),


      );

        $this->db->insert('exam',$data);

		$data = array(


            'question' => $this->input->post('question5',TRUE),
            'ans' => $this->input->post('ans5',TRUE),


      );
         return $this->db->insert('exam',$data);	  
	  
    }




}