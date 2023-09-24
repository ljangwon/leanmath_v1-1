<!-- Bootstrap core JavaScript-->
<script type="text/javascript" src="<?= base_url('admin/vendor/jquery/jquery.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Jquery-UI -->
<script type="text/javascript" src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

<!-- Core plugin JavaScript-->
<script type="text/javascript" src="<?= base_url('admin/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

<!-- Custom scripts for all pages - admin Javascript-->
<script type="text/javascript" src="<?= base_url('admin/js/sb-admin-2.min.js') ?>"></script>

<!-- Page level plugins - Datatable Javascript-->
<script type="text/javascript" src="<?= base_url('admin/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('admin/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>
<script type="text/javascript" src="https://cdn.datatables.net/keytable/2.6.1/js/dataTables.keyTable.min.js"></script>

<!-- Bootstrap-Table Javascript-->
<script src="https://unpkg.com/tableexport.jquery.plugin/tableExport.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.20.1/dist/bootstrap-table.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.20.1/dist/bootstrap-table-locale-all.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.20.1/dist/extensions/export/bootstrap-table-export.min.js"></script>

<!-- common functions -->
<script type='text/javascript'>
	function log(message) {
		console.log(message);
	}
</script>

<script type='text/javascript'>
	$(document).ready(
		function() {
			// Initialize 
			$("#search_st_name").autocomplete({
				source: function(request, response) {
					// Fetch data
					$.ajax({
						url: "<?= site_url('student2/ajax_student_names') ?>",
						type: 'post',
						dataType: "json",
						data: {
							search: request.term
						},
						success: function(data) {
							response(data);
						}
					});
				},
				select: function(event, ui) {
					// Set selection
					sessionStorage.setItem('st_id', ui.item.st_id);
					sessionStorage.setItem('st_name', ui.item.st_name);
					$('#search_st_name').val(ui.item.label); // display the selected text
					$('#search_st_id').val(ui.item.st_id); // save selected id to input
					return false;
				}
			});

		});
</script>

<script>
	function set_session_student(p_st_id = null, p_st_name = null) {
		let st_id = p_st_id;
		let st_name = p_st_name;

		$.ajax({
			url: "<?= site_url('ajax_common_c/ajax_set_session_student') ?>",
			method: "POST",
			data: {
				st_id: st_id,
				st_name: st_name
			},
			async: true,
			dataType: 'json',
			success: function(data) {
				console.log('ajax set_session_student sucess');
			}
		});
	}
</script>

<!-- Modal Feedback Show -->
<?php if ($this->session->flashdata('modal_message')) { ?>
	<?= $this->session->flashdata('modal_message') ?>
	<script>
		$(window).on('load', function() {
			$('#modalFeedback').modal('show');
		});
	</script>

<?php } ?>