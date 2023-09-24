<div>
  <div class="span4"></div>
  <div class="span4">
    <?php echo validation_errors(); ?>
    <form class="form-horizontal" action="<?= $this->config->item('base_url') ?>/index.php/auth/changePassword" method="post">
      <div class="control-group">
        <label class="control-label" for="inputEmail">이메일</label>
        <div class="controls">
          <?php
          if ($email =  set_value('email')) {
          } else {
            $email = $this->session->userdata('email');
          }
          ?>
          <input type="text" id="email" name="email" value="<?= $email ?>" placeholder="이메일">
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="name">이름</label>
        <div class="controls">
          <?php
          if ($name = set_value('name')) {
          } else {
            $name = $this->session->userdata('name');
          }
          ?>
          <input type="text" id="name" name="name" value="<?= $name ?>" placeholder="네임">

        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="old_password">이전 비밀번호</label>
        <div class="controls">
          <input type="password" id="old_password" name="old_password" value="<?php echo set_value('old_password'); ?>" placeholder="이전 비밀번호">
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="new_password">새 비밀번호</label>
        <div class="controls">
          <input type="password" id="new_password" name="new_password" value="<?php echo set_value('new_password'); ?>" placeholder="새 비밀번호">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="re_password">새 비밀번호 확인</label>
        <div class="controls">
          <input type="password" id="re_password" name="re_password" value="<?php echo set_value('re_password'); ?>" placeholder="비밀번호 확인">
        </div>
      </div>

      <div class="control-group">
        <label class="control-label"></label>
        <div class="controls">
          <input type="submit" class="btn btn-primary" value="변경" />
        </div>
      </div>
    </form>
  </div>
  <div class="span4"></div>
</div>