<?php 

class usuario{

	private $id_usuario;
	private $des_login;
	private $des_senha;
	private $dt_cadastro;

	public function getIdusuario() {

		return $this ->id_usuario;

	}

	public function setIdusuario($value) {
			$this->id_usuario = $value;
	}
	public function getDeslogin() {

		return $this ->des_login;

	}

	public function setDeslogin($value) {
			$this->des_login = $value;
	}
	public function getDessenha() {

		return $this ->des_senha;

	}

	public function setDessenha($value) {
			$this->des_senha = $value;
	}
	public function getDtcadastro() {

		return $this ->dt_cadastro;

	}

	public function setDtcadastro($value) {
			$this->dt_cadastro = $value;

	}

	public function loadbyId($id) {

		$sql = new sql();
		$result= $sql -> select("SELECT * FROM usuario WHERE id_usuario = : ID", array(":ID"=>$id
		));

		if (count($result) > 0 ) {

			$row = $result [0];

			$this->setIdusuario($row['id_usuario']);
			$this->setDeslogin($row['des_login']);
			$this->setDessenha($row['des_senha']);
			$this->setDtcadastro(new DateTime($row['dt_cadastro']));

		}
	}
	public static function getList(){

		$sql = new Sql();
		return $sql->select("SELECT * FROM usuario   ORDER BY des_login;");


	}
	public static function search($Login) {
		$sql = new Sql();

		return $sql->select("SELECT * FROM usuario WHERE des_login LIKE :SEARCH ORDER BY des_login",array(':SEARCH => "%'.$login."%"));

	}
	public function login($login ,$password) {

		$sql = new sql();
		$result= $sql -> select("SELECT * FROM usuario WHERE des_login = :LOGIN AND des_desenha = :PASSWORD", array(":LOGIN"=>$login,
			":PASSWORD"=>$password
		));

		if (count($result) > 0 ) {

			$row = $result [0];

			$this->setIdusuario($row['id_usuario']);
			$this->setDeslogin($row['des_login']);
			$this->setDessenha($row['des_senha']);
			$this->setDtcadastro(new DateTime($row['dt_cadastro']));

		}else 
			 trow new Exception ("Login ou senha invalidos");
	}

	public function __toString(){

		return json_encode(array(
			"id_usuario"=>$this->getIdusuario(),
			"des_login"=>$this->getDeslogin(),
			"des_senha"=>$this->getDessenha(),
			"dt_cadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
		));
	}
}



 ?>