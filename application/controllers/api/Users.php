<?php
class Users extends CI_Controller {
	
public function getAll()
{
	$this->load->database();
	$query = $this->db->query("SELECT * FROM Utenti");
	$elenco_news = array();
	foreach ($query->result() as $row)
	{
		$news= new stdClass();
		$news->nome=$row->Nome;
		$news->cognome=$row->Cognome;
		$news->email=$row->email;
		$news->immagine=$row->immagine;
		$news->fascia_eta=$row->fascia_eta;
		$news->sesso=$row->sesso;
		$news->citta=$row->Citta;
		$news->data_nascita=$row->Data_nascita;
		$news->data_iscr=$row->Data_iscr;
		$news->id=$row->Id;
		array_push($elenco_news, $news);
	}
	echo json_encode($elenco_news);
}

public function getSingle($id)
{
	$this->load->database();
	$query = $this->db->query("SELECT * FROM Utenti WHERE Id=$id");
	$elenco_news = array();
	foreach ($query->result() as $row)
	{
		$news= new stdClass();
		$news->nome=$row->Nome;
		$news->cognome=$row->Cognome;
		$news->email=$row->email;
		$news->immagine=$row->immagine;
		$news->fascia_eta=$row->fascia_eta;
		$news->sesso=$row->sesso;
		$news->citta=$row->Citta;
		$news->data_nascita=$row->Data_nascita;
		$news->data_iscr=$row->Data_iscr;
		$news->id=$row->Id;
		array_push($elenco_news, $news);
	}
	echo json_encode($elenco_news);
}
}

?>