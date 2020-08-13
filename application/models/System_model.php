<?php
require_once 'Base_model.php';

class System_model extends Base_model
{
	public $table = 'system';
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	public function getinfo()
	{
		$this->db->where('id',1);
		$query = $this->db->get($this->table);

		return $query->row();

	}

	public function update()
	{
		$data = array(
			'name' => $this->input->post_get('name', true),
			'step' => $this->input->post_get('step', true),
			'logo' => $this->input->post_get('logo', true),
		);

		//只修改第一条
		$this->db->where('id', 1);
		$this->db->update($this->table, $data);

		return $this->db->affected_rows();

	}


}


