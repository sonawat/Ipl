<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      
        select
        {
            height:40px;
            font-size:16px; 
        }
          input
        {
            height:35px;
            font-size:16px; 
        } 
        table
        {
            border-collapse:collapse;
            margin-top:10%;
            background-color:silver;
            
        }
        td
        {
            font-weight:bold;
            font-size:20px;
        }
        .b1
       {
        
        height: 35px;
        width: 35%;
       }
       .b1:hover
       {
        background-color: rgba(0, 255, 0, 0.408);
            color: black;
            transition: .5s ease-in-out;
            transform: scale(1.1, 1.1);
       }
    </style>
    <script>
       function ani()
       {
        var a = document.getElementById("c").value;
        var b = document.getElementById("d").value;
        console.log(a);
        console.log(b);

        if(a == "CSK")
        {
             document.getElementById("im1").value = "csk.png";
        }
         else if(a == "RCB")
        {
             document.getElementById("im1").value = "rcb.png";
        }
            else if(a == "PBKS")
        {
             document.getElementById("im1").value = "pbks.png";
        }    
          else if(a == "DC")
        {
             document.getElementById("im1").value = "dc.png";
        }  
          else if(a == "KKR")
        {
             document.getElementById("im1").value = "kkr.png";
        } 
          else if(a == "SRH")
        {
             document.getElementById("im1").value = "srh.png";
        }   
          else if(a == "RR")
        {
             document.getElementById("im1").value = "rr.png";
        }  
             else if(a == "LSG")
        {
             document.getElementById("im1").value = "lsg.png";
        } 
             else if(a == "GT")
        {
             document.getElementById("im1").value = "gt.png";
        } 
             else if(a == "MI")
        {
             document.getElementById("im1").value = "mi.png";
        } 

        //team Second

        if(b == "CSK")
        {
             document.getElementById("im2").value = "csk.png";
        }
         else if(b == "RCB")
        {
             document.getElementById("im2").value = "rcb.png";
        }
            else if(b == "PBKS")
        {
             document.getElementById("im2").value = "pbks.png";
        }    
          else if(b == "DC")
        {
             document.getElementById("im2").value = "dc.png";
        }  
          else if(b == "KKR")
        {
             document.getElementById("im2").value = "kkr.png";
        } 
          else if(b == "SRH")
        {
             document.getElementById("im2").value = "srh.png";
        }   
          else if(b == "RR")
        {
             document.getElementById("im2").value = "rr.png";
        }  
             else if(b == "LSG")
        {
             document.getElementById("im2").value = "lsg.png";
        } 
             else if(b == "GT")
        {
             document.getElementById("im2").value = "gt.png";
        } 
             else if(b == "MI")
        {
             document.getElementById("im2").value = "mi.png";
        } 
       }
       
    </script>
</head>
<body>
    <div id="a">
        <form action="ipl2.php" method="post">
        <table border="1px" align="center" cellpadding="30px">
        <tr>
        
        <td>Match No <input type="text" name="m"></td>
       
        <td>Date <input type="date" name="d"></td>
   
    </tr>
    <tr>
        <td colspan="2">Time <input type="radio" value="7:30PM" name="t">7:30PM <input type="radio" value="3:30PM" name="t">3:30PM </td>
    </tr>
    <tr>
        
        <td>Team 1
            <select name="t1" id="c" onblur="ani()">
            <option selected>Team Name</option>
            <option value="CSK">Chennai Super Kings</option>
            <option value="RCB">Royal Challengers Bengaluru</option>
            <option value="PBKS">Punjab Kings</option>
            <option value="DC">Delhi Capitals</option>
            <option value="KKR">Kolkata Knight Riders</option>
            <option value="SRH">Sunrisers Hyderabad</option>
            <option value="RR">Rajasthan Royals</option>
            <option value="LSG">Lucknow Super Giants</option>
            <option value="GT">Gujarat Titans</option>
            <option value="MI">Mumbai Indians</option>
    </select>
        </td>
       
        <td>Team 2
            <select name="t2" id="d" onblur="ani()">

            <option value="CSK">Chennai Super Kings</option>
            <option value="RCB">Royal Challengers Bengaluru</option>
            <option value="PBKS">Punjab Kings</option>
            <option value="DC">Delhi Capitals</option>
            <option value="KKR">Kolkata Knight Riders</option>
            <option value="SRH">Sunrisers Hyderabad</option>
            <option value="RR">Rajasthan Royals</option>
            <option value="LSG">Lucknow Super Giants</option>
            <option value="GT">Gujarat Titans</option>
            <option value="MI">Mumbai Indians</option>
    </select>
        </td>
    </tr>
    <tr>
        <td colspan="2">Venue
            <select name="v">
                <option value="Chennai">MA Chidambaram Stadium,Chennai</option>
                <option value="Chandigarh">Maharajaa Yadavindra Singh International Cricket Stadium
                ,Mullanpur,Chandigarh</option>
                <option value="Kolkata">Eden Gardens,Kolkata</option>
                <option value="Jaipur">Sawai Mansingh Stadium,Jaipur</option>
                <option value="Ahmedabad">Narendra Modi Stadium,Ahmedabad</option>
                <option value="Bengaluru">M.Chinnaswamy Stadium,Bengaluru</option>
                <option value="Hyderabad">Rajiv Gandhi International Stadium,Uppal,Hyderabad</option>
                <option value="Lucknow">Bharat Ratna Shri Atal Bihari Vajpayee Ekana Cricket
                Stadium,Lucknow</option>
                <option value="Visakhapatnam">Dr.Y.S.Rajasekhara Reddy ACA-VDCA Cricket Stadium,Visakhapatnam</option>
                <option value="Mumbai">Wankhede Stadium,Mumbai</option>
    </select>
    </td>
    </tr>
    <tr>
         <td><input type="hidden" name="im1" readonly id="im1"></td>
         <td><input type="hidden" name="im2" readonly id="im2"></td>
    </tr>
    <tr>
        <th colspan="2"><input type="submit" class="b1"></th>
    </tr>
   
    </table>
    </form>
    </div>
</body>
</html>