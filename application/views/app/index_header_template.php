
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>System Order MPI Group</title>
		<meta name="description" content="ORDER SYSTEM | Dashboard" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="" />
		<!--begin::Fonts--
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
			<link rel="stylesheet" href="<?php echo prefix_url;?>assetsfont/font.css?family=Poppins:300,400,500,600,700" />
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="<?php echo prefix_url;?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="<?php echo prefix_url;?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo prefix_url;?>assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo prefix_url;?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--begin::Page data table(used by this page)-->
		<link href="<?php echo prefix_url;?>assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<!--end::Layout Themes-->
			<link rel="shortcut icon" href="<?php echo prefix_url;?>assets/inventory_logo/inventory_icon.png" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body  class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed aside-enabled aside-static page-loading">
		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile header-mobile-fixed">
			<!--begin::Logo-->
			<a href="<?php echo prefix_url;?>">
				<img alt="Logo" src="<?php echo prefix_url;?>assets/inventory_logo/inventory_icon.png" class="logo-default max-h-45px" />
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<button class="btn p-0 burger-icon rounded-0 burger-icon-left" id="kt_aside_tablet_and_mobile_toggle">
					<span></span>
				</button>
				<button class="btn btn-hover-text-primary p-0 ml-3" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:<?php echo prefix_url;?>assets/media/svg/icons/General/User.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</button>
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->
		<?php $priviledge = $this->session->userdata('priviledge_claim');  ?>
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
				<div class="aside aside-left d-flex flex-column flex-row-auto" id="kt_aside">
					<!--begin::Aside Menu-->
					<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
						<!--begin::Menu Container-->
						<div id="kt_aside_menu" class="aside-menu min-h-lg-800px" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
							<!--begin::Menu Nav-->
							<ul class="menu-nav">


								<li class="menu-item <?php if($current_page == "home") {echo "menu-item-active";} ?>" aria-haspopup="true">
									<a href="<?php echo prefix_url;?>" class="menu-link">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:<?php echo prefix_url;?>assets/media/svg/icons/Design/Layers.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
													<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">HOME</span>
									</a>
								</li>


					<li class="menu-item menu-item-submenu <?php if($current_page == "abc") {echo "menu-item-open menu-item-here";} ?>" aria-haspopup="true" data-menu-toggle="hover">
						<a href="javascript:;" class="menu-link menu-toggle">
							<span class="svg-icon menu-icon">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
										<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
							<span class="menu-text" style="text-transform: uppercase;">abcprintingbatam.net</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="menu-submenu">
							<i class="menu-arrow"></i>
							<ul class="menu-subnav">


								<li class="menu-item <?php if($sub_page == "abc/data-cetak") {echo "menu-item-active";} ?>" aria-haspopup="true">
									<a href="<?php echo prefix_url;?>abc/data-cetak" class="menu-link">
										<i class="menu-bullet menu-bullet-dot">
											<span></span>
										</i>
											<span class="menu-text">DATA CETAK</span>
									</a>
								</li>



								<li class="menu-item <?php if($sub_page == "abc/data-pemasukan") {echo "menu-item-active";} ?>" aria-haspopup="true">
									<a href="<?php echo prefix_url;?>abc/data-pemasukan" class="menu-link">
										<i class="menu-bullet menu-bullet-dot">
											<span></span>
										</i>
											<span class="menu-text">KAS HARIAN</span>
									</a>
								</li>

								<li class="menu-item <?php if($sub_page == "abc/data-pengeluaran") {echo "menu-item-active";} ?>" aria-haspopup="true">
									<a href="<?php echo prefix_url;?>abc/data-pengeluaran" class="menu-link">
										<i class="menu-bullet menu-bullet-dot">
											<span></span>
										</i>
											<span class="menu-text">PENGELUARAN</span>
									</a>
								</li>


							</ul>
						</div>
					</li>

					<li class="menu-item menu-item-submenu <?php if($current_page == "nagoya") {echo "menu-item-open menu-item-here";} ?>" aria-haspopup="true" data-menu-toggle="hover">
						<a href="javascript:;" class="menu-link menu-toggle">
							<span class="svg-icon menu-icon">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
										<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
							<span class="menu-text" style="text-transform: uppercase;">expressprintnagoya.net</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="menu-submenu">
							<i class="menu-arrow"></i>
							<ul class="menu-subnav">


								<li class="menu-item <?php if($sub_page == "nagoya/data-cetak") {echo "menu-item-active";} ?>" aria-haspopup="true">
									<a href="<?php echo prefix_url;?>nagoya/data-cetak" class="menu-link">
										<i class="menu-bullet menu-bullet-dot">
											<span></span>
										</i>
											<span class="menu-text">DATA CETAK</span>
									</a>
								</li>



								<li class="menu-item <?php if($sub_page == "nagoya/data-pemasukan") {echo "menu-item-active";} ?>" aria-haspopup="true">
									<a href="<?php echo prefix_url;?>nagoya/data-pemasukan" class="menu-link">
										<i class="menu-bullet menu-bullet-dot">
											<span></span>
										</i>
											<span class="menu-text">KAS HARIAN</span>
									</a>
								</li>

								<li class="menu-item <?php if($sub_page == "nagoya/data-pengeluaran") {echo "menu-item-active";} ?>" aria-haspopup="true">
									<a href="<?php echo prefix_url;?>nagoya/data-pengeluaran" class="menu-link">
										<i class="menu-bullet menu-bullet-dot">
											<span></span>
										</i>
											<span class="menu-text">PENGELUARAN</span>
									</a>
								</li>


							</ul>
						</div>
					</li>

					<li class="menu-item menu-item-submenu <?php if($current_page == "sincom") {echo "menu-item-open menu-item-here";} ?>" aria-haspopup="true" data-menu-toggle="hover">
						<a href="javascript:;" class="menu-link menu-toggle">
							<span class="svg-icon menu-icon">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
										<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
							<span class="menu-text" style="text-transform: uppercase;">expressprintbatam.net</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="menu-submenu">
							<i class="menu-arrow"></i>
							<ul class="menu-subnav">


								<li class="menu-item <?php if($sub_page == "sincom/data-cetak") {echo "menu-item-active";} ?>" aria-haspopup="true">
									<a href="<?php echo prefix_url;?>sincom/data-cetak" class="menu-link">
										<i class="menu-bullet menu-bullet-dot">
											<span></span>
										</i>
											<span class="menu-text">DATA CETAK</span>
									</a>
								</li>



								<li class="menu-item <?php if($sub_page == "sincom/data-pemasukan") {echo "menu-item-active";} ?>" aria-haspopup="true">
									<a href="<?php echo prefix_url;?>sincom/data-pemasukan" class="menu-link">
										<i class="menu-bullet menu-bullet-dot">
											<span></span>
										</i>
											<span class="menu-text">KAS HARIAN</span>
									</a>
								</li>

								<li class="menu-item <?php if($sub_page == "sincom/data-pengeluaran") {echo "menu-item-active";} ?>" aria-haspopup="true">
									<a href="<?php echo prefix_url;?>sincom/data-pengeluaran" class="menu-link">
										<i class="menu-bullet menu-bullet-dot">
											<span></span>
										</i>
											<span class="menu-text">PENGELUARAN</span>
									</a>
								</li>


							</ul>
						</div>
					</li>

					<li class="menu-item menu-item-submenu <?php if($current_page == "mpi") {echo "menu-item-open menu-item-here";} ?>" aria-haspopup="true" data-menu-toggle="hover">
						<a href="javascript:;" class="menu-link menu-toggle">
							<span class="svg-icon menu-icon">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
										<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
							<span class="menu-text" style="text-transform: uppercase;">mediaprinterhub.net</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="menu-submenu">
							<i class="menu-arrow"></i>
							<ul class="menu-subnav">


								<li class="menu-item <?php if($sub_page == "mpi/data-cetak") {echo "menu-item-active";} ?>" aria-haspopup="true">
									<a href="<?php echo prefix_url;?>mpi/data-cetak" class="menu-link">
										<i class="menu-bullet menu-bullet-dot">
											<span></span>
										</i>
											<span class="menu-text">DATA CETAK</span>
									</a>
								</li>



								<li class="menu-item <?php if($sub_page == "mpi/data-pemasukan") {echo "menu-item-active";} ?>" aria-haspopup="true">
									<a href="<?php echo prefix_url;?>mpi/data-pemasukan" class="menu-link">
										<i class="menu-bullet menu-bullet-dot">
											<span></span>
										</i>
											<span class="menu-text">KAS HARIAN</span>
									</a>
								</li>

								<li class="menu-item <?php if($sub_page == "mpi/data-pengeluaran") {echo "menu-item-active";} ?>" aria-haspopup="true">
									<a href="<?php echo prefix_url;?>mpi/data-pengeluaran" class="menu-link">
										<i class="menu-bullet menu-bullet-dot">
											<span></span>
										</i>
											<span class="menu-text">PENGELUARAN</span>
									</a>
								</li>


							</ul>
						</div>
					</li>

					<li class="menu-item menu-item-submenu <?php if($current_page == "pos") {echo "menu-item-open menu-item-here";} ?>" aria-haspopup="true" data-menu-toggle="hover">
						<a href="javascript:;" class="menu-link menu-toggle">
							<span class="svg-icon menu-icon">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
										<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
							<span class="menu-text" style="text-transform: uppercase;">pos-mpi.com</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="menu-submenu">
							<i class="menu-arrow"></i>
							<ul class="menu-subnav">


								<li class="menu-item <?php if($sub_page == "pos/data-cetak") {echo "menu-item-active";} ?>" aria-haspopup="true">
									<a href="<?php echo prefix_url;?>pos/data-cetak" class="menu-link">
										<i class="menu-bullet menu-bullet-dot">
											<span></span>
										</i>
											<span class="menu-text">DATA CETAK</span>
									</a>
								</li>



								<li class="menu-item <?php if($sub_page == "pos/data-pemasukan") {echo "menu-item-active";} ?>" aria-haspopup="true">
									<a href="<?php echo prefix_url;?>pos/data-pemasukan" class="menu-link">
										<i class="menu-bullet menu-bullet-dot">
											<span></span>
										</i>
											<span class="menu-text">KAS HARIAN</span>
									</a>
								</li>

								<li class="menu-item <?php if($sub_page == "pos/data-pengeluaran") {echo "menu-item-active";} ?>" aria-haspopup="true">
									<a href="<?php echo prefix_url;?>pos/data-pengeluaran" class="menu-link">
										<i class="menu-bullet menu-bullet-dot">
											<span></span>
										</i>
											<span class="menu-text">PENGELUARAN</span>
									</a>
								</li>


							</ul>
						</div>
					</li>







										</ul>
									</div>
								</li>
							</ul>
							<!--end::Menu Nav-->
						</div>
						<!--end::Menu Container-->
					</div>
					<!--end::Aside Menu-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header header-fixed">
						<!--begin::Container-->
						<div class="container d-flex align-items-stretch justify-content-between">
							<!--begin::Left-->
							<div class="d-none d-lg-flex align-items-center mr-3">
								<!--begin::Aside Toggle-->
								<button class="btn btn-icon aside-toggle ml-n3 mr-10" id="kt_aside_desktop_toggle">
									<span class="svg-icon svg-icon-xxl svg-icon-dark-75">
										<!--begin::Svg Icon | path:<?php echo prefix_url;?>assets/media/svg/icons/Text/Align-left.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<rect fill="#000000" opacity="0.3" x="4" y="5" width="16" height="2" rx="1" />
												<rect fill="#000000" opacity="0.3" x="4" y="13" width="16" height="2" rx="1" />
												<path d="M5,9 L13,9 C13.5522847,9 14,9.44771525 14,10 C14,10.5522847 13.5522847,11 13,11 L5,11 C4.44771525,11 4,10.5522847 4,10 C4,9.44771525 4.44771525,9 5,9 Z M5,17 L13,17 C13.5522847,17 14,17.4477153 14,18 C14,18.5522847 13.5522847,19 13,19 L5,19 C4.44771525,19 4,18.5522847 4,18 C4,17.4477153 4.44771525,17 5,17 Z" fill="#000000" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								</button>
								<!--end::Aside Toggle-->
								<!--begin::Logo-->
								<a href="<?php echo prefix_url;?>">
									<img alt="Logo" src="<?php echo prefix_url;?>assets/inventory_logo/inventory_icon.png" class="logo-sticky max-h-45px" />
								</a>
								<!--end::Logo-->
								<!--begin::Desktop Search-->
								<div class="quick-search quick-search-inline ml-5 w-300px" >
									<!--begin::Form-->
									<h3><b>System Order MPI Group</b></h3>
									<!--end::Form-->


								</div>
								<!--end::Desktop Search-->
							</div>
							<!--end::Left-->
							<!--begin::Topbar-->
							<div class="topbar">

								<!--begin::User-->
								<div class="topbar-item mr-4">

								</div>
								<!--end::User-->
								<!--begin::Create-->
								<div class="dropdown">
									<!--begin::Toggle-->
									<div class="topbar-item mr-4" data-toggle="dropdown" data-offset="10px,0px">

										<div class="btn btn-icon btn-sm btn-primary font-weight-bolder p-0" id="kt_quick_notifications_toggle">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
													<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
												</g>
											</svg>
										</div>
									</div>
									<!--end::Toggle-->
									<!--begin::Dropdown-->
									<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-md">
										<!--begin::Navigation-->
										<ul class="navi navi-hover py-5">


											<li class="navi-item">
												<a href="<?php echo prefix_url;?>home/profile" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-user"></i>
													</span>

												</a>
											</li>

											<li class="navi-separator my-3"></li>


											<li class="navi-item">
												<a href="<?php echo prefix_url;?>login/logout" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-cancel"></i>
													</span>
													<span class="navi-text">Sign Out</span>
												</a>
											</li>

										</ul>
										<!--end::Navigation-->
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::Create-->





								<!--begin::Notifications-->
								<div class="topbar-item">

								</div>
								<!--end::Notifications-->
							</div>
							<!--end::Topbar-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
