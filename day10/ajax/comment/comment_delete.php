<?
	header("Content-Type: text/xml; charset=UTF-8");
	$num = $_POST['num'];
	
	$result = false;
	$message = "덧글 삭제에 실패했습니다.";
	
	if ($num == 4) {
		$result = true;
		$message = "덧글이 삭제되었습니다.";
	}
	
	echo("<"."?xml version='1.0' encoding='UTF-8'?".">\n");
?>
<comment>
	<result><?=$result?></result>
	<message><?=$message?></message>
</comment>