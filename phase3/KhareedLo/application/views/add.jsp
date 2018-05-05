<%@page language="java" import="java.sql.*, java.util.*" %>


<%
	Connection con = null;
	try{
		Class.forName("com.mysql.jdbc.Driver");
		String url = "jdbc:mysql://127.0.0.1/olx";
    	con=DriverManager.getConnection(url,"root","root");
    }
    catch(Exception ex){
    	out.println(ex);
    }

    try{
	
		String tittle1 = request.getParameter("tittle1");
	    String model = request.getParameter("model");
		String company = request.getParameter("company");
		String color = request.getParameter("color");
		String price= request.getParameter("price");
		String condition = request.getParameter("condition");
		String phone_number = request.getParameter("phone_number");
		String name = request.getParameter("name");
		String password = request.getParameter("password");
		
		PreparedStatement ps = null;
		String sql = "insert into add1  values (?,?,?,?,?,?,?,?,?)";
		ps = con.prepareStatement(sql);
		ps.setString(1,tittle1);
		ps.setString(2,model);
		ps.setString(3,company);
		ps.setString(4,color);
		ps.setString(5,price);
		ps.setString(6,condition);
		ps.setString(7,phone_number);
		ps.setString(8,name);
		ps.setString(9,password);
		
		int s = ps.executeUpdate();
		if(s == 1){
			out.println("record entered..");
		}
		else{
			out.println("Record entered failed.");
		}
    }
    catch(Exception ex)
    {
    	
    	out.println(ex);


    }


%>