<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpi extends CI_Controller {

	public function index(){
		$this->load->view('welcome_message');
	}

	public function data_cetak(){
		$msg = $this->input->get('msg');
		$data['msg'] = $msg;
		$this->load->view('mpi/data_cetak_temp', $data);
	}

	function kas_harian(){
		$msg = $this->input->get('msg');
		$data['msg'] = $msg;
		$this->load->view('mpi/kas_harian', $data);
	}

	function pengeluaran(){
		$msg = $this->input->get('msg');
		$data['msg'] = $msg;
		$this->load->view('mpi/pengeluaran_temp', $data);
	}

	function uplpoad_data_cetak(){
		set_time_limit(500000000000000000); // 
		if(isset($_POST['import'])){ // Jika user mengklik tombol Import
			// ambil data file
			$namaFile = $_FILES['namafile']['name'];
			$namaSementara = $_FILES['namafile']['tmp_name'];
			$ext = pathinfo($namaFile, PATHINFO_EXTENSION);
			$namabaru = "excel_import.".$ext;
			$dirUpload = "tmp/";
			$terupload = move_uploaded_file($namaSementara, $dirUpload.$namabaru);
			$path = 'tmp/' . $namabaru; // Set tempat menyimpan file tersebut dimana
		  
			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			$spreadsheet = $reader->load($path); // Load file yang tadi diupload ke folder tmp
			$sheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
		
			$numrow = 1;
			$count = count($sheet);
			foreach($sheet as $row){
			  $id = $row['A']; 
			  $Tanggal = $row['B']; 
			  $Customer = $row['C']; 
			  $Deskripsi = $row['D']; 
			  $Bahan = $row['E']; 
			  $Sisi = $row['F']; 
			  $Uk1 = $row['G']; 
			  $X = $row['H']; 
			  $Uk2 = $row['I']; 
			  $M = $row['J']; 
			  $Jumlah = $row['K']; 
			  $Pcs = $row['L']; 
			  $Finishing = $row['M']; 
			  $Desain = $row['N']; 
			  $HargaModal = $row['O']; 
			  $UnitPriceModal = $row['P']; 
			  $TotalModal = $row['Q']; 
			  $Harga = $row['R']; 
			  $UnitPrice = $row['S']; 
			  $Total = $row['T']; 
			  $Balance = $row['U']; 
			  $Dp = $row['V']; 
			  $Ppn = $row['W']; 
			  $ActualAmount = $row['X']; 
			  $SisaBayar = $row['Y']; 
			  $Tgl_DP = $row['Z']; 
			  $Tgl_Lunas = $row['AA']; 
			  $NoInvoice = $row['AB']; 
			  $Status = $row['AC']; 
			  $Validasi = $row['AD']; 
			  $User = $row['AE']; 
			  $Mesin = $row['AF']; 

			  $data[] = array(
				'id' => $id,
				'Tanggal' => $Tanggal,
				'Customer' => $Customer,
				'Deskripsi' => $Deskripsi,
				'Bahan' => $Bahan,
				'Sisi' => $Sisi,
				'Uk1' => $Uk1,
				'X' => $X,
				'Uk2' => $Uk2,
				'M' => $M,
				'Jumlah' => $Jumlah,
				'Pcs' => $Pcs,
				'Finishing' => $Finishing,
				'Desain' => $Desain,
				'HargaModal' => $HargaModal,
				'UnitPriceModal' => $UnitPriceModal,
				'TotalModal' => $TotalModal,
				'Harga' => $Harga,
				'UnitPrice' => $UnitPrice,
				'Total' => $Total,
				'Balance' => $Balance,
				'Dp' => $Dp,
				'Ppn' => $Ppn,
				'ActualAmount' => $ActualAmount,
				'SisaBayar' => $SisaBayar,
				'Tgl_DP' => $Tgl_DP,
				'Tgl_Lunas' => $Tgl_Lunas,
				'NoInvoice' => $NoInvoice,
				'Status' => $Status,
				'Validasi' => $Validasi,
				'User' => $User,
				'Mesin' => $Mesin,
			);
// 			
			$numrow++; 
		}
			unlink($path); 
		}
		foreach($data as $dt){
			$data = array(
				'id' => $dt['id'],
				'Tanggal' => $dt['Tanggal'],
				'Customer' => $dt['Customer'],
				'Deskripsi' => $dt['Deskripsi'],
				'Bahan' => $dt['Bahan'],
				'Sisi' => $dt['Sisi'],
				'Uk1' => $dt['Uk1'],
				'X' => $dt['X'],
				'Uk2' => $dt['Uk2'],
				'M' => $dt['M'],
				'Jumlah' => $dt['Jumlah'],
				'Pcs' => $dt['Pcs'],
				'Finishing' => $dt['Finishing'],
				'Desain' => $dt['Desain'],
				'HargaModal' => $dt['HargaModal'],
				'UnitPriceModal' => $dt['UnitPriceModal'],
				'TotalModal' => $dt['TotalModal'],
				'Harga' => $dt['Harga'],
				'UnitPrice' => $dt['UnitPrice'],
				'Total' => $dt['Total'],
				'Balance' => $dt['Balance'],
				'Dp' => $dt['Dp'],
				'Ppn' => $dt['Ppn'],
				'ActualAmount' => $dt['ActualAmount'],
				'SisaBayar' => $dt['SisaBayar'],
				'Tgl_DP' => $dt['Tgl_DP'],
				'Tgl_Lunas' => $dt['Tgl_Lunas'],
				'NoInvoice' => $dt['NoInvoice'],
				'Status' => $dt['Status'],
				'Validasi' => $dt['Validasi'],
				'User' => $dt['User'],
				'Mesin' => $dt['Mesin'],
			);
			$this->mpidb = $this->load->database('mpidb', TRUE);
			$check = $this->check_data_cetak($dt['id']);
			if($check==2){
				$this->mpidb->insert('datacetak', $data);
			}else{
				$this->mpidb->where('id', $dt['id']);
				$this->mpidb->update('datacetak', $data);
			}
		}
		redirect('?msg=success&&com=MPI DATA CETAK&&count='.$count);
	}

	function check_data_cetak($id){
		$this->mpidb = $this->load->database('mpidb', TRUE);
		$sql = "select id from datacetak where id='$id'";
		$query = $this->mpidb->query($sql);
		if($query->num_rows() > 0){
			return 1;
		}else{
			return 2;
		}
	}

	function upload_pengeluaran(){
		set_time_limit(500000000000000000); // 
		if(isset($_POST['import'])){ // Jika user mengklik tombol Import
			// ambil data file
			$namaFile = $_FILES['namafile']['name'];
			$namaSementara = $_FILES['namafile']['tmp_name'];
			$ext = pathinfo($namaFile, PATHINFO_EXTENSION);
			$namabaru = "excel_import.".$ext;
			$dirUpload = "tmp/";
			$terupload = move_uploaded_file($namaSementara, $dirUpload.$namabaru);
			$path = 'tmp/' . $namabaru; // Set tempat menyimpan file tersebut dimana
		  
			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			$spreadsheet = $reader->load($path); // Load file yang tadi diupload ke folder tmp
			$sheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
		
			$numrow = 1;
			$count = count($sheet);
			foreach($sheet as $row){
			  $a = $row['A']; 
			  $b = $row['B']; 
			  $c = $row['C']; 
			  $d = $row['D']; 
			 

			$data = array(
				'id' => $a,
				'Tanggal' => $b,
				'Keterangan' => $c,
				'Jumlah' => $d,
			);
			$this->mpidb = $this->load->database('mpidb', TRUE);
			$check = $this->check_pengeluaran($a);
			if($check==2){
				$this->mpidb->insert('pengeluaran', $data);
			}else{
				$this->mpidb->where('id', $a);
				$this->mpidb->update('pengeluaran', $data);
				
			}
			$numrow++; 
			 }
			unlink($path); 
		}
		redirect('?msg=success&&com=MPI PENGELUARAN&&count='.$count);
	}

	function check_pengeluaran($id){
		$this->mpidb = $this->load->database('mpidb', TRUE);
		$sql = "select id from pengeluaran where id='$id'";
		$query = $this->mpidb->query($sql);
		if($query->num_rows() > 0){
			return 1;
		}else{
			return 2;
		}
	}

	function upload_kas(){
		set_time_limit(500000000000000000); // 
		if(isset($_POST['import'])){ // Jika user mengklik tombol Import
			// ambil data file
			$namaFile = $_FILES['namafile']['name'];
			$namaSementara = $_FILES['namafile']['tmp_name'];
			$ext = pathinfo($namaFile, PATHINFO_EXTENSION);
			$namabaru = "excel_import.".$ext;
			$dirUpload = "tmp/";
			$terupload = move_uploaded_file($namaSementara, $dirUpload.$namabaru);
			$path = 'tmp/' . $namabaru; // Set tempat menyimpan file tersebut dimana
		  
			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			$spreadsheet = $reader->load($path); // Load file yang tadi diupload ke folder tmp
			$sheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
		
			$numrow = 1;
			$count = count($sheet);
			foreach($sheet as $row){
			  $a = $row['A']; 
			  $b = $row['B']; 
			  $c = $row['C']; 
			  $d = $row['D']; 
			  $e = $row['E']; 
			  $f = $row['F']; 
			  $g = $row['G']; 
			  $h = $row['H']; 
			  $i = $row['I']; 
			  $j = $row['J']; 
			 

			$data = array(
				'Tanggal' => $a,
				'NoInvoice' => $b,
				'Customer' => $c,
				'Dp' => $d,
				'SisaBayar' => $e,
				'Saldo' => $f,
				'StatusBayar' => $g,
				'Tgl_DP' => $h,
				'Tgl_Lunas' => $i,
				'Keterangan' => $j,
			);
			$this->mpidb = $this->load->database('mpidb', TRUE);
			$check = $this->check_pemasukan($b);
			if($check==2){
				$this->mpidb->insert('pemasukkan', $data);
			}else{
				$this->mpidb->where('NoInvoice', $b);
				$this->mpidb->update('pemasukkan', $data);
			}
			$numrow++; 
			}
			unlink($path); 
		}
		redirect('?msg=success&&com=MPI KAS HARIAN&&count='.$count);
	}

	function check_pemasukan($id){
		$this->mpidb = $this->load->database('mpidb', TRUE);
		$sql = "select NoInvoice from pemasukkan where NoInvoice='$id'";
		$query = $this->mpidb->query($sql);
		if($query->num_rows() > 0){
			return 1;
		}else{
			return 2;
		}
	}
}
