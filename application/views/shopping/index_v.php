
    <!-- logo -->
    <img src="<?= $this->config->item('base_url') ?>/static/shopping/img/logo.png" class="logo" />
    <!-- Buttons -->
    <div class="buttons">
      <button class="btn">
        <img
          src="<?= $this->config->item('base_url') ?>/static/shopping/img/blue_t.png"
          alt="tshirt"
          class="imgBtn"
          data-key="type"
          data-value="tshirt"
        />
      </button>
      <button class="btn">
        <img
          src="<?= $this->config->item('base_url') ?>/static/shopping/img/blue_p.png"
          alt="pants"
          class="imgBtn"
          data-key="type"
          data-value="pants"
        />
      </button>
      <button class="btn">
        <img
          src="<?= $this->config->item('base_url') ?>/static/shopping/img/blue_s.png"
          alt="skirt"
          class="imgBtn"
          data-key="type"
          data-value="skirt"
        />
      </button>
      <button class="btn colorBtn blue" data-key="color" data-value="blue">
        Blue
      </button>
      <button class="btn colorBtn yellow" data-key="color" data-value="yellow">
        Yellow
      </button>
      <button class="btn colorBtn pink" data-key="color" data-value="pink">
        Pink
      </button>
    </div>
    <!-- Items -->
    <ul class="items"></ul>
  </body>
</html>
