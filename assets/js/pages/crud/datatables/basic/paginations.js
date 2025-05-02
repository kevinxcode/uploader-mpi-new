"use strict";
var KTDatatablesBasicPaginations = function() {

	var initTable1 = function() {
		var table = $('#kt_datatable');

		// begin first table
		table.DataTable({
			responsive: true,
			pagingType: 'full_numbers',
			columnDefs: [

			],
		});
	};

	return {

		//main function to initiate the module
		init: function() {
			initTable1();
		},

	};

}();

jQuery(document).ready(function() {
	KTDatatablesBasicPaginations.init();
});



var KTDatatablesDataSourceHtml2 = function() {

	var initTable12 = function() {
		var table = $('#kt_datatable_2');

		// begin first table
		table.DataTable({
			responsive: true,
			stateSave: true,
			columnDefs: [


			],
		});

	};

	return {

		//main function to initiate the module
		init: function() {
			initTable12();
		},

	};

}();

jQuery(document).ready(function() {
	KTDatatablesDataSourceHtml2.init();
});
