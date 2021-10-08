<?php
	/**
	 * 
	 */
	class cinema extends CI_Controller{
		public function index(){
			$this->load->view('view-input-cinema');
	}
	public function cetak()
	{
		if($this->input->post('tipe', TRUE)=="Reguler 2D")
		{
			$harga_tiket=40000;
		}
		elseif($this->input->post('tipe', TRUE)=="3D")
		{
			$harga_tiket=80000;
		}
		elseif($this->input->post('tipe', TRUE)=="Velvet")
		{
			$harga_tiket=100000;
		}

		$total=$this->input->post('jumlah', TRUE)*$harga_tiket;



		$data['judul']="Pemesanan Tiket Cinema 99";
		$data['nama']=$this->input->post('nama', TRUE);
		$data['judul']=$this->input->post('judul', TRUE);
		$data['pukul']=$this->input->post('pukul', TRUE);
		$data['tipe']=$this->input->post('tipe', TRUE);
		$data['jumlah']=$this->input->post('jumlah', TRUE);
		$data['harga_tiket']=$harga_tiket;
		$data['total']=$total;

		$this->load->view('view-output-cinema',$data);
	}
}
?>
	
		
		