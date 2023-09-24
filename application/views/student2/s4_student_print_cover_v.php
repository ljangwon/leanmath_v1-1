<!-- -------------PDF GENERATEOR --------------- -->

<button id="pdf-generate">Download</button>
<?= $student->name ?> 상세화면으로
<a class="collapse-item" href="<?= site_url('/student2/get_student/') ?>/<?= $student->id ?>">
  돌아가기 </a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2017.1.223/styles/kendo.common.min.css" />
<script src="https://kendo.cdn.telerik.com/2017.1.223/js/jszip.min.js"></script>
<script src="https://kendo.cdn.telerik.com/2017.1.223/js/kendo.all.min.js"></script>

<div id="example">
  <div class="box wide hidden-on-narrow">
  </div>

  <div class="page-container hidden-on-narrow">
    <div class="pdf-page size-a4">
      <page size="A4">

        <!-- PDF CONTENT START -->
        <h1 align="center"><?= $student->name ?> ( <?= $student->class_name ?> )</h1>
        <br>
        <table>
          <thead>
            <td> 인적사항 </td>
            <td> 지각결석 </td>
          </thead>

          <tbody>
            <tr>
              <td align="top"><textarea rows=8 cols=40>학교: <?= $student->school_name ?>, 학년: <?= $student->grade ?>, 거주: <?= $student->house ?></textarea>
              </td>

              <td>
                <table>
                  <tbody>
                    <tr>
                      <td> <textarea rows=8 cols=40> </textarea> </td>
                    </tr>
                  </tbody>
                </table>
              </td>

            </tr>
          </tbody>
        </table>

        <br>
        <table>
          <thead>
            <td> 자기주도학습시간 </td>
          </thead>

          <tbody>
            <tr>
              <td><textarea rows=3 cols=85><?= $student->study_time ?> </textarea></td>
            </tr>
          </tbody>
        </table>

        <br>
        <table>
          <thead>
            <td> 레벨테스트 </td>
          </thead>

          <tbody>
            <tr>
              <td><textarea rows=5 cols=85><?= $student->level_test ?> </textarea></td>
            </tr>
          </tbody>
        </table>

        <br>

        <table>
          <thead>
            <td> 교재이력 </td>
          </thead>

          <tbody>
            <tr>
              <td><textarea rows=10 cols=85><?= $student->book_history ?> </textarea></td>
            </tr>
          </tbody>
        </table>

        <br>
        <table>
          <thead>
            <td> 과정평가 결과 </td>
          </thead>

          <tbody>
            <tr>
              <td><textarea rows=10 cols=85><?= $student->course_test ?></textarea></td>
            </tr>
          </tbody>
        </table>

        <br>
        <table>
          <thead>
            <td> 학습주안점 </td>
          </thead>

          <tbody>
            <tr>
              <td><textarea rows=6 cols=85> </textarea></td>
            </tr>
          </tbody>
        </table>

        <!-- PDF CONTENT END -->
      </page>

    </div>
  </div>

  <div class="responsive-message"></div>

  <style>
    /*
            Use the DejaVu Sans font for display and embedding in the PDF file.
            The standard PDF fonts have no support for Unicode characters.
        */
    .pdf-page {
      font-family: "DejaVu Sans", "Arial", sans-serif;
    }
  </style>

  <script>
    // Import DejaVu Sans font for embedding

    // NOTE: Only required if the Kendo UI stylesheets are loaded
    // from a different origin, e.g. cdn.kendostatic.com
    kendo.pdf.defineFont({
      "DejaVu Sans": "https://kendo.cdn.telerik.com/2016.2.607/styles/fonts/DejaVu/DejaVuSans.ttf",
      "DejaVu Sans|Bold": "https://kendo.cdn.telerik.com/2016.2.607/styles/fonts/DejaVu/DejaVuSans-Bold.ttf",
      "DejaVu Sans|Bold|Italic": "https://kendo.cdn.telerik.com/2016.2.607/styles/fonts/DejaVu/DejaVuSans-Oblique.ttf",
      "DejaVu Sans|Italic": "https://kendo.cdn.telerik.com/2016.2.607/styles/fonts/DejaVu/DejaVuSans-Oblique.ttf"
    });
  </script>

  <!-- Load Pako ZLIB library to enable PDF compression -->
  <!-- <script src="../content/shared/js/pako.min.js"></script> -->

  <script>
    function getPDF(selector) {
      kendo.drawing.drawDOM($(selector)).then(function(group) {
        kendo.drawing.pdf.saveAs(group, 'testing.pdf');
      });
    }
  </script>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Montserrat', sans-serif;
    }

    page[size="A4"] {
      width: 785px;
      height: 1000px;
    }

    page {
      background: white;
      display: block;
      margin: 0 auto;
    }
  </style>

</div>

<script type="text/javascript">
  $('#pdf-generate').click(function() {
    getPDF('.pdf-page');
  })
</script>