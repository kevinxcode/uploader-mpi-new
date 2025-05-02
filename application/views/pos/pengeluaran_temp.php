
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
										<form action="<?php echo base_url(); ?>pos/pengeluaran_view"  method="get" enctype="multipart/form-data">
										<div class="card-title">
											<h3 class="card-label">Data Pemasukkan</h3>

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
							<th>#</th>
                <th>Tanggal</th>
								<th>Keterangan</th>
                <th>Jumlah</th>

            </tr>
        </thead>

        <tbody>
					<?php $i = 1; ?>
			<?php foreach($list as $dt) { ?>
            <tr>
							<td><?php echo $i++; ?></td>
                <td><?php echo $dt->Tanggal; ?></td>
                <td><?php echo $dt->Keterangan; ?></td>
                <td><?php echo $dt->Jumlah; ?></td>
                <td><?php echo $dt->User; ?></td>



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

<form action="<?php echo base_url(); ?>pos/upload_pengeluaran"  method="post" enctype="multipart/form-data">
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
