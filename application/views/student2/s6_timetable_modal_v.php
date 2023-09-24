<!-- Button trigger modal -->
<!-- Modal1 -->
<div class="modal fade" id="student_add" aria-labelledby="student_add" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="st_add_Label">학생 추가</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= site_url() ?>/student2/st_add" method="post">
          <input type="text" name="name" placeholder="이름" class="span12" />
          <input type="text" name="class_name" placeholder="수업이름" class="span12" />
          <div class="form_control">
            <input class="btn" type="submit" value="학생추가" />
            <a href="<?= site_url('/student2') ?>" class="btn">대시보드</a>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>