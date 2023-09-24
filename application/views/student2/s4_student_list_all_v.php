<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row" id='row1'>
    <div class="col-xs-12">
      <h1><a style=text-decoration-line:none href='<?php echo site_url() ?>'> LEAN-MATH </a>
        <small>/전체 학생 목록</small>
      </h1>
    </div>

    <div class="col-xs-12">
      <span id="msg" style="background-color: red">
        <?php echo $this->session->flashdata('msg'); ?>
      </span>
    </div>
  </div>

  <!-- row1 title and message end -->

  <!-- row2 add buttons begin col-xs-4 -->
  <div class="row mb-3" id='row2'>
    <div class="col-6">
      <div class="row">
        <div class="float-sm-left mr-2">
          <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#student_add">
            <span class="fa fa-plus"></span> 학생추가
          </a>
        </div>
      </div>
    </div>

    <div class="col-6">
      <div class="row">
        <!-- button1 start -->
        <div class="col-xs-6">
          <select class="form-control" id="select_workspace">
            <option selected>leanmath</option>
            <option>thezone</option>
          </select>
        </div>
        <!-- button1 end -->

        <!-- button2 start -->
        <div class="col-xs-6 ml-3">
          <select class="form-control" id="select_status">
            <option selected>재원</option>
            <option>대기</option>
            <option>퇴원</option>
          </select>
        </div>
        <!-- button2 end -->
      </div>
    </div>
  </div>

  <!-- row4 main data table  begin -->
  <div class="row" id='row4'>
    <div class="col-md-12">
      <table class="table table-striped display compact cell-border" id="student_list_data" style="width:100%">
      </table>
    </div>
  </div>
  <!-- row4 main data table end -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->