<?php defined('BASEPATH') OR exit('No direct script access allowed');
class join_attivita extends CI_Model {
        public function __construct()
        {
                parent::__construct();
				$this->load->database();
                // Your own constructor code
        }

        public function get_join($id_att, $id_fb)
        {
			if($id_fb=='')
			return false;
			$query = $this->db->query("SELECT * FROM Iscritti_attivita WHERE Id_attivita='$id_att'");
			$query2 = $this->db->query("SELECT * FROM Attivita WHERE id='$id_att'");
			/*foreach($query->result() as $value){
				$tab_attivita = $value->Posti_max;
				}
			if($query->num_rows() >= ($tab_attivita)){
				return false;
			}*/
			$data = array(
				'Id_attivita' => $id_att,
				'User_id' => $id_fb,
				'Data' => date ("d/m/Y")
			);
			$this->db->insert('Iscritti_attivita', $data);
			return true;
        }
}
?>