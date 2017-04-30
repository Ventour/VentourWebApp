<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

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
        $this->load->model('Provamodel2');
	    $data = $this->Provamodel2->get_nome($this->input->post("attivita"),$this->input->post("luogo"),$this->input->post("quando"));


	    $this->load->view('common/header');
        $this->load->view('common/navbar');
        $this->load->view('common/navbarsearch');
        $this->load->view('risultatiricerca/risultati_container_open');
        $this->load->view('risultatiricerca/risultati_row_open');
        for($i = 0; $i < count($data); $i++){
            if($i % 4 == 0 && $i != 0 && $i != count($data) - (count($data) % 4) - 1){
                $this->load->view('risultatiricerca/risultati_row_close');
                $this->load->view('risultatiricerca/risultati_row_open');
            }
            $this->load->view('risultatiricerca/risultati_col_open');

            $this->load->view('risultatiricerca/tab2',$data[$i]);

            $this->load->view('risultatiricerca/risultati_col_close');
            /*if($i % 4 == 0){
                $this->load->view('risultatiricerca/risultati_row_close');
            }*/
        }
        /*
        $dimData = count($data); //dimensione array
        $stride = 4; //numero colonne pagina risultati
        for($i = 0; $i < ($dimData/$stride)+1; $i++){
            $this->load->view('risultatiricerca/risultati_row_open');
            $q = 0;
            if($dimData - $i < $stride) $q = $dimData - $i + 1;
            else $q = $stride;
            for($j = 0; $j < $q; $j++){
                $this->load->view('risultatiricerca/risultati_col_open');
                $this->load->view('risultatiricerca/tab2',$data[$i]);
                $this->load->view('risultatiricerca/risultati_col_close');
            }
            $this->load->view('risultatiricerca/risultati_row_close');
        }*/
        $this->load->view('risultatiricerca/risultati_row_close');
        $this->load->view('risultatiricerca/risultati_container_close');
		$this->load->view('common/footer');
	}
}
