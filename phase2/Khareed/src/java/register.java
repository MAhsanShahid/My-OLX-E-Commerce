/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.*;
import java.util.*;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;


public class register extends HttpServlet {
    

    /**
     * Processes requests for both HTTP <code>GET</code> and <code>POST</code>
     * methods.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    public void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        try (PrintWriter out = response.getWriter()) {
            /* TODO output your page here. You may use following sample code. */
            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<title>Register Successful</title>");            
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>Successfully registered</h1>");
            out.println("<a href=loggedin.html>Click here to go to home page</a>");
            out.println("</body>");
            out.println("</html>");
        }
    }

    
    public void processNotRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        try (PrintWriter out = response.getWriter()) {
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
    }
    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    public void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        
        
        System.out.print("hello");
        PrintWriter p=response.getWriter();
        String fname=request.getParameter("fname");
        String lname=request.getParameter("lname");
        String uname=request.getParameter("username");
        String pw=request.getParameter("password");
        String email=request.getParameter("email");
        String gender=request.getParameter("r1");
        String date=request.getParameter("dob");
        System.out.println(fname);
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
            Logger.getLogger(register.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        

        
        
        
        
        
    }

    /**
     * Handles the HTTP <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    public void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        
        
        
        //processRequest(request, response);
        System.out.println("post running");
       doGet(request,response);
        
        
    }

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
