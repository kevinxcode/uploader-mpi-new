<?php $priviledge = $this->session->userdata('priviledge_claim');  ?>

					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">

								<!--begin::notif--
								<?php if($this->session->flashdata('alert')): ?>
									<div class="alert alert-success" >
									<button type="button" class="close" data-dismiss="alert">x</button>
									<strong><h3><?php echo $flash_message; ?></h1></strong>
								</div>
								<?php endif; ?>
								<!--end::notif-->

								<!--begin::Card-->
								<div class="card card-custom">
									<div class="card-header flex-wrap py-2">
										<div class="card-title">
											<h3 class="card-label"><?php echo date('d M Y'); ?>
											</h3>
										</div>
										<div class="card-toolbar">
											<!--begin::Button-->
                                            <span type="button" class="btn btn-primary btn-sm" id="syncButton">Sync Now</span>
                                            <span type="button" class="btn btn-info btn-sm" id="syncButton_sync" style="display: none">Syncing......</span>

<script>
  document.getElementById("syncButton").addEventListener("click", function() {
    var syncButton_sync = document.getElementById("syncButton_sync");
    var syncButton = document.getElementById("syncButton");
   
    syncButton_sync.style.display = "inline-block"; 
    syncButton.style.display = "none";
    load1();
    load2();
    load3();
    load4();
    load5();
    load6();
    load7();
    load8();
    load9();
    
    // Simulate an async operation
    setTimeout(function() {
        syncButton_sync.style.display = "none"; 
        syncButton.style.display = "inline-block";
    }, 8000); // Simulate 3 seconds sync time
  });
</script>

<script>
function load1(){
    $.ajax({
        url: "https://upload.abcprintingbatam.net/api-abc/v1/data-cetak",
        type: "POST",
        contentType: "application/json",
        data: JSON.stringify({
            key1: "value1",
            key2: "value2"
        }), // Replace with your data object
        success: function (response) {
            alert("ABC Data Cetak - Success:", response);
        },
        error: function (xhr, status, error) {
            console.error("Error:", error);
        }
    });
}
</script>
<script>
function load2(){
    $.ajax({
        url: "https://upload.abcprintingbatam.net/api-abc/v1/data-pemasukan",
        type: "POST",
        contentType: "application/json",
        data: JSON.stringify({
            key1: "value1",
            key2: "value2"
        }), // Replace with your data object
        success: function (response) {
           alert("ABC Data Pemasukan - Success:", response);
        },
        error: function (xhr, status, error) {
            console.error("Error:", error);
        }
    });
}
</script>
<script>
function load3(){
    $.ajax({
        url: "https://upload.abcprintingbatam.net/api-abc/v1/data-pengeluaran",
        type: "POST",
        contentType: "application/json",
        data: JSON.stringify({
            key1: "value1",
            key2: "value2"
        }), // Replace with your data object
        success: function (response) {
            alert("ABC Data Pengeluaran - Success:", response);
        },
        error: function (xhr, status, error) {
            console.error("Error:", error);
        }
    });
}
</script>
<script>
function load4(){
    $.ajax({
        url: "https://upload.abcprintingbatam.net/api-sincom/v1/data-cetak",
        type: "POST",
        contentType: "application/json",
        data: JSON.stringify({
            key1: "value1",
            key2: "value2"
        }), // Replace with your data object
        success: function (response) {
            alert("SINCOM Data Cetak - Success:", response);
        },
        error: function (xhr, status, error) {
            console.error("Error:", error);
        }
    });
}
</script>
<script>
function load5(){
    $.ajax({
        url: "https://upload.abcprintingbatam.net/api-sincom/v1/data-pemasukan",
        type: "POST",
        contentType: "application/json",
        data: JSON.stringify({
            key1: "value1",
            key2: "value2"
        }), // Replace with your data object
        success: function (response) {
            alert("SINCOM Data Pemasukan - Success:", response);
        },
        error: function (xhr, status, error) {
            console.error("Error:", error);
        }
    });
}
</script>
<script>
function load6(){
    $.ajax({
        url: "https://upload.abcprintingbatam.net/api-sincom/v1/data-pengeluaran",
        type: "POST",
        contentType: "application/json",
        data: JSON.stringify({
            key1: "value1",
            key2: "value2"
        }), // Replace with your data object
        success: function (response) {
           alert("SINCOM Data Pengeluaran - Success:", response);
        },
        error: function (xhr, status, error) {
            console.error("Error:", error);
        }
    });
}
</script>
<script>
function load7(){
    $.ajax({
        url: "https://upload.abcprintingbatam.net/api-nagoya/v1/data-cetak",
        type: "POST",
        contentType: "application/json",
        data: JSON.stringify({
            key1: "value1",
            key2: "value2"
        }), // Replace with your data object
        success: function (response) {
            alert("Nagoya Data Cetak - Success:", response);
        },
        error: function (xhr, status, error) {
            console.error("Error:", error);
        }
    });
}
</script>
<script>
function load8(){
    $.ajax({
        url: "https://upload.abcprintingbatam.net/api-nagoya/v1/data-pemasukan",
        type: "POST",
        contentType: "application/json",
        data: JSON.stringify({
            key1: "value1",
            key2: "value2"
        }), // Replace with your data object
        success: function (response) {
           alert("Nagoya Data Pemasukan - Success:", response);
        },
        error: function (xhr, status, error) {
            console.error("Error:", error);
        }
    });
}
</script>
<script>
function load9(){
    $.ajax({
        url: "https://upload.abcprintingbatam.net/api-nagoya/v1/data-pengeluaran,
        type: "GET",
        contentType: "application/json",
        data: JSON.stringify({
            key1: "value1",
            key2: "value2"
        }), // Replace with your data object
        success: function (response) {
            alert("Nagoya Data Pengeluaran - Success:", response);
        },
        error: function (xhr, status, error) {
            console.error("Error:", error);
        }
    });
}
</script>
<script>
function load9(){
    $.ajax({
        url: "https://upload.abcprintingbatam.net/api-nagoya/v1/data-pengeluaran,
        type: "GET",
        contentType: "application/json",
        data: JSON.stringify({
            key1: "value1",
            key2: "value2"
        }), // Replace with your data object
        success: function (response) {
            alert("Nagoya Data Pengeluaran - Success:", response);
        },
        error: function (xhr, status, error) {
            console.error("Error:", error);
        }
    });
}
</script>

											<!--end::Button-->

										</div>
									</div>
									<div class="card-body" align="center">
									    <img src="<?php echo prefix_url;?>assets/bg-wall.jpg" width="70%" />
										<!--begin: Datatable-->
										
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





<!--date picker-->
	<script src="<?php echo prefix_url;?>assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js"></script>
<!--end date picker-->
