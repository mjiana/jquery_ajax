<?
	header("Content-Type: text/xml; charset=UTF-8");
	
	$user_name = $_POST["user_name"];
	$comment = $_POST["comment"];
	
	$datetime = "2013-11-30 13:00:30";
	$num = 4;
	$result = true;
	$message = "덧글이 등록되었습니다.";
	
	echo("<"."?xml version='1.0' encoding='UTF-8'?".">\n");
?>
<comment>
	<result><?=$user_name?></result>
	<message><?=$message?></message>
	<item>
		<num><?=$num?></num>
		<writer><![CDATA[<?=$user_name?>]]></writer>
		<content><![CDATA[<?=$comment?>]]></content>
		<datetime><![CDATA[<?=$datetime?>]]></datetime>
	</item>
</comment>