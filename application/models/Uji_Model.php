<?php 

/**
 * 
 */
class Uji_Model extends CI_Model
{
	public function getAllData()
	{
		return $this->db->get('tbl_training')->result();
	}

	public function tambah_data($kesimpulan)
	{
		$data = array(
			'nama' => $this->input->post('nama', true),
			'jml_odp' => $this->input->post('jml_odp', true),
			'jml_pdp' => $this->input->post('jml_pdp', true),
			'aktif' => $this->input->post('aktif', true),
			'sembuh' => $this->input->post('sembuh', true),
			'meninggal' => $this->input->post('meninggal', true),
			'status_zona' =>$kesimpulan
		);

		$this->db->insert('tbl_training', $data);
	}

	public function ubah_data( )
	{
		$data = array(
			'nama' => $this->input->post('nama', true),
			'jml_odp' => $this->input->post('jml_odp', true),
			'jml_pdp' => $this->input->post('jml_pdp', true),
			'aktif' => $this->input->post('aktif', true),
			'sembuh' => $this->input->post('sembuh', true),
			'meninggal' => $this->input->post('meninggal', true)
		);
		$this->db->where('id_training', $this->input->post('id_training', true));
		$this->db->update('tbl_training', $data);
	}

	public function hapus_data($id)
	{
		$this->db->delete('tbl_training', ['id_training' => $id]);
	}

	public function detail_data($id)
	{
		return $this->db->get_where('tbl_training', ['id_training' => $id]) ->row_array(); 
	}
}
?>