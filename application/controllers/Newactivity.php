<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newactivity extends CI_Controller {

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
	    $this->load->model('Inserisci_attivita');
        $titolo = $this->input->post("title");
        $categoria = $this->input->post("category");
        $luogo = $this->input->post("where");
        $data_att = $this->input->post("date");
        $durata = $this->input->post("duration");
        $posti = $this->input->post("seats");
        $desc = $this->input->post("desc");

        $inserimento = $this->Inserisci_attivita->get_inserisci($titolo,$categoria,$luogo,$data_att,$durata,$posti,$desc);
	    $data = array();
        $data['successo'] = $inserimento;
	    $this->load->view('common/header');
        $this->load->view('common/navbar');
        $this->load->view('common/navbarsearch');
		$this->load->view('creaattivita/controlla', $data);
		$this->load->view('common/footer');
	}
}
