<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="http://tsalt.dothome.co.kr">
    <meta property="og:image" content="./images/snsicon.png">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="아산병원">
    <meta property="og:locale" content="ko">
    <meta property="og:title" content="아산병원">
    <meta property="og:description" content="서울아산병원을 소개하는 글">

    <title>아산병원</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./images/favicon.ico">  <!-- 주소표시줄 : 파비콘(16*16) -->
    <link rel="apple-touch-icon" href="./images/asan.png">  <!-- 스마트폰 바탕화면 : 바로가기 아이콘(144*144)-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
</head>
<body>
    
    <div id="wrap">

        <?php include 'header.php'; ?>

         <section id="container">
            <div id="content" class="mainContent">
                <div class="main_noti">
                        <a href="#">한국산업의 고객만족도 8년 연속 1위</a>
                        <a href="#">한국산업의 고객만족도 8년 연속 2위</a>
                        <a href="#">한국산업의 고객만족도 8년 연속 3위</a>
                        <a href="#">한국산업의 고객만족도 8년 연속 4위</a>
                </div>
                <div id="step_area">
                    <div class="bwrap">
                        <div class="setArea">
                            <div class="service">
                              <a href="medicalList.php"><img src="images/img_main01.png" width="120" height="176" alt="진료과/센터로 의료진 찾기"></a>
                            </div>
                            <div class="serch_wrap">
                              <div class="ty01">
                                <a href="#"><img src="images/img_main02.png" width="110" height="39" alt="진료예약"></a>
                              </div> 
                              <div class="ty02">
                                <a href="#"><img src="images/img_main03.png" width="121" height="40" alt="예약조회"></a>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="bwrap">
                        <div class="setArea">
                            <div class="num">
                              <a href="#"><img src="images/img_main04.png" width="124" height="38" alt="전화번호안내"></a>
                            </div>
                            <div class="reserve">
                              <a href="#"><img src="images/img_main05.png" width="131" height="36" alt="건강진단예약"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'footer.php'; ?>

    </div>


    <div id="onlyMobile">
        <p>이 사이트는 768px 이하 화면에서만 보입니다.</p>
    </div>


    <script src="./js/asan.js"></script>
</body>
</html>