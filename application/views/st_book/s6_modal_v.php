<!-- Button trigger modal -->
<!-- Modal Study Add -->
<div class="modal fade" id="modal_st_study_add">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">학습 추가</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-group row">
          <label class="col-md-2 col-form-label">st_id</label>
          <input type='text' id="st_id_add" name="st_id_add" value="<?= $this->session->userdata('st_id') ?>" placeholder="학생아이디" class="span12">
          </input>
        </div>
        <div class="form-group row">
          <label class="col-md-2 col-form-label">학습구분</label>
          <select id="course_cat_add" name="course_cat_add" placeholder="학습구분" class="span12">
            <option value="1"> 연산선행 </option>
            <option value="2"> 개념선행 </option>
            <option value="3"> 현행심화 </option>
          </select>
        </div>
        <div class="form-group row">
          <label class="col-md-2 col-form-label">학년구분</label>
          <select id="course_grade_add" name="course_grade_add" placeholder="학습학년" class="span12" />
          <option> 초4-1 </option>
          <option> 초4-2 </option>
          <option> 초5-1 </option>
          <option> 초5-2 </option>
          <option> 초6-1 </option>
          <option> 초6-2 </option>
          <option> 중1-1 </option>
          <option> 중1-2 </option>
          <option> 중2-1 </option>
          <option> 중2-2 </option>
          <option> 중3-1 </option>
          <option> 중3-2 </option>
          <option> 고1-1 </option>
          <option> 고1-2 </option>
          <option> 고2-1 </option>
          <option> 고2-2 </option>
          </select>
        </div>
        <div class="form-group row">
          <label class="col-md-2 col-form-label">교재명</label>
          <input type="text" id="book_name_add" name="book_name_add" placeholder="교재명" class="span12" />
        </div>

        <div class="input-group">
          <label class="col-md-2 col-form-label">교재명:</label>
          <input type="text" id="search_book_name" name="search_book_name" class="form-control bg-light border-0 small" placeholder="Search for...">
          <label class="col-md-2 col-form-label">아이디:</label>
          <input type="text" id="search_book_id" name="search_book_id" readonly class="form-control bg-light border-0 small">
          <div class="input-group-append">
            <button type="submit" class="btn btn-primary" type="button">
              <i class="fas fa-search fa-sm"></i>
            </button>
          </div>
        </div>

        <div class="form_control">
          <button id="modal_submit_study_add" class="btn btn-danger">
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
<div class="modal fade" id="modal_study_edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">학습기록 수정 </h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
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
        <button id="modal_submit_study_edit" class="btn btn-danger">
          수정
        </button>
      </div>
      </form>
    </div>
    <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">취소</button>
    </div>
  </div>
</div>
<!-- End of Study Edit -->

<!-- Modal Study Detail Edit -->
<div id="modal_study_detail" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">학습 기록 상세 단원 </h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="toolbar">
          <button id="remove" class="btn btn-danger" disabled>
            <i class="fa fa-trash"></i> Delete
          </button>
          <button class="btn btn-danger" id="st_study_detail_add">
            <i class="fa fa-plus"></i> Add
          </button>
        </div>

        <table id="study_detail_table" data-locale="ko_KR" data-study_id="" data-search="true" data-toggle="table" data-height="345" data-url='<?= site_url('st_study_c/ajax_get_study_detail_list') ?>'>
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
<!-- End of Study Detail Edit -->

</div>