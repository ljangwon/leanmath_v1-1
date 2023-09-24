<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row" id='row1'>
    <div class="col-xs-12">
      <h1><a style=text-decoration-line:none href='<?php echo site_url() ?>'> LEAN-MATH </a>
        <small>/Book 리스트</small>
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
          <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#create_book">
            <span class="fa fa-plus"></span> Book추가
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
            <option selected>사용</option>
            <option>미사용</option>
            <option>임시</option>
          </select>
        </div>
        <!-- button2 end -->
      </div>
    </div>
  </div>
  <!-- row3 end -->

  <!-- row3 start -->
  <div class="row">
    <div class="col-md-12">
      <!-- tab list start -->
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="elem-tab" data-toggle="tab" href="#elem-book" role="tab" aria-controls="초등" aria-selected="true">초등교재</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="mid-tab" data-toggle="tab" href="#mid-book" role="tab" aria-controls="중등" aria-selected="false">중등교재</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="high-tab" data-toggle="tab" href="#high-book" role="tab" aria-controls="고등" aria-selected="false">고등교재</a>
        </li>
      </ul>
      <!-- tab list end -->

      <!-- tab content start -->
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="elem-book" role="tabpanel" aria-labelledby="home-tab">
          초등교재 리스트
          <table class="table table-striped display compact cell-border" id="elem_book_list_data" style="width:100%">
          </table>

        </div>

        <div class="tab-pane fade" id="mid-book" role="tabpanel" aria-labelledby="profile-tab">
          중등교재 리스트
          <table class="table table-striped display compact cell-border" id="mid_book_list_data" style="width:100%">
          </table>
        </div>

        <div class="tab-pane fade" id="high-book" role="tabpanel" aria-labelledby="contact-tab">
          고등교재 리스트
          <table class="table table-striped display compact cell-border" id="high_book_list_data" style="width:100%">
          </table>
        </div>
      </div> <!-- tab content end -->
    </div>
  </div>
  <!-- row3 end -->

</div>