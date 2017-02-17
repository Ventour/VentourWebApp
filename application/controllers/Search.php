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
        $this->load->database();
        $query = $this->db->query("SELECT * FROM Attivita");
        $value = $query->row();
        $data["test"] = $value->Titolo;


	    $this->load->view('common/header');
        $this->load->view('common/navbar');
        $this->load->view('common/navbarsearch');
        $this->load->view('risultati/risultati_container_open');

        foreach($query->result_array() as $row){
            if(i % 4 == 0){
                $this->load->view('risultati/risultati_row_open');
            }
            $this->load->view('risultati/risultati_col_open');

            $data["titolo"] = $row['Titolo'];
            $data["luogo"] = $row['Luogo'];
            $data["data"] = $row['Data_attivita'];
            $this->load->view('risultati/tab',$data)

            $this->load->view('risultati/risultati_col_close');
            if(i % 4 == 0){
                $this->load->view('risultati/risultati_row_close');
            }
        }

        $this->load->view('risultati/risultati_container_close');
		$this->load->view('common/footer');
	}
}
