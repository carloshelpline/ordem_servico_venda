<?php

defined('BASEPATH') OR exit('Ação não permitida');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            $this->session->set_flashdata('info', 'Sua sessão expirou' );
            redirect('login');
        }
    }
        public

        function index() {

            $this->load->view('layout/header');
            $this->load->view('home/index');
            $this->load->view('layout/footer');


            /*
              Obs. na Home.php temos que carregar todos Layout da Tela
             * Index carrega apenas as telas 
             *  - layout/sidebar
             *  - layout/navbar
             *
             * E na Home temos que carregar
             *  $this->load->view('layout/header'); (Onde fica todos os estilos)
             *  $this->load->view('home/index');
             *  $this->load->view('layout/footer'); (Onde fica o Javascript)



             */
        }

    }
    