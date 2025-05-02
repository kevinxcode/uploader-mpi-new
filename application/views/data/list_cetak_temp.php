<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>LIST DATA CETAK ABC</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
		text-decoration: none;
	}

	a:hover {
		color: #97310e;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
		min-height: 96px;
	}

	p {
		margin: 0 0 10px;
		padding:0;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	
<div style="padding-left: 15px">
<h3>LIST DATA CETAK : <?php echo $page; ?></h1>
<form action="<?php echo base_url(); ?>abc/list_cetak"  method="get" enctype="multipart/form-data">
  <input type="text" name="dt1" value="<?php echo $dt1; ?>" >
  <input type="text" name="dt2" value="<?php echo $dt2; ?>" >
  <input type="submit" name="check"  value="SUBMIT"  class="button">
  <input type="submit" name="check"  value="PDF"  class="button">
</form>
</div>

<div id="body">
<!--  -->

  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  
  <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
  <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
  <div class="table-responsive">
  <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No.Orcl</th>
                <th>Tanggal</th>
                <th>Customer</th>
                <th>Deskripsi</th>
                <th>Bahan</th>
                <th>Sisi</th>
                <th>UK 1</th>
                <th>X</th>
                <th>UK 2</th>
                <th>M</th>
                <th>JUMLAH</th>
                <th>PCS</th>
                <th>Finishing</th>
                <th>Desain</th>
                <th>Harga Modal</th>
                <th>Unit Price Modal</th>
                <th>Total Modal</th>
                <th>Harga</th>
                <th>Unit Price</th>
                <th>Total</th>
                <th>Balance</th>
                <th>Dp</th>
                <th>PPN</th>
                <th>Actual Amount</th>
                <th>Sisa Bayar</th>
                <th>Tgl DP</th>
                <th>Tgl Lunas</th>
                <th>No.Invoice</th>
                <th>Status</th>
                <th>Validasi</th>
                <th>USER</th>
                <th>Mesin</th>
            </tr>
        </thead>
        
        <tbody>
			<?php foreach($list as $dt) { ?>
            <tr>
                <td><?php echo $dt->id; ?></td>
                <td><?php echo $dt->Tanggal; ?></td>
                <td><?php echo $dt->Customer; ?></td>
                <td><?php echo $dt->Deskripsi; ?></td>
                <td><?php echo $dt->Bahan; ?></td>
                <td><?php echo $dt->Sisi; ?></td>
                <td><?php echo $dt->Uk1; ?></td>
                <td><?php echo $dt->X; ?></td>
                <td><?php echo $dt->Uk2; ?></td>
                <td><?php echo $dt->M; ?></td>
                <td><?php echo $dt->Jumlah; ?></td>
                <td><?php echo $dt->Pcs; ?></td>
                <td><?php echo $dt->Finishing; ?></td>
                <td><?php echo $dt->Desain; ?></td>
                <td><?php echo $dt->HargaModal; ?></td>
                <td><?php echo $dt->UnitPriceModal; ?></td>
                <td><?php echo $dt->TotalModal; ?></td>
                <td><?php echo $dt->Harga; ?></td>
                <td><?php echo $dt->UnitPrice; ?></td>
                <td><?php echo $dt->Total; ?></td>
                <td><?php echo $dt->Balance; ?></td>
                <td><?php echo $dt->Dp; ?></td>
                <td><?php echo $dt->Ppn; ?></td>
                <td><?php echo $dt->ActualAmount; ?></td>
                <td><?php echo $dt->SisaBayar; ?></td>
                <td><?php echo $dt->Tgl_DP; ?></td>
                <td><?php echo $dt->Tgl_Lunas; ?></td>
                <td><?php echo $dt->NoInvoice; ?></td>
                <td><?php echo $dt->Status; ?></td>
                <td><?php echo $dt->Validasi; ?></td>
                <td><?php echo $dt->User; ?></td>
                <td><?php echo $dt->Mesin; ?></td>
            </tr>
			<?php } ?>
            
        </tbody>
    </table>
	</div>
  <script>
  $(document).ready(function(){
    $('#tabel-data').DataTable();
});
  </script>


<!--  -->
	</div>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>
<script>
	function uploadData(){
		$('#btn_submit').hide();
		$('#load').show();
	}
</script>

<style>
.button {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 8px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>


