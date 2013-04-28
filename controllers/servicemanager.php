<?php
class ServiceManager {
	private $db;

	public function __construct($db){
		$this->db = $db;
	}

	public function edit($idservice, $nameservice, $descservice, $hourprice) {
		$q = "UPDATE service SET nameservice = '$nameservice', hourprice = $hourprice, `descservice` = '$descservice' WHERE idservice = $idservice";
		$this->db->execute($q);
		return true;
	}

	public function add($nameservice, $descservice, $hourprice) {
		$q = "INSERT INTO service (nameservice, hourprice, `descservice`) VALUES('$nameservice',$hourprice, '$descservice')";
		$this->db->execute($q);
		return true;
	}

	public function fetchAll() {
		$q = "SELECT * FROM service";
		$data = $this->db->restoarray($this->db->execute($q));
		return $data;
	}

	public function deleteById($id) {
		$q = "DELETE FROM service WHERE idservice = $id";
		$this->db->execute($q);
		return true;
	}
}

?>