</div>
<!--  class row end -->
</div>
<!-- container-fluid end  -->

<script>
	$(document).ready(function() {
		var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
		var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
			return new bootstrap.Popover(popoverTriggerEl)
		})
	});
</script>

</body>
<!-- body end -->

</html>