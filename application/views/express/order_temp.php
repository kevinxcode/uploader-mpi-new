
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">

								<!--begin::notif--
								<?php if($this->session->flashdata('alert')): ?>
									<?php echo $this->session->flashdata('alert'); ?>
								<?php endif; ?>
								<!--end::notif-->

								<!--begin::Card-->
								<div class="card card-custom">
									<div class="card-header flex-wrap py-2">
										<form action="<?php echo base_url(); ?>express/order"  method="get" enctype="multipart/form-data">
										<div class="card-title">
											<h3 class="card-label">Data Order</h3>

											<div class="form-group" style="margin-right: 5px">
												<label>Start Date</label>
												<input type="text" name="dt1" value="<?php echo $dt1; ?>" class="form-control"  />
											</div>
											<div class="form-group">
												<label>End Date</label>
												<input type="text" name="dt2" value="<?php echo $dt2; ?>" class="form-control"  />
											</div>
											<div class="form-group">
												<label>.</label>
												<input type="submit" name="check"  value="SUBMIT"  class="btn btn-primary btn-sm">
												<input type="submit" name="check"  value="EXPORT"  class="btn btn-primary btn-sm">
											</div>

										</div>
										</form>
										<div class="card-toolbar">
											<!--begin::Button-->

											<a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-sm">
												<span class="svg-icon svg-icon-sm"><i class="flaticon2-plus"></i></span>ADD
											</a>

											<!--end::Button-->

										</div>
									</div>
									<div class="card-body">
										<?php if($check=='EXPORT'){ ?>
										<a href="<?php echo $file_name; ?>" download>Download</a><hr>
										<?php } ?>
										<!--begin: Datatable-->
<table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
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
										<!--end: Datatable-->
									</div>
								</div>
								<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->




	<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">ADD</h4>
      </div>
      <div class="modal-body">

				<form action="<?php echo base_url(); ?>express/uplpoad_data_cetak"  method="post" enctype="multipart/form-data">
<input type="radio" id="html" name="action_data" value="insert" checked>
<label for="html">Insert Data</label><br>
<input type="radio" id="css" name="action_data" value="update">
<label for="css">Update Data</label><br>

				  <label for="lname">excel File:</label><br>
				  <input type="file" name="namafile" ><br><br>
				  <input type="submit" name="import" id="btn_submit" onclick="uploadData()" value="import"  class="btn btn-primary btn-sm">
				  <div id="load" style="display: none">Loading.....</div>
				</form>

      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!--end modal-->

<script>
	function uploadData(){
		$('#btn_submit').hide();
		$('#load').show();
	}
</script>
