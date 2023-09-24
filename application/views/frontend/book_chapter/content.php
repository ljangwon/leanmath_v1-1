<!-- Content Page -->
<div class="container">

    <!-- Header -->
    <div class="content-header">

        <!-- Import Button -->
        <a data-toggle="modal" data-target="#modalImport" class="btn btn-sm btn-success">
            <i class="fas fa-file-import"></i> Import
        </a>

        <!-- Export Button -->
        <a data-toggle="modal" data-target="#modalExport" class="btn btn-sm btn-primary float-right">
            <i class="fas fa-download"></i> Export
        </a>

    </div>

    <?php echo base_url() ?>

    <!-- Table Transaction -->
    <div class="table-responsive">
        <table class="table table-striped border">
            <thead class="text-center">
                <th class="border">#</th>
                <th class="border">id</th>
                <th class="border">modified_time</th>
                <th class="border">number</th>
                <th class="border">title</th>
                <th class="border">sort_seq</th>
                <th class="border">book_id</th>
            </thead>

            <tbody>
                <?php foreach ($transaction_list as $key => $transaction) { ?>
                    <tr class="text-center">

                        <!-- Number -->
                        <td class="border"><?= $key + 1 ?></td>

                        <!-- id -->
                        <td class="border"><?= $transaction['id'] ?></td>

                        <!-- flag  -->
                        <td class="border"><?= $transaction['modified_time'] ?></td>

                        <!-- modified_time -->
                        <td class="border"><?= $transaction['number'] ?></td>

                        <!-- title -->
                        <td class="border"><?= $transaction['title'] ?></td>

                        <!-- grade1 -->
                        <td class="border"><?= $transaction['sort_seq'] ?></td>

                        <!-- grade2 -->
                        <td class="border"><?= $transaction['book_id'] ?></td>
                    </tr>
                <?php } ?>

                <!-- Empty State -->
                <?php if (empty($transaction_list)) { ?>
                    <tr class="text-center">
                        <td colspan="7">Data not found</td>
                    </tr>
                <?php } ?>

            </tbody>

        </table>
    </div>

</div>

<!-- Load Modal Views -->
<?php
$this->load->view('frontend/book_chapter/modal-export-excel');
$this->load->view('frontend/book_chapter/modal-import-excel');
?>