<%@ page language="java" contentType="text/xml; charset=UTF-8" pageEncoding="UTF-8"%>
<%@ page trimDirectiveWhitespaces="true" import="java.sql.*"  %>
<%
	String user_name = request.getParameter("user_name");
	String user_password = request.getParameter("user_password");
	
	//드라이버 연결
	String driver = "org.gjt.mm.mysql.Driver",
	url = "jdbc:mysql://127.0.0.1:3306/jspdb?useUnicode=true&characterEncoding=EUCKR",
	user = "jspuser",
	password = "1234";

	Class.forName(driver);
	Connection con = DriverManager.getConnection(url,user,password);
	Statement stmt = con.createStatement();
	String sql = "select id,passwd from member "
					+"where id= '"+user_name+"' and passwd='"+user_password+"' ";
	ResultSet rs = stmt.executeQuery(sql);
	boolean result = false;
	String message = "";
	
	if (rs.next()) {
		result = true;
		message = "안녕하세요. " + user_name + "님!!!";
	}else{
		result = false;
		message = "아이디나 비밀번호가 잘못되었습니다.";
	}
	
	if (result) {
		// 로그인이 성공되었다면, 세션처리를 수행할 수 있습니다.
	}
	rs.close();
	stmt.close();
	con.close();
%>
<?xml version='1.0' encoding='UTF-8'?>
<login>
	<result><%=result%></result>
	<message><%=message%></message>
</login>