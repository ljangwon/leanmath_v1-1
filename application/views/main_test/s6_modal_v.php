<!-- Button trigger modal -->
<!-- Modal Study Add -->
<div class="modal fade" id="modal_test_add">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">평가 추가</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-group row">
          <label class="col-md-2 col-form-label">학생정보</label>
          <input type='text' id="m_st_id_add" name="m_st_id_add" value="<?= $this->session->userdata('st_id') ?>" placeholder=" 학생아이디" class="span12">
          </input>
          <input type='text' id="m_st_name_add" name="m_st_name_add" value="<?= $this->session->userdata('st_name') ?>" readonly placeholder="학생이름" class="span12">
          </input>
        </div>
        <div class="form-group row">
          <label class="col-md-2 col-form-label">평가구분</label>
          <select id="m_test_cat_add" name="m_test_cat_add" placeholder="평가구분" class="span12">
            <option value="1"> 단원평가 </option>
            <option value="2"> 과정평가 </option>
            <option value="3"> 레벨평가</option>
          </select>
        </div>
        <div class="form-group row">
          <label class="col-md-2 col-form-label">학기구분</label>
          <select id="m_test_grade_add" name="m_test_grade_add" placeholder="학기구분" class="span12" />
          <option value="초4-1"> 초4-1 </option>
          <option value="초4-2"> 초4-2 </option>
          <option value="초5-1"> 초5-1 </option>
          <option value="초5-2"> 초5-2 </option>
          <option value="초6-1"> 초6-1 </option>
          <option value="초6-2"> 초6-2 </option>
          <option value="중1-1"> 중1-1 </option>
          <option value="중1-2"> 중1-2 </option>
          <option value="중2-1"> 중2-1 </option>
          <option value="중2-2"> 중2-2 </option>
          <option value="중3-1"> 중3-1 </option>
          <option value="중3-2"> 중3-2 </option>
          <option value="고1-1"> 고1-1 </option>
          <option value="고1-2"> 고1-2 </option>
          <option value="고2-1"> 고2-1 </option>
          <option value="고2-2"> 고2-2 </option>
          </select>
        </div>

        <div class="form-group row">
          <label class="col-md-2 col-form-label">난이도</label>
          <select id="m_test_level_add" name="m_test_level_add" placeholder="난이도" class="span12" />
          <option value="개념"> 개념 </option>
          <option value="기초"> 기초 </option>
          <option value="기본"> 기본 </option>
          <option value="실력"> 실력 </option>
          <option value="심화"> 심화 </option>
          </select>
        </div>

        <div class="form-group row">
          <label class="col-md-2 col-form-label">단원명</label>
          <input type="text" id="m_chapter_title_add" name="m_chapter_title_add" placeholder="교재명" class="span12" />
        </div>

      </div>

      <div class="form_control">
        <button type="button" id="modal_submit_test_add" class="btn btn-danger">
          추가
        </button>
      </div>

    </div>
    <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">취소</button>
    </div>
  </div>
</div>
</div>

<!-- End of Study Add -->

<!-- Modal Study Edit -->
<div class="modal fade" id="modal_test_edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">평가기록 수정 </h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-group row">
          <label class="col-md-2 col-form-label">학습ID</label>
          <input type="text" readonly id="id_edit" name="id_edit" placeholder="학습ID" value="" class=" span12" />
        </div>
        <div class="form-group row">
          <label class="col-md-2 col-form-label">학생ID</label>
          <input type="text" readonly id="st_id_edit" name="st_id_edit" placeholder="학생ID" value="" class="span12" />
        </div>
        <div class="form-group row">
          <label class="col-md-2 col-form-label">보이기</label>
          <select id="show_flag_edit" name="show_flag_edit" class="span12">
            <option>1</option>
            <option>0</option>
          </select> 1:보이기, 0:안보이기
        </div>
        <div class="form-group row">
          <label class="col-md-2 col-form-label">학습구분</label>
          <input type="text" id="course_cat_edit" name="course_cat_edit" placeholder="학습구분" value="" class="span12" />
          1:연산선행, 2:개념선행, 3:현행심화
        </div>
        <div class="form-group row">
          <label class="col-md-2 col-form-label">학년구분</label>
          <input type="text" id="course_grade_edit" name="course_grade_edit" placeholder="학년구분" class="span12" />
        </div>
        <div class="form-group row">
          <label class="col-md-2 col-form-label">교재명</label>
          <input type="text" id="book_name_edit" name="book_name_edit" placeholder="교재명" class="span12" />
        </div>
        <div class="form-group row">
          <label class="col-md-2 col-form-label">시작일</label>
          <input type="text" name="start_date_edit" id="start_date_edit" placeholder="시작일" class="span12">
        </div>
        <div class="form-group row">
          <label class="col-md-2 col-form-label">종료일</label>
          <input type="text" name="end_date_edit" id="end_date_edit" placeholder="종료일" class="span12">
        </div>
      </div>

      <div class="form_control">
        <button type="button" id="modal_submit_test_edit" class="btn btn-danger">
          수정
        </button>
      </div>

    </div>
    <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">취소</button>
    </div>
  </div>
</div>
<!-- End of Study Edit -->

<!-- Modal Study Detail Edit -->
<div id="modal_test_detail" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">평가 기록 상세 단원 </h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="toolbar">
          <button id="remove" class="btn btn-danger" disabled>
            <i class="fa fa-trash"></i> Delete
          </button>
          <button class="btn btn-danger" id="st_test_detail_add">
            <i class="fa fa-plus"></i> Add
          </button>
        </div>

        <table id="test_detail_table" data-locale="ko_KR" data-study_id="" data-search="true" data-toggle="table" data-height="345" data-url='<?= site_url('st_study_c/ajax_get_study_detail_list') ?>'>
          <thead>
            <tr>
              <th data-field="id">ID</th>
              <th data-field="st_id">St ID</th>
              <th data-field="book_name">Book Name</th>
            </tr>
          </thead>
        </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">취소</button>
      </div>
    </div>
  </div>
</div>

<script>

</script>
<!-- End of Test Detail Edit -->

</div>