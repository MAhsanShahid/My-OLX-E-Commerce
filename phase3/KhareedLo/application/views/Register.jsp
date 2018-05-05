



<%@page import="java.lang.System.*"%>
<%@page import="java.lang.System.*"%>
<%@page import="java.sql.SQLException"%>

<%@page import="java.io.*"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%!
    public void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
       PrintWriter out =  response.getWriter();
            /* TODO output your page here. You may use following sample code. */
            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<title>Register Successful</title>");            
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>Successfully registered</h1>");
            out.println("<a href=index.html>Click here to go to home page</a>");
            out.println("</body>");
            out.println("</html>");
        
    }

    
    public void processNotRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out =  response.getWriter();
            /* TODO output your page here. You may use following sample code. */
            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<title>Not Successful</title>");            
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>Username already in use</h1>");
            out.println("<a href=login.html>Click here to go to sign up page again</a>");
            out.println("</body>");
            out.println("</html>");
        
    }


%>





<%
     //PrintWriter p=response.getWriter();
        String fname=request.getParameter("fname");
        String lname=request.getParameter("lname");
        String uname=request.getParameter("username");
        String pw=request.getParameter("password");
        String email=request.getParameter("email");
        String gender=request.getParameter("r1");
        String date=request.getParameter("dob");
        
        try {
            data obj = new data();
            int ver=obj.verify(uname);
            if(ver==1)
            {
            obj.write(fname,lname,uname,pw,email,gender,date);
             processRequest(request, response);
            }
            else
            {
                processNotRequest(request,response);
            }
            
        } catch (ClassNotFoundException | SQLException ex) {
        }


%>
