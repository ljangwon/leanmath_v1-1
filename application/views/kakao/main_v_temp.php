<!DOCTYPE html>
<html>

<head>

  <script src="https://developers.kakao.com/sdk/js/kakao.min.js" async=""></script>
  <title>카카오톡 친구 목록 가져오기 | Kakao Developers 도구</title>
  
</head>

<body class="mobile">
  <div id="__next">
    <form class="RestAPIForm_form__1j2JF">
      <div class="KDC_Layout__root__1vTdp">
        <div id="kakaoHead" class="KDC_Header__root__2Btke" role="banner">
          <h1 class="tit_logo"><a href="/" id="kakaoServiceLogo" class="link_kakaodevelopers"><span class="kdc_ico_developers">kakao developers</span></a></h1>
          <nav id="kakaoGnb" class="gnb_developers" role="navigation">
            <h2 class="screen_out">메인 메뉴</h2>
            <div class="menu_gnb"><button type="button" class="btn_gnb show_m" aria-haspopup="true" aria-expanded="false"><span class="kdc_ico_developers">메뉴 열기</span></button>
              <div class="area_gnb">
                <ul class="list_gnb">
                  <li><a href="/console/app" class="link_gnb">내 애플리케이션</a></li>
                  <li><a href="/product" class="link_gnb">제품</a></li>
                  <li><a href="/docs" class="link_gnb">문서</a></li>
                  <li><a href="/tool" class="link_gnb">도구</a></li>
                  <li><a href="https://devtalk.kakao.com" target="_blank" class="link_gnb">포럼<span class="kdc_ico_developers"></span></a></li>
                  <li class="show_m">
                    <div class="menu_lang"><strong class="screen_out">언어</strong>
                      <div class="area_lang">
                        <ul class="list_lang">
                          <li><a href="#" class="link_lang selected">KOR</a></li>
                          <li><a href="/changeLang?lang=en" class="link_lang">ENG</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
                <div class="box_gnbfoot show_m"><strong class="screen_out">관련사이트</strong>
                  <ul class="list_site">
                    <li><a href="https://tech.kakao.com" class="link_site">Kakao Tech Blog</a></li>
                    <li><span class="txt_bar">|</span><a href="https://with.kakao.com" class="link_site">with kakao</a></li>
                  </ul><small class="txt_copy">Copyright ©
                    <!-- --> <a href="https://www.kakaocorp.com" class="link_kako">Kakao Corp.</a> <!-- -->All rights reserved.
                  </small>
                </div>
              </div>
            </div><strong class="screen_out">계정 정보</strong>
            <div class="menu_my show_pc"><button type="button" class="btn_email" aria-haspopup="true" aria-expanded="false">ljangwon@gmail.com<span class="kdc_ico_developers"></span></button></div><strong class="screen_out show_pc">Search</strong>
            <div class="menu_search show_pc"><button type="button" class="btn_menu"><span class="kdc_ico_developers"></span></button></div><strong class="screen_out">서비스 바로가기 메뉴</strong>
            <div class="menu_quick show_pc"><button type="button" class="btn_menu" aria-haspopup="true" aria-expanded="false"><span class="kdc_ico_developers"></span></button></div>
            <div class="menu_lang show_pc"><strong class="screen_out">언어</strong>
              <div class="area_lang">
                <ul class="list_lang">
                  <li><a href="#" class="link_lang selected">KOR</a></li>
                  <li><a href="/changeLang?lang=en" class="link_lang">ENG</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
        <div class="KDC_Breadcrumb__root__31lqj KDC_Breadcrumb__responsive__1wsUW show_pc"><button type="button" class="KDC_Breadcrumb__toggle_lnb_button__3O13a"><span class="KDC_Icon__root__3ZxBV KDC_Icon__hamburger_menu__2Fvs0 mt-5"></span>
            <p class="screen_out">서브 메뉴 열기</p>
          </button><strong class="screen_out">페이지 이동경로</strong>
          <ul class="list_path">
            <li class="item_path"><a href="/tool" class="link_path">도구</a><span class="txt_arr">&gt;</span></li>
            <li class="item_path"><a href="/tool/rest-api" class="link_path">REST API 테스트</a><span class="txt_arr">&gt;</span></li>
            <li class="item_path"><a href="/tool/rest-api/open/get/v1-api-talk-friends" class="link_path">카카오톡 친구 목록 가져오기</a><span class="txt_arr">&gt;</span></li>
          </ul>
        </div>
        <div class="KDC_Body__root__1Q-tq">
          <div class="KDC_LNB__root__3xKqX show_pc KDC_LNB__responsive_hidden__k260F" style="bottom:0px">
            <div>
              <div class="KDC_Menu__menu__3mD2y">
                <h3 class="KDC_Menu__menu_label__1-2HG">Kakao API</h3>
                <ul class="KDC_Menu__menu_ul__3AQC3">
                  <li class="KDC_Menu__branch__12GPT"><button type="button" class="KDC_Menu__branch_button__3D1Tn"><span class="KDC_Menu__branch_txt__2r7KM">카카오 로그인</span><span class="kdc_ico_developers KDC_Menu__icon_collapse__1cSm5"></span></button>
                    <ul class="KDC_Menu__subMenu__1Jvro KDC_Menu__close__wFhHw">
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v1-user-logout">로그아웃
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v1-user-signup">연결하기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v1-user-unlink">연결 끊기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v1-user-access_token_info">토큰 정보 보기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-user-me">사용자 정보 가져오기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v1-user-update_profile">사용자 정보 저장하기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v1-user-ids">사용자 목록 가져오기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-app-users">여러 사용자 정보 가져오기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-user-scopes">동의 내역 확인하기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v2-user-revoke-scopes">동의 철회하기
                          <!-- -->
                        </a></li>
                    </ul>
                  </li>
                  <li class="KDC_Menu__branch__12GPT"><button type="button" class="KDC_Menu__branch_button__3D1Tn"><span class="KDC_Menu__branch_txt__2r7KM KDC_Menu__collapse_open__3egdf">카카오톡 소셜</span><span class="kdc_ico_developers KDC_Menu__icon_collapse__1cSm5 KDC_Menu__open_icon__3WE27"></span></button>
                    <ul class="KDC_Menu__subMenu__1Jvro KDC_Menu__open__39fyD">
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v1-api-talk-profile">카카오톡 프로필 받기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw selected"><a href="/tool/rest-api/open/get/v1-api-talk-friends">카카오톡 친구 목록 가져오기
                          <!-- -->
                        </a></li>
                    </ul>
                  </li>
                  <li class="KDC_Menu__branch__12GPT"><button type="button" class="KDC_Menu__branch_button__3D1Tn"><span class="KDC_Menu__branch_txt__2r7KM">메시지</span><span class="kdc_ico_developers KDC_Menu__icon_collapse__1cSm5"></span></button>
                    <ul class="KDC_Menu__subMenu__1Jvro KDC_Menu__close__wFhHw">
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v2-api-talk-memo-default-send">나에게 기본 템플릿으로 메시지 보내기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v2-api-talk-memo-send">나에게 사용자 정의 템플릿으로 메시지 보내기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v2-api-talk-memo-scrap-send">나에게 스크랩 메시지 보내기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v1-api-talk-friends-message-default-send">친구에게 기본 템플릿으로 메시지 보내기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v1-api-talk-friends-message-send">친구에게 사용자 정의 템플릿으로 메시지 보내기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v1-api-talk-friends-message-scrap-send">친구에게 스크랩 메시지 보내기
                          <!-- -->
                        </a></li>
                    </ul>
                  </li>
                  <li class="KDC_Menu__branch__12GPT"><button type="button" class="KDC_Menu__branch_button__3D1Tn"><span class="KDC_Menu__branch_txt__2r7KM">카카오스토리</span><span class="kdc_ico_developers KDC_Menu__icon_collapse__1cSm5"></span></button>
                    <ul class="KDC_Menu__subMenu__1Jvro KDC_Menu__close__wFhHw">
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v1-api-story-isstoryuser">사용자 확인하기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v1-api-story-profile">프로필 받기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v1-api-story-post-note">내 스토리 쓰기(글)
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v1-api-story-post-photo">내 스토리 쓰기(사진)
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v1-api-story-post-link">내 스토리 쓰기(링크)
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v1-api-story-mystory">내 스토리 가져오기(지정)
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v1-api-story-mystories">내 스토리 가져오기(여러 개)
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/delete/v1-api-story-delete-mystory">내 스토리 삭제하기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v1-api-story-upload-multi">이미지 업로드하기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v1-api-story-linkinfo">웹 페이지 스크랩하기
                          <!-- -->
                        </a></li>
                    </ul>
                  </li>
                  <li class="KDC_Menu__branch__12GPT"><button type="button" class="KDC_Menu__branch_button__3D1Tn"><span class="KDC_Menu__branch_txt__2r7KM">카카오톡 채널</span><span class="kdc_ico_developers KDC_Menu__icon_collapse__1cSm5"></span></button>
                    <ul class="KDC_Menu__subMenu__1Jvro KDC_Menu__close__wFhHw">
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v1-api-talk-channels">카카오톡 채널 관계 확인하기
                          <!-- -->
                        </a></li>
                    </ul>
                  </li>
                  <li class="KDC_Menu__branch__12GPT"><button type="button" class="KDC_Menu__branch_button__3D1Tn"><span class="KDC_Menu__branch_txt__2r7KM">카카오싱크</span><span class="kdc_ico_developers KDC_Menu__icon_collapse__1cSm5"></span></button>
                    <ul class="KDC_Menu__subMenu__1Jvro KDC_Menu__close__wFhHw">
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v1-user-shipping_address">배송지 조회하기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v1-user-service-terms">동의한 약관 확인하기
                          <!-- -->
                        </a></li>
                    </ul>
                  </li>
                  <li class="KDC_Menu__branch__12GPT"><button type="button" class="KDC_Menu__branch_button__3D1Tn"><span class="KDC_Menu__branch_txt__2r7KM">푸시 알림</span><span class="kdc_ico_developers KDC_Menu__icon_collapse__1cSm5"></span></button>
                    <ul class="KDC_Menu__subMenu__1Jvro KDC_Menu__close__wFhHw">
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v2-push-register">푸시 토큰 등록하기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-push-tokens">푸시 토큰 보기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v2-push-deregister">푸시 토큰 삭제하기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v2-push-send">푸시 알림 보내기
                          <!-- -->
                        </a></li>
                    </ul>
                  </li>
                  <li class="KDC_Menu__branch__12GPT"><button type="button" class="KDC_Menu__branch_button__3D1Tn"><span class="KDC_Menu__branch_txt__2r7KM">Daum 검색</span><span class="kdc_ico_developers KDC_Menu__icon_collapse__1cSm5"></span></button>
                    <ul class="KDC_Menu__subMenu__1Jvro KDC_Menu__close__wFhHw">
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-search-web">웹문서 검색
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-search-vclip">동영상 검색
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-search-image">이미지 검색
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-search-blog">블로그 검색
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v3-search-book">책 검색
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-search-cafe">카페 검색
                          <!-- -->
                        </a></li>
                    </ul>
                  </li>
                  <li class="KDC_Menu__branch__12GPT"><button type="button" class="KDC_Menu__branch_button__3D1Tn"><span class="KDC_Menu__branch_txt__2r7KM">로컬</span><span class="kdc_ico_developers KDC_Menu__icon_collapse__1cSm5"></span></button>
                    <ul class="KDC_Menu__subMenu__1Jvro KDC_Menu__close__wFhHw">
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-local-search-address.%7Bformat%7D">주소 검색
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-local-geo-coord2regioncode.%7Bformat%7D">좌표로 행정구역정보 받기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-local-geo-coord2address.%7Bformat%7D">좌표로 주소 변환하기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-local-geo-transcoord.%7Bformat%7D">좌표계 변환
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-local-search-keyword.%7Bformat%7D">키워드로 장소 검색
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-local-search-category.%7Bformat%7D">카테고리로 장소 검색
                          <!-- -->
                        </a></li>
                    </ul>
                  </li>
                  <li class="KDC_Menu__branch__12GPT"><button type="button" class="KDC_Menu__branch_button__3D1Tn"><span class="KDC_Menu__branch_txt__2r7KM">카카오내비</span><span class="kdc_ico_developers KDC_Menu__icon_collapse__1cSm5"></span></button>
                    <ul class="KDC_Menu__subMenu__1Jvro KDC_Menu__close__wFhHw">
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v1-directions">자동차 길찾기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v1-waypoints-directions">다중 경유지 길찾기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v1-origins-directions">다중 출발지 길찾기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v1-destinations-directions">다중 목적지 길찾기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v1-future-directions">미래운행정보 길찾기
                          <!-- -->
                        </a></li>
                    </ul>
                  </li>
                  <li class="KDC_Menu__branch__12GPT"><button type="button" class="KDC_Menu__branch_button__3D1Tn"><span class="KDC_Menu__branch_txt__2r7KM">비전</span><span class="kdc_ico_developers KDC_Menu__icon_collapse__1cSm5"></span></button>
                    <ul class="KDC_Menu__subMenu__1Jvro KDC_Menu__close__wFhHw">
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v2-vision-face-detect">얼굴 검출
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v2-vision-product-detect">상품 검출
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v2-vision-adult-detect">성인 이미지 판별
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v2-vision-thumbnail-crop">썸네일 생성
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v2-vision-thumbnail-detect">썸네일 검출
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v2-vision-multitag-generate">멀티태그 생성
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v2-vision-text-ocr">OCR
                          <!-- -->
                        </a></li>
                    </ul>
                  </li>
                  <li class="KDC_Menu__branch__12GPT"><button type="button" class="KDC_Menu__branch_button__3D1Tn"><span class="KDC_Menu__branch_txt__2r7KM">포즈</span><span class="kdc_ico_developers KDC_Menu__icon_collapse__1cSm5"></span></button>
                    <ul class="KDC_Menu__subMenu__1Jvro KDC_Menu__close__wFhHw">
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/pose">이미지 분석하기
                          <!-- -->
                        </a></li>
                    </ul>
                  </li>
                  <li class="KDC_Menu__branch__12GPT"><button type="button" class="KDC_Menu__branch_button__3D1Tn"><span class="KDC_Menu__branch_txt__2r7KM">번역</span><span class="kdc_ico_developers KDC_Menu__icon_collapse__1cSm5"></span></button>
                    <ul class="KDC_Menu__subMenu__1Jvro KDC_Menu__close__wFhHw">
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-translation-translate">문장 번역
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v3-translation-language-detect">언어 감지
                          <!-- -->
                        </a></li>
                    </ul>
                  </li>
                  <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/reference">지원하는 API 목록</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="KDC_LNB__root__3xKqX show_m"><button type="button" class="KDC_LNB__btn_opentype__elApE"><span class="KDC_LNB__txt_opentype__2-0KR">카카오톡 친구 목록 가져오기</span><span class="KDC_Icon__root__3ZxBV KDC_Icon__m-chevron-down__3RV-m KDC_LNB__icon_chevron__3DEDk"></span></button>
            <div class="KDC_LNB__inner_side__38sv_">
              <div class="KDC_Menu__menu__3mD2y">
                <h3 class="KDC_Menu__menu_label__1-2HG">Kakao API</h3>
                <ul class="KDC_Menu__menu_ul__3AQC3">
                  <li class="KDC_Menu__branch__12GPT"><button type="button" class="KDC_Menu__branch_button__3D1Tn"><span class="KDC_Menu__branch_txt__2r7KM">카카오 로그인</span><span class="kdc_ico_developers KDC_Menu__icon_collapse__1cSm5"></span></button>
                    <ul class="KDC_Menu__subMenu__1Jvro KDC_Menu__close__wFhHw">
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v1-user-logout">로그아웃
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v1-user-signup">연결하기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v1-user-unlink">연결 끊기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v1-user-access_token_info">토큰 정보 보기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-user-me">사용자 정보 가져오기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v1-user-update_profile">사용자 정보 저장하기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v1-user-ids">사용자 목록 가져오기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-app-users">여러 사용자 정보 가져오기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-user-scopes">동의 내역 확인하기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v2-user-revoke-scopes">동의 철회하기
                          <!-- -->
                        </a></li>
                    </ul>
                  </li>
                  <li class="KDC_Menu__branch__12GPT"><button type="button" class="KDC_Menu__branch_button__3D1Tn"><span class="KDC_Menu__branch_txt__2r7KM KDC_Menu__collapse_open__3egdf">카카오톡 소셜</span><span class="kdc_ico_developers KDC_Menu__icon_collapse__1cSm5 KDC_Menu__open_icon__3WE27"></span></button>
                    <ul class="KDC_Menu__subMenu__1Jvro KDC_Menu__open__39fyD">
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v1-api-talk-profile">카카오톡 프로필 받기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw selected"><a href="/tool/rest-api/open/get/v1-api-talk-friends">카카오톡 친구 목록 가져오기
                          <!-- -->
                        </a></li>
                    </ul>
                  </li>
                  <li class="KDC_Menu__branch__12GPT"><button type="button" class="KDC_Menu__branch_button__3D1Tn"><span class="KDC_Menu__branch_txt__2r7KM">메시지</span><span class="kdc_ico_developers KDC_Menu__icon_collapse__1cSm5"></span></button>
                    <ul class="KDC_Menu__subMenu__1Jvro KDC_Menu__close__wFhHw">
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v2-api-talk-memo-default-send">나에게 기본 템플릿으로 메시지 보내기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v2-api-talk-memo-send">나에게 사용자 정의 템플릿으로 메시지 보내기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v2-api-talk-memo-scrap-send">나에게 스크랩 메시지 보내기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v1-api-talk-friends-message-default-send">친구에게 기본 템플릿으로 메시지 보내기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v1-api-talk-friends-message-send">친구에게 사용자 정의 템플릿으로 메시지 보내기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v1-api-talk-friends-message-scrap-send">친구에게 스크랩 메시지 보내기
                          <!-- -->
                        </a></li>
                    </ul>
                  </li>
                  <li class="KDC_Menu__branch__12GPT"><button type="button" class="KDC_Menu__branch_button__3D1Tn"><span class="KDC_Menu__branch_txt__2r7KM">카카오스토리</span><span class="kdc_ico_developers KDC_Menu__icon_collapse__1cSm5"></span></button>
                    <ul class="KDC_Menu__subMenu__1Jvro KDC_Menu__close__wFhHw">
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v1-api-story-isstoryuser">사용자 확인하기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v1-api-story-profile">프로필 받기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v1-api-story-post-note">내 스토리 쓰기(글)
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v1-api-story-post-photo">내 스토리 쓰기(사진)
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v1-api-story-post-link">내 스토리 쓰기(링크)
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v1-api-story-mystory">내 스토리 가져오기(지정)
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v1-api-story-mystories">내 스토리 가져오기(여러 개)
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/delete/v1-api-story-delete-mystory">내 스토리 삭제하기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v1-api-story-upload-multi">이미지 업로드하기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v1-api-story-linkinfo">웹 페이지 스크랩하기
                          <!-- -->
                        </a></li>
                    </ul>
                  </li>
                  <li class="KDC_Menu__branch__12GPT"><button type="button" class="KDC_Menu__branch_button__3D1Tn"><span class="KDC_Menu__branch_txt__2r7KM">카카오톡 채널</span><span class="kdc_ico_developers KDC_Menu__icon_collapse__1cSm5"></span></button>
                    <ul class="KDC_Menu__subMenu__1Jvro KDC_Menu__close__wFhHw">
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v1-api-talk-channels">카카오톡 채널 관계 확인하기
                          <!-- -->
                        </a></li>
                    </ul>
                  </li>
                  <li class="KDC_Menu__branch__12GPT"><button type="button" class="KDC_Menu__branch_button__3D1Tn"><span class="KDC_Menu__branch_txt__2r7KM">카카오싱크</span><span class="kdc_ico_developers KDC_Menu__icon_collapse__1cSm5"></span></button>
                    <ul class="KDC_Menu__subMenu__1Jvro KDC_Menu__close__wFhHw">
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v1-user-shipping_address">배송지 조회하기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v1-user-service-terms">동의한 약관 확인하기
                          <!-- -->
                        </a></li>
                    </ul>
                  </li>
                  <li class="KDC_Menu__branch__12GPT"><button type="button" class="KDC_Menu__branch_button__3D1Tn"><span class="KDC_Menu__branch_txt__2r7KM">푸시 알림</span><span class="kdc_ico_developers KDC_Menu__icon_collapse__1cSm5"></span></button>
                    <ul class="KDC_Menu__subMenu__1Jvro KDC_Menu__close__wFhHw">
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v2-push-register">푸시 토큰 등록하기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-push-tokens">푸시 토큰 보기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v2-push-deregister">푸시 토큰 삭제하기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v2-push-send">푸시 알림 보내기
                          <!-- -->
                        </a></li>
                    </ul>
                  </li>
                  <li class="KDC_Menu__branch__12GPT"><button type="button" class="KDC_Menu__branch_button__3D1Tn"><span class="KDC_Menu__branch_txt__2r7KM">Daum 검색</span><span class="kdc_ico_developers KDC_Menu__icon_collapse__1cSm5"></span></button>
                    <ul class="KDC_Menu__subMenu__1Jvro KDC_Menu__close__wFhHw">
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-search-web">웹문서 검색
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-search-vclip">동영상 검색
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-search-image">이미지 검색
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-search-blog">블로그 검색
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v3-search-book">책 검색
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-search-cafe">카페 검색
                          <!-- -->
                        </a></li>
                    </ul>
                  </li>
                  <li class="KDC_Menu__branch__12GPT"><button type="button" class="KDC_Menu__branch_button__3D1Tn"><span class="KDC_Menu__branch_txt__2r7KM">로컬</span><span class="kdc_ico_developers KDC_Menu__icon_collapse__1cSm5"></span></button>
                    <ul class="KDC_Menu__subMenu__1Jvro KDC_Menu__close__wFhHw">
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-local-search-address.%7Bformat%7D">주소 검색
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-local-geo-coord2regioncode.%7Bformat%7D">좌표로 행정구역정보 받기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-local-geo-coord2address.%7Bformat%7D">좌표로 주소 변환하기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-local-geo-transcoord.%7Bformat%7D">좌표계 변환
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-local-search-keyword.%7Bformat%7D">키워드로 장소 검색
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-local-search-category.%7Bformat%7D">카테고리로 장소 검색
                          <!-- -->
                        </a></li>
                    </ul>
                  </li>
                  <li class="KDC_Menu__branch__12GPT"><button type="button" class="KDC_Menu__branch_button__3D1Tn"><span class="KDC_Menu__branch_txt__2r7KM">카카오내비</span><span class="kdc_ico_developers KDC_Menu__icon_collapse__1cSm5"></span></button>
                    <ul class="KDC_Menu__subMenu__1Jvro KDC_Menu__close__wFhHw">
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v1-directions">자동차 길찾기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v1-waypoints-directions">다중 경유지 길찾기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v1-origins-directions">다중 출발지 길찾기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v1-destinations-directions">다중 목적지 길찾기
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v1-future-directions">미래운행정보 길찾기
                          <!-- -->
                        </a></li>
                    </ul>
                  </li>
                  <li class="KDC_Menu__branch__12GPT"><button type="button" class="KDC_Menu__branch_button__3D1Tn"><span class="KDC_Menu__branch_txt__2r7KM">비전</span><span class="kdc_ico_developers KDC_Menu__icon_collapse__1cSm5"></span></button>
                    <ul class="KDC_Menu__subMenu__1Jvro KDC_Menu__close__wFhHw">
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v2-vision-face-detect">얼굴 검출
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v2-vision-product-detect">상품 검출
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v2-vision-adult-detect">성인 이미지 판별
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v2-vision-thumbnail-crop">썸네일 생성
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v2-vision-thumbnail-detect">썸네일 검출
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v2-vision-multitag-generate">멀티태그 생성
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/v2-vision-text-ocr">OCR
                          <!-- -->
                        </a></li>
                    </ul>
                  </li>
                  <li class="KDC_Menu__branch__12GPT"><button type="button" class="KDC_Menu__branch_button__3D1Tn"><span class="KDC_Menu__branch_txt__2r7KM">포즈</span><span class="kdc_ico_developers KDC_Menu__icon_collapse__1cSm5"></span></button>
                    <ul class="KDC_Menu__subMenu__1Jvro KDC_Menu__close__wFhHw">
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/post/pose">이미지 분석하기
                          <!-- -->
                        </a></li>
                    </ul>
                  </li>
                  <li class="KDC_Menu__branch__12GPT"><button type="button" class="KDC_Menu__branch_button__3D1Tn"><span class="KDC_Menu__branch_txt__2r7KM">번역</span><span class="kdc_ico_developers KDC_Menu__icon_collapse__1cSm5"></span></button>
                    <ul class="KDC_Menu__subMenu__1Jvro KDC_Menu__close__wFhHw">
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v2-translation-translate">문장 번역
                          <!-- -->
                        </a></li>
                      <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/open/get/v3-translation-language-detect">언어 감지
                          <!-- -->
                        </a></li>
                    </ul>
                  </li>
                  <li class="KDC_Menu__node__2Oxvw"><a href="/tool/rest-api/reference">지원하는 API 목록</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="KDC_Content__root__3646N KDC_Content__responsive__saUFz">
            <div class="KDC_Row__root__1xlqH KDC_Row__responsive__2Leq_">
              <div class="KDC_Column__root__1Zx1r KDC_Column__flex_1__3WFYc">
                <div class="KDC_Section__root__2FzZg">
                  <div class="KDC_SectionTitle__root__3lMtt">카카오톡 친구 목록 가져오기
                    <!-- --> (
                    <!-- -->/v1/api/talk/friends
                    <!-- -->)<span class="KDC_Badge__root__25Csl item_info MethodBadge_badge__192_a MethodBadge_get__3ycLF MethodBadge_section_title__1UZMP">GET</span>
                  </div>
                  <div class="KDC_Divider__root__2DpkD KDC_Divider__section__BulYj"></div>
                  <div class="Markdown_root__3vOqn">
                    <p>현재 로그인한 사용자의 카카오계정에 연결된 카카오톡의 친구 정보를 받아 옵니다. 정렬 순서, 한 페이지에 가져올 친구 수 등 파라미터를 선택적으로 사용할 수 있습니다.</p>
                  </div>
                  <div class="KDC_ButtonGroup__root__WMzjW mt-32"><a href="/docs/latest/kakaotalk-social/rest-api#get-friends" target="_blank" class="link_normal link_front"><button type="button" class="KDC_Button__root__-TDsc KDC_Button__mini__mUt-1 KDC_Button__color_cancel__1zMJJ KDC_Button__icon_outlink__9TnHI">개발 가이드 보러가기<span class="kdc_ico_developers">outlink</span></button></a></div>
                </div>
              </div>
            </div>
            <div class="KDC_Row__root__1xlqH APIRequest_root__24Uc5 KDC_Row__responsive__2Leq_">
              <div class="KDC_Column__root__1Zx1r KDC_Column__flex_1__3WFYc">
                <div class="KDC_Section__root__2FzZg">
                  <div class="KDC_SectionTitle__root__3lMtt">요청</div>
                  <div class="KDC_Divider__root__2DpkD KDC_Divider__section__BulYj"></div>
                  <div class="KDC_SubSection__root__3d58Z">
                    <h4 class="KDC_SubSection__title__2A5MO">인증</h4>
                    <div class="KDC_SubSection__body__3Zxdj">
                      <ul class="KDC_ListLayout__root__Sgohq KDC_ListLayout__write__60GCp KDC_ListLayout__vertical_label_on_mobile__2Nukn">
                        <li class="KDC_ListLayout__item__37RHl">
                          <div class="tit_info"><label class="lab_normal">인증 앱</label></div>
                          <div class="KDC_ListLayout__content__3-MiL">
                            <div class="KDC_AppInfo__root__DWY2K area_appinfo no_active type_explain">
                              <div class="box_thumb"><img class="KDC_Image__root__2m4AU" src="https://k.kakaocdn.net/14/dn/btqE7AWXgHP/OWSCR5KLFVIG5PktAohfu0/o.jpg" width="64" height="64" alt="app_icon" /></div>
                              <div class="box_typeinfo"><strong class="tit_typeinfo">developers-sample<a href="/tool/rest-api/apps"><button type="button" class="KDC_IconButton__root__1ksa2 btn_dropdown"><span class="KDC_Icon__root__3ZxBV KDC_Icon__list__15KxQ mb-1"></span><span class="screen_out"></span></button></a></strong>
                                <div class="inbox_typeinfo"><span class="KDC_Badge__root__25Csl item_info">ID
                                    <!-- -->10395
                                  </span><span class="KDC_Badge__root__25Csl item_info">SAMPLE</span></div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="KDC_ListLayout__item__37RHl">
                          <div class="tit_info"><label class="lab_normal">인증 방식</label></div>
                          <div class="KDC_ListLayout__content__3-MiL"><span class="KDC_Radio__root__1Rctk"><input type="radio" name="apiId./v1/api/talk/friends.authType" value="Kauth" checked="" id="radio_apiId./v1/api/talk/friends.authType_1442" class="KDC_Radio__inp_comm__3EQtO" /><label for="radio_apiId./v1/api/talk/friends.authType_1442" class="KDC_Radio__lab_comm__3LWdN"><span class="kdc_ico_developers KDC_Radio__radio_icon__1XG2X"></span>Access Token</label></span></div>
                        </li>
                        <li class="KDC_ListLayout__item__37RHl">
                          <div class="tit_info"><label class="lab_normal">액세스 토큰</label></div>
                          <div class="KDC_ListLayout__content__3-MiL">
                            <div class="KDC_Inbox__root__QsouK"><input type="text" name="" value="" class="KDC_Input__root__3kmvC" placeholder="API 호출을 위해 액세스 토큰을 발급하세요." disabled="" /><button type="button" disabled="" class="KDC_Button__root__-TDsc KDC_Button__normal_narrow__p0Mys ml-12">토큰 발급</button></div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="KDC_SubSection__root__3d58Z">
                    <h4 class="KDC_SubSection__title__2A5MO">Query string</h4>
                    <div class="KDC_SubSection__body__3Zxdj">
                      <ul class="KDC_ListLayout__root__Sgohq KDC_ListLayout__write__60GCp KDC_ListLayout__vertical_label_on_mobile__2Nukn">
                        <li class="KDC_ListLayout__item__37RHl">
                          <div class="tit_info"><label class="lab_normal">friend_order</label></div>
                          <div class="KDC_ListLayout__content__3-MiL">
                            <div class="KDC_Select__root__cVEaC w-100"><span class="screen_out">선택상자</span><input type="hidden" name="apiId./v1/api/talk/friends.query.friend_order" value="favorite" /><button type="button" class="link_selected">favorite<span class="screen_out">선택됨</span><span class="kdc_ico_developers"></span></button><span class="screen_out">선택옵션</span>
                              <div class="select_opt">
                                <div class="select_box">
                                  <ul class="list_select">
                                    <li><span class="link_select">favorite</span></li>
                                    <li><span class="link_select">nickname</span></li>
                                    <li><span class="link_select">선택 안함</span></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="KDC_ListLayout__item__37RHl">
                          <div class="tit_info"><label class="lab_normal">offset</label></div>
                          <div class="KDC_ListLayout__content__3-MiL"><input type="text" name="apiId./v1/api/talk/friends.query.offset" value="" class="KDC_Input__root__3kmvC" placeholder="친구 리스트 시작 지점 offset, 기본 값 0" /></div>
                        </li>
                        <li class="KDC_ListLayout__item__37RHl">
                          <div class="tit_info"><label class="lab_normal">limit</label></div>
                          <div class="KDC_ListLayout__content__3-MiL"><input type="text" name="apiId./v1/api/talk/friends.query.limit" value="100" class="KDC_Input__root__3kmvC" placeholder="한 페이지에 가져올 친구 최대 수, 최대 100, 기본 값 100" /></div>
                        </li>
                        <li class="KDC_ListLayout__item__37RHl">
                          <div class="tit_info"><label class="lab_normal">order</label></div>
                          <div class="KDC_ListLayout__content__3-MiL">
                            <div class="KDC_Select__root__cVEaC w-100"><span class="screen_out">선택상자</span><input type="hidden" name="apiId./v1/api/talk/friends.query.order" value="asc" /><button type="button" class="link_selected">asc<span class="screen_out">선택됨</span><span class="kdc_ico_developers"></span></button><span class="screen_out">선택옵션</span>
                              <div class="select_opt">
                                <div class="select_box">
                                  <ul class="list_select">
                                    <li><span class="link_select">asc</span></li>
                                    <li><span class="link_select">desc</span></li>
                                    <li><span class="link_select">선택 안함</span></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="KDC_ButtonGroup__root__WMzjW mt-32"><button type="submit" disabled="" class="KDC_Button__root__-TDsc KDC_Button__normal__Bgmzv">전송</button></div>
                </div>
              </div>
            </div>
            <div class="KDC_Row__root__1xlqH KDC_Row__responsive__2Leq_">
              <div class="KDC_Column__root__1Zx1r KDC_Column__flex_1__3WFYc">
                <div class="KDC_Section__root__2FzZg">
                  <div class="KDC_SectionTitle__root__3lMtt">응답</div>
                  <div class="KDC_Divider__root__2DpkD KDC_Divider__section__BulYj"></div>
                  <p class="KDC_Text__desc_assist__35Aaw">전송한 요청에 대한 응답이 이곳에 표시됩니다.</p>
                </div>
              </div>
            </div>
            <div class="KDC_Row__root__1xlqH KDC_Row__responsive__2Leq_">
              <div class="KDC_Column__root__1Zx1r KDC_Column__flex_1__3WFYc">
                <div class="KDC_Section__root__2FzZg">
                  <div class="KDC_SectionTitle__root__3lMtt">명세</div>
                  <div class="KDC_Divider__root__2DpkD KDC_Divider__section__BulYj"></div>
                  <div class="KDC_SubSection__root__3d58Z">
                    <h4 class="KDC_SubSection__title__2A5MO">요청</h4>
                    <div class="KDC_SubSection__body__3Zxdj">
                      <table class="KDC_Table__root__3bH-j PropertyTable_table__2HdFL">
                        <thead>
                          <tr>
                            <th>프로퍼티</th>
                            <th>타입</th>
                            <th>설명</th>
                            <th>필수</th>
                          </tr>
                        </thead>
                        <colgroup>
                          <col style="width:25%" />
                          <col style="width:20%" />
                          <col />
                          <col style="width:10%" />
                        </colgroup>
                        <tbody>
                          <tr class="PropertyTable_depth0__kkd4t">
                            <td class="word-break-all">
                              <p class="KDC_Text__desc_assist__35Aaw">friend_order</p>
                            </td>
                            <td>
                              <p class="KDC_Text__warning__RP53a">string</p>
                            </td>
                            <td>
                              <p>정렬 기준 값, nickname(닉네임) 또는 favorite(즐겨찾기한 친구), 기본 값 favorite</p>
                            </td>
                            <td>X</td>
                          </tr>
                          <tr class="PropertyTable_depth0__kkd4t">
                            <td class="word-break-all">
                              <p class="KDC_Text__desc_assist__35Aaw">offset</p>
                            </td>
                            <td>
                              <p class="KDC_Text__warning__RP53a">integer</p>
                            </td>
                            <td>
                              <p>친구 리스트 시작 지점 offset, 기본 값 0</p>
                            </td>
                            <td>X</td>
                          </tr>
                          <tr class="PropertyTable_depth0__kkd4t">
                            <td class="word-break-all">
                              <p class="KDC_Text__desc_assist__35Aaw">limit</p>
                            </td>
                            <td>
                              <p class="KDC_Text__warning__RP53a">integer</p>
                            </td>
                            <td>
                              <p>한 페이지에 가져올 친구 최대 수, 최대 100, 기본 값 100</p>
                            </td>
                            <td>X</td>
                          </tr>
                          <tr class="PropertyTable_depth0__kkd4t">
                            <td class="word-break-all">
                              <p class="KDC_Text__desc_assist__35Aaw">order</p>
                            </td>
                            <td>
                              <p class="KDC_Text__warning__RP53a">string</p>
                            </td>
                            <td>
                              <p>친구 리스트 정렬 순서, asc(오름차순) 또는 desc(내림차순), 기본 값 asc</p>
                            </td>
                            <td>X</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="KDC_SubSection__root__3d58Z">
                    <h4 class="KDC_SubSection__title__2A5MO">응답</h4>
                    <div class="KDC_SubSection__body__3Zxdj">
                      <table class="KDC_Table__root__3bH-j PropertyTable_table__2HdFL">
                        <thead>
                          <tr>
                            <th>프로퍼티</th>
                            <th>타입</th>
                            <th>설명</th>
                            <th>필수</th>
                          </tr>
                        </thead>
                        <colgroup>
                          <col style="width:25%" />
                          <col style="width:20%" />
                          <col />
                          <col style="width:10%" />
                        </colgroup>
                        <tbody>
                          <tr class="PropertyTable_depth0__kkd4t">
                            <td class="word-break-all"><button type="button" class="PropertyTable_extend_button__1kwTY"><span class="KDC_Icon__root__3ZxBV KDC_Icon__black-caret-up-fill__1JwOn PropertyTable_icon__2cisS"></span>
                                <p class="KDC_Text__desc_assist__35Aaw">elements</p>
                              </button></td>
                            <td>
                              <p class="KDC_Text__warning__RP53a">Friend[]</p>
                            </td>
                            <td>
                              <p>친구 리스트</p>
                            </td>
                            <td>X</td>
                          </tr>
                          <tr class="PropertyTable_depth1__1hp_q PropertyTable_hide__3wesD">
                            <td class="word-break-all">
                              <p class="KDC_Text__desc_assist__35Aaw">id</p>
                            </td>
                            <td>
                              <p class="KDC_Text__warning__RP53a">long</p>
                            </td>
                            <td>
                              <p>회원번호</p>
                            </td>
                            <td>O</td>
                          </tr>
                          <tr class="PropertyTable_depth1__1hp_q PropertyTable_hide__3wesD">
                            <td class="word-break-all">
                              <p class="KDC_Text__desc_assist__35Aaw">profile_nickname</p>
                            </td>
                            <td>
                              <p class="KDC_Text__warning__RP53a">string</p>
                            </td>
                            <td>
                              <p>사용자 프로필 닉네임</p>
                            </td>
                            <td>X</td>
                          </tr>
                          <tr class="PropertyTable_depth1__1hp_q PropertyTable_hide__3wesD">
                            <td class="word-break-all">
                              <p class="KDC_Text__desc_assist__35Aaw">profile_thumbnail_image</p>
                            </td>
                            <td>
                              <p class="KDC_Text__warning__RP53a">string</p>
                            </td>
                            <td>
                              <p>사용자 프로필 썸네일(Thumbnail) 이미지</p>
                            </td>
                            <td>X</td>
                          </tr>
                          <tr class="PropertyTable_depth1__1hp_q PropertyTable_hide__3wesD">
                            <td class="word-break-all">
                              <p class="KDC_Text__desc_assist__35Aaw">uuid</p>
                            </td>
                            <td>
                              <p class="KDC_Text__warning__RP53a">string</p>
                            </td>
                            <td>
                              <p>사용자 고유 ID, 카카오톡 메시지 전송 시 사용</p>
                            </td>
                            <td>O</td>
                          </tr>
                          <tr class="PropertyTable_depth1__1hp_q PropertyTable_hide__3wesD">
                            <td class="word-break-all">
                              <p class="KDC_Text__desc_assist__35Aaw">favorite</p>
                            </td>
                            <td>
                              <p class="KDC_Text__warning__RP53a">boolean</p>
                            </td>
                            <td>
                              <p>카카오톡 즐겨찾기 여부</p>
                            </td>
                            <td>X</td>
                          </tr>
                          <tr class="PropertyTable_depth1__1hp_q PropertyTable_hide__3wesD">
                            <td class="word-break-all">
                              <p class="KDC_Text__desc_assist__35Aaw">allowed_msg</p>
                            </td>
                            <td>
                              <p class="KDC_Text__warning__RP53a">boolean</p>
                            </td>
                            <td>
                              <p>메시지 차단 여부, true(메시지 수신 허용) 또는 false(메시지 차단)</p>
                            </td>
                            <td>X</td>
                          </tr>
                          <tr class="PropertyTable_depth0__kkd4t">
                            <td class="word-break-all">
                              <p class="KDC_Text__desc_assist__35Aaw">total_count</p>
                            </td>
                            <td>
                              <p class="KDC_Text__warning__RP53a">integer</p>
                            </td>
                            <td>
                              <p>정보를 받을 수 있는 전체 친구 수</p>
                            </td>
                            <td>O</td>
                          </tr>
                          <tr class="PropertyTable_depth0__kkd4t">
                            <td class="word-break-all">
                              <p class="KDC_Text__desc_assist__35Aaw">favorite_count</p>
                            </td>
                            <td>
                              <p class="KDC_Text__warning__RP53a">integer</p>
                            </td>
                            <td>
                              <p>친구 리스트 중 즐겨찾기 친구 수</p>
                            </td>
                            <td>X</td>
                          </tr>
                          <tr class="PropertyTable_depth0__kkd4t">
                            <td class="word-break-all">
                              <p class="KDC_Text__desc_assist__35Aaw">before_url</p>
                            </td>
                            <td>
                              <p class="KDC_Text__warning__RP53a">string</p>
                            </td>
                            <td>
                              <p>이전 페이지 URL, 이전 페이지가 없을 경우 null</p>
                            </td>
                            <td>X</td>
                          </tr>
                          <tr class="PropertyTable_depth0__kkd4t">
                            <td class="word-break-all">
                              <p class="KDC_Text__desc_assist__35Aaw">after_url</p>
                            </td>
                            <td>
                              <p class="KDC_Text__warning__RP53a">string</p>
                            </td>
                            <td>
                              <p>다음 페이지 URL, 이전 페이지가 없을 경우 null</p>
                            </td>
                            <td>X</td>
                          </tr>
                          <tr class="PropertyTable_depth0__kkd4t">
                            <td class="word-break-all">
                              <p class="KDC_Text__desc_assist__35Aaw">result_id</p>
                            </td>
                            <td>
                              <p class="KDC_Text__warning__RP53a">string</p>
                            </td>
                            <td>
                              <p>친구 목록 요청 결과 ID</p>
                            </td>
                            <td>X</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="KDC_SubSection__root__3d58Z">
                    <h4 class="KDC_SubSection__title__2A5MO">응답 예제</h4>
                    <div class="KDC_SubSection__body__3Zxdj">
                      <div class="APISpec_ResponseExample_responses__1niYY">
                        <div class="APISpec_ResponseExample_codes__31i9g"><button type="button" class="APISpec_ResponseExample_item__3CDrn ResponseCodeButton_root__2tEvs ResponseCodeButton_selected__h48V4"><span class="Circle_circle__3NBBt Circle_green__3Uaai ResponseCodeButton_circle__q1t6z"></span>
                            <p class="KDC_Text__desc_assist__35Aaw ResponseCodeButton_text__1HuV8">200</p>
                          </button><button type="button" class="APISpec_ResponseExample_item__3CDrn ResponseCodeButton_root__2tEvs"><span class="Circle_circle__3NBBt Circle_red__3W20F ResponseCodeButton_circle__q1t6z"></span>
                            <p class="KDC_Text__desc_assist__35Aaw ResponseCodeButton_text__1HuV8">400</p>
                          </button></div>
                        <div class="APISpec_ResponseExample_response__31Sn4">
                          <div style="display:block">
                            <div class="KDC_Tabs__root__1j2i8">
                              <div class="KDC_Tab__root__3M6ek tab tab_selected type_other">
                                <div class="KDC_Tab__text__3HvSh">normal</div>
                              </div>
                            </div>
                            <div class="mt-12"></div>
                          </div>
                          <div style="display:none">
                            <div class="KDC_Tabs__root__1j2i8">
                              <div class="KDC_Tab__root__3M6ek tab tab_selected type_other">
                                <div class="KDC_Tab__text__3HvSh">NotExistTalkUser</div>
                              </div>
                            </div>
                            <div class="mt-12"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="kakaoFoot" class="KDC_Footer__root__236pa KDC_Body__hidden_footer__2NZGb" role="contentinfo">
          <div class="inner_foot">
            <h2 class="screen_out">서비스 이용정보</h2>
            <div class="area_familysite">
              <div class="opt_relation">
                <div class="screen_out">Family Site
                  <!-- -->선택상자
                </div><span class="screen_out">선택내용
                  <!-- --> :
                </span><strong class="tit_opt"><a href="" class="link_tit" aria-haspopup="true" aria-expanded="false">Family Site<span class="kdc_ico_developers">열기</span></a></strong>
              </div>
              <div class="box_site"><a href="https://kakaobusiness-policy.kakao.com/SERVICE/" class="link_site" target="_blank">카카오비즈니스 이용약관</a><span class="txt_bar">|</span><a href="/terms/latest/site-terms" class="link_site">서비스 약관</a><span class="txt_bar">|</span><a href="/terms/latest/site-policies" class="link_site">운영 정책</a><span class="txt_bar">|</span><a href="/terms/latest/site-policies#quota" class="link_site">쿼터</a><span class="txt_bar">|</span><a href="https://business.kakao.com/policy/privacy/" class="link_site link_privacy" target="_blank"><strong>개인정보 처리방침</strong></a></div>
            </div>
            <div class="area_copyright"><small class="txt_copy">©
                <!-- --> <a href="https://www.kakaocorp.com" class="link_kako">Kakao Corp.</a>
              </small></div>
          </div>
        </div>
        <div id="kakaoFoot" class="KDC_Footer__root__236pa" role="contentinfo">
          <div class="inner_foot">
            <h2 class="screen_out">서비스 이용정보</h2>
            <div class="area_familysite">
              <div class="opt_relation">
                <div class="screen_out">Family Site
                  <!-- -->선택상자
                </div><span class="screen_out">선택내용
                  <!-- --> :
                </span><strong class="tit_opt"><a href="" class="link_tit" aria-haspopup="true" aria-expanded="false">Family Site<span class="kdc_ico_developers">열기</span></a></strong>
              </div>
              <div class="box_site"><a href="https://kakaobusiness-policy.kakao.com/SERVICE/" class="link_site" target="_blank">카카오비즈니스 이용약관</a><span class="txt_bar">|</span><a href="/terms/latest/site-terms" class="link_site">서비스 약관</a><span class="txt_bar">|</span><a href="/terms/latest/site-policies" class="link_site">운영 정책</a><span class="txt_bar">|</span><a href="/terms/latest/site-policies#quota" class="link_site">쿼터</a><span class="txt_bar">|</span><a href="https://business.kakao.com/policy/privacy/" class="link_site link_privacy" target="_blank"><strong>개인정보 처리방침</strong></a></div>
            </div>
            <div class="area_copyright"><small class="txt_copy">©
                <!-- --> <a href="https://www.kakaocorp.com" class="link_kako">Kakao Corp.</a>
              </small></div>
          </div>
        </div>
      </div>
    </form>
  </div>
  <div id="modal-root"></div>
  <script id="__NEXT_DATA__" type="application/json">
    {
      "props": {
        "pageProps": {
          "user": {
            "id": 319318,
            "email": "ljangwon@gmail.com",
            "token": "e7ca77b1d05bdba51c1ac8a1fe6fa210f143772e9dfefd10b31d775079e02e42"
          }
        },
        "currentLanguage": "ko",
        "__N_SSP": true
      },
      "page": "/[api_type]/[method]/[api_id]",
      "query": {
        "api_type": "open",
        "method": "get",
        "api_id": "v1-api-talk-friends"
      },
      "buildId": "LCOS8XXxG5BoXmT06DPg6",
      "assetPrefix": "/tool/rest-api",
      "runtimeConfig": {
        "phase": "release"
      },
      "isFallback": false,
      "gssp": true,
      "customServer": true,
      "appGip": true,
      "scriptLoader": []
    }
  </script>
</body>

</html>