<!-- Begin .container-fluid -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row">
    <div class="col-xs-12">
      <h4>
        <a style=text-decoration-line:none href='<?= site_url('student2/screen_timetable') ?>'> 시간표 </a>
        >
        <a style=text-decoration-line:none href='<?= site_url('st_study_c') ?>'> 학습기록 </a>
        >
        <a style=text-decoration-line:none href='<?= site_url('main_test_c') ?>'> 평가기록 </a> >
        <small>교재목록 화면 </small>
      </h4>
    </div>
  </div>
  <!-- Message -->
  <div class="row">
    <div class="col-xs-12">
      <span id="msg" style="background-color: red">
        <?php echo $this->session->flashdata('msg'); ?>
      </span>
    </div>
  </div>

  <!-- End of .row -->
  <!-- End of Page Heading -->

  <!-- Begin Main Page -->

  <i class="fa fa-arrow"></i>

  <div class="select form-inline">
    <!-- <select class="form-control" id="locale">
      <option value="ko-KR" selected>ko-KR</option>
      <option value="en-US">en-US</option>
    </select> -->
    <input type="text" id="locale" value="ko-KR" hidden> </input>

    <select class="form-control" id="show" name="show_flag_s">
      <option value="1" selected>선택보기</option>
      <option value="0">모두보기</option>
    </select>

    <select class="form-control" id="grade" name="grade">
      <option value="" selected>No Selected</option>
      <option value="초4">초등4</option>
      <option value="초5">초등5</option>
      <option value="초6">초등6</option>
      <option value="중1">중등1</option>
      <option value="중2">중등2</option>
      <option value="중3">중등3</option>
      <option value="고1">고등1</option>
      <option value="고2">고등2</option>
    </select>

    <select class="form-control" id="st_id" name="st_id">
      <option value="">No Selected</option>
    </select>

  </div>

  <div id="toolbar">
    <button id="remove" class="btn btn-danger" disabled>
      <i class="fa fa-trash"></i> Delete
    </button>
    <button id="add" class="btn btn-danger">
      <i class="fa fa-plus"></i> Add
    </button>
  </div>

  <!-- table content -->

  <table id="table_st_study" data-search="true" data-detail-view="true" data-detail-formatter="detailFormatter" data-id-field="id" data-page-list="[10, 25, 50, 100, all]" data-show-footer="true" data-response-handler="responseHandler">
  </table>
  <!-- end -->

</div>
<!-- End of .container-fluid -->