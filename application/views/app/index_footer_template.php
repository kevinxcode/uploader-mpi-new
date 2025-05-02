<!--begin::Footer-->
<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
	<!--begin::Container-->
	<div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
		<!--begin::Copyright-->
		<div class="text-dark order-2 order-md-1">
			<span class="text-muted font-weight-bold mr-2"><?php echo date('Y'); ?> ©</span>
			<a href="https://www.fadeintech.com/" target="_blank" class="text-dark-75 text-hover-primary">MPI - Group</a>
		</div>
		<!--end::Copyright-->
		<!--begin::Nav-->
		<div class="nav nav-dark order-1 order-md-2">
			<a href="#" target="_blank" class="nav-link pr-3 pl-0">About</a>
			<a href="#" target="_blank" class="nav-link px-3">Team</a>
			<a href="#" target="_blank" class="nav-link pl-3 pr-0">Contact</a>
		</div>
		<!--end::Nav-->
	</div>
	<!--end::Container-->
</div>
<!--end::Footer-->
</div>
<!--end::Wrapper-->
</div>
<!--end::Page-->
</div>
<!--end::Main-->
<!-- begin::Notifications Panel-->

<!--end::Demo Panel-->

<!--begin::Global Config(global config for global JS scripts)-->
<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="<?php echo prefix_url;?>assets/plugins/global/plugins.bundle.js"></script>
<script src="<?php echo prefix_url;?>assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="<?php echo prefix_url;?>assets/js/scripts.bundle.js"></script>


<!--end::Global Theme Bundle-->
<!--begin::Page Vendors(used by this page)--
<script src="<?php echo prefix_url;?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)--
<script src="<?php echo prefix_url;?>assets/js/pages/widgets.js"></script>
<!--end::Page Scripts-->

<!--begin::select 2-->
<link href="<?php echo prefix_url;?>assets/select2/select2.min.css" rel="stylesheet" />
<link href="<?php echo prefix_url;?>assets/select2/select2-bootstrap4.css" rel="stylesheet">
<!--begin::select 2--
<script src="<?php echo prefix_url;?>assets/select2/jquery-3.3.1.slim.min.js"></script>
<!--begin::select 2-->
<script src="<?php echo prefix_url;?>assets/select2/select2.min.js"></script>
<script src="<?php echo prefix_url;?>assets/select2/script.js"></script>
<!--end select-->

<!--begin::data table(used by this page)-->
<!--begin::Page Vendors(used by this page)-->
<script src="<?php echo prefix_url;?>assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Page Vendors-->
<script src="<?php echo prefix_url;?>assets/js/pages/crud/datatables/basic/paginations.js"></script>
<!--end::Page Scripts-->
	<script src="<?php echo prefix_url;?>assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js"></script>
</body>
<!--end::Body-->
</html>

<script src='<?php echo prefix_url;?>assets/sweetalert2/sweetalert2@9.js'></script>


<script>
$( document ).ready(function() {
 $("#btn_submit").click(function () {
	// alert("Loading Please Wait");
	showLoading();
 });
});
</script>

<?php if($this->session->flashdata('alert')): ?>

<script>
$( document ).ready(function() {
	success_message();
});
</script>
<script>
  function success_message () {
    swal.fire('<?php echo $flash_message; ?>','','success')
		setTimeout(function () {
      Swal.close()
    }, 2000)
  }
</script>
<?php endif; ?>



<script>
 function showLoading () {
	 Swal.fire({
	 title: 'Processing....!',
	 timer: 200000000000000,
	 timerProgressBar: true,
	 allowOutsideClick: false,
	 onBeforeOpen: () => {
		 Swal.showLoading()
		 timerInterval = setInterval(() => {
			 const content = Swal.getContent()
			 if (content) {
				 const b = content.querySelector('b')
				 if (b) {
					 b.textContent = Swal.getTimerLeft()
				 }
			 }
		 }, 100)
	 },
	 onClose: () => {
		 clearInterval(timerInterval)
	 }
 }).then((result) => {
	 /* Read more about handling dismissals below */
	 if (result.dismiss === Swal.DismissReason.timer) {
		 console.log('I was closed by the timer')
	 }
 })
 }
</script>
