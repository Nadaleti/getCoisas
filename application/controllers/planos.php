<?php
    class Planos extends CI_Controller {
        public function view($page = 'planos') {
            if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
                //Show 404 if page doesn't exists
                show_404();
            }
            
            $this->load->view('templates/header');
            $this->load->view('pages/'.$page);
            $this->load->view('templates/footer');
        }
    }