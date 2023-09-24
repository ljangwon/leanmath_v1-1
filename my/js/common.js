// $(document).ready(function () {
// 	var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
// 	var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
// 		return new bootstrap.Popover(popoverTriggerEl);
// 	});
// });

// Datatable customized library1
function saveTdData(db_table, id, header, value) {
	$.ajax({
		url: `model/${db_table}/update.php`,
		method: 'POST',
		data: { id: id, header: header, value: value },
		success: function (result) {
			$(`#${db_table}_result`).html(` <br> ${db_table}_result success: <br> ${id} ${result} <br> `);
		},
	}).fail(function (result) {
		$(`#${db_table}_result`).html(`<br> ${db_table}_result fail: <br> ${id} ${result} <br> `);
	});
}

// Datatable customized library2
function returnTdToOriginal(db_table, table, preClickedTD, rowIdx, colIdx) {
	let cellInputId = 'td_' + rowIdx + '_' + colIdx;
	let id = table.cell(rowIdx, 0).data();

	let columnHeader = table.column(colIdx).header();
	let columnHeaderText = $(columnHeader).html();

	// originData가 바꼈을 때에만 서버업데이트...
	if ($('#' + cellInputId).attr('originalData') != $('#' + cellInputId).val()) {
		saveTdData(db_table, id, columnHeaderText, $('#' + cellInputId).val());
	}

	preClickedTD.data($('#' + preClickedTD.inputID).val());
}

// Tab related library
$(document).ready(function () {
	$('.nav-tabs a').click(function () {
		$(this).tab('show');
	});
	$('.nav-tabs a').on('shown.bs.tab', function (event) {
		var x = $(event.target).text(); // active tab
		var y = $(event.relatedTarget).text(); // previous tab
		$('.act span').text(x);
		$('.prev span').text(y);
	});
});

// $(document).ready(function () {
// 	$('[data-toggle="tooltip"]').tooltip();
// });

$(document).ready(function () {
	feather.replace({ 'aria-hidden': 'true' });
});
