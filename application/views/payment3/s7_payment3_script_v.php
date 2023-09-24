<!-- custom script -->
<script type="text/javascript">
  $(document).ready(function() {
    let table = null;

    show_payment($('#select_year').val(), $('#select_month').val(), $('#select_pay_status').val()); //call function show all payment

    //function show all product
    function show_payment(this_year, this_month, this_pay_status) {
      $.ajax({
        url: '<?php echo site_url('payment3/payment_list') ?>',
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

            table = $('#payment3_data').DataTable({
              data: dataset,
              stateSave: false,
              paging: false,
              autoWidth: true,
              scrollX: true,
              scrollY: "50vh",
              scrollCollapse: true,
              stripe: false,
              columns: [{
                title: '이름'
              }, {
                title: '영수증'
              }]

            });

          }

          let rowData = ["name", "card_link"];

          let card_link = null;

          let net_income_sum = 0;

          table.clear().draw();

          for (i = 0; i < data.length; i++) {
            card_link = `
               <h5> 교습비 영수증 원부  </h5>
                <table class="receipt" border=10>
                <tr>
                  <td colspan="3"> 일련번호: </td> 
                  <td colspan="3"> 연월(분기): ${data[i].year} ${data[i].month} </td>
                </tr>
                <tr>
                  <td rowspan="2"> 납<br>부<br>자 </td>
                  <td colspan="2"> 등록(신고)번호: </td>
                  <td colspan="3"> 성명: ${data[i].name}</td>
                </tr>
                <tr>
                  <td colspan="2"> 생년월일: </td>
                  <td colspan="3"> 교습과목: 수학 </td>
                </tr>
                <tr>
                  <td rowspan="3"> 납부<br>명세 </td>
                  <td colspan="2"> 교습비 </td>
                  <td colspan="3"> 기타경비 </td>
                <tr>
                <tr>
                  <td colspan="2" > ${data[i].net_income}원 </td> 
                  <td colspan="3"> &nbsp;</td> 
                </tr>

                <tr>
                  
                </tr>
                </table>
               <p style="align:center" >
                 </p> <br>
                            <p> 년    월    일 </p> <br>
                
                <p> 교습자    - 이장원수학교습소 </p>
                 </p>
            `;

            rowData = [
              data[i].name,
              card_link
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

      log('add_month');

      $.ajax({
        url: "<?php echo site_url('payment3/add_payment_by_month') ?>",
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
        url: "<?php echo site_url('payment3/save') ?>",
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
    $('#payment3_data').on('click', '.pay_card_edit', function() {
      var payment_id = $(this).data('payment_id');
      log('update_pay_status start');
      $.ajax({
        type: "POST",
        url: "<?php echo site_url('payment3/update_pay_status') ?>",
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

    $('#payment3_data').on('click', '.pay_cash_edit', function() {
      var payment_id = $(this).data('payment_id');

      $.ajax({
        type: "POST",
        url: "<?php echo site_url('payment3/update_pay_status') ?>",
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

    $('#payment3_data').on('click', '.receipt_status_edit', function() {
      var payment_id = $(this).data('payment_id');

      $.ajax({
        type: "POST",
        url: "<?php echo site_url('payment3/update_receipt_status') ?>",
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
    $('#payment3_data').on('click', '.item_edit', function() {
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
        url: "<?php echo site_url('payment3/update_discount') ?>",
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
    $('#payment3_data').on('click', '.item_delete', function() {
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
        url: "<?php echo site_url('payment3/delete') ?>",
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
        url: "<?php echo site_url('payment3/month_delete') ?>",
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