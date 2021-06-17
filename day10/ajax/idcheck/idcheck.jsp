<%@ page language="java" contentType="text/xml; charset=UTF-8" pageEncoding="UTF-8"%>
<%@ page trimDirectiveWhitespaces="true" import="java.sql.*" %>
<%
String user_id = request.getParameter("user_id");
//드라이버 연결
String driver = "org.gjt.mm.mysql.Driver",
url = "jdbc:mysql://127.0.0.1:3306/jspdb?useUnicode=true&characterEncoding=EUCKR",
user = "jspuser",
password = "1234";

Class.forName(driver);
Connection con = DriverManager.getConnection(url,user,password);
Statement stmt = con.createStatement();
String sql = "select id from member where id= '"+user_id+"' ";
ResultSet rs = stmt.executeQuery(sql);
boolean result = true;

//디비에 존재하면 false, 없으면 true
//LuckyBoy, LoverBoy
if (rs.next()) {
	result = false;
}
rs.close();
stmt.close();
con.close();
%>
<?xml version='1.0' encoding='UTF-8'?>
<id_check>
	<result><%=result%></result>
</id_check>