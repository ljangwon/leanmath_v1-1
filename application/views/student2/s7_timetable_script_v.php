<!-- custom script -->
<script type="text/javascript" defer>
  $(document).ready(function() {

    $('a[class*=pay_card_status]').on('click', function() {
      let payment_id = $(this).data('payment_id');

      $.ajax({
        type: "POST",
        url: "<?php echo site_url('payment2/ajax_update_pay_status') ?>",
        dataType: "JSON",
        data: {
          payment_id: payment_id,
          pay_status: '카드수납',
        },
        success: function(data) {
          window.location.href = '<?= site_url('student2') ?>';
        }
      });

    });

    $('a[class*=pay_cash_status]').on('click', function() {
      let payment_id = $(this).data('payment_id');

      $.ajax({
        type: "POST",
        url: "<?php echo site_url('payment2/ajax_update_pay_status') ?>",
        dataType: "JSON",
        data: {
          payment_id: payment_id,
          pay_status: '현금수납',
        },
        success: function(data) {
          window.location.href = '<?= site_url('student2') ?>';
        }
      });

    });

  });
</script>
</body>

</html>