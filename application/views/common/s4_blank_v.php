<!-- Begin .container-fluid -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row" id='row1'>
    <div class="col-xs-12">
      <h1><a style=text-decoration-line:none href='<?php echo site_url() ?>'> LEAN-MATH </a>
        <small>/빈화면 </small>
      </h1>
    </div>
    <!-- End of Page Heading -->

    <div class="col-xs-12">
      <span>
        메시지가 여기 나타남.
      </span>
      <span id="msg" style="background-color: red">
        <?php echo $this->session->flashdata('msg'); ?>
      </span>
    </div>

  </div>
  <!-- End of .row -->
  <!-- End of Page Heading -->

  <!-- Begin Main Page -->

  <!-- End of Page Heading -->

</div>
<!-- End of .container-fluid -->