<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->model('Singola_attivita');
        $id = $this->input->post("id_att");
        $data = $this->Singola_attivita->get_attivita($id);
        $this->load->view('common/header');
        $this->load->view('common/navbar');
        $this->load->view('common/navbarsearch');
        if($data['errore'] == false) $this->load->view('paginaattivita/attivita',$data);
        else $this->load->view('paginaattivita/nontrovata');
        $this->load->view('common/footer');
    }
}
