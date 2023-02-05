<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<%

// destory Session 
session.invalidate();

// Redirect to Login Page
response.sendRedirect("login.jsp");


%>