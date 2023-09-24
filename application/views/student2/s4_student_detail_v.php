<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="row" id='row1'>
    <div class="col-xs-12">
      <h6>
        <a style=text-decoration-line:none href='<?= site_url('student2/screen_timetable') ?>'> 전체 시간표 </a>
        >
        <a style=text-decoration-line:none href='<?= site_url('student2/screen_timetable_today') ?>'> 오늘 시간표 </a>
        >
        <a style=text-decoration-line:none href='<?= site_url('st_study_c') ?>'> 학습기록 </a>
        >
        <a style=text-decoration-line:none href='<?= site_url('main_test_c') ?>'> 평가기록 </a>
        - st_id : <?= $student->id ?> <a class="collapse-item" href="<?= site_url('/student2/print_cover/') ?>/<?= $student->id ?>"> 학생관리 표지인쇄 </a>
      </h6>
    </div>
  </div>

  <!-- row1 title and message end -->

  <!-- row2 add buttons begin col-xs-4 -->
  <form id="st_info_modify" action='<?= site_url("student2/st_modify") ?>' method="post">
    <div class="row mb-3" id='row2'>
      <input type="hidden" name='id' value="<?= $student->id ?>">
      <div class="col-6">
        <div class="row">
          <div class="float-xs-right mr-2">
            <a href="javascript:void(0);" class="btn-xs btn-primary" data-toggle="modal" data-target="#student_add">
              <span class="fa fa-plus"></span> 학생추가
            </a>
          </div>
          <div class="float-xs-right mr-2">
            <button type="submit" class="btn-xs btn-primary">
              <span class="fa fa-plus"></span> 학생수정
            </button>
          </div>
          <div class="float-xs-right mr-2">
            <a href="javascript:void(0);" class="btn-xs btn-primary" data-toggle="modal" data-target="#student_del">
              <span class="fa fa-plus"></span> 학생삭제
            </a>
          </div>

          <div class="float-xs-right mr-2">
            <a href="javascript:void(0);" class="btn-xs btn-primary" data-toggle="modal" data-target="#st_study_add">
              <span class="fa fa-plus"></span>학습추가
            </a>
          </div>

        </div>
      </div>
    </div>

    <!-- --------------------------------------- -->
    <h3 align="center"> - 학생 상세정보 -
    </h3>

    <!-- --------------------------------------- -->
    <div class="row mb-3" id='row3'>

      <div class="col-sm-2 text-center">
        <label for="" class="form-label">이 름</label>
        <input type="text" name="name" class="form-control" placeholder="" value="<?= $student->name ?>">
      </div>

      <div class="col-sm-2 text-center">
        <label for="" class="form-label text-nowrap">학생상태</label>
        <input type="text" name="status" class="form-control" placeholder="" value="<?= $student->status ?>">
      </div>

      <div class="col-sm-2 text-center">
        <label for="" class="form-label">학 교</label>
        <input type="text" name="school_name" class="form-control" placeholder="" value="<?= $student->school_name ?>">
      </div>
      <div class="col-sm-2 text-center">
        <label for="" class="form-label text-nowrap">학년구분</label>
        <input type="text" name="grade" class="form-control" placeholder="" value="<?= $student->grade ?>">
      </div>

      <div class="col-sm-3 text-center">
        <label for="" class="form-label">학생전화</label>
        <input type="text" name="s_phone" class="form-control" placeholder="" value="<?= $student->s_phone ?>">
      </div>
      <div class="col-sm-3 text-center">
        <label for="" class="form-label">학부모전화</label>
        <input type="text" name="m_phone" class="form-control" placeholder="" value="<?= $student->m_phone ?>">
      </div>

      <div class="col-sm-2 text-center">
        <label for="" class="form-label">거주지</label>
        <input type="text" name="house" class="form-control" placeholder="" value="<?= $student->house ?>">
      </div>

      <div class="col-sm-2 text-center">
        <label for="" class="form-label">형제메모</label>
        <textarea name="sibling_memo" class="form-control" rows="3"><?= $student->sibling_memo ?> </textarea>
      </div>
    </div>

    <!-- --------------------------------------- -->
    <div class="row mb-3" id='row8'>
      <div class="col-sm-2 text-center">
        <label for="" class="form-label text-nowrap">구 분</label>
        <input type="text" name="grade1" class="form-control" placeholder="초등or중등" value="<?= $student->grade1 ?>">
      </div>

      <div class="col-sm-1 text-center text-nowrap">
        <label for="" class="form-label">학 년</label>
        <input type="text" name="grade2" class="form-control" placeholder="학년" value="<?= $student->grade2 ?>">
      </div>
      <div class="col-sm-2 text-center">
        <label for="" class="form-label">수업명</label>
        <input type="text" name="class_name" class="form-control" placeholder="수업명" value="<?= $student->class_name ?>">
      </div>

      <div class="col-sm-1 text-center">
        <label for="" class="form-label">요일1</label>
        <input type="text" name="class_day1" class="form-control" placeholder="" value="<?= $student->class_day1 ?>">
      </div>
      <div class="col-sm-2 text-center">
        <label for="" class="form-label">시간1</label>
        <input type="text" name="class_time1" class="form-control" placeholder="" value="<?= $student->class_time1 ?>">
      </div>

      <div class="col-sm-1 text-center">
        <label for="" class="form-label">요일2</label>
        <input type="text" name="class_day2" class="form-control" placeholder="" value="<?= $student->class_day2 ?>">
      </div>
      <div class="col-sm-2 text-center">
        <label for="" class="form-label">시간2</label>
        <input type="text" name="class_time2" class="form-control" placeholder="" value="<?= $student->class_time2 ?>">
      </div>

      <div class="col-sm-1 text-center">
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
      <div class="col-sm-2 text-center">
        <label for="" class="form-label">수업료</label>
        <input type="text" name="fees" class="form-control" placeholder="" value="<?= $student->fees ?>">
      </div>

      <div class="col-sm-2 text-center">
        <label for="" class="form-label">영수증 사용</label>
        <input type="text" name="receipt_use" class="form-control" placeholder="" value="<?= $student->receipt_use ?>">
      </div>

      <div class="col-sm-3 text-center">
        <label for="" class="form-label">영수증 폰번호</label>
        <input type="text" name="receipt_phone" class="form-control" placeholder="" value="<?= $student->receipt_phone ?>">
      </div>

      <div class="col-sm-2 text-center">
        <label for="" class="form-label">할인금액1</label>
        <input type="text" name="discount1" class="form-control" placeholder="" value="<?= $student->discount1 ?>">
      </div>

      <div class="col-sm-2 text-center">
        <label for="" class="form-label">할인금액2</label>
        <input type="text" name="discount2" class="form-control" placeholder="" value="<?= $student->discount2 ?>">
      </div>

      <div class="col-sm-3 text-center">
        <label for="" class="form-label">할인사유</label>
        <input type="text" name="discount_memo" class="form-control" placeholder="" value="<?= $student->discount_memo ?>">
      </div>

    </div>

    <!-- --------------------------------------- -->
    <!-- <div class="row mb-3" id='row9'>
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
    </div> -->

    <!-- --------------------------------------- -->
    <div class="row mb-3" id='row10'>
      <div class="col-sm-12 text-center">
        <label class="form-label text-nowrap">상담 메모</label>
        <input type="text" name="report_short_memo" class="form-control" value="<?= $student->report_short_memo ?>">

        <div class="form-row">
          <div class="col-6">
            <label for="" class="form-label text-nowrap">시작일</label>
            <input type="text" name="start_date" id="start_date" class="form-control" placeholder="시작일" value="<?= $student->start_date ?>">
          </div>

          <div class="col-6">
            <label for="" class="form-label text-nowrap">종료일</label>
            <input type="text" name="end_date" id="end_date" class="form-control" value="<?= $student->end_date ?>">
          </div>
        </div>

        <div class="form-row">
          <div class="col-2"> 형식 <input type="text" name="report_type" class="form-control" value="<?= $student->report_type ?>"> </div>
          <div class="col-3"> 상담일 <input type="text" name="report_date" id="report_date" class="form-control" value="<?= $student->report_date ?>"> </div>
          <?php

          if (!$student->report_date) {
            $color1 = "color:pink";
            $days1 = "미정";
          } else {
            $last_date1 = $student->report_date;
            $days1 = days_to_today($last_date1);

            if ($days1 > 100) {
              $color1 = "color:red";
            } else {
              $color1 = "color:blue";
            }
          }

          ?>
          <div class="col-2"> 상담 경과일 <input type="text" readonly name="pass_days1" class="form-control" value="<?= $days1 ?>" style="<?= $color1 ?>"> </div>
          <div class="col-3"> Report 갱신일 <input type="text" name="report_update_date" id="report_update_date" class="form-control" value="<?= $student->report_update_date ?>"> </div>
          <?php
          if (!$student->report_update_date) {
            $color2 = "color:pink";
            $days2 = "미정";
          } else {
            $last_date2 = $student->report_update_date;
            $days2 = days_to_today($last_date2);

            if ($days1 > 100) {
              $color2 = "color:red";
            } else {
              $color2 = "color:blue";
            }
          }
          ?>
          <div class="col-2"> 갱신 경과일<input type="text" readonly name="pass_days2" class="form-control" value="<?= $days2 ?>" style="<?= $color2 ?>"> </div>
        </div>
      </div>

      <div class="col-sm-6 text-center">
        <label class="form-label">지적사항 메모</label>
        <textarea name="check_memo" placeholder="" class="form-control text-start" rows="7"><?= $student->check_memo ?> </textarea>
      </div>
      <div class="col-sm-6 text-center">
        <label class="form-label">지각/결석 메모</label>
        <textarea name="off_memo" placeholder="" class="form-control text-start" rows="7"><?= $student->off_memo ?> </textarea>
      </div>
    </div>
    <!-- --------------------------------------- -->
    <div class="row mb-3" id='row11'>
      <div class="col-sm-3 text-center">
        <label class="form-label">레벨 메모</label>
        <textarea name="memo" placeholder="" class="form-control text-start" rows="15"><?= $student->memo ?> </textarea>
      </div>
      <div class="col-sm-6 text-center">
        <label class="form-label">학습 기록</label>
        <textarea name="study_memo" placeholder="학습기록" class="form-control text-start" rows="15"><?= $student->study_memo ?> </textarea>
      </div>
      <div class="col-sm-3 text-center">
        <label class="form-label">시험 준비 기록</label>
        <textarea name="test_memo" placeholder="내신기록" class="form-control text-start" rows="15"><?= $student->test_memo ?> </textarea>
      </div>
    </div>

    <div class="row mb-3" id='row12'>
      <div class="col-sm-12 text-center">
        <label class="form-label">자기주도 학습시간</label>
        <textarea name="study_time" placeholder="" class="form-control text-start" rows="2"><?= $student->study_time ?> </textarea>
      </div>
    </div>

    <div class="row mb-3" id='row13'>
      <div class="col-sm-4 text-center">
        <label class="form-label">레벨평가 결과</label>
        <textarea name="level_test" placeholder="" class="form-control text-start" rows="10"><?= $student->level_test ?> </textarea>
      </div>

      <div class="col-sm-4 text-center">
        <label class="form-label">교재사용 이력</label>
        <textarea name="book_history" placeholder="" class="form-control text-start" rows="10"><?= $student->book_history ?> </textarea>
      </div>

      <div class="col-sm-4 text-center">
        <label class="form-label">과정평가 결과</label>
        <textarea name="course_test" placeholder="" class="form-control text-start" rows="10"><?= $student->course_test ?> </textarea>
      </div>
    </div>

    <div class="row mb-3" id='row14'>
      <div class="col-sm-6 text-center">
        <label class="form-label">교재진행 사항</label>
        <textarea name="study_progress" placeholder="" class="form-control text-start" rows="30"><?= $student->study_progress ?> </textarea>
      </div>

      <div class="col-sm-6 text-center">
        <label class="form-label">단원평가 결과</label>
        <textarea name="chapter_test" placeholder="" class="form-control text-start" rows="30"><?= $student->chapter_test ?> </textarea>
      </div>
    </div>

    <div class="row mb-3" id='row15'>
      <div class="col-sm-12 text-center">
        <label class="form-label">학습 주안점</label>
        <textarea name="study_point" placeholder="" class="form-control text-start" rows="10"><?= $student->study_point ?> </textarea>
      </div>

    </div>
  </form>


  <div class="row mb-3" id='row16'>
    <div class="col-sm-12 text-center">
      <label class="form-label">학습 리포트</label>
      <textarea name="study_report" placeholder="" class="form-control text-start" rows="20">
<자기주도 학습시간>
<?= $student->study_time ?> 

<레벨평가 결과>
<?= $student->level_test ?> 

<교재 이력>
<?= $student->book_history ?> 

<과정평가 결과>
<?= $student->course_test ?> 

<학습진도 상황>
<?= $student->study_progress ?> 

<단원평가 결과>
<?= $student->chapter_test ?> 

<학습 주안점>
<?= $student->study_point ?> 
</textarea>
    </div>
  </div>

  <!-- table  begin -->
  <div class="row">
    <div class="col-md-12">
      <table style="display: block; overflow-x: auto;white-space:nowrap;" class=" table table-striped display compact cell-border" id="study_list_data" style="width:100%">
        <tbody>
          <tr>
            <th>#</th>
            <th> 상태 </th>
            <th> 과정구분 </th>
            <th> 학년/학기 </th>
            <th> 교재명 </th>
            <th> 총단원수 </th>
            <th> 완료단원수 </th>
            <th> 진행률 </th>
            <th> 시작일 </th>
            <th> 종료일 </th>
            <th> 소요일 </th>
            <th> 진행속도 </th>
            <th> 평균소요일 </th>
            <th> 수정/삭제 </th>
          </tr>
          <tr>
            <td>1</td>
            <td> <span style="color:blue"> 진행중 </span> </td>
            <td> 연산선행 </td>
            <td> 중2-1 </td>
            <td> 수력충전 </td>
            <td> 10 </td>
            <td> 8 </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td> 2022-01-01 </td>
            <td> 종료일 </td>
            <td> 미표기 </td>
            <td> 미표기 </td>
            <td> 미표기 </td>
            <td> 수정/삭제 </td>
          </tr>
          <tr>
            <td colspan="12">
              <table width="100%">
                <tr>
                  <th>번호</th>
                  <th>단원명</th>
                  <th>시작일</th>
                  <th>완료일</th>
                  <th>소요일</th>
                  <th>완료여부</th>

                </tr>
                <tr>
                  <td>1</td>
                  <td>소인수분해</td>
                  <td>2022-01-01</td>
                  <td>미표기</td>
                  <td>미표기</td>
                  <td>완료</td>

                </tr>
                <tr>
                  <td>2</td>
                  <td>약수와배수</td>
                  <td>2022-01-01</td>
                  <td>미표기</td>
                  <td>미표기</td>
                  <td>진행중</td>

                </tr>
                <tr>
                  <td>3</td>
                  <td>정수와유리수</td>
                  <td>시작일</td>
                  <td>미표기</td>
                  <td>미표기</td>
                  <td>예정</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>정수와유리수</td>
                  <td>시작일</td>
                  <td>미표기</td>
                  <td>미표기</td>
                  <td>예정</td>
                </tr>
              </table>
            </td>
          </tr>

          <tr>
            <td>1</td>
            <td> <span style="color:blue"> 진행중 </span> </td>
            <td> 연산선행 </td>
            <td> 중2-1 </td>
            <td> 수력충전 </td>
            <td> 10 </td>
            <td> 8 </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td> 2022-01-01 </td>
            <td> 미표기 </td>
            <td> 미표기 </td>
            <td> 미표기 </td>
            <td>미표기</td>
            <td> 수정/삭제 </td>
          </tr>
          <tr>
            <td>2</td>
            <td> <span style="color:blue"> 진행중 </span> </td>
            <td> 연산선행 </td>
            <td> 중2-1 </td>
            <td> 수력충전 </td>
            <td> 10 </td>
            <td> 8 </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td> 2022-01-01 </td>
            <td> 미표기 </td>
            <td> 미표기 </td>
            <td> 미표기 </td>
            <td>미표기</td>
            <td> 수정/삭제 </td>
          </tr>
          <tr>
            <td>3</td>
            <td> <span style="color:blue"> 진행중 </span> </td>
            <td> 연산선행 </td>
            <td> 중2-1 </td>
            <td> 수력충전 </td>
            <td> 10 </td>
            <td> 8 </td>
            <td> 80%
              <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td> 2022-01-01 </td>
            <td> 미표기 </td>
            <td> 미표기 </td>
            <td> 미표기 </td>
            <td>미표기</td>
            <td> 수정/삭제 </td>
          </tr>
          <tr>
            <td>4</td>
            <td> <span style="color:blue"> 진행중 </span> </td>
            <td> 연산선행 </td>
            <td> 중2-1 </td>
            <td> 수력충전 </td>
            <td> 10 </td>
            <td> 8 </td>
            <td> 80%
              <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td> 2022-01-01 </td>
            <td> 미표기 </td>
            <td> 미표기 </td>
            <td> 미표기</td>
            <td> 2.5개월 </td>
            <td> 수정/삭제 </td>
          </tr>
          <tr>
            <td>1</td>
            <td> <span style="color:black"> 종료 </span> </td>
            <td> 연산선행 </td>
            <td> 중2-1 </td>
            <td> 수력충전 </td>
            <td> 10 </td>
            <td> 8 </td>
            <td>
              80% <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td> 2022-01-01 </td>
            <td> 2022-03-31 </td>

            <td> 3개월 </td>
            <td> 느림 </td>
            <td> 2.5 개월</td>
            <td> 수정/삭제 </td>
          </tr>
          <tr>
        </tbody>
      </table>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->