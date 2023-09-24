<!-- Begin .container-fluid -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row">
    <div class="col-xs-12">
      <h5><a style=text-decoration-line:none href='<?php echo site_url() ?>'> LEAN-MATH </a>
        <small>/빈화면 </small>
      </h5>
    </div>
  </div>
  <!-- Message -->
  <div class="row">
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

  <div class="select">
    <select class="form-control" id="locale">
      <option value="en-US">en-US</option>
      <option value="ko-KR" selected>ko-KR</option>
    </select>
  </div>

  <div id="toolbar">
    <button id="remove" class="btn btn-danger" disabled>
      <i class="fa fa-trash"></i> Delete
    </button>
  </div>

  <!-- table content -->

  <table id="table" data-toolbar="#toolbar" data-search="true" data-show-refresh="true" data-show-toggle="true" data-show-fullscreen="true" data-show-columns="true" data-show-columns-toggle-all="true" data-detail-view="true" data-show-export="true" data-click-to-select="true" data-detail-formatter="detailFormatter" data-minimum-count-columns="2" data-show-pagination-switch="true" data-pagination="true" data-id-field="id" data-page-list="[10, 25, 50, 100, all]" data-show-footer="true" data-side-pagination="server" data-url="https://examples.wenzhixin.net.cn/examples/bootstrap_table/data" data-response-handler="responseHandler">
  </table>

  <!-- end -->


</div>
<!-- End of .container-fluid -->