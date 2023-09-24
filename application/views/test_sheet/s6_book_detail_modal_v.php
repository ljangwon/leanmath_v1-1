<!-- Button trigger modal -->
<!-- Modal2 -->
<div class="modal fade" id="modal_d_book" aria-labelledby="delete_book" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="delete_book_Label">Book 삭제</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="<?= site_url() ?>/book/delete_book" method="post">
          <input type="hidden" name="book_id" value="<?= $book->id ?>" />
          <div class="form_control">
            정말로 <?= $book->title ?> 을 삭제하시겠습니까?
            <br>
            <input class="btn" type="submit" value="Book삭제" />
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
      </div>

    </div>

  </div>
</div>