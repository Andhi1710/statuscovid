<?php 

/**
 * 
 */
class Training_Model extends CI_Model
{


	public function getAllData()
	{
		return $this->db->get('tbl_training')->result();
	}

	public function tambah_data()
	{
		
		$data = array(
			
			'nama' => $this->input->post('nama', true),
			'jml_odp' => $this->input->post('jml_odp', true),
			'jml_pdp' => $this->input->post('jml_pdp', true),
			'aktif' => $this->input->post('aktif', true),
			'sembuh' => $this->input->post('sembuh', true),
			'meninggal' => $this->input->post('meninggal', true),
			'status_zona' => $this->input->post('status_zona', true)
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
			'meninggal' => $this->input->post('meninggal', true),
			'status_zona' => $this->input->post('status_zona', true)
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

	public function count_merah()
	{
		$this->db->where('status_zona', 'merah');
		$this->db->from('tbl_training');
		return $this->db->count_all_results();
	}

	public function count_kuning()
	{
		$this->db->where('status_zona', 'kuning');
		$this->db->from('tbl_training');
		return $this->db->count_all_results();
	}

	public function count_biru()
	{
		$this->db->where('status_zona', 'biru');
		$this->db->from('tbl_training');
		return $this->db->count_all_results();
	}
	
	public function jml_odp ($status)
	{
		
		$this->db->where('jml_odp', $status);
		$this->db->where('status_zona', "merah");
		$this->db->from('tbl_training');
		
		$merah = $this->db->count_all_results()/$this->count_merah();	
		$this->db->where('jml_odp', $status);
		$this->db->where('status_zona', "kuning");
		$this->db->from('tbl_training');
		
		$kuning = $this->db->count_all_results()/$this->count_kuning();
		$this->db->where('jml_odp', $status);
		$this->db->where('status_zona', "biru");
		$this->db->from('tbl_training');
		
		$biru = $this->db->count_all_results()/$this->count_biru();
		
		return array('merah' => $merah, 'kuning' => $kuning, 'biru' => $biru);	
	}

	public function jml_pdp ($status)
	{

		$this->db->where('jml_pdp', $status);
		$this->db->where('status_zona', "merah");
		$this->db->from('tbl_training');
		
		$merah = $this->db->count_all_results()/$this->count_merah();	
		$this->db->where('jml_pdp', $status);
		$this->db->where('status_zona', "kuning");
		$this->db->from('tbl_training');
		
		$kuning = $this->db->count_all_results()/$this->count_kuning();
		$this->db->where('jml_pdp', $status);
		$this->db->where('status_zona', "biru");
		$this->db->from('tbl_training');
		
		$biru = $this->db->count_all_results()/$this->count_biru();
		
		return array('merah' => $merah, 'kuning' => $kuning, 'biru' => $biru);
	}

	public function aktif ($status)
	{
		// $status = "Aktif";
		$this->db->where('aktif', $status);
		$this->db->where('status_zona', "merah");
		$this->db->from('tbl_training');
		$merah = $this->db->count_all_results()/$this->count_merah();	
		$this->db->where('aktif', $status);
		$this->db->where('status_zona', "kuning");
		$this->db->from('tbl_training');
		$kuning = $this->db->count_all_results()/$this->count_kuning();
		$this->db->where('aktif', $status);
		$this->db->where('status_zona', "biru");
		$this->db->from('tbl_training');
		$biru = $this->db->count_all_results()/$this->count_biru();
		return array('merah' => $merah, 'kuning' => $kuning, 'biru' => $biru);
	}

	public function sembuh($status)
	{
		// $status = "Sembuh";
		$this->db->where('sembuh', $status);
		$this->db->where('status_zona', "merah");
		$this->db->from('tbl_training');
		$merah = $this->db->count_all_results()/$this->count_merah();	
		$this->db->where('sembuh', $status);
		$this->db->where('status_zona', "kuning");
		$this->db->from('tbl_training');
		$kuning = $this->db->count_all_results()/$this->count_kuning();
		$this->db->where('sembuh', $status);
		$this->db->where('status_zona', "biru");
		$this->db->from('tbl_training');
		$biru = $this->db->count_all_results()/$this->count_biru();
		return array('merah' => $merah, 'kuning' => $kuning, 'biru' => $biru);
	}

	public function meninggal($status)
	{	
		$this->db->where('meninggal', $status);
		$this->db->where('status_zona', "merah");
		$this->db->from('tbl_training');
		$merah = $this->db->count_all_results()/$this->count_merah();	
		$this->db->where('meninggal', $status);
		$this->db->where('status_zona', "kuning");
		$this->db->from('tbl_training');
		$kuning = $this->db->count_all_results()/$this->count_kuning();
		$this->db->where('meninggal', $status);
		$this->db->where('status_zona', "biru");
		$this->db->from('tbl_training');
		$biru = $this->db->count_all_results()/$this->count_biru();
		return array('merah' => $merah, 'kuning' => $kuning, 'biru' => $biru);
	}
}
?>