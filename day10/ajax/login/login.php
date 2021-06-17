<?
	header("Content-Type: text/xml; charset=UTF-8");
	$user_name = $_POST['user_name'];
	$user_password = $_POST['user_password'];
	
	// 아이디: jquery, 비밀번호: 123qwe 로 설정된 경우 로그인 허용이라고 가정
	// 결과를 얻어내기 위해서 PHP의 DB연동 처리가 필요합니다.
	$result = "true";
	$message = "안녕하세요. ".$user_name."님!!!";
	
	if ($result) {
		if ($user_name != "jquery") {
			$result = false;
			$message = "가입되지 않은 아이디 입니다.";
		}
	}
	
	if ($result) {
		if ($user_password != "123qwe") {
			$result = false;
			$message = "비밀번호가 잘못되었습니다.";
		}
	}
	
	if ($result) {
		// 로그인이 성공되었다면, 세션처리를 수행할 수 있습니다.
	}
	
	echo("<"."?xml version='1.0' encoding='UTF-8'?".">\n");
?>
<login>
	<result><?=$result?></result>
	<message><?=$message?></message>
</login>