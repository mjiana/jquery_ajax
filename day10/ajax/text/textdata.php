<?
	// header함수를 사용하여 Content-Type을 "text/text"로 설정한 PHP파일은 출력 결과물이 텍스트 파일로 인식된다.
	// 출력 결과물이 텍스트문서라는 점 외에는 PHP가 갖는 웹 프로그래밍적 부분이 그대로 유지된다.
	header("Content-Type: text/text; charset=UTF-8");
	
	/** (1) 파라미터를 받는 것이 가능하다. */
	$keyword = $_GET["keyword"];
	
	/** (2) 이 부분에 PHP의 모든 문법적 처리나 DATABASE의 연동 처리가 가능하다. */
	
	/** (3) 결과를 출력한다. */
	echo(keyword);
?>