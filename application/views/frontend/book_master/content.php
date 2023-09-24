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

    <!-- Table Transaction -->
    <div class="table-responsive">
        <table class="table table-striped border">
            <thead class="text-center">
                <th class="border">#</th>
                <th class="border">id</th>
                <th class="border">flag</th>
                <th class="border">modified_time</th>
                <th class="border">title</th>
                <th class="border">grade1</th>
                <th class="border">grade2</th>
                <th class="border">chapter_count</th>
                <th class="border">book_level</th>
                <th class="border">description</th>
                <th class="border">status</th>
                <th class="border">workspace</th>
            </thead>

            <tbody>
                <?php foreach ($transaction_list as $key => $transaction) { ?>
                    <tr class="text-center">

                        <!-- Number -->
                        <td class="border"><?= $key + 1 ?></td>

                        <!-- id -->
                        <td class="border">
                            <a href="http://leanmath.dothome.co.kr/leanmath/index.php/book/get_book/<?= $transaction['id'] ?>">
                                <?= $transaction['id'] ?> </a>
                        </td>

                        <!-- flag  -->
                        <td class="border"><?= $transaction['flag'] ?></td>

                        <!-- modified_time -->
                        <td class="border"><?= $transaction['modified_time'] ?></td>

                        <!-- title -->
                        <td class="border"><?= $transaction['title'] ?></td>

                        <!-- grade1 -->
                        <td class="border"><?= $transaction['grade1'] ?></td>

                        <!-- grade2 -->
                        <td class="border"><?= $transaction['grade2'] ?></td>

                        <!-- chapter_count -->
                        <td class="border"><?= $transaction['chapter_count'] ?></td>

                        <!-- book_level -->
                        <td class="border"><?= $transaction['book_level'] ?></td>

                        <!-- description -->
                        <td class="border"><?= $transaction['description'] ?></td>

                        <!-- status -->
                        <td class="border"><?= $transaction['status'] ?></td>

                        <!-- workspace -->
                        <td class="border"><?= $transaction['workspace'] ?></td>
                    </tr>
                <?php } ?>

                <!-- Empty State -->
                <?php if (empty($transaction_list)) { ?>
                    <tr class="text-center">
                        <td colspan="13">Data not found</td>
                    </tr>
                <?php } ?>

            </tbody>

        </table>
    </div>

</div>

<!-- Load Modal Views -->
<?php
$this->load->view('frontend/book_master/modal-export-excel');
$this->load->view('frontend/book_master/modal-import-excel');
?>