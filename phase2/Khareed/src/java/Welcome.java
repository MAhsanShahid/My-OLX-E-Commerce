/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

/**
 *
 * @author Farhan
 */
public class Welcome extends HttpServlet {

    /**
     * Processes requests for both HTTP <code>GET</code> and <code>POST</code>
     * methods.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    

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
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
       PrintWriter out = response.getWriter();
		
		String n=request.getParameter("username");
                HttpSession session=request.getSession();  
                session.setAttribute("name",n); 
		out.print("<!DOCTYPE html>\n" +
"<html>\n" +
"<head>\n" +
"<style>\n" +
"#header{\n" +
"background-color:white;\n" +
"\n" +
"}\n" +
"\n" +
"#section {\n" +
"}\n" +
"#footer{\n" +
"background-color:black\n" +
"}\n" +
"\n" +
"\n" +
".style1 {color: #FFFFFF}\n" +
"\n" +
"\n" +
"ul#a{\n" +
"    float: left;\n" +
"    width: 100%;\n" +
"    padding:0;\n" +
"    margin: 0;\n" +
"    list-style-type: none;\n" +
"}\n" +
"\n" +
"a#h{\n" +
"    float: left;\n" +
"    width: 10em;\n" +
"    text-decoration: none;\n" +
"    color: white;\n" +
"    background-color: silver;\n" +
"    padding: 0.2em 0.6em;\n" +
"    border-right: 1px solid white;\n" +
"}\n" +
"\n" +
"a#h:hover {\n" +
"    background-color: brown;\n" +
"}\n" +
"\n" +
"li {\n" +
"    display: inline;\n" +
"}\n" +
"\n" +
".cat{\n" +
"float: left;\n" +
"margin: 20px;\n" +
"padding:100px;\n" +
"width: 200px;\n" +
"height: 200px;\n" +
"border: 1px solid black;\n" +
"color:white;\n" +
"} \n" +
"\n" +
"\n" +
"</style>\n" +
"<title>Experience the lifestyle</title>\n" +
"</head>\n" +
"\n" +
"<body background=\"colorful-shopping-bags.jpg\" style=background-size:100%>\n" +
"\n" +
"<div id=\"header\">\n" +
"  <ul id='a'>\n" +
"  <li><div align=\"left\"><a href=\"loggedin.html\" target=\"_self\"><img src=\"Untitled.png\" width=\"218\" height=\"136\" /></a></li>\n" +
"  \n" +
"		<li><a id='h' style=\"color:BLACK;text-decoration:none\" href=\"loggedin.html\" target=\"_self\">HOME</a></li>\n" +
"      <li><a id='h' style=\"color:BLACK;text-decoration:none\" href=\"products.html\" target=\"_self\">PRODUCTS</a></li>\n" +
"      <li><a id='h' style=\"color:BLACK;text-decoration:none\" href=\"search.html\" target=\"_self\">SEARCH</a></li>\n" +
"      <li><a id='h' style=\"color:BLACK;text-decoration:none\" href=\"add.html\" target=\"_self\">POST AD</a></li>\n" +
"      <li><a id='h' style=\"color:BLACK;text-decoration:none\" href=\"loggedin.html\" target=\"_self\">CART</a></li>\n" +                        
"      <li><a id='h' style=\"color:BLACK;text-decoration:none\" href=\"contct.html\" target=\"_self\">CONTACT US</a></li>\n" +
"      <li><a id='h' style=\"color:BLACK;text-decoration:none\" href=\"logoutservlet\" target=\"_self\">LOGOUT</a></li>\n" +
"	  </ul>\n" +
"  </div>\n" +
"</div>\n" +
"<br><br>\n" +
"<h1 style=color:brown ><br><br><span style=\"padding-right:500px;\"></span><marquee behavior=alternate >Welcome "+n+" Select Your Category</marquee></h1>\n" +
"<div id=\"section\">\n" +
"<div class=\"cat\" >\n" +
"	<a href=\"mobile.html\" target=\"_self\"><img src=\"i6.jpg\" style=\"width:100%;height:100%;border:0\"/></a>	</div>\n" +
"	\n" +
"	<div class=\"cat\">\n" +
"	\n" +
"	<a href=\"vehicle.html\" target=\"_self\"><img src=\"v.jpg\" style=\"width:100%;height:100%;border:0\"/></a>	\n" +
"	</div>\n" +
"	\n" +
"	\n" +
"	<div class=\"cat\">\n" +
"	\n" +
"	<a href=\"electronic.html\" target=\"_self\"><img src=\"el.jpg\" style=\"width:100%;height:100%;border:0\"/></a>	\n" +
"	</div>\n" +
"\n" +
"</div>\n" +
"\n" +
"<br>\n" +
"\n" +
"<span style=\"padding-right:140px;\"></span><strong><a style=\"font-size:140%\"> Mobiles/Laptops </a> </strong>\n" +
"\n" +
"<span style=\"padding-right:400px;\"></span><strong><a style=\"font-size:140%\">  Vehicles </a> </strong>\n" +
"\n" +
"<span style=\"padding-right:300px;\"></span><strong><a style=\"font-size:140%\"> Electronics </a> </strong>\n" +
"\n" +
 "<div id=\"section\">\n" +
"<div class=\"cat\" >\n" +
"	<a href=\"clothing.html\" target=\"_self\"><img src=\"clo.jpg\" style=\"width:100%;height:100%;border:0\"/></a>	</div>\n" +
"	\n" +
"	<div class=\"cat\">\n" +
"	\n" +
"	<a href=\"animal.html\" target=\"_self\"><img src=\"an.jpg\" style=\"width:100%;height:100%;border:0\"/></a>	\n" +
"	</div>\n" +
"	\n" +
"	\n" +
"	<div class=\"cat\">\n" +
"	\n" +
"	<a href=\"accessories.html\" target=\"_self\"><img src=\"ass.jpg\" style=\"width:100%;height:100%;border:0\"/></a>	\n" +
"	</div>\n" +
"\n" +
"</div>\n" +
"\n" +
"<br>\n" +
"\n" +
"<span style=\"padding-right:140px;\"></span><strong><a style=\"font-size:140%\"> Clothes </a> </strong>\n" +
"\n" +
"<span style=\"padding-right:400px;\"></span><strong><a style=\"font-size:140%\">  Animals </a> </strong>\n" +
"\n" +
"<span style=\"padding-right:300px;\"></span><strong><a style=\"font-size:140%\"> Other Accessories </a> </strong>\n" +
"\n" +                       
"<br><br>\n" +
"<br><br>\n" +
"<br><br>\n" +
"<br><br>\n" +
"\n" +
"	<div id=\"footer\">\n" +
"	\n" +
"	<br><span style=\"padding-right:500px\"></span><span class=\"style1\"><strong>New to this website? </strong><br> \n" +
"	<span style=\"padding-right:500px\"></span>Subscribe to our newsletter to receive special offers and latest news..</span><br>\n" +
"	<span style=\"padding-right:500px\"></span><input type=\"text\"/>\n" +
"	<input value=\"Subscribe\" type=\"Submit\"/>\n" +
"	\n" +
"	<br>\n" +
"	<span class=\"style1\"><br>\n" +
"	<br>\n" +
"	<span style=\"padding-right:250px\"></span>Customer Service\n" +
"	<span style=\"padding-right:150px\"></span>ABOUT US\n" +
"	<span style=\"padding-right:135px\"></span>International Sale\n" +
"	<span style=\"padding-right:90px\"></span>JOIN US ON <br> \n" +
"	</span><br>\n" +
"	<span style=\"padding-right:250px\"></span><a style=color:WHITE href=\"www.google.com\" target=\"_self\">Contact Us</a><span style=\"padding-right:150px\"></span><a style=color:WHITE href=\"www.google.com\" target=\"_self\">Terms & Conditions</a><span style=\"padding-right:135px\"></span>\n" +
"	<a style=color:WHITE href=\"www.google.com\" target=\"_self\">America</a><span style=\"padding-right:150px\"></span><a href=\"https://www.facebook.com\"><img src=\"fb.jpg\" style=\"width:20px;height:20px;border:0\"></a><a href=\"www.twitter.com\"><img src=\"tw.jpg\" style=\"width:20px;height:20px;border:0\"></a><a href=\"www.google.com\"><img src=\"gg.png\" style=\"width:20px;height:20px;border:0\"></a><br>\n" +
"	<span style=\"padding-right:250px\"></span><a style=color:WHITE href=\"www.google.com\" target=\"_self\">How To Shop</a><span style=\"padding-right:132px\"></span><a style=color:WHITE href=\"www.google.com\" target=\"_self\">Privacy Agreement</a>\n" +
"	<span style=\"padding-right:147px\"></span><a style=color:WHITE href=\"www.google.com\" target=\"_self\">England </a><br><span style=\"padding-right:743px\"></span><a style=color:WHITE href=\"www.google.com\" target=\"_self\">India</a><br><span style=\"padding-right:743px\"></span><a style=color:WHITE href=\"www.google.com\" target=\"_self\">China</a><br><br>\n" +
"	</div> \n" +
"\n" +
"\n" +
"\n" +
"\n" +
"	\n" +
"\n" +
"</body> \n" +
"</html>\n" +
"");
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
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        
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
