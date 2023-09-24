<!-- Button trigger modal -->
<!-- Modal1 -->
<div class="modal fade" id="modal_user_add">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">사용자 추가</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <input type="text" id="user_name" name="user_name" placeholder="이름" class="span12" />
          <input type="text" id="user_email" name="user_email" placeholder="이메일" class="span12" />
          <input type="password" id="user_password" name="user_password" placeholder="비밀번호" class="span12" />
          <div class="form_control">
            <button id="modal_btn_user_add" class="btn btn-danger">
              <i class="fa fa-plus"></i> 추가
            </button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">취소</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal1 -->
<div class="modal fade" id="modal_password_change">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">패스워드 변경</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <input type="text" id="user_email" name="user_email" placeholder="이메일" value="" class=" span12" />
          <input type="password" id="old_password" name="old_password" placeholder="이전비밀번호" class="span12" />
          <input type="password" id="new_password" name="new_password" placeholder="새비밀번호" class="span12" />
          <input type="password" id="confirm_password" name="confirm_password" placeholder="확인비밀번호" class="span12" />
          <div class="form_control">
            <button id="modal_btn_password_change" class="btn btn-danger">
              <i class="fa fa-plus"></i> 패스워드 변경
            </button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">취소</button>
      </div>
    </div>
  </div>
</div>