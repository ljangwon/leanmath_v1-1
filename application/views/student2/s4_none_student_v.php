<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row" id='row1'>
    <div class="col-xs-12">
      <h1><a style=text-decoration-line:none href='<?php echo site_url() ?>'> LEAN-MATH </a>
        <small>/학생 상세화면 </small>
      </h1>
    </div>

    <div class="col-xs-12">
      <span>
        학생이 선택되지 않았습니다.
      </span>
      <span id="msg" style="background-color: red">
        <?php echo $this->session->flashdata('msg'); ?>
      </span>
    </div>
  </div>

  <!-- row1 title and message end -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->