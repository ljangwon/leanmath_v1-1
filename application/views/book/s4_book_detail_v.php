<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row" id='row1'>
    <div class="col-xs-12">
      <h1><a style=text-decoration-line:none href='<?php echo site_url() ?>'> LEAN-MATH </a>
        <small>/book 상세화면 </small>
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
  <form id="book_info_modify" action="<?= site_url() ?>/book/update_book" method="post">
    <div class="row mb-3" id='row2'>

      <div class="col-6">
        <span>
          book id : <?= $this->session->userdata('book_id') ?>
          book title : <?= $this->session->userdata('book_title') ?>
        </span>
      </div>
      <div class="col-6">
        <div class="row">
          <div class="float-xs-right mr-2">
            <button type="submit" class="btn btn-primary">
              <span class="fa fa-plus"></span> 교재수정
            </button>
          </div>
          <div class="float-xs-right mr-2">
            <a href="javascript:void(0);" id='btn_chapter_add' class="btn btn-primary">
              <span class="fa fa-plus"></span> 단원추가
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- --------------------------------------- -->
    <div class="row mb-3" id='row3'>
      <div class="col-sm-4 text-center">
        <label for="" class="form-label">BOOK_ID</label>
        <input type="text" name="id" class="form-control" placeholder="" value="<?= $book->id ?>">
      </div>

      <div class="col-sm-4 text-center">
        <label for="" class="form-label">Title </label>
        <input type="text" name="book_title" class="form-control" placeholder="" value="<?= $book->title ?>">
      </div>

      <div class="col-sm-4 text-center">
        <label for="" class="form-label">구분</label>
        <input type="text" name="grade1" class="form-control" placeholder="" value="<?= $book->grade1 ?>">
      </div>

      <div class="col-sm-4 text-center">
        <label for="" class="form-label">학년</label>
        <input type="text" name="grade2" class="form-control" placeholder="" value="<?= $book->grade2 ?>">
      </div>

      <div class="col-sm-4 text-center">
        <label for="" class="form-label">단원수</label>
        <input type="text" name="chapter_count" class="form-control" placeholder="" value="<?= $book->chapter_count ?>">
      </div>

      <div class="col-sm-4 text-center">
        <label for="" class="form-label">상태</label>
        <input type="text" name="status" class="form-control" value="<?= $book->status ?>">
      </div>
    </div>

    <!-- row4 main data table  begin -->
    <div class="row" id='row4'>
      <div class="col-md-12">
        <table id="book_chapter_list_data" class="table table-striped display compact cell-border" style="width:100%">
        </table>
      </div>
    </div>
    <!-- row4 main data table end -->