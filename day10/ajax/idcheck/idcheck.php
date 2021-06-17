<?
	header("Content-Type: text/xml; charset=UTF-8");
	$user_id = $_GET['user_id'];
	
	// 데이터베이스 연동을 통한 아이디 중복검사 결과를 얻어오는 과정에 대한 가정
	$result = "false";
	if ($user_id == "jquery") {
		$result = "true";
	}
	
	echo("<"."?xml version='1.0' encoding='UTF-8'?".">\n");
?>
<id_check>
	<result><?=$result?></result>
</id_check>