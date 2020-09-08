<?php
Class Chart_Model extends CI_Model
{
	function Jum_zona()
	{
		$this->db->group_by('status_zona');
		$this->db->select('status_zona');
		$this->db->select("count(*) as total");
		return $this->db->from('tbl_training')
		->get()
		->result();
	}
	// function Jum_pkh()
	// {
	// 	$this->db->group_by('pkh');
	// 	$this->db->select('pkh');
	// 	$this->db->select("count(*) as total");
	// 	return $this->db->from('tbl_training')
	// 	->get()
	// 	->result();
	// }

	function total_rows() 
	{
		return $this->db->get('tbl_training')->num_rows();
	}
}
?>