<?php

/**
 * Created by PhpStorm.
 * User: rajiii
 * Date: 9/9/2017
 * Time: 4:51 PM
 */
class AdminLec extends CI_Controller {

    public function index(){
    $this->load->view('Lec/dashboard');

    }

    public function AddPost(){
        $this->load->view('Lec/Add');

    }
    public function Addas(){
        $this->load->view('Lec/Addas');

    }

}