<?php

class Usuario
{
	private $id;
	private $nombre;
	private $apellidos;
	private $email;
	private $password;
	private $rol;
	private $imagen;
	private $db;

	public function __construct()
	{
		$this->db = new DataBase();
	}

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getNombre()
	{
		return $this->nombre;
	}

	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}

	public function getApellidos()
	{
		return $this->apellidos;
	}

	public function setApellidos($apellidos)
	{
		$this->apellidos = $apellidos;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}                                                                                                                                                                                                                                                                                                                                                                                                                                                                             

	public function getPassword()
	{
		return password_hash($this->password, PASSWORD_BCRYPT, ['cost' => 4]);;
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}

	public function getRol()
	{
		return $this->rol;
	}

	public function setRol($rol)
	{
		$this->rol = $rol;
	}

	public function getImagen()
	{
		return $this->imagen;
	}

	public function setImagen($imagen)
	{
		$this->imagen = $imagen;
	}

	public function save()
	{
		$sql = "INSERT INTO usuarios VALUES(NULL,:nombre, :apellidos, :email, :password, 'user', NULL)";
		$ins = $this->db->prepare($sql);
		$nom = $this->getNombre();
		$apell = $this->getApellidos();
		$mail = $this->getEmail();
		$password = password_hash($this->getPassword(), PASSWORD_BCRYPT, ['cost' => 4]);
		$ins->bindParam(':nombre', $nom, PDO::PARAM_STR);
		$ins->bindParam(':apellidos',$apell, PDO::PARAM_STR);
		$ins->bindParam(':email',$mail, PDO::PARAM_STR);
		$ins->bindParam(':password',$password, PDO::PARAM_STR);
		$ins->execute();
		$result = false;
		if($ins){
			$result = true;
		}
		$db = null;
		return $result;
	}

	public function login()
	{

		$email = $this->email;
		$password = $this->password;
		$result = false;
		$sql = "SELECT * FROM usuarios where email = '$email'";
		$login = $this->db->query($sql);

		if ($login && $login->num_rows == 1) {
			$usuario = $login->fetchObject();
			$verify = password_verify($password, $usuario->password);

			if ($verify) {
				$result = $usuario;
			}
		}
		return $result;
	}
}