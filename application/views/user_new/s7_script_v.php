<script>
	var $table = $('#table');
	var $remove = $('#remove');
	var $modal_btn_user_add = $('#modal_btn_user_add');
	var $modal_btn_password_change = $('#modal_btn_password_change');

	var selections = [];

	function getIdSelections() {
		return $.map($table.bootstrapTable('getSelections'), function(row) {
			return row.id
		})
	}

	function responseHandler(res) {
		$.each(res.rows, function(i, row) {
			row.state = $.inArray(row.id, selections) !== -1
		})
		return res
	}

	function detailFormatter(index, row) {
		var html = [];
		html.push('<table> ');
		$.each(row, function(key, value) {
			html.push('<tr><td>' + key + ':</td> ' + '<td>' + value + '</td></tr>')
		});
		html.push('</table>');
		return html.join('')
	}

	function operateFormatter(value, row, index) {
		return [
			'<a class="like" href="javascript:void(0)" title="Like">',
			'<i class="fa-solid fa-pen-to-square"></i>',
			'</a> ',
			'<a class="remove" href="javascript:void(0)" title="Remove">',
			'<i class="fa fa-trash"></i>',
			'</a> ',
			'<a class="password_change" href="javascript:void(0)" title="password_change" ',
			'data-user_email="' + row.email, '" ',
			'> ',
			'<i class="fa-solid fa-cash-register"></i>',
			'</a> ',
			'<a class="init" href="javascript:void(0)" title="init">',
			'<i class="fa-solid fa-i"></i>',
			'</a> '
		].join('')
	}

	window.operateEvents = {
		'click .like': function(e, value, row, index) {
			alert('You click like action, row: ' + JSON.stringify(row) + ' value: ' + value + ' index: ' + index)
		},
		'click .remove': function(e, value, row, index) {
			user_delete(row.id);
			$table.bootstrapTable('remove', {
				field: 'id',
				values: [row.id]
			})
		},
		'click .password_change': function(e, value, row, index) {
			console.log('password change');
			let user_email = row.email;

			$('#modal_password_change').modal('show');
			$('[name="user_email"]').val(user_email);

		},
		'click .init': function(e, value, row, index) {
			console.log('init');
		}
	}

	function user_delete(id) {
		var user_id = id;

		$.ajax({
			url: "<?php echo site_url('user_new_c/ajax_delete') ?>",
			type: "POST",
			data: {
				id: user_id
			},
			dataType: "JSON",
			success: function(data) {
				console.log(user_id + ' deleted');
			}
		});
	}

	function totalTextFormatter(data) {
		return 'Total'
	}

	function totalNameFormatter(data) {
		return data.length
	}

	function totalPriceFormatter(data) {
		var field = this.field
		return '$' + data.map(function(row) {
			return +row[field].substring(1)
		}).reduce(function(sum, i) {
			return sum + i
		}, 0)
	}

	function initTable() {
		$table.bootstrapTable('destroy').bootstrapTable({
			height: 800,
			locale: $('#locale').val(),
			url: '<?= site_url('user_new_c/ajax_get_list') ?>',
			columns: [
				[{
					field: 'state',
					checkbox: true,
					rowspan: 2,
					align: 'center',
					valign: 'middle'
				}, {
					title: 'id',
					field: 'id',
					rowspan: 2,
					align: 'center',
					valign: 'middle',
					sortable: true,
					footerFormatter: totalTextFormatter
				}, {
					title: 'Item Detail',
					colspan: 4,
					align: 'center'
				}],
				[{
					field: 'name',
					title: 'Name',
					sortable: true,
					footerFormatter: totalTextFormatter,
					align: 'center'
				}, {
					field: 'email',
					title: 'Email',
					sortable: true,
					align: 'center',
					footerFormatter: totalTextFormatter
				}, {
					field: 'password',
					title: 'Password',
					sortable: true,
					align: 'center',
					footerFormatter: totalTextFormatter
				}, {
					field: 'operate',
					title: 'Item Operate',
					align: 'center',
					clickToSelect: false,
					events: window.operateEvents,
					formatter: operateFormatter
				}]
			]
		})

		$table.on('check.bs.table uncheck.bs.table ' +
			'check-all.bs.table uncheck-all.bs.table',
			function() {
				$remove.prop('disabled', !$table.bootstrapTable('getSelections').length)

				// save your data, here just save the current page
				selections = getIdSelections()
				// push or splice the selections if you want to save all data selections
			})

		$table.on('all.bs.table', function(e, name, args) {
			//console.log(name, args)
		});

		$remove.click(function() {
			var ids = getIdSelections()

			ids.forEach(function(id) {
				user_delete(id);
			});

			$table.bootstrapTable('remove', {
				field: 'id',
				values: ids
			})
			$remove.prop('disabled', true);

		});

		$modal_btn_user_add.click(function() {

			var email = $('#user_email').val();
			var password = $('#user_password').val();
			var name = $('#user_name').val();

			$.ajax({
				url: "<?= site_url('user_new_c/ajax_add') ?>",
				type: "POST",
				data: {
					email: email,
					password: password,
					name: name
				},
				dataType: "JSON",
				success: function(data) {
					$('[name="user_email"]').val("");
					$('[name="user_password"]').val("");
					$('[name="user_name"]').val("");

					alert('User added!!!')
					$('#modal_user_add').modal('hide');
					initTable();
				}
			});
		});
		$modal_btn_password_change.click(function() {

			var user_email = $('#user_email').val();
			var old_password = $('#old_password').val();
			var new_password = $('#new_password').val();
			var confirm_password = $('#confirm_password').val();

			$.ajax({
				url: "<?php echo site_url('user_new_c/ajax_password_change') ?>",
				type: "POST",
				data: {
					user_email: user_email,
					old_password: old_password,
					new_password: new_password,
					confirm_password: confirm_password
				},
				dataType: "JSON",
				success: function(data) {
					$('[name="old_password"]').val("");
					$('[name="new_password"]').val("");
					$('[name="confirm_password"]').val("");

					alert('Password changed !!!')
					$('#modal_password_change').modal('hide');

					initTable();
				}
			});
		})

	}

	$(function() {
		initTable()

		$('#locale').change(initTable)
	})
</script>