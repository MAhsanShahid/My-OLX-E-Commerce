/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Farhan
 */
import java.sql.*;
import java.util.*;
public class data {
    
    
            Connection con;
        Statement s;
        Scanner sc = new Scanner(System.in);
        
        data() throws ClassNotFoundException, SQLException
        {
        
        Class.forName("com.mysql.jdbc.Driver");
        String url = "jdbc:mysql://127.0.0.1/khareedlo";
        
        con = DriverManager.getConnection(url,"root","123");
        s = con.createStatement();
        
        }
        
        int verify(String user) throws SQLException
        {
            String q="Select * from signup where usname='"+user+"';";
            ResultSet rs=s.executeQuery(q);
            if(rs.next())
            {
                return 0;
            }
            else
            {
                return 1;
            }
            
            
        }
        
        int verify1(String user) throws SQLException
        {
            String q="Select * from signup where usname='"+user+"';";
            ResultSet rs=s.executeQuery(q);
            if(!rs.next())
            {
                return 0;
            }
            else
            {
                return 1;
            }
            
            
        }
        
        int write(String fname,String lname,String usname,String psw,String email, String gender, String dob) throws SQLException
        {
            
            String q="Insert into signup values ('"+fname+"','"+lname+"' ,'"+usname+"', '"+psw+"' , '"+email+"' , '"+gender+"' , '"+dob+"')";
            int rs=s.executeUpdate(q);
            if(rs>0)
            {
                return 1;
            }
            else
            {
                return 0;
            }
        }
        
        int writeAd(String title,String model,String company,String color,String price, String condition, String city,String phone,String category) throws SQLException
        {
            
            String q="Insert into ad values ('"+title+"','"+model+"' ,'"+company+"', '"+color+"' , '"+price+"' , '"+condition+"' , '"+city+"', '"+phone+"', '"+category+"')";
            int rs=s.executeUpdate(q);
            if(rs>0)
            {
                return 1;
            }
            else
            {
                return 0;
            }
        }
        
        int read(String user,String pass) throws SQLException
        {
                String q="Select * from signup where usname='"+user+"';";
                ResultSet rs=s.executeQuery(q);
                if(rs.next())
                {
                    if(rs.getString("usname").equals(user) && rs.getString("psw").equals(pass))
                    {
                    return 1;
                    }
                }
            
            
            return 0;
            
            
        }
    
    
}
