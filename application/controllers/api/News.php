<?php
class News extends CI_Controller {
	
public function getAll()
{
	$this->load->database();
	$query = $this->db->query("SELECT * FROM Attivita");
	$elenco_news = array();
	foreach ($query->result() as $row)
	{
		$news = new stdClass();
		$news->id = $row->Id;
		$news->titolo = $row->Titolo;
		$news->attivitra = $row->Attivita1;
		$news->descrizione = $row->Descrizione;
		$news->categoria = $row->Categoria;
		$news->luogo = $row->Luogo;
		$news->data_attivita = $row->Data_attivita;
		$news->sesso = $row->Sesso;
		$news->data_inserimento = $row->Data_inserimento;
		array_push($elenco_news, $news);
	}
	echo json_encode($elenco_news);
}

public function getSingle($id)
{
	$this->load->database();
	$query = $this->db->query("SELECT * FROM Attivita WHERE id=$id");
	$elenco_news = array();
	foreach ($query->result() as $row)
	{
		$news = new stdClass();
		$news->id = $row->Id;
		$news->titolo = $row->Titolo;
		$news->attivitra = $row->Attivita1;
		$news->descrizione = $row->Descrizione;
		$news->categoria = $row->Categoria;
		$news->luogo = $row->Luogo;
		$news->data_attivita = $row->Data_attivita;
		$news->sesso = $row->Sesso;
		$news->data_inserimento = $row->Data_inserimento;
		array_push($elenco_news, $news);
	}
	echo json_encode($elenco_news);
}
}

?>