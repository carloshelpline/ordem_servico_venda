<?php

defined('BASEPATH') OR exit('Ação não permitida');

class Sistema extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            $this->session->set_flashdata('info', 'Sua sessão expirou!' );
            redirect('login');
        }
    }
    
    public function index(){
        
        $data = array(
            'titulo' => 'Editar informações do sistema',
            
            'scripts' => array(
                'vendor/mask/jquery.mask.min.js',
                'vendor/mask/app.js',
            ),
            
            'sistema' => $this->core_model->get_by_id('sistema', array('sistema_id' => 1)),
            
        );
        /*
          [sistema_razao_social] => System ordem Inc
          [sistema_nome_fantasia] => System ordem Inc
          [sistema_cnpj] => 37.235.652/0001-15
          [sistema_ie] => 1234254181
          [sistema_telefone_fixo] => (83) 99999-9999
          [sistema_telefone_movel] => (83) 99999-9999
          [sistema_email] => carloshelpline@gmail.com
          [sistema_site_url] => http://localhost/ordem/
          [sistema_endereco] => Rua: Assis Chateaubriand
          [sistema_cep] => 58704-060
          [sistema_numero] => 303
          [sistema_cidade] => Patos
          [sistema_estado] => PB
          [sistema_txt_ordem_servico] => 
        */
        
        $this->form_validation->set_rules('sistema_razao_social', 'Razão social','required|min_length[10]|max_length[145]');
        $this->form_validation->set_rules('sistema_nome_fantasia', 'Nome de fantasia','required|min_length[10]|max_length[145]');
        $this->form_validation->set_rules('sistema_cnpj', '','required|exact_length[18]');
        $this->form_validation->set_rules('sistema_ie', '','required|max_length[25]');
        $this->form_validation->set_rules('sistema_telefone_fixo', '','required|max_length[25]');
        $this->form_validation->set_rules('sistema_telefone_movel', '','required|max_length[25]');
        $this->form_validation->set_rules('sistema_email', '','required|max_length[100]');
        $this->form_validation->set_rules('sistema_site_url', 'URL do site','required|valid_url|max_length[100]');
        $this->form_validation->set_rules('sistema_cep', '','required|exact_length[9]');
        $this->form_validation->set_rules('sistema_endereco', 'Endereço','required|max_length[145]');
        $this->form_validation->set_rules('sistema_numero', 'Numero','max_length[25]');
        $this->form_validation->set_rules('sistema_cidade', 'Cidade','required|max_length[45]');
        $this->form_validation->set_rules('sistema_estado', 'UF','required|exact_length[2]');
        $this->form_validation->set_rules('sistema_txt_ordem_servico', 'Texto da ordem de serviço e venda','max_length[500]');
        
                       
        if($this->form_validation->run()){
            
        /*
          [sistema_razao_social] => System ordem Inc
          [sistema_nome_fantasia] => System ordem Inc
          [sistema_cnpj] => 37.235.652/0001-15
          [sistema_ie] => 1234254181
          [sistema_telefone_fixo] => (83) 99999-9999
          [sistema_telefone_movel] => (83) 99999-9999
          [sistema_email] => carloshelpline@gmail.com
          [sistema_site_url] => http://localhost/ordem/
          [sistema_endereco] => Rua: Assis Chateaubriand
          [sistema_cep] => 58704-060
          [sistema_numero] => 303
          [sistema_cidade] => Patos
          [sistema_estado] => PB
          [sistema_txt_ordem_servico] => 
        */
            /* Este array abaixo é responsavel por enviar os dados vindo do POST para o BD*/
            $data = elements(
                    
                    array(
                'sistema_razao_social',
                'sistema_nome_fantasia',        
                'sistema_cnpj',        
                'sistema_ie',        
                'sistema_telefone_fixo',
                'sistema_telefone_movel',
                'sistema_email',        
                'sistema_site_url',
                'sistema_endereco',
                'sistema_cep',
                'sistema_numero',
                'sistema_cidade',
                'sistema_estado',        
                'sistema_txt_ordem_servico',        
                        
                    ), $this->input->post()
            );
            /* No core_model = update ele recebe o nome do BD, $data e o sistema_id=1 */
            /* Obs. O sistema_id é = a 1 porque nosso sisteme só vai ter um ID apenas */
            /* Obs. O html_escape remove parte do texto do codigo html que poderia dar problema */
            $data = html_escape($data); /* Camada de protecao vinda da global_xss_filtering, bom colocar sempre que for fazer update */
            $this->core_model->update('sistema', $data, array('sistema_id' => 1));
            
            redirect('sistema');
           
        } else {
            
            //Erro de validacao

        
        $this->load->view('layout/header', $data);
        $this->load->view('sistema/index');
        $this->load->view('layout/footer');
            
        }
   
    }

}
