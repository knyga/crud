<?php
class ClientManager {
	private $db;

	public function __construct($db){
		$this->db = $db;
	}

	public function edit($idclient, $fnameclient, $lnameclient, $idcard) {
		$q = "UPDATE client SET fnameclient = '$fnameclient', lnameclient = '$lnameclient', idcard = $idcard WHERE idclient = $idclient";
		$this->db->execute($q);
		return true;
	}

	public function add($fnameclient, $lnameclient, $idcard) {
		$q = "INSERT INTO client (fnameclient, lnameclient, idcard) VALUES('$fnameclient', '$lnameclient', $idcard)";
		$this->db->execute($q);
		return true;
	}

	public function fetchAll() {
		$q = "SELECT * FROM client LEFT JOIN card ON client.idcard = card.idcard";
		$data = $this->db->restoarray($this->db->execute($q));
		return $data;
	}

	public function fetchAllCards() {
		$q = "SELECT * FROM card";
		$data = $this->db->restoarray($this->db->execute($q));
		return $data;
	}

	public function deleteById($id) {
		$q = "DELETE FROM client WHERE idclient = $id";
		$this->db->execute($q);
		return true;
	}
}

?>