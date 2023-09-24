<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row" id='row1'>
    <div class="col-xs-12">
      <h1><a style=text-decoration-line:none href='http://jakeleanco.dothome.co.kr/leanmath/index.php/temp_c/get_list'> LEAN-MATH </a>
        <small>/상세화면 </small>
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
  <form id="st_info_modify" action="<?= site_url() ?>/student2/st_modify" method="post">
    <div class="row mb-3" id='row2'>

      <div class="col-6">
        <div class="row">
          <div class="float-xs-right mr-2">
            <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#student_add">
              <span class="fa fa-plus"></span> 학생추가
            </a>
          </div>
          <div class="float-xs-right mr-2">
            <button type="submit" class="btn btn-primary">
              <span class="fa fa-plus"></span> 학생수정
            </button>
          </div>
          <div class="float-xs-right mr-2">
            <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#student_del">
              <span class="fa fa-plus"></span> 학생삭제
            </a>
          </div>
        </div>
      </div>
    </div>

    <ul>

      <li>
        <?= $element->id ?> ,
        <?= $element->title ?> ,
        <?= $element->st_id ?> ,
        <?= $element->st_name ?>
      </li>

    </ul>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->