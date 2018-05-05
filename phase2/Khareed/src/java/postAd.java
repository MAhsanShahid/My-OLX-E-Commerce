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

public class postAd extends HttpServlet  {
    
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
            out.println("<title>Post Successful</title>");            
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>Successfully Posted</h1>");
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
            //out.println("<h1>Username already in use</h1>");
            out.println("<a href=add.html>Click here to go back</a>");
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
        
        
      //  System.out.print("hello");
        PrintWriter p=response.getWriter();
        String title=request.getParameter("tittle1");
        String model=request.getParameter("model");
        String company=request.getParameter("company");
        String color=request.getParameter("color");
        String price=request.getParameter("price");
        String condition=request.getParameter("condition");
        String city=request.getParameter("city");
        String phone=request.getParameter("phone_number");
         String category=request.getParameter("gender");
        //System.out.println(fname);
        try {
            data obj1 = new data();
          //  int ver=obj1.verify(uname);
           // if(ver==1)
           // {
            obj1.writeAd(title,model,company,color,price,condition,city,phone,category);
             processRequest(request, response);
            //}
          //  else
            //{
            //    processNotRequest(request,response);
           // }
            
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
