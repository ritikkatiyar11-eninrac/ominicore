<?php
defined('BASEPATH') or exit('No direct script access allowed');
require(APPPATH . 'controllers/Default_Controler.php');
class Omnicore extends Default_Controler
{
    public function index()
    {
        $this->load->view('home');
    }
    public function category(){
        $this->load->view('category');
    }

    public function login(){
        $this->load->view('login');
    }

    public function notfound(){
        $this->load->view('notfound');
    }
   
    public function newsletter_signup(){
        $this->load->view('newsletter_signup');
    }
<<<<<<< HEAD
    public function subscribe(){
        $this->load->view('subscribe');
    }
=======
    public function newsdetailspage(){
        $this->load->view('detailspage/newsdetailspage');
    }
   
    public function infodetailspage(){
        $this->load->view('detailspage/infodetailspage');
    }
    // newsdetailspage infodetailspage
>>>>>>> fe574f72f414ba11836d1a601f5933f238537bb1
}
