<?php defined('BASEPATH') OR exit('No direct script access allowed');
class provamodel2 extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                parent::__construct();
				$this->load->database();
                // Your own constructor code
        }

        public function get_nome($attivita, $luogo, $data)
        {
			$attivita=trim($attivita);
			$luogo=trim($luogo); 	
			if($attivita!='' && $luogo!='')
				$query = $this->db->query("SELECT * FROM Attivita WHERE (Titolo LIKE '%$attivita%' OR Categoria LIKE '%$attivita%') AND Luogo='$luogo'");
			else if($luogo!='')
				$query = $this->db->query("SELECT * FROM Attivita WHERE Luogo='$luogo'");
			else if($attivita!='')
				$query = $this->db->query("SELECT * FROM Attivita WHERE (Titolo LIKE '%$attivita%' OR Categoria LIKE '%$attivita%')");
			else 
				$query = $this->db->query("SELECT * FROM Attivita");
			$i=0;
			$ris= array();
			if($query->num_rows() > 0)
			{
			foreach($query->result() as $value)
				{
					//$value = $query->row();
					$tab_attivita["id"] = $value->Id;
					$tab_attivita["titolo"] = $value->Titolo;
					$tab_attivita["descrizione"] = $value->Descrizione;
					$tab_attivita["categoria"] = $value->Categoria;
					$tab_attivita["attivita"] = $value->Attivita1;
					$tab_attivita["luogo"] = $value->Luogo;
					$tab_attivita["data_attivita"] = $value->Data_attivita;
					$tab_attivita["sesso"] = $value->Sesso;
					$tab_attivita["data_inserimento"] = $value->Data_inserimento;
					$query = $this->db->query("SELECT User_id FROM Iscritti_attivita WHERE Id_attivita=$value->Id");
					
					
				//$value = $query->row();
				$a=0;
				$ris2= array();
				if($query->num_rows() > 0)
				{
						foreach($query->result() as $value)
					{
						$ris2[$a]=$value->User_id;
						/*$query2 = $this->db->query("SELECT Nome FROM Utenti, Iscritti_attivita WHERE Utenti.id_fb=Iscritti_attivita.User_id AND Iscritti_attivita.User_id='$ris2[$a]'");
						$value2 = $query2->row();
						$a++;
						$ris2[$a]=$value2->Nome;*/
						$a++;
					}
				}
				$tab_attivita["array_foto"]= $ris2;
					
					$ris[$i]=$tab_attivita;
					$i++;
				}
			}
			return $ris;
			
  /*      
			$query = $this->db->query("SELECT Titolo FROM Attivita");
			$value = $query->row();
			$data["test"] = $value->Titolo;
            //$query = $this->db->get('entries', 10);
            return $query->row();*/
        }
			public function get_fotofb(){
				$query = $this->db->query("SELECT User_id FROM Iscritti_attivita WHERE Id_attivita='1'");
				//$value = $query->row();
				$i=0;
				$ris= array();
				if($query->num_rows() > 0)
				{
					foreach($query->result() as $value)
				{
					$tab_attivita["user_id"] = $value->User_id;
					$ris[$i]=$tab_attivita;
					$i++;
				}
			}
				return $ris;
		}
}
?>