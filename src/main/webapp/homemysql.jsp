<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
     <%@ page import="java.util.*" %>
      <%@ page import="java.io.*" %>
       <%@ page import="java.sql.*" %>
        <%@ page import="java.math.*" %>
         <%@ page import="jakarta.servlet.*" %>
          <%@ page import="java.security.MessageDigest" %>
          
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
	<h1>Login Successfully</h1>
	<%
		
	%>
	<a href="logout.jsp"> Logout</a>
</body>
</html>
<%
try{
	Connection connection = null;
	Statement statement = null;
	ResultSet resultSet = null;
			Connection con = null;	
			 System.out.println("Hello World");
			// Class.forName("com.mysql.jdbc.Driver");  
			 con=DriverManager.getConnection("jdbc:mysql://localhost:3306/rms","root","");
			 System.out.println("Hell");
			 if(con != null) {
				 System.out.println("success..!");
			 }
			 statement=con.createStatement();
			 String sql ="SELECT * FROM tblbranch";
			 resultSet = statement.executeQuery(sql);
			 while(resultSet.next()){
				 %>
				 <table>
				 <tr bgcolor="#DEB887">

				 <td><%=resultSet.getString("branchcode") %></td>
				 <td><%=resultSet.getString("name") %></td>
				 <td><%=resultSet.getString("address") %></td>
				 <td><%=resultSet.getString("city") %></td>
				 <td><%=resultSet.getString("pincode") %></td>
				  <td><%=resultSet.getString("status") %></td>
				 

				 </tr>
				 </table>
				 <% 
				 
			 }
			 
			 
}				

catch (Exception  e){
	System.out.println(e);
}
%>