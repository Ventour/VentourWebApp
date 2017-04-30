<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage2 extends CI_Controller {

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
		//$this->load->model('Provamodel2');
		//$tab_attivita2=$this->Provamodel2->get_nome("Calcio");
		/*$this->load->database();
		$query = $this->db->query("SELECT * FROM Attivita");
		$value = $query->row();
		$tab_attivita["titolo"] = $value->Titolo;
		$tab_attivita["descrizione"] = $value->Descrizione;
		$tab_attivita["categoria"] = $value->Categoria;
		$tab_attivita["attivita"] = $value->Attivita;
		$tab_attivita["luogo"] = $value->Luogo;
		$tab_attivita["data_attivita"] = $value->Data_attivita;
		$tab_attivita["sesso"] = $value->Sesso;
		$tab_attivita["data_inserimento"] = $value->Data_inserimento;*/

      //   $this->load->model('provamodel');
     //   $data['query'] = $this->provamodel->get_nome();

	//	foreach($query->result_array() as $data){
	//	echo $row['someContent'];
	//	}

     //check for data and handle errors
		
		$this->load->view('common/header');
	    $this->load->view('common/navbar');
	   	$this->load->view('homepage/home2');
		$this->load->view('common/footer');
	}
}
?>