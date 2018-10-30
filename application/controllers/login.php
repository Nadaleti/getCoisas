<?php
    class Login extends CI_Controller {
        public function view($page = 'login') {
            if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
                //Show 404 if page doesn't exists
                show_404();
            }
            
            $this->load->view('templates/header-login');
            $this->load->view('pages/'.$page);
        }
    }