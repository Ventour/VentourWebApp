class Prova_model extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }

        public function get_nome()
        {
            $this->load->database();
			$query = $this->db->query("SELECT Titolo FROM Attivita");
			$value = $query->row();
			$data["test"] = $value->Titolo;
            //$query = $this->db->get('entries', 10);
            return $query->row();
        }
}