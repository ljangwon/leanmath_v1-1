<!-- Button trigger modal -->
<!-- Modal1 -->
<div class="modal fade" id="create_book" aria-labelledby="create_book" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="create_book_Label">Book 추가</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= site_url() ?>/book/create_book" method="post">
          <input type="text" name="title" placeholder="book name" class="span12" />
          <input type="text" name="grade1" placeholder="book 학년구분" class="span12" />
          <input type="text" name="grade2" placeholder="학기" class="span12" />
          <div class="form_control">
            <input class="btn" type="submit" value="Book추가" />
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<!--MODAL DELETE-->
<form>
  <div class="modal fade" id="Modal_Book_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Book</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group row">
            <label class="col-md-2 col-form-label">책제목</label>
            <div class="col-md-10">
              <input type="text" name="book_title_delete" id="book_title_delete" class="form-control" readonly>
            </div>

            <label class="col-md-2 col-form-label">학제 구분</label>
            <div class="col-md-10">
              <input type="text" name="book_grade1_delete" id="book_grade1_delete" class="form-control" readonly>
            </div>

            <label class="col-md-2 col-form-label">학년학기</label>
            <div class="col-md-10">
              <input type="text" name="book_grade2_delete" id="book_grade2_delete" class="form-control" readonly>
            </div>

            <label class="col-md-2 col-form-label">Book Id </label>
            <div class="col-md-10">
              <input type="text" name="book_id_delete" id="book_id_delete" class="form-control" readonly>
            </div>

          </div>

          <strong>Are you sure to delete this record?</strong>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          <button type="button" type="submit" id="btn_book_delete" class="btn btn-primary">Yes</button>
        </div>
      </div>
    </div>
  </div>
</form>
<!--END MODAL DELETE-->