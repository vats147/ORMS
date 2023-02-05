<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
    
     <%@ page import="java.util.*" %>
      <%@ page import="java.io.*" %>
      <%@ page import="java.lang.Object" %>
          <%@ page import="java.sql.*" %>
      <%@ page import="java.sql.Connection" %>
        <%@ page import="java.sql.DriverManager" %>
          <%@ page import="java.sql.SQLException" %> 
                   
    <%-- Include Database Configuration File --%>
    <%@  include file="dbconfig.jsp" %>
    
<%

String Pagename=request.getParameter("Pagename");

String Action=request.getParameter("Action");


try{
if(Pagename!=null)
{
	System.out.println("Request Recived");
	System.out.println(Pagename);
	if(Pagename=="promocode.jsp")
			{
	System.out.println(Pagename);
		
				if(Action=="read")
				{
					System.out.println("Read Action");
					out.println("HEY");
					//out.println("<table> <tr><td>Alfreds Futterkiste</td><td>Maria Anders</td> <td>Germany</td> </tr> </table>  ");
					
				}
			}
}	

}
catch(Exception e)
{
	System.out.println(e);
}

	

	
%>