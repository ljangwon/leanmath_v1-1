<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row" id='row1'>
    <div class="col-xs-12">
      <h4>
        <a style=text-decoration-line:none href='<?= site_url('student2/screen_timetable') ?>'> 전체 시간표 </a>
        >
        <a style=text-decoration-line:none href='<?= site_url('payment2') ?>'> 수납현황 </a>
        >
        <a style=text-decoration-line:none href='<?= site_url('book') ?>'> 교재현황 </a> >
        <small>전체 시간표2 </small>
      </h4>
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

        </div>
        <!-- button1 end -->

        <!-- button2 start -->
        <div class="col-xs-6 ml-3">

        </div>
        <!-- button2 end -->
      </div>
    </div>
  </div>

  <!-- row4 main data table  begin -->
  <div class="row" id='timetable'>

    <?php
    if (!function_exists('memo_input')) {
      function memo_input($v_memo)
      {
        $input = '<input size="15" type="text" style="" value="' . $v_memo . '">';
        return $input;
      }
    }

    // if (!function_exists('card_display')) {
    //   function card_display($v_id, $v_name, $v_report_date, $v_grade1, $v_grade2, $v_class_name, $v_report_short_memo)
    //   {
    //     $input = '<li><a class="collapse-item" href="' + site_url('/student2/get_student/') + '/' +  $v_id + '">'
    //       + $v_name + '</a> - ' + elapsed_days_span($v_report_date) +
    //       '<br>- ' + $v_grade1 + '(' + $v_grade2 + ')-' + $v_class_name + '</a> <br>' +
    //       +memo_input($v_report_short_memo) + '<br> </li> ';

    //     return $input;
    //   }
    // }

    ?>

    <!-- 금요일 start -->
    <div class="col-md-2 card-frame">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">금2</h5>
          <?php
          foreach ($students as $entry) {
            if (
              $entry->workspace == $this->session->userdata('workspace') &&
              $entry->status == "재원" &&
              $entry->class_day2 == '5' &&
              $entry->class_time2 == '14'
            ) {
          ?>
              <li>
                <a class="collapse-item" href="<?= site_url('/student2/get_student/') ?>/<?= $entry->id ?>">
                  <?= $entry->name ?></a> - ( <?= elapsed_days_span($entry->report_date) ?>, <?= elapsed_days_span($entry->report_update_date) ?> ) <br>- <?= $entry->grade1 ?>(<?= $entry->grade2 ?>)-<?= $entry->class_name ?> </a> <br>
                <?= $this->payment_m->pay_status($entry->id) ?><br>
                <br>
              </li>
          <?php
            }
          }
          ?>
        </div>
      </div>
      <!-- card end -->

      <div class="card">

        <div class="card-body">
          <h5 class="card-title">금4</h5>
          <?php
          foreach ($students as $entry) {
            if (
              $entry->workspace == $this->session->userdata('workspace') &&
              $entry->status == "재원" &&
              $entry->class_day2 == '5' &&
              $entry->class_time2 == '16'
            ) {
          ?>
              <li>
                <a class="collapse-item" href="<?= site_url('/student2/get_student/') ?>/<?= $entry->id ?>">
                  <?= $entry->name ?></a> - ( <?= elapsed_days_span($entry->report_date) ?>, <?= elapsed_days_span($entry->report_update_date) ?> ) <br>- <?= $entry->grade1 ?>(<?= $entry->grade2 ?>)-<?= $entry->class_name ?> </a> <br>
                <?= $this->payment_m->pay_status($entry->id) ?><br>
                <br>
              </li>
          <?php
            }
          }
          ?>
        </div>
      </div>
      <!-- card end -->

      <div class="card">

        <div class="card-body">
          <h5 class="card-title">금6</h5>
          <?php
          foreach ($students as $entry) {
            if (
              $entry->workspace == $this->session->userdata('workspace') &&
              $entry->status == "재원" &&
              $entry->class_day2 == '5' &&
              $entry->class_time2 == '18'
            ) {
          ?>
              <li>
                <a class="collapse-item" href="<?= site_url('/student2/get_student/') ?>/<?= $entry->id ?>">
                  <?= $entry->name ?></a> - ( <?= elapsed_days_span($entry->report_date) ?>, <?= elapsed_days_span($entry->report_update_date) ?> ) <br>- <?= $entry->grade1 ?>(<?= $entry->grade2 ?>)-<?= $entry->class_name ?> </a> <br>
                <?= $this->payment_m->pay_status($entry->id) ?><br>
                <br>
              </li>
          <?php
            }
          }
          ?>
        </div>
      </div>
      <!-- card end -->
      <div class="card">

        <div class="card-body">
          <h5 class="card-title">금8</h5>
          <?php
          foreach ($students as $entry) {
            if (
              $entry->workspace == $this->session->userdata('workspace') &&
              $entry->status == "재원" &&
              $entry->class_day2 == '5' &&
              $entry->class_time2 == '20'
            ) {
          ?>
              <li>
                <a class="collapse-item" href="<?= site_url('/student2/get_student/') ?>/<?= $entry->id ?>">
                  <?= $entry->name ?></a> - ( <?= elapsed_days_span($entry->report_date) ?>, <?= elapsed_days_span($entry->report_update_date) ?> ) <br>- <?= $entry->grade1 ?>(<?= $entry->grade2 ?>)-<?= $entry->class_name ?> </a> <br>
                <?= $this->payment_m->pay_status($entry->id) ?><br>
                <br>
              </li>
          <?php
            }
          }
          ?>
        </div>
      </div>
      <!-- card end -->
    </div>
    <!-- 금요일 end -->




  </div>
  <!-- row4 main data table end -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->