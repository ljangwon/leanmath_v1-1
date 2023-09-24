<!-- custom script -->
<script type="text/javascript">
  $(document).ready(function() {
    let table = null;
    $('#select_year').val("<?= c_year() ?>").prop("selected", true);
    $('#select_month').val("<?= c_month() ?>").prop("selected", true);

    show_payment($('#select_year').val(), $('#select_month').val(), $('#select_pay_status').val()); //call function show all payment

    //function show all product
    function show_payment(this_year, this_month, this_pay_status) {
      $.ajax({
        url: '<?php echo site_url('payment2/payment_list') ?>',
        type: "POST",
        data: {
          year: this_year,
          month: this_month,
          pay_status: this_pay_status
        },
        dataType: "JSON",
        async: true,
        success: function(data) {
          let i;
          let dataset = null;

          if (table == undefined || table == null) {

            table = $('#payment_data').DataTable({
              data: dataset,
              stateSave: false,
              paging: false,
              autoWidth: false,
              scrollX: true,
              scrollY: "50vh",
              scrollCollapse: true,
              columns: [{
                title: '#'
              }, {
                title: 'Year'
              }, {
                title: 'Month'
              }, {
                title: 'Class Name'
              }, {
                title: 'Class Day1'
              }, {
                title: 'Class Day2'
              }, {
                title: 'Name'
              }, {
                title: 'Grade1'
              }, {
                title: 'Grade2'
              }, {
                title: 'Receipt_Use'
              }, {
                title: 'Regular Price'
              }, {
                title: 'Net Income'
              }, {
                title: 'Pay Status'
              }, {
                title: 'Pay action'
              }, {
                title: 'Receipt Status'
              }, {
                title: 'Receipt Action'
              }, {
                title: 'Actions'
              }]

            });

          }

          let rowData = ["#", "Year", "month", "class_name", "class_day1", "class_day2", "name", "grade1", "grade2", "receipt_use", "Regular Price", "Net Income", "pay_status ", "pay_action", "Receipt Status", "receipt_action", "actions"];
          let action_link = null;
          let name_link = null;
          let pay_action_link = null;
          let receipt_status_link = '';
          let receipt_action_link = null;
          let net_income_sum = 0;

          table.clear().draw();

          for (i = 0; i < data.length; i++) {
            name_link =
              '<a href="<?= site_url('/student2/get_student') ?>/' +
              data[i].st_id +
              ' " class="text" data-toggle="tooltip " data-placement="top " title="ID: ' +
              data[i].id + ' , ST_ID: ' +
              data[i].st_id + ' "> ' +
              data[i].name + ' </a>';

            pay_action_link = '' +
              '<span display="flex"> <a href="javascript:void(0);" class="btn btn-info btn-sm pay_card_edit" ' +
              ' data-payment_id="' + data[i].id + '"> 카드 </a>' + ' ' +

              '<a display="float" href="javascript:void(0);" class="btn btn-info btn-sm pay_cash_edit" ' +
              ' data-payment_id="' + data[i].id + '"> 현금</a> </span>' + ' ';

            if (data[i].receipt_status == '발행필요' && data[i].receipt_phone) {
              receipt_status_link = '' + '<span style="color:red" >' +
                data[i].receipt_status + '(' + data[i].receipt_phone + ')</span>';
            } else if (data[i].receipt_status == '발행완료' && data[i].receipt_phone) {
              receipt_status_link = '' + '<span style="color:blue" >' +
                data[i].receipt_status + '(' + data[i].receipt_phone + ')</span>';
            } else {
              receipt_status_link = '';
            }

            receipt_action_link = '' +
              '<a display="float" href="javascript:void(0);" class="btn btn-info btn-sm receipt_status_edit"' +
              ' data-payment_id = "' + data[i].id + '"> 발행 </a>' + ' ';

            action_link = '' +
              '<a display="float" href="javascript:void(0);" class="btn btn-info btn-sm item_edit" ' +
              ' data-payment_id="' + data[i].id +
              '" data-year="' + data[i].year +
              '" data-month="' + data[i].month +
              '" data-st_id="' + data[i].st_id +
              '" data-st_name="' + data[i].name +
              '" data-class_name="' + data[i].class_name +

              '" data-regular_price="' + data[i].regular_price +
              '" data-discount1="' + data[i].discount1 +
              '" data-discount2="' + data[i].discount2 +
              '" data-return_price="' + data[i].return_price +
              '" data-discount_memo="' + data[i].discount_memo +
              '" data-pay_status="' + data[i].pay_status +
              '" data-receipt_use="' + data[i].receipt_use +
              '" data-receipt_phone="' + data[i].receipt_phone +
              '" data-receipt_status="' + data[i].receipt_status +
              '">Edit</a>' + ' ' +

              '<a display="float" href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" ' +
              ' data-payment_id = "' + data[i].id +
              '" data-month = "' + data[i].month +
              '" data-st_name = "' + data[i].name +
              '" > Delete </a>';

            rowData = [i + 1,
              data[i].year,
              data[i].month,
              data[i].class_name,
              data[i].class_day1,
              data[i].class_day2,
              name_link,
              data[i].grade1,
              data[i].grade2,
              data[i].receipt_use,
              data[i].regular_price,
              data[i].net_income,
              data[i].pay_status,
              pay_action_link,
              receipt_status_link,
              receipt_action_link,
              action_link
            ];
            net_income_sum += parseInt(data[i].net_income);
            table.row.add(rowData).draw(false);
          }
          $('#net_income').text(net_income_sum);
        }
      });
    }

    //Add New Month
    $('#btn_add_month').on('click', function() {
      let year = $('#add_year').val();
      let month = $('#add_month').val();

      $.ajax({
        url: "<?= site_url('payment2/ajax_add_payment_by_month') ?>",
        type: "POST",
        data: {
          year: year,
          month: month
        },
        dataType: "JSON",
        success: function(data) {
          $('[name="add_year"]').val("");
          $('[name="add_month"]').val("");

          alert('month added!!!')
          $('#Modal_Add_Month').modal('hide');

          $('$select_year').val(year);
          $('$select_month').val(month);
          show_payment(year, month, $('#select_pay_status').val());
        }
      });
      return false;
    });

    //Save payment
    $('#btn_save').on('click', function() {
      var year = $('#year').val();
      var month = $('#month').val();
      var st_id = $('#st_id').val();
      var st_name = $('#st_name').val();

      $.ajax({
        type: "POST",
        url: "<?php echo site_url('payment2/save') ?>",
        dataType: "JSON",
        data: {
          year: year,
          month: month,
          st_id: st_id,
          st_name: st_name
        },
        success: function(data) {
          $('[name="st_id"]').val("");
          $('[name="st_name"]').val("");

          $('#Modal_Add').modal('hide');
          show_payment($('#select_year').val(), $('#select_month').val(), $('#select_pay_status').val());
        }
      });
      return false;
    });

    //get data for pay record
    $('#payment_data').on('click', '.pay_card_edit', function() {
      var payment_id = $(this).data('payment_id');
      log('update_pay_status start');
      $.ajax({
        type: "POST",
        url: "<?php echo site_url('payment2/ajax_update_pay_status') ?>",
        dataType: "JSON",
        data: {
          payment_id: payment_id,
          pay_status: '카드수납',
        },
        success: function(data) {
          show_payment($('#select_year').val(), $('#select_month').val(), $('#select_pay_status').val());
        }
      });
      return false;
    });

    $('#payment_data').on('click', '.pay_cash_edit', function() {
      var payment_id = $(this).data('payment_id');

      $.ajax({
        type: "POST",
        url: "<?php echo site_url('payment2/ajax_update_pay_status') ?>",
        dataType: "JSON",
        data: {
          payment_id: payment_id,
          pay_status: '현금수납',
        },
        success: function(data) {
          show_payment($('#select_year').val(), $('#select_month').val(), $('#select_pay_status').val());
        }
      });
      return false;
    });

    $('#payment_data').on('click', '.receipt_status_edit', function() {
      var payment_id = $(this).data('payment_id');

      $.ajax({
        type: "POST",
        url: "<?php echo site_url('payment2/ajax_update_receipt_status') ?>",
        dataType: "JSON",
        data: {
          payment_id: payment_id
        },
        success: function(data) {
          show_payment($('#select_year').val(), $('#select_month').val(), $('#select_pay_status').val());
        }
      });
      return false;
    });

    //get data for update record
    $('#payment_data').on('click', '.item_edit', function() {
      let payment_id = $(this).data('payment_id');
      let year = $(this).data('year');
      let month = $(this).data('month');
      let st_id = $(this).data('st_id');
      let st_name = $(this).data('st_name');
      let class_name = $(this).data('class_name');

      let regular_price = $(this).data('regular_price');
      let discount1 = $(this).data('discount1');
      let discount2 = $(this).data('discount2');
      let return_price = $(this).data('return_price');
      let discount_memo = $(this).data('discount_memo');

      let pay_status = $(this).data('pay_status');
      let receipt_use = $(this).data('receipt_use');
      let receipt_phone = $(this).data('receipt_phone');
      let receipt_status = $(this).data('receipt_status');

      $('#Modal_Edit').modal('show');

      $('[name="payment_id_edit"]').val(payment_id);
      $('[name="year_edit"]').val(year);
      $('[name="month_edit"]').val(month);
      $('[name="st_id_edit"]').val(st_id);
      $('[name="st_name_edit"]').val(st_name);
      $('[name="class_name_edit"]').val(class_name);

      $('[name="regular_price_edit"]').val(regular_price);
      $('[name="discount1_edit"]').val(discount1);
      $('[name="discount2_edit"]').val(discount2);
      $('[name="return_price_edit"]').val(return_price);
      $('[name="discount_memo_edit"]').val(discount_memo);

      $('[name="pay_status_edit"]').val(pay_status);
      $('[name="receipt_use_edit"]').val(receipt_use);
      $('[name="receipt_phone_edit"]').val(receipt_phone);
      $('[name="receipt_status_edit"]').val(receipt_status);

    });

    //update record to database
    $('#btn_update').on('click', function() {
      let payment_id = $('#payment_id_edit').val();
      let pay_status = $('#pay_status_edit').val();

      let regular_price = $('#regular_price_edit').val();
      let discount1 = $('#discount1_edit').val();
      let discount2 = $('#discount2_edit').val();
      let return_price = $('#return_price_edit').val();
      let discount_memo = $('#discount_memo_edit').val();
      let receipt_use = $('#receipt_use_edit').val();
      let receipt_phone = $('#receipt_phone_edit').val();

      $.ajax({
        type: "POST",
        url: "<?php echo site_url('payment2/ajax_update_discount') ?>",
        dataType: "JSON",
        data: {
          payment_id: payment_id,
          regular_price: regular_price,
          discount1: discount1,
          discount2: discount2,
          return_price: return_price,
          discount_memo: discount_memo,
          receipt_use: receipt_use,
          receipt_phone: receipt_phone,
          pay_status: pay_status
        },
        success: function(data) {
          $('[name$="_edit"]').val("");
          $('#Modal_Edit').modal('hide');

          show_payment($('#select_year').val(), $('#select_month').val(), $('#select_pay_status').val());
        }
      });
      return false;
    });

    //get data for delete record
    $('#payment_data').on('click', '.item_delete', function() {
      var payment_id = $(this).data('payment_id');
      var month = $(this).data('month');
      var st_name = $(this).data('st_name');

      $('#Modal_Delete').modal('show');
      $('[name="payment_id_delete"]').val(payment_id);
      $('[name="month_delete"]').val(month);
      $('[name="st_name_delete"]').val(st_name);

    });

    //delete record to database
    $('#btn_delete').on('click', function() {
      var payment_id = $('#payment_id_delete').val();
      $.ajax({
        type: "POST",
        url: "<?php echo site_url('payment2/delete') ?>",
        dataType: "JSON",
        data: {
          payment_id: payment_id
        },
        success: function(data) {
          $('[name="payment_id_delete"]').val("");
          $('[name="st_name_delete"]').val("");
          $('[name="month_delete"]').val("");

          $('#Modal_Delete').modal('hide');
          show_payment($('#select_year').val(), $('#select_month').val(), $('#select_pay_status').val());
        }
      });
      return false;
    });

    //delete month record to database
    $('#btn_month_delete').on('click', function() {
      let year_del = $('#m_d_m_year').val();
      let month_del = $('#m_d_m_month').val();

      $.ajax({
        type: "POST",
        url: "<?php echo site_url('payment2/month_delete') ?>",
        dataType: "JSON",
        data: {
          year_del: year_del,
          month_del: month_del
        },
        success: function(data) {
          $('[name="m_d_m_month"]').val("");

          alert('month deleted !!!');

          $('#Modal_Delete_Month').modal('hide');
          show_payment($('#select_year').val(), $('#select_month').val(), $('#select_pay_status').val());
        }
      });
      return false;
    });

    $('#select_year').change(function() {
      let this_year = $(this).val();
      show_payment(this_year, $('#select_month').val(), $('#select_pay_status').val());
    });

    $('#select_month').change(function() {
      let this_month = $(this).val();
      show_payment($('#select_year').val(), this_month, $('#select_pay_status').val());
    });

    $('#select_pay_status').change(function() {
      let this_pay_status = $(this).val();
      show_payment($('#select_year').val(), $('#select_month').val(), this_pay_status);
    });

  });
</script>
</body>

</html>