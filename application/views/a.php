<!-- -------------PDF GENERATEOR --------------- -->

<button id="pdf-generate">Download</button>
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

        <h1>Hi, This is A4 Size PDF Example</h1>

        <table>

          <thead>
            <td>No</td>
            <td>Name</td>
            <td>Serial Number</td>
          </thead>

          <tbody>
            <tr>
              <td> 1</td>
              <td> Lee</td>
              <td> 1234123412341234</td>
            </tr>

            <tr>
              <td> 2</td>
              <td> Kim</td>
              <td> 1234123412341234</td>
            </tr>

            <tr>
              <td> 3</td>
              <td> Park</td>
              <td> 1234123412341234</td>
            </tr>

            <tr>
              <td> 4</td>
              <td> Cha</td>
              <td> 1234123412341234</td>
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
      width: 790px;
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