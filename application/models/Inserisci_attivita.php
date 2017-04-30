<?php defined('BASEPATH') OR exit('No direct script access allowed');
class inserisci_attivita extends CI_Model {
        public function __construct()
        {
                parent::__construct();
				$this->load->database();
                // Your own constructor code
        }

        public function get_inserisci($titolo, $cat, $luogo, $data_att, $durata, $posti, $desc)
        {
			if($titolo=='' || $cat=='' || $luogo=='' || $data_att=='' || $durata=='' || $desc==''){
				return false;	
			}
			$data = array(
				'Titolo' => $titolo ,
				'Categoria' => $cat,
				'Luogo' => $luogo ,
				'Durata' => $durata ,
				'Data_attivita' => $data_att ,
				'Posti_max' => $posti,
				'Descrizione' => $desc ,
				'Data_inserimento' => date ("d/m/Y")
			);
			$this->db->insert('Attivita', $data);
			return true;
        }
}
?>