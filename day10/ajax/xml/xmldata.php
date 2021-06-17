<?
	// 페이지 지시자에서 contentType을 "text/xml"로 설정한 PHP파일은 출력 결과물이 XML 파일로 인식된다.
	// 출력 결과물이 텍스트문서라는 점 외에는 PHP가 갖는 웹 프로그래밍적 성격은 그대로 유지된다.
	header("Content-Type: text/xml; charset=UTF-8");

	/** (1) 파라미터를 받는 것이 가능하다. */
	$keyword = $_GET["keyword"];

	/**
	 *
	 * (2) 이 부분에 PHP의 모든 문법적 처리나 DATABASE의 연동 처리가 가능하다.
	 *
	 */

	/** (3) 결과를 출력하기 위해서는 HTML 처리와 같은 형태로 XML구조를 출력해 준다. */
	/** 단, PHP의 경우 XML선언문과 PHP스크립트 블록이 같은 형태이므로, XML의 선언문을 다음과 같이 PHP에서 출력해 주어야 한다. */
	echo("<"."?xml version=\"1.0\" encoding=\"utf-8\" ?".">");
?>
<school>
<?
	/** PHP의 IF분기 */
	if ($keyword == "web") {
?>
	<subject>
		<title>Javascript+jQuery+Ajax</title>
		<time>매주 월/수/금 오후 7시30분~10시20분</time>
		<teacher>주영아</teacher>
	</subject>
	<subject>
		<title>HTML5+CSS3 기반의 반응형 웹</title>
		<time>매주 화/목 오후 7시30분~10시20분</time>
		<teacher>주영아</teacher>
	</subject>
<?
	/** PHP의 ELSE IF분기 */
	} else if ($keyword == "app") {
?>
	<subject>
		<title>Java 입문에서 활용까지</title>
		<time>매주 화/목 오후 7시30분~10시20분</time>
		<teacher>이광호</teacher>
	</subject>
	<subject>
		<title>안드로이드 앱(APP)개발-실전(실무활용)</title>
		<time>매주 월/수/금 오후 7시30분~10시20분</time>
		<teacher>이광호</teacher>
	</subject>
<?
	/** PHP의 IF분기 끝 */
	}
?>
</school>