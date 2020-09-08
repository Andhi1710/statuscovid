<?php 

/**
 * 
 */
class DataUji extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Uji_Model');
		$this->load->model('Training_Model');
		$this->load->library('form_validation');
	}

	function index()
	{

		$data['training'] = $this->Training_Model->getAllData();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('uji/index', $data);
		$this->load->view('templates/footer');
	}

	public function hapus($id)
	{
		$this->Uji_Model->hapus_data($id);
		$this->session->set_flashdata('flash_uji', 'Dihapus');
		redirect('DataUji');
	}

	public function ubah($id)
	{

		$this->form_validation->set_rules("nama", "Nama ", "required");
		$this->form_validation->set_rules("jml_odp", "Jumlah ODP ", "required");
		$this->form_validation->set_rules("jml_pdp", "Jumlah PDP ", "required");
		$this->form_validation->set_rules("aktif", "Jumlah Aktif ", "required");
		$this->form_validation->set_rules("sembuh", "Jumlah Sembuh", "required");
		$this->form_validation->set_rules("meninggal", "Jumlah Meninggal", "required");
		$this->form_validation->set_rules("status_zona", "Status Zona", "required");


		if ($this->form_validation->run() == FALSE)
		{
			$data['ubah']= $this->Uji_Model->detail_data($id);
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('uji/ubah', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$this->Uji_Model->ubah_data();
			$this->session->set_flashdata('flash_uji', 'DiUbah');
			redirect('DataUji');
		} 
	}

	function hitung(){
		$output = "";
		$this->form_validation->set_rules("nama", "Nama ", "required");
		$this->form_validation->set_rules("jml_odp", "Jumlah ODP ", "required");
		$this->form_validation->set_rules("jml_pdp", "Jumlah PDP ", "required");
		$this->form_validation->set_rules("aktif", "Jumlah Aktif ", "required");
		$this->form_validation->set_rules("sembuh", "Jumlah Sembuh", "required");
		$this->form_validation->set_rules("meninggal", "Jumlah Meninggal", "required");
		if ($this->form_validation->run() == FALSE)
		{
			$data['ubah']= $this->Uji_Model->detail_data($id);
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('uji/ubah', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$jml_odp = array();
			$jml_pdp = array();
			$aktif = array();
			$sembuh = array();
			$meninggal = array();
			$status_zona = array();

			$jumlah_merah = $this->Training_Model->count_merah();
			$jumlah_kuning = $this->Training_Model->count_kuning();
			$jumlah_biru = $this->Training_Model->count_biru();
			$total_training = $jumlah_merah+$jumlah_kuning+$jumlah_biru;
			$jml_odp = $this->Training_Model->jml_odp($this->input->post('jml_odp'));
			$jml_pdp = $this->Training_Model->jml_pdp($this->input->post('jml_pdp'));
			$aktif = $this->Training_Model->aktif($this->input->post('aktif'));
			$sembuh = $this->Training_Model->sembuh($this->input->post('sembuh'));
			$meninggal = $this->Training_Model->meninggal($this->input->post('meninggal'));

  //perhitungan //Step 1
			
			$output .= "
			<table id='example1' class='table table-bordered table-striped'>
			<thead>
			<tr>
			<th>Jumlah Data</th>
			<th>Kelas PC2(Merah)</th>
			<th>Kelas PC1(Kuning)</th>
			<th>Kelas PC0(Biru)</th>
			</tr>
			<tr>
			<td>" .$total_training. "</td>
			<td>" .$jumlah_merah. "</td>
			<td>" .$jumlah_kuning. "</td>
			<td>" .$jumlah_biru. "</td>
			</tr>
			</thead>
			</table>";



   //Step 1
   //tampil
			$PC2 = round($jumlah_merah/($jumlah_biru+$jumlah_kuning+$jumlah_merah), 3);
			$PC1 = round($jumlah_kuning/($jumlah_biru+$jumlah_kuning+$jumlah_merah), 3);
			$PC0 = round($jumlah_biru/($jumlah_biru+$jumlah_kuning+$jumlah_merah), 3);

			$kelas_merah = round($jml_odp['merah'],3)*round($jml_pdp['merah'], 3)*round($aktif['merah'], 3)*round($sembuh['merah'], 3)*round($meninggal['merah'], 3)*$PC2;
			$kelas_kuning = round($jml_odp['kuning'],3)*round($jml_pdp['kuning'], 3)*round($aktif['kuning'], 3)*round($sembuh['kuning'], 3)*round($meninggal['kuning'], 3)*$PC1;
			$kelas_biru = round($jml_odp['biru'],3)*round($jml_pdp['biru'], 3)*round($aktif['biru'], 3)*round($sembuh['biru'], 3)*round($meninggal['biru'], 3)*$PC0;

			$output .= "----Probabilitas Prior----<br>";
			$output .= "
			<table id='example1' class='table table-bordered table-striped'>
			<thead>
			<tr>
			<th>Kelas PC2(Merah)</th>
			<th>Kelas PC1(Kuning)</th>
			<th>Kelas PC0(Biru)</th>
			</tr>
			<tr>
			<td>" .$PC2. "</td>
			<td>" .$PC1. "</td>
			<td>" .$PC0. "</td>
			</tr>
			</thead>
			</table>";




   //STEP 2
			// $output .= "----Probabilitas Posterior----<br>";
			// $output .= "status_PKH : ";
			// $output .= var_dump($status_PKH);
			// $output .= "<br>";
			// $output .= "jumlah tanggungan : ";
			// $output .= var_dump($jml_pdp);
			// $output .= "<br>";
			// $output .= "aktif : ";
			// $output .= var_dump($aktif);
			// $output .= "<br>";
			// $output .= "kondisi_rumah : ";
			// $output .= var_dump($kondisi_rumah);
			// $output .= "<br>";
			// $output .= "jml_penghasilan : ";
			// $output .= var_dump($jml_penghasilan);
			// $output .= "<br>";
			// $output .= "status_rumah : ";
			// $output .= var_dump($status_rumah);
			// $output .= "<br><br>";


   //step 3
			$output .= "<br>----Probabilitas Data Uji di Dapat dari Probabilitas Posterior ----<br>";
			$output .= "
			<table id='example1' class='table table-bordered table-striped'>
			<thead>
			<tr>
			<th> </th>
			<th>ODP</th>
			<th>PDP</th>
			<th>Aktif</th>
			<th>Sbh</th>
			<th>Wafat</th>
			<th>Proba bilitas</th>
			</tr>
			<tr>
			<td>PC2 (Merah)</th>
			<td>" .round($jml_odp['merah'],3). "</td>
			<td>" .round($jml_pdp['merah'], 3). "</td>
			<td>" .round($aktif['merah'], 3). "</td>
			<td>" .round($sembuh['merah'], 3). "</td>
			<td>".round($meninggal['merah'], 3). "</td>
			
			<td>".$kelas_merah. "</td>
			</tr>

			<tr>
			<td>PC1 (Kuning)</th>
			<td>" .round($jml_odp['kuning'],3). "</td>
			<td>" .round($jml_pdp['kuning'], 3). "</td>
			<td>" .round($aktif['kuning'], 3). "</td>
			<td>" .round($sembuh['kuning'], 3). "</td>
			<td>".round($meninggal['kuning'], 3). "</td>

			<td>".$kelas_kuning. "</td>
			</tr>

			<tr>
			<td>PC0 (Biru)</th>
			<td>" .round($jml_odp['biru'],3). "</td>
			<td>" .round($jml_pdp['biru'], 3). "</td>
			<td>" .round($aktif['biru'], 3). "</td>
			<td>" .round($sembuh['biru'], 3). "</td>
			<td>".round($meninggal['biru'], 3). "</td>

			<td>".$kelas_biru. "</td>
			</tr>
			</thead>
			</table>";


			// $output .= "----Probabilitas Data Uji----<br>";
			// $output .= "-PCO (Tidak Layak) <br> ";

			// $output .= "Status PKH: ".round($status_PKH['tidaklayak'],2);
			// $output .= "<br>Jumlah Tanggungan: ".round($jml_pdp['tidaklayak'], 2);
			// $output .= "<br>Kepala Rumah Tangga: ".round($aktif['tidaklayak'], 2);
			// $output .= "<br>Kondisi Rumah: ".round($kondisi_rumah['tidaklayak'], 2);
			// $output .= "<br>Jumlah Penghasilan: ".round($jml_penghasilan['tidaklayak'], 2);
			// $output .= "<br>Status Rumah: ".round($status_rumah['tidaklayak'], 2);
			// $output .= "<br>Hasil Probabilitas: ";

			// $output .= $kelas_tidak_layak = round($status_PKH['tidaklayak'],2)*round($jml_pdp['tidaklayak'], 2)*round($aktif['tidaklayak'], 2)*round($kondisi_rumah['tidaklayak'], 2)*round($jml_penghasilan['tidaklayak'], 2)*round($status_rumah['tidaklayak'], 2)*$PC0;

			// $output .= " </br><br>";
			// $output .= "-PC1 (Layak)<br>";

			// $output .= "Status PKH: ".round($status_PKH['layak'],2);
			// $output .= "<br>Jumlah Tanggungan: ".round($jml_pdp['layak'], 2);
			// $output .= "<br>Kepala Rumah Tangga: ".round($aktif['layak'], 2);
			// $output .= "<br>Kondisi Rumah: ".round($kondisi_rumah['layak'], 2);
			// $output .= "<br>Jumlah Penghasilan: ".round($jml_penghasilan['layak'], 2);
			// $output .= "<br>Status Rumah: ".round($status_rumah['layak'], 2);
			// $output .= "<br> Hasil Probabilitas: ";
			// $output .= $kelas_layak = round($status_PKH['layak'],2)*round($jml_pdp['layak'], 2)*round($aktif['layak'], 2)*round($kondisi_rumah['layak'], 2)*round($jml_penghasilan['layak'], 2)*round($status_rumah['layak'], 2)*$PC1;
			
			$kesimpulan ="";
			$operator="";
			if ($kelas_merah > $kelas_kuning) {
				$kesimpulan = "merah";
				$operator = "=>";
			}
			elseif ($kelas_kuning >= $kelas_biru) {
				$kesimpulan = "kuning";
				$operator = "=>";
			}
			elseif ($kelas_merah < $kelas_biru) {
				$kesimpulan = "biru";
				$operator = "=>";
			}
			else { echo "Maaf, Zona tidak terdeteksi";
			}
			

			$output .= "*Kelas merah(PC0)". $operator."Kelas kuning(PC1)". $operator."Kelas biru(PC2)
			<br>Dapat disimpulkan Bahwa Data Uji tersebut Zona <b><u>".$kesimpulan."</u></b> Untuk Daerah tersebut";

      // masukan hasil kesimpulan dalam parameter untuk di save
			$this->Uji_Model->tambah_data($kesimpulan);
			$this->session->set_flashdata('flash_uji','dihitung' );
			$this->session->set_flashdata('flash_hitung', $output );
			redirect('DataUji');
		} 
	}




}
?>