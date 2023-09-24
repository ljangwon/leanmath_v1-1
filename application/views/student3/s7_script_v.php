<!-- custom script -->
<script type="text/javascript" defer>
  $(document).ready(function() {
    let table = null;
    let workspace = null;
    let status = null;

    workspace = $('#select_workspace').val();
    status = $('#select_status').val();

    show_student_list(workspace, status);

    //function show all student
    function show_student_list(workspace, status) {
      $.ajax({
        url: '<?php echo site_url('student2/ajax_student_list') ?>',
        type: "POST",
        data: {
          "workspace": workspace,
          "status": status
        },
        dataType: "JSON",
        async: true,
        success: function(data) {
          let i;
          let dataset = null;

          if (table == undefined || table == null) {

            table = $('#student_list_data').DataTable({
              data: dataset,
              stateSave: false,
              paging: false,
              autoWidth: false,
              scrollX: true,
              scrollY: "60vh",
              columns: [{
                  title: '#'
                }, {
                  title: 'St_id'
                }, {
                  title: 'Name'
                }, {
                  title: 'Class'
                },
                {
                  title: 'Status'
                }
              ]
            });

          }
          let rowData = ["", "", "", "", ""];
          let name_link = '';
          table.clear().draw();
          for (i = 0; i < data.length; i++) {
            name_link =
              '<a href="<?= site_url('/student2/get_student') ?>/' +
              data[i].id +
              ' " class="text" data-toggle="tooltip " data-placement="top " title="ID: ' +
              data[i].id + '"> ' +
              data[i].name + ' </a>';

            rowData = [i + 1, data[i].id, name_link, data[i].class_name, data[i].status];
            table.row.add(rowData).draw(false);
          }
        }
      });
    }

    $('#select_workspace').change(function() {
      let this_workspace = $(this).val();
      show_student_list(this_workspace, $('#select_status').val());
    });

    $('#select_status').change(function() {
      let this_status = $(this).val();
      show_student_list($('#select_workspace').val(), this_status);
    });

    $(function() {
      $("#report_date").datepicker({
        dateFormat: "yy-mm-dd",
        dayNamesMin: ["일", "월", "화", "수", "목", "금", "토"],
        dayNames: ["일", "월", "화", "수", "목", "금", "토"],
        monthNames: ["1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"]
      });

      $("#start_date").datepicker({
        dateFormat: "yy-mm-dd",
        dayNamesMin: ["일", "월", "화", "수", "목", "금", "토"],
        dayNames: ["일", "월", "화", "수", "목", "금", "토"],
        monthNames: ["1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"]
      });

      $("#end_date").datepicker({
        dateFormat: "yy-mm-dd",
        dayNamesMin: ["일", "월", "화", "수", "목", "금", "토"],
        dayNames: ["일", "월", "화", "수", "목", "금", "토"],
        monthNames: ["1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"]
      });
    });

  });
</script>
</body>

</html>