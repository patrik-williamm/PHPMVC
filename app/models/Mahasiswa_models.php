<?php

class Mahasiswa_models {

	private $table = 'mahasiswa';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllMhs() 
	{
		$this->db->query('SELECT * FROM '.$this->table);
		return $this->db->resultSet();
	}

	public function getDetail($id)
	{
		$this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	public function tambahDataMahasiswa($data)
	{
		$query = "INSERT INTO mahasiswa VALUES ( '', :nama, :nim, :email, :jurusan )";

		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('nim', $data['nim']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('jurusan', $data['jurusan']);

		$this->db->execute();
		return $this->db->rowCount();
	}

	public function hapusDataMahasiswa($id)
	{
		$query = 'DELETE FROM mahasiswa WHERE id=:id';
		$this->db->query($query);

		$this->db->bind('id', $id);

		$this->db->execute();
		return $this->db->rowCount();
	}

	public function editDataMahasiswa($data)
	{
		$query = 'UPDATE mahasiswa SET id=:id, nama=:nama, nim=:nim, email=:email, jurusan=:jurusan WHERE id=:id';
		$this->db->query($query);

		$this->db->bind('id', $data['id']);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('nim', $data['nim']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('jurusan', $data['jurusan']);

		$this->db->execute();
		return $this->db->rowCount();
	}
}