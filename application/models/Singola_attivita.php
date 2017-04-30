<?php defined('BASEPATH') OR exit('No direct script access allowed');
class singola_attivita extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                parent::__construct();
				$this->load->database();
                // Your own constructor code
        }
        public function iscrittiAttivita($id_attivita){
				$query = $this->db->query("SELECT * FROM Iscritti_attivita WHERE Id_attivita='$id_attivita'");
				$value = $query->row();
				
				$i=0;
				$ris2= array();
				if($query->num_rows() > 0){
				foreach($query->result() as $value)
				{
					$cost= $value->User_id;
					$query2 = $this->db->query("SELECT * FROM Utenti WHERE id_fb='$cost'");
					$value2 = $query2->row();
					$ris2[$i]=$value2->Nome;
					$i++;
					$ris2[$i]=$value2->Cognome;
					$i++;
					$ris2[$i]=$value2->id_fb;
					$i++;
					$ris2[$i]="https://graph.facebook.com/$cost/picture";
					$i++;
					$ris2[$i]="https://www.facebook.com/$cost";
					//$ris2[$i] = $value->Luogo;
						//$nome_att["id_att"] = $value->Attivita.Titolo;
						//$nome_att["errore"] = false;
						
					$i++;
				}
					return $ris2;
				}else{
					//$ris2[0] = true;
					//return $ris2;
					return false;
				}
		}
			public function get_attivita($id_attivita){
				$query = $this->db->query("SELECT * FROM Attivita WHERE id='$id_attivita'");
				$value = $query->row();
				if($query->num_rows() > 0){
					$tab_attivita["titolo"] = $value->Titolo;
					$tab_attivita["descrizione"] = $value->Descrizione;
					$tab_attivita["categoria"] = $value->Categoria;
					$tab_attivita["attivita"] = $value->Attivita1;
					$tab_attivita["luogo"] = $value->Luogo;
					$tab_attivita["cap"] = $value->Cap;
					$tab_attivita["data_attivita"] = $value->Data_attivita;
					$tab_attivita["sesso"] = $value->Sesso;
					$tab_attivita["durata"] = $value->Durata;
					$tab_attivita["posti_max"] = $value->Posti_max;
					$tab_attivita["data_inserimento"] = $value->Data_inserimento;
					$tab_attivita["errore"] = false;
					$tab_attivita["iscritti"] = $this->iscrittiAttivita($id_attivita);
					if($tab_attivita["iscritti"] == false) $tab_attivita["errore_iscr_att"] = true;
					else $tab_attivita["errore_iscr_att"] = false;
					return $tab_attivita;
				}else{
					$tab_attivita["errore"] = true;
					return $tab_attivita;
				}
			}
		}
?>
