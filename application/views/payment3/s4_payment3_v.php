<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row" id='row1'>
    <div class="col-xs-12">
      <h1><a style=text-decoration-line:none href='<?php echo site_url() ?>'> LEAN-MATH </a>
        <small>/수납영수증</small>
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
          <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add_Month">
            <span class="fa fa-plus"> Add Month </span>
          </a>
        </div>
        <div class="float-sm-left mr-2">
          <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Delete_Month">
            <span class="fa fa-plus"></span> Delete Month
          </a>
        </div>
        <div class="float-sm-left mr-2">
          <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add">
            <span class="fa fa-plus"></span> Add New
          </a>
        </div>
      </div>
    </div>

    <div class="col-6">
      <div class="row">

        <div class="col-xs-4">
          <select class="form-control" id="select_year">
            <option>2021년</option>
            <option selected>2022년</option>
          </select>
        </div>

        <div class="col-xs-4">
          <select class="form-control" id="select_month">
            <option>1월</option>
            <option>2월</option>
            <option>3월</option>
            <option selected="">4월</option>
            <option>5월</option>
            <option>6월</option>
            <option>7월</option>
            <option>8월</option>
            <option>9월</option>
            <option>10월</option>
            <option>11월</option>
            <option>12월</option>
          </select>
        </div>

        <div class="col-xs-4">
          <select class="form-control" id="select_pay_status">
            <option>카드수납</option>
            <option>현금수납</option>
            <option>미납</option>
            <option selected>전체</option>
          </select>
        </div>

      </div>
    </div>
  </div>

  <!-- row4 main data table  begin -->
  <div class="row" id='row4'>
    <div class="col-md-12">
      <table class="table table-striped display compact cell-border" id="payment3_data" style="width:100%">
      </table>
    </div>
  </div>
  <!-- row4 main data table end -->

  <div class="row">
    <div class="col-md-12">
      net income: <span id="net_income"> </span> 원

    </div>

  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->