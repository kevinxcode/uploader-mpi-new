
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
										<form action="<?php echo base_url(); ?>abc/kas"  method="get" enctype="multipart/form-data">
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
										<!--begin: Datatable-->
										<?php if($check=='EXPORT'){ ?>
									<a href="<?php echo $file_name; ?>" download>Download</a><hr>
									<?php } ?>
<table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
										<thead>
            <tr>
							<th>#</th>
                <th>Invoice No</th>
								<th>Invoice Date</th>
                <th>Customer</th>
                <th>Payment Status</th>
								<th>Amount</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
					<?php $i = 1; ?>
			<?php foreach($list as $dt) { ?>
            <tr>
							<td><?php echo $i++; ?></td>
                <td><?php echo $dt->NoInvoice; ?></td>
                <td><?php echo $dt->invoice_date; ?></td>
                <td><?php echo $dt->Customer; ?></td>
                <td><?php echo $dt->StatusBayar; ?></td>
								<td><?php echo $dt->inv_total; ?></td>
                <td><span onclick="openFullScreenPopupWithFocus('<?php echo prefix_url;?>abc/invDetail?invoice_no=<?php echo $dt->NoInvoice; ?>')" class="btn btn-primary btn-sm">View</span></td>

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

					<script>
					function openFullScreenPopupWithFocus(url) {
					    var options = "fullscreen=yes,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no";
						var left = (screen.width / 2) - (screen.availWidth / 2);
					    var top = (screen.height / 2) - (screen.availHeight / 2);
						var popup = window.open(url, "_blank", "width=" + screen.availWidth / 1.3 + ", height=" + screen.availHeight + ", " + options + ", left=" + left + ", top=" + top);
					    popup.focus();
					}
					</script>


	<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">ADD</h4>
      </div>
      <div class="modal-body">

<form action="<?php echo base_url(); ?>abc/upload_kas"  method="post" enctype="multipart/form-data">
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
