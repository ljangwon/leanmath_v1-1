<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Hugo 0.84.0">
	<title>LeanMath</title>
	
	<!-- Bootstrap core CSS -->
	<link href="<?= $this->config->item('base_url') ?>/my/bootstrap-5.0.2/css/bootstrap.min.css" rel="stylesheet" />

	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
		}

		.main-title {
			font-size: 1.2rem;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}

		/*레이어 팝업 영역*/
		.Pstyle {
			opacity: 0;
			display: none;
			position: relative;
			width: auto;
			border: 5px solid #fff;
			padding: 20px;
			background-color: #fff;
		}

		td {
		  text-align: center;
		  vertical-align: auto;
		}

		th {
			text-align: center;
		  vertical-align: auto;
		}

		tr {
			text-align: center;
			vertical-align: auto;
		}
	</style>

	<!-- Custom styles for this template -->

	<!-- dashboard.css -->
	<link href="<?= $this->config->item('base_url') ?>/my/css/bootstrap-5.0.2/dashboard/dashboard.css" rel="stylesheet" />

	<!-- navbar.css -->
	<link href="<?= $this->config->item('base_url') ?>/my/css/bootstrap-5.0.2/navbars/navbar.css" rel="stylesheet" />

	<!-- shopping style.css -->
	<link href="<?= $this->config->item('base_url') ?>/static/shopping/style.css" rel="stylesheet" />

  <!-- datatable CDD --->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.css">
</head>
<body>

<!-- bootstrap js core -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<!-- feather.js -->
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" 
integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous defer"></script>

<!-- common.js -->
<script src="<?= $this->config->item('base_url') ?>/my/js/common.js" defer></script>

<!-- shopping main.js -->
<script src="<?= $this->config->item('base_url') ?>/static/shopping/src/main.js" defer></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.js"></script>

<script type="text/javascript">
$( document ).ready(function() {
	//Json을 사용하지 않고 데이터를 가져와 보자.(첫번째 버튼)
	$('#no1').click(function(){
			
		$.ajax({
			url: "",
			type: "post",
			data: $("form").serialize(),
		}).done(function(data){			
			$("#input_data").html(data);		
		});
		
	});

	//Json을 이용해서 데이타를 가져와 보자. (두번째 버튼)
	$('#no2').click(function(){
		
	    $.ajax({
			url: "http://localhost/lmath/index.php/shopping/ajax_test",
    	  	type: "post",		
   			data: $("form").serialize(),
   			dataType:"json",
		}).done(function(data){
			//json을 통해 가져온 데이타를 input_data tag에 넣어준다.
			var html = "";
			for(var i = 0; i<data.seq.length; i++){
				html += "<tr>";
				html += "<td>Json - "+data.seq[i]+"</td>";
				html += "<td>"+data.name[i]+"</td>";
				html += "<td>"+data.age[i]+"</td>";
				html += "<td>"+data.email[i]+"</td>";
				html += "</tr>";
			}
	
			$("#input_data").html(html);
 		}); 
          
	});

	//tbody 안에 있는 내용  지우기
	$('#no3').click(function(){
	    $("#input_data").empty();
	});
	
});

$(document).ready(function() {
    $('#example').DataTable();
} );
</script>



