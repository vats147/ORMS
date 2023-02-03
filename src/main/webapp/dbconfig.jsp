<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>

    <%-- import Java Library --%>
    <%@ page import="java.sql.*" %>
    <%@ page import="java.sql.Connection" %>
    <%@ page import="java.sql.DriverManager" %>
    <%@ page import="java.sql.SQLException" %>

<%
try{
    String ConnectionUrl="jdbc:mysql://localhost:3306/";
    String DbName="rms";
    String DbUserName="root";
    String DbPassword="";
    Connection con=DriverManager.getConnection(ConnectionUrl+DbName,DbUserName,DbPassword);

    
    //Check Connection is Established or not
    if(con!=null)
    {
        System.out.println("Connection Successfully Established");
    }
    else
    {
        System.out.println("Connection Not Established");
    }
}
catch( Exception e)
{
    System.out.println("Error in Connection");
    System.out.println(e);
}
%>