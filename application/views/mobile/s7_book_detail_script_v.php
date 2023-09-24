<!-- custom script -->
<script type="text/javascript">
  $(document).ready(function() {
    let table = null;
    show_book_chapter_list();

    //function show all chapters
    function show_book_chapter_list() {
      $.ajax({
        url: '<?php echo site_url('book/ajax_read_book_chapter_list') ?>',
        type: "POST",
        data: {
          book_id: $('[name="id"]').val()
        },
        dataType: "JSON",
        async: true,
        success: function(data) {
          log('ajax_read_book_chapter_list success');
          let i = null;
          let dataset = null;

          if (table == undefined || table == null) {

            log('datatable is initiated');

            table = $('#book_chapter_list_data').DataTable({
              data: dataset,
              stateSave: false,
              paging: false,
              autoWidth: false,
              scrollX: true,
              scrollY: "100vh",
              keys: true,
              columns: [{
                  title: '#'
                }, {
                  title: 'ID'
                }, {
                  title: '단원번호'
                }, {
                  title: '단원명'
                },
                {
                  title: 'Action',
                }
              ]
            });

          } // end of if

          let rowData = ["", "", "", "", ""];
          let name_link = '';

          table.clear().draw();
          log('table.clear');

          for (i = 0; i < data.length; i++) {
            action_link = '' +
              '<a display="float" href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" ' +
              ' data-chapter_id = "' + data[i].id +
              '" > Delete </a>';
            rowData = [i + 1, data[i].id, data[i].number, data[i].title, action_link]
            table.row.add(rowData).draw(false);
          }

          log('datatable is filled by ajax data');

          let preClickedCell = null;

          table.off('key-focus');
          table.off('key-blur');

          table
            .on('key-focus', function(e, datatable, cell, originalEvent) {
              log('key-focus begin');
              let columnHeader = table.column(cell.index().column).header();
              let columnHeaderText = $(columnHeader).html();
              let ex_cols = ['Action', '#', 'ID'];

              for (let i = 0; i < ex_cols.length; i++) {
                if (columnHeaderText == ex_cols[i]) {
                  log('diable column is clicked, so return');
                  return;
                }
              };

              //let rowData = datatable.row(cell.index().row).data();

              let clickCellData = cell.data();
              let clickCellInputId = 'td_' + cell.index().row + '_' + cell.index().column;
              let inputData = "<input type='text' id ='" + clickCellInputId + "'>";

              log(cell.index().row + 'row' + cell.index().column + 'col: cell is drawed by input type');
              cell.data(inputData).draw();

              // inputID ???
              cell.inputID = clickCellInputId;
              clickCellData = !clickCellData ? '' : clickCellData;

              let jq_inputText = $('#' + clickCellInputId);

              jq_inputText.attr('originalData', clickCellData);

              log(clickCellInputId + '의 attr of originalData :' + jq_inputText.attr('originalData'));
              //original data 저장함...
              log('inputText에 내용 채우기 :' + clickCellData);

              jq_inputText.val(clickCellData);

              preClickedCell = cell;

            })
            .on('key-blur', function(e, datatable, cell) {
              log('key-blur begin');

              if (preClickedCell) {
                // 선택 상태에서 원복
                log(preClickedCell.inputID);
                returnTdToOriginal(preClickedCell, cell.index().row, cell.index().column);
              }

            });

          function returnTdToOriginal(preClickedCell, rowIdx, colIdx) {
            log('If preClickedTD exist, then returnTdToOriginal begin');
            let cellInputId = preClickedCell.inputID;
            let jq_inputText = $('#' + cellInputId);
            let jq_inputText_origin = jq_inputText.attr('originalData')
            let jq_inputText_val = jq_inputText.val();

            let cell = table.cell(rowIdx, colIdx);
            let id = table.cell(rowIdx, 1).data();

            let columnHeader = table.column(colIdx).header();
            let columnHeaderText = $(columnHeader).html();

            log('origin: ' + jq_inputText.attr('originalData'));
            log('val: ' + jq_inputText.val());
            // originData가 바꼈을 때에만 서버업데이트...
            if (jq_inputText_origin && jq_inputText_origin != jq_inputText_val) {
              log('saveTdData begin');
              saveTdData(id, columnHeaderText, jq_inputText_val);
            }
            log('preClickedCell value back');
            log('jq_inputText_val : ' + jq_inputText_val);
            preClickedCell.data(jq_inputText_val);
          }

          function saveTdData(id, header, value) {
            let json = {
              id: id,
              header: header,
              value: value
            };
            $.ajax({
              url: '<?php echo site_url('book/ajax_excel_datasave') ?>',
              method: 'POST',
              data: {
                id: id,
                header: header,
                value: value
              },
              success: function(result) {
                log('success: ' + id + result);
              },
            }).fail(function(result) {
              log('fail: ' + id + result);
            });
          }

        }
      });
      // end of ajax
    } // end of function show_book_chapter_list()

    //btn chapter add event
    $('#btn_chapter_add').on('click', function() {
      let book_id = $('[name="id"]').val();

      $.ajax({
        type: "POST",
        url: "<?php echo site_url('book/ajax_create_chapter') ?>",
        dataType: "JSON",
        data: {
          book_id: book_id
        },
        success: function(data) {
          log('ajax create chapter success');
          log(data);
          show_book_chapter_list();
        }
      });
      return false;
    });

    //get data for delete record
    $('#book_chapter_list_data').on('click', '.item_delete', function() {
      let chapter_id = $(this).data('chapter_id');

      log("item_delete start");

      $.ajax({
        type: "POST",
        url: "<?php echo site_url('book/ajax_delete_chapter') ?>",
        dataType: "JSON",
        data: {
          chapter_id: chapter_id
        },
        success: function(data) {
          log('ajax delete chapter success');
          log(data);
          show_book_chapter_list();
        }
      });
      return false;

    });

  });
</script>
</body>

</html>