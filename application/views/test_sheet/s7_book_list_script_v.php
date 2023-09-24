<!-- custom script -->
<script type="text/javascript">
  $(document).ready(function() {
    let table = null;
    let workspace = null;
    let status = null;

    workspace = $('#selecet_workspace').val();
    status = $('#selecet_status').val();

    show_book_list(workspace, status, '초등');
    show_book_list(workspace, status, '중등');
    show_book_list(workspace, status, '고등');

    // show book list
    function show_book_list(workspace, status, grade) {
      log('show book list start' + grade);
      $.ajax({
        url: '<?php echo site_url('book/ajax_read_book_list') ?>',
        type: "POST",
        data: {
          "workspace": workspace,
          "status": status,
          "grade1": grade
        },
        dataType: "JSON",
        async: true,
        success: function(data) {
          let i;
          let dataset = null;
          table = null;
          if (table == undefined || table == null) {
            let book_list_data = null;

            if (grade == '초등') {
              book_list_data = '#elem_book_list_data';
            } else if (grade == '중등') {
              book_list_data = '#mid_book_list_data';
            } else {
              book_list_data = '#high_book_list_data';
            }

            log(book_list_data);

            table = $(book_list_data).DataTable({
              data: dataset,
              stateSave: false,
              paging: false,
              autoWidth: false,
              scrollX: true,
              scrollY: "100vh",
              columns: [{
                  title: '#',
                  width: "10px"
                }, {
                  title: 'id',
                  width: "10px"
                }, {
                  title: '구분',
                  width: "10px"
                }, {
                  title: '학년/학기',
                  width: "10px"
                }, {
                  title: '교재명',
                  width: "100px"
                }, {
                  title: '단원수',
                  width: "10px"
                }, {
                  title: '상태',
                  width: "10px"
                },
                {
                  title: 'Action',
                  width: "30px"
                }
              ]

            });

          }
          let rowData = ["", "", "", "", ""];
          let title_link = '';
          let id_link = '';
          let action_link = '';
          table.clear().draw();
          for (i = 0; i < data.length; i++) {
            id_link =
              '<a href="<?= site_url('/book/get_book') ?>/' +
              data[i].id +
              ' " class="text" data-toggle="tooltip " data-placement="top " title="ID: ' +
              data[i].id + '"> ' +
              data[i].id + ' </a>';

            title_link =
              '<a href="<?= site_url('/book/get_book') ?>/' +
              data[i].id +
              ' " class="text" data-toggle="tooltip " data-placement="top " title="ID: ' +
              data[i].id + '"> ' +
              data[i].title + ' </a>';

            action_link = '' +
              '<a display="float" href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" ' +
              ' data-book_id = "' + data[i].id +
              '" data-book_grade1 = "' + data[i].grade1 +
              '" data-book_grade2 = "' + data[i].grade2 +
              '" data-book_title = "' + data[i].title +
              '" > Delete </a>';

            rowData = [i + 1, id_link, data[i].grade1, data[i].grade2, title_link, data[i].chapter_count, data[i].status, action_link]
            table.row.add(rowData).draw(false);
          }
        }
      });
    }

    //get data for delete record
    $('#elem_book_list_data').on('click', '.item_delete', function() {
      let book_id = $(this).data('book_id');
      let book_title = $(this).data('book_title');
      let book_grade1 = $(this).data('book_grade1');
      let book_grade2 = $(this).data('book_grade2');

      $('#Modal_Book_Delete').modal('show');
      $('[name="book_id_delete"]').val(book_id);
      $('[name="book_title_delete"]').val(book_title);
      $('[name="book_grade1_delete"]').val(book_grade1);
      $('[name="book_grade2_delete"]').val(book_grade2);
    });

    $('#mid_book_list_data').on('click', '.item_delete', function() {
      let book_id = $(this).data('book_id');
      let book_title = $(this).data('book_title');
      let book_grade1 = $(this).data('book_grade1');
      let book_grade2 = $(this).data('book_grade2');

      $('#Modal_Book_Delete').modal('show');
      $('[name="book_id_delete"]').val(book_id);
      $('[name="book_title_delete"]').val(book_title);
      $('[name="book_grade1_delete"]').val(book_grade1);
      $('[name="book_grade2_delete"]').val(book_grade2);
    });

    $('#high_book_list_data').on('click', '.item_delete', function() {
      let book_id = $(this).data('book_id');
      let book_title = $(this).data('book_title');
      let book_grade1 = $(this).data('book_grade1');
      let book_grade2 = $(this).data('book_grade2');

      $('#Modal_Book_Delete').modal('show');
      $('[name="book_id_delete"]').val(book_id);
      $('[name="book_title_delete"]').val(book_title);
      $('[name="book_grade1_delete"]').val(book_grade1);
      $('[name="book_grade2_delete"]').val(book_grade2);
    });

    //delete record to database
    $('#btn_book_delete').on('click', function() {
      let book_id = $('#book_id_delete').val();

      $.ajax({
        type: "POST",
        url: "<?php echo site_url('book/delete_book') ?>",
        dataType: "JSON",
        data: {
          book_id: book_id
        },
        success: function(data) {
          log(data);
          $('[name="book_id_delete"]').val("");
          $('[name="book_title_delete"]').val("");
          $('[name="book_grade1_delete"]').val("");
          $('[name="book_grade2_delete"]').val("");

          $('#Modal_Book_Delete').modal('hide');
          show_book_list(workspace, status, '초등');
          show_book_list(workspace, status, '중등');
          show_book_list(workspace, status, '고등');
        }
      });
      return false;
    });

    $('#select_workspace').change(function() {
      let this_workspace = $(this).val();
      show_book_list(this_workspace, $('#select_status').val(), '초등');
    });

    $('#select_status').change(function() {
      let this_status = $(this).val();
      show_book_list($('#select_workspace').val(), this_status, '초등');
    });

  });
</script>
</body>

</html>