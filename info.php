<?
    2. 테마 경로 상수
    테마 작업을 위해 필요한 테마 경로 상수입니다. 기본으로 제공되는 상수는 아래와 같습니다.
    
    G5_THEME_PATH : 사용 중인 테마 폴더의 절대 경로입니다. 사용 중인 테마가 basic 이라면 /home/example/www/theme/basic 입니다.
    
    G5_THEME_URL : 사용 중인 테마의 웹접근 절대 경로입니다. 사용 중인 테마가 basic 이라면 http://example.com/theme/basic 의 경로를 가집니다. 실제로 사용자가 입력하는 경우는 없을 것이며 G5_THEME_JS_URL 등의 상수를 선언하기 위해 사용됩니다.
    
    G5_THEME_MOBILE_PATH : 사용 중인 테마의 모바일 폴더 절대 경로입니다. /home/example/www/theme/basic/mobile 과 같습니다.
    
    G5_THEME_LIB_PATH : 테마에 별도 라이브러리 파일을 포함시켜 사용하는 경우를 위한 경로 상수입니다. /home/example/www/theme/basic/lib 와 같습니다.
    
    G5_THEME_CSS_URL : 현재 사용 중인 테마의 CSS 폴더 경로입니다. http://example.com/theme/basic/css 와 같습니다.
    
    G5_THEME_IMG_URL : 현재 사용 중인 테마의 img 폴더 경로입니다. http://example.com/theme/basic/img 와 같습니다.
    
    G5_THEME_JS_URL : 현재 사용 중인 테마의 js 폴더 경로입니다. http://example.com/theme/basic/js 와 같습니다. 
    기본 제공되는 경로 상수는 위와 같으며 테마에 추가적으로 필요한 상수가 있다면 테마의 theme.config.php 파일에 선언해서 사용하시면 됩니다.
    
    3. 파일용도
    _common.php : 그누보드5 루트 common.php 파일을 include 합니다. 일반적으로 php 파일 등의 상단에 include_once('./_common.php'); 와 같이 입력해서 사용합니다.
    
    group.php : bbs/group.php 파일과 동일합니다. 그룹 최신글을 노출할 때 사용합니다. 테마에 포함되어 있으면 bbs/group.php 대신 사용됩니다.
    
    head.php : 테마의 헤더 부분을 담당하는 파일입니다. 필수 파일입니다.
    
    head.sub.php : 그누보드5 루트의 head.sub.php 파일과 동일한 역할을 합니다. 테마에 이 파일이 포함되어 있으면 루트의 head.sub.php 파일 대신 사용됩니다. 테마에서 그누보드5 기본 css파일, jQuery 등을 사용하지 않고 별도의 파일을 사용하시려면 이 파일을 수정해 css 파일 등의 경로를 지정해주시면 됩니다. 이 파일은 필수는 아니지만 보통 css 파일의 경로를 테마로 지정해야 하고 그누보드5에서 사용되는 팝업에는 head.
    sub.php 파일을 include 하기 때문에 테마에 맞게 디자인을 변경하시려면 사용하셔야 합니다.
    
    index.php : 사이트 초기화면 파일입니다. 필수 파일입니다.
    
    readme.txt : 테마 이름, 버전, 라이선스 등의 정보를 담고 있는 파일입니다. 관리자 테마설정에서 상세보기 내용이 담겨있습니다.
    
    screenshot.png : 테마의 스크린샷입니다. 관리자 테마설정 페이지에서 설치된 테마의 이미지로 사용됩니다. png 파일만 사용이 가능합니다.
    
    tail.php : 테마의 푸터 부분을 담당하는 파일입니다. 필수 파일입니다.
    
    tail.sub.php : head.sub.php 파일과 마찬가지로 필수 파일은 아닙니다. 푸터 부분에 테마만의 코드 넣는 등의 용도로 사용하실 수 있습니다.
    
    theme.config.php : 테마의 기본 설정을 담고 있는 파일입니다. 테마의 지원기기 설정 등의 설정을 할 수 있습니다. 이 파일은 common.php 파일에서 자동 로드됩니다.
    
    그외 css, img, mobile, skin 등의 폴더 역할은 그누보드5 루트에 있는 해당 폴더의 역할과 동일합니다.

    4. 디렉토리

    adm/              : 관리자 페이지
    bbs/               : 그누의 기본 프로그램
    cheditor4/        : 웹 편집기 (cheditor, http://www.chdcode.com)
    extend/            : 그누를 설치하면 생기는 디렉토리로 이곳의 모든 파일은 common.php에서 읽습니다. 이곳에 파일을 넣으면 그누에서 항상 쓸 수 있어서 편하지만 그만큼 사이트의 속도를 떨어뜨리게 됩니다.
    img/                : 그누의 기본 이미지
    install/             : 설치 프로그램 디렉토리, 설치후에는 install.bak으로 바뀜
    js/                   : 자바스크립트 디렉토리
    lib/                  : php 라이브러리 디렉토리
    skin/                : 그누보드 스킨 디렉토리

    skin/board/       : 게시판 스킨 디렉토리 (게시판 관리화면에서 지정)
    skin/connect/    : 현재 접속자수 스킨 디렉토리 (관리자/기본환경설정에서 지정)
    skin/latest/        : 최신글 스킨 디렉토리 (해당 함수를 호출할 때 지정)
    skin/member/   : 회원정보 등록/수정 스킨 디렉토리 (관리자/기본환경설정에서 지정)
    skin/new/         : 최근 게시물 스킨 디렉토리 (관리자/기본환경설정에서 지정)
    skin/outlogin/    : 외부로그인 스킨 디렉토리 (해당 함수를 호출할 때 지정)
    skin/poll/          : 투표스킨 디렉토리 (해당 함수를 호출할 때 지정)
    skin/popular/     : 인기검색어 스킨 디렉토리 (해당 함수를 호출할 때 지정)
    skin/search/      : 검색 스킨 디렉토리 (관리자/기본환경설정에서 지정)
    skin/visit            : 방문자수 스킨 디렉토리 (해당 함수를 호출할 때 지정)
?>