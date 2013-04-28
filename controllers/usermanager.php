<?php
class UserManager {
	private $db;
	private $id_name = "__userid";
	private $year = 31536000;

	public function __construct($db){
		$this->db = $db;
	}

	public function authorize($login, $password) {
		$q = "SELECT * FROM user WHERE login = '$login' AND password = '$password'";
		$data = $this->db->restoarray($this->db->execute($q));
		$data = $data[0];
		if($data) {
			setcookie($this->id_name,$data["iduser"],time()+$this->year, "/"); 
			return true;
		}
		else {
			$this->logout();
			return false;
		}
	}

	public function getRights() {
		if(!$this->isAuthorized()) return false;
		$id = $_COOKIE[$this->id_name];
		$q = "SELECT * FROM user INNER JOIN user_type ON user.iduser_type = user_type.iduser_type WHERE iduser = $id";
		$data = $this->db->restoarray($this->db->execute($q));
		$data = $data[0];
		
		$response = array();
		$response["client_access"] = $data["client_access"];
		$response["service_access"] = $data["service_access"];
		$response["card_acceess"] = $data["card_acceess"];
		$response["tarif_access"] = $data["tarif_access"];
		$response["report_access"] = $data["report_access"];

		return $response;
	}

	public function isAuthorized() {
		if($_COOKIE[$this->id_name]){
			return true;
		} else {
			return false;
		}
	}

	public function logout(){
		setcookie($this->id_name,"",0, "/");
		return true;
	}

	public function getUserById($id){
		$q = "SELECT * FROM user WHERE iduser = $id";
		$data = $this->db->restoarray($this->db->execute($q));
		return $data[0];
	}
}

?>