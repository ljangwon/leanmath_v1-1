<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kakao Message</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/datatables.css' ?>">

  <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-3.3.1.js' ?>"></script>
  <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.bundle.min.js' ?>"></script>
  <script type="text/javascript" src="<?php echo base_url() . 'assets/js/datatables.min.js' ?>"></script>
</head>

<body>
  <div class="container">
    <!-- row1 title and message begin -->

    <div class="row" id='row1'>
      <div class="col-xs-12">
        <h1><a style=text-decoration-line:none href='<?php echo site_url() ?>'> L-MATH </a>
          <small>/ Kakao Message</small>
        </h1>
      </div>
    </div>

    <div class="row" id='row2'>
      <div id="login_message"></div>
      <ul>
        <li id="login">
          <a href="javascript:void(0)">
            <span>카카오 로그인 </span>
          </a>
        </li>


        <li id="logout">
          <a href="javascript:void(0)">
            <span>카카오 로그아웃</span>
          </a>
        </li>

        <li id="getFriends">
          <a href="javascript:void(0)">
            <span>친구목록 가져오기</span>
          </a>
        </li>

        <li>
          <a id="sendMessageToFriend" href="javascript:void(0)">
            <span>친구에게 메시지 보내기</span>
          </a>
          <input type='text' id='uuid' size='50'> </input>
        </li>

        <li id="sendMessage">
          <a href="javascript:void(0)">
            <span>카톡 공유하기</span>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <script src="https://developers.kakao.com/sdk/js/kakao.js"> </script>

  <!--
    <script src="<?php echo base_url() . '/assets/js/kakaoJavaScriptAPIwrapper.js' ?>"></script>
    -->

  <script type="text/javascript">
    $(document).ready(function() {
      //카카오로그인
      var JAVASCRIPT_KEY = '8cd04fcef65027d7c0f52c968b801e7a';
      let AccessToken = '';
      Kakao.init(JAVASCRIPT_KEY);
      console.log(Kakao.isInitialized());

      function kakaoLogin() {
        Kakao.Auth.login({
          scope: 'talk_message,friends',
          success: function(response) {
            Kakao.API.request({
              url: '/v2/user/me',
              success: function(response) {

                console.log(response);
                $("#login_message").html("<span> Login Success: " + Kakao.Auth.getAccessToken() + "</span>");
                AccessToken = Kakao.Auth.getAccessToken();
              },
              fail: function(error) {
                console.log(error);
                $("#login_message").html("<span> Login Fail </span>");
              },
            })
          },
          fail: function(error) {
            console.log(error)
              ("#login_message").html("<span> Login Fail </span>");
          },
        })
      }
      //카카오로그아웃
      function kakaoLogout() {
        if (Kakao.Auth.getAccessToken()) {
          Kakao.API.request({
            url: '/v1/user/unlink',
            success: function(response) {
              console.log(response);
              $("#login_message").html("<span> Logout Success </span>");
              AccessToken = '';
            },
            fail: function(error) {
              console.log(error);
              $("#login_message").html("<span> Logout Fail </span>");
            },
          })
          Kakao.Auth.setAccessToken(undefined)
        }
      }

      function getFriends() {
        if (!Kakao.Auth.getAccessToken()) {
          kakaoLogin();
        }

        if (Kakao.Auth.getAccessToken()) {
          Kakao.Auth.setAccessToken(Kakao.Auth.getAccessToken());

          Kakao.API.request({
            url: '/v1/api/talk/friends',
            success: function(response) {
              console.log(response.elements);
              console.log('id:' + response.elements[0].id);
              console.log('uuid:' + response.elements[0].uuid);
              console.log('allowed_msg:' + response.elements[0].allowed_msg);
              console.log('total_count:' + response.total_count);
              console.log('before_url:' + response.before_url);
              console.log('after_url:' + response.after_url);
              console.log('favorite_count:' + response.favorite_count);
            },
            fail: function(error) {
              console.log(error);
            }
          });
        } else {
          console.log("accessToken이 없음, 로그인 하세요.");
          console.log("accessToken: " + Kakao.Auth.getAccessToken());
        }
      }

      function sendMessage() {
        Kakao.Link.sendDefault({
          objectType: 'feed',
          content: {
            title: '딸기 치즈 케익',
            description: '#케익 #딸기 #삼평동 #카페 #분위기 #소개팅',
            imageUrl: 'http://k.kakaocdn.net/dn/Q2iNx/btqgeRgV54P/VLdBs9cvyn8BJXB3o7N8UK/kakaolink40_original.png',
            link: {
              mobileWebUrl: 'https://developers.kakao.com',
              webUrl: 'https://developers.kakao.com',
            },
          },
          social: {
            likeCount: 286,
            commentCount: 45,
            sharedCount: 845,
          },
          buttons: [{
              title: '웹으로 보기',
              link: {
                mobileWebUrl: 'https://developers.kakao.com',
                webUrl: 'https://developers.kakao.com',
              },
            },
            {
              title: '앱으로 보기',
              link: {
                mobileWebUrl: 'https://developers.kakao.com',
                webUrl: 'https://developers.kakao.com',
              },
            },
          ],
        })
      }

      function sendMessageToFriend() {
        let uuid = $('#uuid').val()
        friendSend(uuid);
        console.log('uuid:' + uuid + '에게 메시지를 보냈습니다.');
      }

      function friendSend(receiver_uuids) {
        Kakao.API.request({
          url: '/v1/api/talk/friends/message/default/send',
          data: {
            receiver_uuids: [receiver_uuids],
            template_object: {
              object_type: 'feed',
              content: {
                title: '카카오톡 링크 4.0',
                description: '디폴트 템플릿 FEED',
                image_url: 'http://mud-kage.kakao.co.kr/dn/Q2iNx/btqgeRgV54P/VLdBs9cvyn8BJXB3o7N8UK/kakaolink40_original.png',
                link: {
                  web_url: 'https://developers.kakao.com',
                  mobile_web_url: 'https://developers.kakao.com',
                },
              },
              social: {
                like_count: 100,
                comment_count: 200,
              },
              button_title: '바로 확인',
            },
          },
          success: function(response) {
            console.log(response);
          },
          fail: function(error) {
            console.log(error);
          },
        });
      }

      //click event
      $('#login').on('click', function() {
        kakaoLogin();
      });

      $('#logout').on('click', function() {
        kakaoLogout();
      });

      $('#getFriends').on('click', function() {
        getFriends();
      });

      $('#sendMessage').on('click', function() {
        sendMessage();
      });

      $('#sendMessageToFriend').on('click', function() {
        sendMessageToFriend();
      });

    });
  </script>

</body>

</html>