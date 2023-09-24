<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Example Data table Data Rendering</title>

	<link href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet" />
	<link href="https://github.com/downloads/lafeber/world-flags-sprite/flags32.css" rel="stylesheet" />

	<link href="https://cdn.datatables.net/keytable/2.6.1/css/keyTable.dataTables.min.css" rel="stylesheet" />

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

	<script type="text/javascript" src="https://cdn.datatables.net/keytable/2.6.1/js/dataTables.keyTable.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#example').DataTable({
				ajax: 'ajaxFromServer.php',
				keys: true,
				columns: [{
						data: 'id',
					},
					{
						data: 'name',
					},
					{
						data: 'position',
					},
					{
						data: 'salary',
					},
					{
						data: 'start_date',
					},
					{
						className: 'f32', // used by world-flags-sprite library
						data: 'office',
						render: function(data, type) {
							if (type === 'display') {
								var country = '';

								switch (data) {
									case 'Argentina':
										country = 'ar';
										break;
									case 'Edinburgh':
										country = '_Scotland';
										break;
									case 'London':
										country = '_England';
										break;
									case 'New York':
									case 'San Francisco':
										country = 'us';
										break;
									case 'Sydney':
										country = 'au';
										break;
									case 'Tokyo':
										country = 'jp';
										break;
								}

								return '<span class="flag ' + country + '"></span> ' + data;
							}

							return data;
						},
					},
					{
						data: 'extn',
						render: function(data, type, row, meta) {
							return type === 'display' ?
								'<progress value="' + data + '" max="9999"></progress>' :
								data;
						},
					},
				],
				columnDefs: [{
					targets: [0],
					visible: false,
					searchable: false,
				}, ],
			});

			let table = $('#example').DataTable();
			let preClickedTD = null;
			table
				.on('key-focus', function(e, datatable, cell, originalEvent) {
					let rowData = datatable.row(cell.index().row).data();
					let clickCellData = cell.data();
					let clickCellInputId = 'td_' + cell.index().row + '_' + cell.index().column;
					let inputData = "<input type='text' id ='" + clickCellInputId + "'>";
					cell.data(inputData).draw();
					cell.inputID = clickCellInputId;
					$('#' + clickCellInputId).attr('originalData', clickCellData);
					//original data 저장함...
					$('#' + clickCellInputId).val(clickCellData);
					$('#' + clickCellInputId).focus();
					preClickedTD = cell;
				})
				.on('key-blur', function(e, datatable, cell) {
					if (preClickedTD) {
						// 선택 상태에서 원복
						returnTdToOriginal(preClickedTD, cell.index().row, cell.index().column);
					}
				});

			function returnTdToOriginal(preClickedTD, rowIdx, colIdx) {
				let cellInputId = 'td_' + rowIdx + '_' + colIdx;
				let cell = table.cell(rowIdx, colIdx);
				let id = table.cell(rowIdx, 0).data();

				let columnHeader = table.column(colIdx).header();
				let columnHeaderText = $(columnHeader).html();

				// originData가 바꼈을 때에만 서버업데이트...
				if ($('#' + cellInputId).attr('originalData') != $('#' + cellInputId).val()) {
					saveTdData(id, columnHeaderText, $('#' + cellInputId).val());
				}

				preClickedTD.data($('#' + preClickedTD.inputID).val());
			}

			function saveTdData(id, header, value) {
				let json = {
					id: id,
					header: header,
					value: value
				};
				$.ajax({
					url: 'excel_datasave.php',
					method: 'POST',
					data: {
						id: id,
						header: header,
						value: value
					},
					success: function(result) {
						jQuery('#result').html('<br> success: <br>' + id + result);
					},
				}).fail(function(result) {
					jQuery('#result').html('<br> fail: <br>' + id + result);
				});
			}
		});
	</script>
</head>

<body>
	<table id="example" class="display nowrap" style="width: 100%">
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Position</th>
				<th>Salary</th>
				<th>Start date</th>
				<th>Office</th>
				<th>Progress</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Position</th>
				<th>Salary</th>
				<th>Start date</th>
				<th>Office</th>
				<th>Progress</th>
			</tr>
		</tfoot>
	</table>

	<div id="result"></div>
</body>

</html>