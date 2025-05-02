<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>MPI group Uploader</title>

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
	<?php if($alert==1): ?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  <strong> <?php echo $msg; ?> </strong> <?php echo $com; ?> - <?php echo $count; ?> data
</div>
<?php endif; ?>
<div id="container">
	<h1>Home Uploader</h1>

	<div id="body">
	<table style="width:100%">
  <tr>
    <th>ABC PRINT</th>
    <th>MPI</th>
		<th>EXPRESS</th>
    <th>NAGOYA</th>
  </tr>
  <tr>
    <td><a href="<?php echo base_url(); ?>abc/data_cetak" class="button" >DATA CETAK</a></td>
    <td><a href="<?php echo base_url(); ?>mpi/data_cetak" class="button" >DATA CETAK</a></td>
	<td><a href="<?php echo base_url(); ?>express/data_cetak" class="button" >DATA CETAK</a></td>
    <td><a href="<?php echo base_url(); ?>nagoya/data_cetak" class="button" >DATA CETAK</a></td>
  </tr>
  <tr>
  	<td><a href="<?php echo base_url(); ?>abc/kas_harian" class="button" >KAS HARIAN</a></td>
    <td><a href="<?php echo base_url(); ?>mpi/kas_harian" class="button" >KAS HARIAN</a></td>
		<td><a href="<?php echo base_url(); ?>express/kas_harian" class="button" >KAS HARIAN</a></td>
    <td><a href="<?php echo base_url(); ?>nagoya/kas_harian" class="button" >KAS HARIAN</a></td>
  </tr>
  <tr>
  	<td><a href="<?php echo base_url(); ?>abc/pengeluaran" class="button" >PENGELUARAN</a></td>
    <td><a href="<?php echo base_url(); ?>mpi/pengeluaran" class="button" >PENGELUARAN</a></td>
	<td><a href="<?php echo base_url(); ?>express/pengeluaran" class="button" >PENGELUARAN</a></td>
    <td><a href="<?php echo base_url(); ?>nagoya/pengeluaran" class="button" >PENGELUARAN</a></td>
  </tr>

  <tr>
  	<td><a href="<?php echo base_url(); ?>abc/list_cetak" class="button2" >LIST DATA CETAK</a></td>
    <td><a href="<?php echo base_url(); ?>mpi/list_cetak" class="button2" >LIST DATA CETAK</a></td>
	<td><a href="<?php echo base_url(); ?>express/list_cetak" class="button2" >LIST DATA CETAK</a></td>
    <td><a href="<?php echo base_url(); ?>nagoya/list_cetak" class="button2" >LIST DATA CETAK</a></td>
  </tr>

</table>


	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>

<style>
.button {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button2 {
  background-color: #2104AA;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>

<style>
table, th, td {
  border:1px solid black;
}
</style>

<style>
.alert {
  padding: 20px;
  background-color: #2196F3;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
