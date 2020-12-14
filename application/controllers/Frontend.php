<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Frontend extends CI_Controller{
    
    function index(){
        
        $this->load->view('templateuser');
    }
    function about(){
        
        $this->load->view('user/about');
    }
    function wisata(){
        
        $this->load->view('user/wisata');
    }
    function hotel(){
        
        $this->load->view('user/hotel');
    }
    function contact(){
        
        $this->load->view('user/contact');
    }
}
?>