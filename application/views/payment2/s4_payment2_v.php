<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row" id='row1'>
    <div class="col-xs-12">
      <h4>
        <a style=text-decoration-line:none href='<?= site_url('student2/screen_timetable') ?>'> 시간표 </a>
        >
        <a style=text-decoration-line:none href='<?= site_url('payment2') ?>'> 수납현황 </a>
        >
        <a style=text-decoration-line:none href='<?= site_url('book') ?>'> 교재현황 </a> >
        <small> 수납 현황 </small>
      </h4>
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
            <span class=""> Add Month </span>
          </a>
        </div>
        <div class="float-sm-left mr-2">
          <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Delete_Month">
            <span class=""></span> Delete Month
          </a>
        </div>
        <div class="float-sm-left mr-2">
          <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add">
            <span class=""></span> Add New
          </a>
        </div>
        <div class="float-sm-left mr-2">
          <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Notice">
            <span class=""></span>수강료공지
          </a>
        </div>
      </div>
    </div>

    <div class="col-6">
      <div class="row">

        <div class="col-xs-4">
          <select class="form-control" id="select_year">
            <option>2021년</option>
            <option>2022년</option>
            <option>2023년</option>
          </select>
        </div>

        <div class="col-xs-4">
          <select class="form-control" id="select_month">
            <option>1월</option>
            <option>2월</option>
            <option>3월</option>
            <option>4월</option>
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
            <option selected>미납</option>
            <option>전체</option>
          </select>
        </div>

      </div>
    </div>
  </div>

  <!-- row4 main data table  begin -->
  <div class="row" id='row4'>
    <div class="col-md-12">
      <table class="table table-striped display compact cell-border" id="payment_data" style="width:100%">
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