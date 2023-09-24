<?php
class MY_Controller extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
  }

  function _require_login($return_url, $level)
  {
    $this->load->helper('password');
    if (check_local_ip()) {
      $this->session->set_userdata('is_login', true);
      $this->session->set_userdata('email', 'ljang1@naver.com');
      $this->session->set_userdata('name', 'local_login');
      $this->session->set_userdata('year', c_year());
      $this->session->set_userdata('month', c_month());
      $this->session->set_userdata('level', '10');
      $this->session->set_userdata('workspace', 'leanmath');
      return true;
    }


    // 로그인이 되어 있지 않다면 로그인 페이지로 리다이렉션
    if (!$this->session->userdata('is_login')) {
      alert('로그인이 필요합니다.', site_url('/auth/login?returnURL=' . rawurlencode($return_url)));
    }

    if ($this->session->userdata('level') < $level) {
      alert('권한이 부족합니다.', site_url('/auth/login?returnURL=' . rawurlencode($return_url)));
    }
  }

  /*
    |-------------------------------------------------------------------
    | Template - Modal Feedback Success or Error Message
    |-------------------------------------------------------------------
    |
    | @param $type      Feedback Type (Success or Error)
    | @param $title     Feedback Title
    | @param $content   Feedback Content
    | @param $button    Feedback Button Text
    |
    */
  function modal_feedback($type, $title, $desc, $button)
  {
    $message = '
            <div id="modalFeedback" class="modal fade">
                <div class="modal-dialog modal-dialog-centered modal-confirm">
                    <div class="modal-content">
            
                        <div class="modal-header-' . $type . '">
                            <div class="icon-box">
                                <i class="material-icons">' . ($type == "success" ? "&#xE876;" : "&#xE5CD;") . '</i>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        
                        <div class="modal-body text-center">
                            <h4>' . $title . '</h4>	
                            <p>' . $desc . '</p>
                            <button class="btn" data-dismiss="modal">' . $button . '</button>
                        </div>
                        
                    </div>
                </div>
            </div>  
        ';
    $this->session->set_flashdata('modal_message', $message);
  }
}
