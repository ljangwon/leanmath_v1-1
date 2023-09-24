<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row" id='row1'>
    <div class="col-xs-12">
      <h1><a style=text-decoration-line:none href='http://jakeleanco.dothome.co.kr/leanmath/index.php/student2'> LEAN-MATH </a>
        <small>/학생 상세화면 </small>
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
        <span>
          session_st_id : <?= $this->session->userdata('st_id') ?>
          student name : <?= $this->session->userdata('st_name') ?>
        </span>
      </div>
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

    <!-- --------------------------------------- -->
    <div class="row mb-3" id='row3'>
      <div class="col-sm-2 text-center">
        <label for="" class="form-label">ST_ID</label>
        <input type="text" name="id" class="form-control" placeholder="" value="<?= $student->id ?>">
      </div>

      <div class="col-sm-2 text-center">
        <label for="" class="form-label">이 름</label>
        <input type="text" name="name" class="form-control" placeholder="" value="<?= $student->name ?>">
      </div>

      <div class="col-sm-2 text-center">
        <label for="" class="form-label">학생전화</label>
        <input type="text" name="s_phone" class="form-control" placeholder="" value="<?= $student->s_phone ?>">
      </div>

      <div class="col-sm-2 text-center">
        <label for="" class="form-label">거주지</label>
        <input type="text" name="house" class="form-control" placeholder="" value="<?= $student->house ?>">
      </div>

      <div class="col-sm-2 text-center">
        <label for="" class="form-label">형제</label>
        <input type="text" name="sibling_name" class="form-control" value="<?= $student->sibling_name ?>">
      </div>
      <div class="col-sm-2 text-center">
        <label for="" class="form-label">빈칸</label>
        <input type="text" name="" class="form-control" value="">
      </div>
    </div>

    <!-- --------------------------------------- -->
    <div class="row mb-3" id='row4'>
      <div class="col-sm-3 text-center">
        <label for="" class="form-label">학 교</label>
        <input type="text" name="school_name" class="form-control" placeholder="명일중" value="<?= $student->school_name ?>">
      </div>

      <div class="col-sm-3 text-center">
        <label for="" class="form-label text-nowrap">구 분</label>
        <input type="text" name="grade1" class="form-control" placeholder="중등" value="<?= $student->grade1 ?>">
      </div>

      <div class="col-sm-3 text-center text-nowrap">
        <label for="" class="form-label">학 년</label>
        <input type="text" name="grade2" class="form-control" placeholder="1" value="<?= $student->grade2 ?>">
      </div>

      <div class="col-sm-3 text-center">
        <label for="" class="form-label">수업명</label>
        <input type="text" name="class_name" class="form-control" placeholder="수6토14" value="<?= $student->class_name ?>">
      </div>
    </div>
    <!-- --------------------------------------- -->
    <div class="row mb-3" id='row5'>
      <div class="col-sm-2 text-center">
        <label for="" class="form-label">요일1</label>
        <input type="text" name="class_day1" class="form-control" placeholder="3" value="<?= $student->class_day1 ?>">
      </div>

      <div class="col-sm-2 text-center">
        <label for="" class="form-label">시간1</label>
        <input type="text" name="class_time1" class="form-control" placeholder="14" value="<?= $student->class_time1 ?>">
      </div>

      <div class="col-sm-2 text-center">
        <label for="" class="form-label">요일2</label>
        <input type="text" name="class_day2" class="form-control" placeholder="6" value="<?= $student->class_day2 ?>">
      </div>

      <div class="col-sm-2 text-center">
        <label for="" class="form-label">시간2</label>
        <input type="text" name="class_time2" class="form-control" placeholder="9" value="<?= $student->class_time2 ?>">
      </div>

      <div class="col-sm-2 text-center">
        <label for="" class="form-label">요일3</label>
        <input type="text" name="class_day3" class="form-control" placeholder="" value="<?= $student->class_day3 ?>">
      </div>

      <div class="col-sm-2 text-center">
        <label for="" class="form-label">시간3</label>
        <input type="text" name="class_time3" class="form-control" placeholder="" value="<?= $student->class_time3 ?>">
      </div>
    </div>
    <!-- --------------------------------------- -->
    <div class="row mb-3" id='row6'>
      <div class="col-sm-4 text-center">
        <label for="" class="form-label">수업료</label>
        <input type="text" name="fees" class="form-control" placeholder="수업료" value="<?= $student->fees ?>">
      </div>
      <div class="col-sm-4 text-center">
        <label for="" class="form-label">할인금액1</label>
        <input type="text" name="discount1" class="form-control" placeholder="할인금액" value="<?= $student->discount1 ?>">
      </div>

      <div class="col-sm-4 text-center">
        <label for="" class="form-label">할인금액2</label>
        <input type="text" name="discount2" class="form-control" placeholder="할인금액" value="<?= $student->discount2 ?>">
      </div>
    </div>
    <!-- --------------------------------------- -->
    <div class="row mb-3" id='row7'>
      <div class="col-sm-3 text-center">
        <label for="" class="form-label">영수증 폰번호</label>
        <input type="text" name="receipt_phone" class="form-control" placeholder="영수증 폰번호" value="<?= $student->receipt_phone ?>">
      </div>

      <div class="col-sm-3 text-center">
        <label for="" class="form-label">영수증 사용</label>
        <input type="text" name="receipt_use" class="form-control" placeholder="영수증 사용여부" value="<?= $student->receipt_use ?>">
      </div>

      <div class="col-sm-6 text-center">
        <label for="" class="form-label">할인사유</label>
        <input type="text" name="discount_memo" class="form-control" placeholder="할인 사유" value="<?= $student->discount_memo ?>">
      </div>
    </div>
    <!-- --------------------------------------- -->
    <div class="row mb-3" id='row8'>
      <div class="col-sm-3 text-center">
        <label for="" class="form-label text-nowrap">삭제flag</label>
        <input type="text" name="flag" class="form-control" placeholder="flag" value="<?= $student->flag ?>">
      </div>

      <div class="col-sm-3 text-center">
        <label for="" class="form-label text-nowrap">학생상태</label>
        <input type="text" name="status" class="form-control" placeholder="학생상태" value="<?= $student->status ?>">
      </div>

      <div class="col-sm-3 text-center">
        <label for="" class="form-label text-nowrap">시작일</label>
        <input type="text" name="start_date" id="start_date" class="form-control" placeholder="시작일" value="<?= $student->start_date ?>">
      </div>

      <div class="col-sm-3 text-center">
        <label for="" class="form-label text-nowrap">종료일</label>
        <input type="text" name="end_date" id="end_date" class="form-control" value="<?= $student->end_date ?>">
      </div>
    </div>
    <!-- --------------------------------------- -->
    <div class="row mb-3" id='row9'>
      <div class="col-sm-4 text-center">
        <label class="form-label">연산선행수준</label>
        <input type="text" name="level1" class="form-control" value="<?= $student->level1 ?>">
      </div>

      <div class="col-sm-4 text-center">
        <label class="form-label">개념선행수준</label>
        <input type="text" name="level2" class="form-control" value="<?= $student->level2 ?>">
      </div>
      <div class="col-sm-4 text-center">

        <label class="form-label">현행심화수준</label>
        <input type="text" name="level3" class="form-control" value="<?= $student->level3 ?>">
      </div>
    </div>
    <!-- --------------------------------------- -->
    <div class="row mb-3" id='row10'>
      <div class="col-sm-4 text-center">
        <label class="form-label text-nowrap">상담 메모</label>
        <input type="text" name="report_last_date" class="form-control" value="<?= $student->report_last_date ?>">
        <div class="form-row">
          <div class="col-6"> 상담일 <input type="text" name="report_date" id="report_date" class="form-control" value="<?= $student->report_date ?>"> </div>
          <div class="col-3"> 상담형식 <input type="text" name="report_type" class="form-control" value="<?= $student->report_type ?>"> </div>
          <?php
          $last_date = $student->report_date;
          $days = days_to_today($last_date);

          if ($days > 60) {
            $color = "color:red";
          } else {
            $color = "color:blue";
          }
          ?>
          <div class="col-3"> 경과일 <input type="text" readonly name="pass_days" class="form-control" value="<?= $days ?>" style="<?= $color ?>"> </div>
        </div>
      </div>

      <div class=" col-sm-4 text-center">
        <label class="form-label">지적사항 메모</label>
        <textarea name="check_memo" placeholder="지적사항 메모" class="form-control text-start" rows="5"><?= $student->check_memo ?> </textarea>
      </div>
      <div class="col-sm-4 text-center">
        <label class="form-label">지각/결석 메모</label>
        <textarea name="off_memo" placeholder="지각/결석 메모기" class="form-control text-start" rows="5"><?= $student->off_memo ?> </textarea>
      </div>
    </div>
    <!-- --------------------------------------- -->
    <div class="row mb-3" id='row11'>
      <div class="col-sm-3 text-center">
        <label class="form-label">메모</label>
        <textarea name="memo" placeholder="메모" class="form-control text-start" rows="15"><?= $student->memo ?> </textarea>
      </div>
      <div class="col-sm-6 text-center">
        <label class="form-label">학습기록</label>
        <textarea name="study_memo" placeholder="학습기록" class="form-control text-start" rows="15"><?= $student->study_memo ?> </textarea>
      </div>
      <div class="col-sm-3 text-center">
        <label class="form-label">내신기록</label>
        <textarea name="test_memo" placeholder="내신기록" class="form-control text-start" rows="15"><?= $student->test_memo ?> </textarea>
      </div>
    </div>
  </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->