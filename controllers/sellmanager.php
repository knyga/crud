<?php
class SellManager {
	private $db;

	public function __construct($db){
		$this->db = $db;
	}

	public function edit($idsell, $idservice, $iduser, $idclient, $datetime) {
		$q = "UPDATE sell SET datetime = $datetime, iduser = $iduser, idservice = $idservice, idclient = $idclient WHERE idsell = $idsell";
		$this->db->execute($q);
		return true;
	}

	public function add($idservice, $iduser, $idclient, $datetime) {
		$q = "INSERT INTO sell (datetime, iduser, idservice, idclient) VALUES($datetime, $iduser, $idservice, $idclient)";
		$this->db->execute($q);
		return true;
	}

	public function fetchAll() {
		$q = "SELECT * FROM sell INNER JOIN user ON sell.iduser = user.iduser INNER JOIN service ON sell.idservice = service.idservice INNER JOIN client ON sell.idclient = client.idclient ORDER BY sell.idsell ASC";
		$data = $this->db->restoarray($this->db->execute($q));
		return $data;
	}

	public function fetchByDateUser($iduser, $from, $to) {
		$q = "SELECT DATE(sell.datetime) as 'date', SUM(hourprice) as hourprice FROM sell INNER JOIN user ON sell.iduser = user.iduser INNER JOIN service ON sell.idservice = service.idservice INNER JOIN client ON sell.idclient = client.idclient WHERE (datetime BETWEEN '$from' AND '$to') AND user.iduser = 1 GROUP BY DATE(date)";
		$data = $this->db->restoarray($this->db->execute($q));
		return $data;
	}

	public function fetchRevenueReport($from, $to) {
		$q = "SELECT DATE(sell.datetime) as 'date', SUM(hourprice) as hourprice FROM sell INNER JOIN user ON sell.iduser = user.iduser INNER JOIN service ON sell.idservice = service.idservice INNER JOIN client ON sell.idclient = client.idclient WHERE datetime BETWEEN '$from' AND '$to' GROUP BY DATE(date)";
		$data = $this->db->restoarray($this->db->execute($q));
		return $data;
	}

	public function fetchAllByDate($from, $to) {
		$q = "SELECT DATE(sell.datetime) as 'date', fnameuser, lnameuser, fnameclient, fnameclient, nameservice, hourprice FROM sell INNER JOIN user ON sell.iduser = user.iduser INNER JOIN service ON sell.idservice = service.idservice INNER JOIN client ON sell.idclient = client.idclient WHERE datetime BETWEEN '$from' AND '$to'";
		$data = $this->db->restoarray($this->db->execute($q));
		return $data;
	}

	public function deleteById($id) {
		$q = "DELETE FROM sell WHERE idsell = $id";
		$this->db->execute($q);
		return true;
	}

	public function fetchAllServices() {
		$q = "SELECT * FROM service";
		$data = $this->db->restoarray($this->db->execute($q));
		return $data;
	}

	public function fetchAllClients() {
		$q = "SELECT * FROM client";
		$data = $this->db->restoarray($this->db->execute($q));
		return $data;
	}

	public function fetchAllUsers() {
		$q = "SELECT * FROM user";
		$data = $this->db->restoarray($this->db->execute($q));
		return $data;
	}
}

?>