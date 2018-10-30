<?php
    class Home extends CI_Controller {
        public function view($page = 'home') {
            if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
                //Show 404 if page doesn't exists
                show_404();
            }
            
            $this->load->view('templates/header');
            $this->load->view('pages/'.$page);
            $this->load->view('templates/footer');
        }
    }

    /*class Pages extends CI_Controller {
        public function view($page = 'home') {
            if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
                //Show 404 if page doesn't exists
                show_404();
            }
            
            //Set title variable with the value of page variable capitalizing the first letter
            $data['title'] = ucfirst($page);
            
            $this->load->view('templates/header', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer', $data);
        }
    }*/