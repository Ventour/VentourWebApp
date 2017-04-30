<?php defined('BASEPATH') OR exit('No direct script access allowed');
class user_profile extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                parent::__construct();
				$this->load->database();
                // Your own constructor code
        }
        		public function parteAttivita($id_fb){
				$query = $this->db->query("SELECT * FROM Iscritti_attivita WHERE User_id='$id_fb'");
				$value = $query->row();
				
				$i=0;
				$ris2= array();
				if($query->num_rows() > 0){
				foreach($query->result() as $value)
				{
					$cost= $value->Id_attivita;
					$query2 = $this->db->query("SELECT * FROM Attivita WHERE Id='$cost'");
					$value2 = $query2->row();
					$ris2[$i]=$value2->Titolo;
					$i++;
                    $ris2[$i]=$value2->Id;
                    $i++;
				}
					return $ris2;
				}else{
					$nome_att["errore"] = true;
					return $nome_att;
				}
		}
			public function get_user($id_fb){
				$query = $this->db->query("SELECT * FROM Utenti WHERE id_fb='$id_fb'");
				$value = $query->row();
				if($query->num_rows() > 0){
					$tab_attivita["nome"] = $value->Nome;
					$tab_attivita["cognome"] = $value->Cognome;
					$tab_attivita["email"] = $value->email;
					$tab_attivita["immagine"] = $value->immagine;
					$tab_attivita["fascia_eta"] = $value->fascia_eta;
					$tab_attivita["sesso"] = $value->sesso;
					$tab_attivita["citta"] = $value->Citta;
					$tab_attivita["id_fb"] = $value->id_fb;
					$tab_attivita["data_nascita"] = $value->Data_nascita;
					$tab_attivita["data_iscr"] = $value->Data_iscr;
					$tab_attivita["user_id"] = $value->Id;
					$tab_attivita["errore"] = false;
					$tab_attivita["imm"] = "https://graph.facebook.com/$id_fb/picture";
					$tab_attivita["url"] = "https://www.facebook.com/$id_fb";
					$tab_attivita["att_part"]=$this->parteAttivita($id_fb);
					return $tab_attivita;
				}else{
					$tab_attivita["errore"] = true;
					return $tab_attivita;
				}
			}
		}
?>
