<?php defined('BASEPATH') OR exit('No direct script access allowed');
class inserisci_attivita extends CI_Model {
        public function __construct()
        {
                parent::__construct();
				$this->load->database();
                // Your own constructor code
        }

        public function get_inserisci($attivita, $luogo, $data)
        {
			$data = array(
				'Titolo' => 'My title' ,
				'Descrizione' => 'My Name' ,
				'Categoria' => 'My date',
				'Attivita' => 'My Name' ,
				'Luogo' => 'My Name' ,
				'Descrizione' => 'My Name' ,
				'Data_attivita' => 'My Name' ,
				'Sesso' => 'My Name' ,
				'Data_insimento' => date ("d/m/Y")
			);
			$this->db->insert('Attivita', $data);
        }
}
?>