<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Provamodel extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                parent::__construct();
				$this->load->database();
                // Your own constructor code
        }

        public function get_nome()
        {
			$query = $this->db->query("SELECT * FROM Attivita");
			$value = $query->row();
			$tab_attivita["titolo"] = $value->Titolo;
			$tab_attivita["descrizione"] = $value->Descrizione;
			$tab_attivita["categoria"] = $value->Categoria;
			$tab_attivita["attivita"] = $value->Attivita;
			$tab_attivita["luogo"] = $value->Luogo;
			$tab_attivita["data_attivita"] = $value->Data_attivita;
			$tab_attivita["sesso"] = $value->Sesso;
			$tab_attivita["data_inserimento"] = $value->Data_inserimento;
  /*          
			$query = $this->db->query("SELECT Titolo FROM Attivita");
			$value = $query->row();
			$data["test"] = $value->Titolo;
            //$query = $this->db->get('entries', 10);
            return $query->row();*/
        }
		public function get_fotofb(){
			$query = $this->db->query("SELECT User_id FROM Iscritti_attivita WHERE Id_attivita='1'");
			$value = $query->row();
			$tab_attivita["user_id"] = $value->User_id;
		}
}
?>