<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery.js.js"></script>
    <style>
        *
        {
         margin: 0px;   
        }
        body
        {
            background-image:url("img3.jpg");
        
        }
      img
      {
        animation: sonawat 1s linear infinite;
   
}
@keyframes sonawat
{
    0%
    {
        border: 4px solid black;
    }
    20%
    {
        border: 4px solid red;
    }
    30%
    {
        border: 4px solid blue;
    }
    40%
    {
        border: 4px solid greenyellow;
    }
    50%
    {
        border: 4px solid orangered;
    }
    60%
    {
        border: 4px solid pink;
    }
    70%
    {
        border: 4px solid lightseagreen;
    }
    80%
    {
        border: 4px solid cyan;
    }
    90%
    {
        border: 4px solid orange;
    }
    100%{
        border: 4px solid black;
    }
}
.img34
{
    border-radius:100%;
    width:50%;
    background-color:white;
}
    #newdiv
    {
        width:80%;
        height:500px;
       float:right;
        margin-top:17%;  
    }
       #a
        {
            background-color: cyan;
            float:left;
            border-radius:10px;
            text-align: center;
            font-weight: bold;
            font-style: italic;
            color: #fff;
            width:100%;
            margin-top:200px;
            position:fixed;
            border-bottom:2px solid black;
        }
        .t2
            {
                background-image:url("bc6.webp");
                border-bottom:5px solid black;
                 position:fixed;
                 
                margin-top:90px;
            }
           
        .a
        {
            height: 100px;
            width: 10%;
           
            border-radius:50%;
        }
        img
        {
            height: 70px;
        }
        .b
       {
        margin-top: 10%;
        height: 40px;
        width: 90%;
        background-color: red;
        color: #fff;
        font-weight: bold;
        font-size: 18px;
        box-shadow:6px 6px solid black;
       }
       .b:hover
       {
        background-color: rgba(0, 255, 0, 0.408);
            color: #fff;
            font-weight: bold;
            font-size: 20px;
            transition: .5s ease-in-out;
            transform: scale(1.1, 1.1);
       }
       #b
       {
            width: 20%;
            float: left;
            margin-top:303px;
          background-color:pink;
          color:#fff;
        position:fixed;
       }
       .c
       {
        font-size:20px;
        font-weight:bold;
        width:100%;
        text-align:center;
        height:47px;
        background-color:red;
        border-bottom-right-radius:20px;
        border:none;
        border-bottom:2px solid white;;
       }
    #di
    {
        width:38%;     
        margin-top:5%;
        margin-left:8%;
      float:left;
  
        border:3px solid black;
        border-radius:10px;
        
    }
    .t1
    {
        float:left;      
        background-color: rgba(0, 13, 32, 0.889); 
        height:400px;
    }
    .lo
            {
                width:0%;
             
            }
            .to
            {
                font-size:80px;
                color:#fff;
                font-weight:bold;
            }
            .im1
            {
                height:100px;
                width:50%;
                background-color:white;
                border-radius:50%;
              
            }
           
            .sa
            {
                color:#fff;
                font-size:18px;
            }
            .sb
            {
               
                width:40%;
                border-radius:100%;
            }
            .sc
            {
                font-size:30px;
                color:#fff;
                font-style:italic;
            }
            .sd
            {
                font-size:20px;
            }
            .an1
            {
                color:whitesmoke;
                text-decoration:none;
            }
           
            .new
            {
            
              
                background-image : url("bc5.jfif"); 
               position:fixed;
               
            }
            .im3
            {
                border:1px solid white;;
                border-radius:100%;
                background-color:white;
                width:60%;
                float:right;
            }
            .im4
            {
                border:1px solid white;;
                border-radius:100%;
                background-color:white;
                width:100%;
            }
            .button {
 --glow-color: rgb(217, 176, 255);
 --glow-spread-color: rgba(191, 123, 255, 0.781);
 --enhanced-glow-color: rgb(231, 206, 255);
 --btn-color: rgb(100, 61, 136);
 border: .25em solid var(--glow-color);
 padding: 1em 3em;
 color: var(--glow-color);
 font-size: 15px;
 font-weight: bold;
 background-color: var(--btn-color);
 border-radius: 1em;
 outline: none;
 box-shadow: 0 0 1em .25em var(--glow-color),
        0 0 4em 1em var(--glow-spread-color),
        inset 0 0 .75em .25em var(--glow-color);
 text-shadow: 0 0 .5em var(--glow-color);
 position: relative;
 transition: all 0.3s;
 cursor: pointer;
}

.button::after {
 pointer-events: none;
 content: "";
 position: absolute;
 top: 120%;
 left: 0;
 height: 100%;
 width: 100%;
 background-color: var(--glow-spread-color);
 filter: blur(2em);
 opacity: .7;
 transform: perspective(1.5em) rotateX(35deg) scale(1, .6);
}

.button:hover {
 color: var(--btn-color);
 background-color: var(--glow-color);
 box-shadow: 0 0 1em .25em var(--glow-color),
        0 0 4em 2em var(--glow-spread-color),
        inset 0 0 .75em .25em var(--glow-color);
}

.button:active {
 box-shadow: 0 0 0.6em .25em var(--glow-color),
        0 0 2.5em 2em var(--glow-spread-color),
        inset 0 0 .5em .25em var(--glow-color);
}
/* this button is inspired from this -- s://www.newline.co/pricing */
.button2 {
  --width: 150px;
  --timing: 2s;
  border: 0;
  width: var(--width);
  padding-block: 1em;
  color: #fff;
  font-weight: bold;
  font-size: 1em;
  background: rgb(64, 192, 87);
  transition: all 0.2s;
  border-radius: 3px;
  cursor: pointer;
}

.button2:hover {
  background-image: linear-gradient(
    to right,
    rgb(250, 82, 82),
    rgb(250, 82, 82) 16.65%,
    rgb(190, 75, 219) 16.65%,
    rgb(190, 75, 219) 33.3%,
    rgb(76, 110, 245) 33.3%,
    rgb(76, 110, 245) 49.95%,
    rgb(64, 192, 87) 49.95%,
    rgb(64, 192, 87) 66.6%,
    rgb(250, 176, 5) 66.6%,
    rgb(250, 176, 5) 83.25%,
    rgb(253, 126, 20) 83.25%,
    rgb(253, 126, 20) 100%,
    rgb(250, 82, 82) 100%
  );
  animation: var(--timing) linear dance6123 infinite;
  transform: scale(1.1) translateY(-1px);
}

@keyframes dance6123 {
  to {
    background-position: var(--width);
  }
}

.im2
       {
            background-color:white;
          
       }

    </style>
    
    <script>



</script>
    <script>
      function ani()
      {
        a = new Date();
        b = a.getFullYear();
        c = a.getMonth()+1;
        d = a.getDay();
        e = a.getHours();
        f = a.getMinutes();
        g = (a.getSeconds()+1);
   
        e = e < 10 ? "0" + e : e;
        c = c < 10 ? "0" + c : c;
        d = d < 10 ? "0" + d : d;
        f = f < 10 ? "0" + f : f;
        g = g < 10 ? "0" + g : g;
 
         document.querySelector("#js1").innerHTML="Date :"+d+"-"+c
         +"-"+b;
        
         document.querySelector("#js2").innerHTML="Time -"+e+":"+f
         +":"+g;

         var day = ["Sunday","monday","Tuesday","Wednesday",
                        "Thrusday","Friday","Saturday"];
         document.querySelector("#js3").innerHTML="Day :"+day[a.getDay()];
      }
      setInterval(ani, 1000);
     
    </script>
</head>
<body onload="ani()">
<?php
     $con = new mysqli("localhost","root","","echo");
     $date1 = date('d');
     $date2 = date('m');
     $date3 = date('y');
     $date4 = "20".$date3."-".$date2."-".$date1;
    
        $b1 = "select * from ipl where d='$date4'";
      $c1 = mysqli_query($con,$b1);
      $d1 = mysqli_num_rows($c1);
      $e1 = mysqli_fetch_assoc($c1);
            
      ?>
<table class="new" width="100%"  cellpadding="5px" border="0px"
cellspacing="2px"  style="border-bottom:5px solid black;">
        <tr>

            <td style="width:8%;"><img class="im3" src="<?php echo $e1['im1'] ?>"></td>
            <td style="width:2%;font-weight:bold;font-size:25px;color:orange">VS</td>
            <td style="width:5%"><img class="im4" src="<?php echo $e1['im2'] ?>"></td>
            <th id="js1" style="width:21%;font-weight:bold;font-size:30px;color:pink"
            ></th>

            <th id="js2" style="width:21%;font-weight:bold;font-size:30px;color:pink"
            ></th>

            <th id="js3" style="width:21%;font-weight:bold;font-size:30px;color:pink"
            ></th>
            
            <th style="width:22%"><a href="ipl7.php"><button class="button">Highlight</button></a></th>
        </tr>
        </table>
<table width="100%" class="t2" cellpadding="10px" border="0px">
            <tr>
                <td class="lo"><img class="im2" src="ipl logo.png"></td>
                <th class="to">Indians Premium Ligure , T20</td>
    <td><a href="ipl6.php" style="text-decoration:none;color:black"><button class="button2">Point Table</a></button></td>
    <td><a href="ipl4.php" style="text-decoration:none;color:black"><button class="button2">Login</a></button></td>
    <td><a href="ipl8.php" style="text-decoration:none;color:black"><button class="button2">Winers</a></button></td>  
        </tr>
        </table>
    <!-- upper ka div -->

    <div id="a">
        <table width="100%" border="0px"  cellspacing="0px">
            <tr>
  <th class="a"><a href="ipl5.php?a=1"><img class="img34" src="csk.png"></a></th>
                <th  class="a"><a href="ipl5.php?a=2"><img class="img34" src="rcb.png"></th>
                <th  class="a"><a href="ipl5.php?a=3"><img class="img34" src="pbks.png"></th>
                <th  class="a"><a href="ipl5.php?a=4"><img class="img34" src="dc.jpg"></th>
                <th  class="a"><a href="ipl5.php?a=5"><img class="img34" src="kkr.png"></th>
                <th  class="a"><a href="ipl5.php?a=6"><img class="img34" src="srh.png"></th>
                <th  class="a"><a href="ipl5.php?a=7"><img class="img34" src="rr.png"></th>
                <th  class="a"><a href="ipl5.php?a=8"><img class="img34" src="lsg.png"></th>
                <th  class="a"><a href="ipl5.php?a=9"><img class="img34" src="gt.png"></th>
                <th  class="a"><a href="ipl5.php?a=10"><img class="img34" src="mi.png"></th>
            </tr>
            <!-- <tr>
             <th><button class="b"><a class="an1" href="ipl5.php?a=1">CSK</button></th>
             <th><button class="b"><a class="an1" href="ipl5.php?a=2">RCB</button></th>
             <th><button class="b"><a class="an1" href="ipl5.php?a=3">PBKS</button></th>
             <th><button class="b"><a class="an1" href="ipl5.php?a=4">DC</button></th>
             <th><button class="b"><a class="an1" href="ipl5.php?a=5">KKR</button></th>
             <th><button class="b"><a class="an1" href="ipl5.php?a=6">SRH</button></th>
             <th><button class="b"><a class="an1" href="ipl5.php?a=7">RR</button></th>
             <th><button class="b"><a class="an1" href="ipl5.php?a=8">LSG</button></th>
             <th><button class="b"><a class="an1" href="ipl5.php?a=9">GT</button></th>
             <th><button class="b"><a class="an1" href="ipl5.php?a=10">MI</button></th>
            </tr> -->
        </table>
    </div>

    <!-- left div -->

    <div id="b">
        <table  width="100%" align="center" cellpadding="0px" cellspacing="0px" border="0-px">
            <tr>
                <td><a href="ipl3.php?a=1" style="text-decoration:none;color:white"><button class="c">Clear</button></a></td>
            </tr>
            <tr>
                <td><button class="c"><a href="ipl3.php?a=all" style="text-decoration:none;color:white">Time Table</a></button></td>
            </tr>
            <tr>
                <td><button class="c"><a href="ipl3.php?a=CSK" style="text-decoration:none;color:white">CSK</a></button></td>
            </tr>
            <tr>
                <td><button class="c"><a href="ipl3.php?a=RCB" style="text-decoration:none;color:white">RCB</a></button></td>
            </tr>
            <tr>
                <td><button class="c"><a href="ipl3.php?a=PBKS" style="text-decoration:none;color:white">PBKS</a></button></td>
            </tr>
            <tr>
                <td><button class="c"><a href="ipl3.php?a=DC" style="text-decoration:none;color:white">DC</a></button></td>
            </tr>
            <tr>
                <td><button class="c"><a href="ipl3.php?a=KKR" style="text-decoration:none;color:white">KKR</a></button></td>
            </tr>
            <tr>
                <td><button class="c"><a href="ipl3.php?a=SRH" style="text-decoration:none;color:white">SRH</a></button></td>
            </tr>
            <tr>
                <td><button class="c"><a href="ipl3.php?a=RR" style="text-decoration:none;color:white">RR</a></button></td>
            </tr>
            <tr>
                <td><button class="c"><a href="ipl3.php?a=LSG" style="text-decoration:none;color:white">LSG</a></button></td>
            </tr>
            <tr>
                <td><button class="c"><a href="ipl3.php?a=GT" style="text-decoration:none;color:white">GT</a></button></td>
            </tr>
            <tr>
                <td><button class="c"><a href="ipl3.php?a=MI" style="text-decoration:none;color:white">MI</a></button></td>
            </tr>
        </table>
    </div>
    <div id="newdiv"> 
   <!-- next page code -->
   <?php
     $con = new mysqli("localhost","root","","echo");  
      $a = $_REQUEST['a'];
    
       if($a == "all")
      {
        $b = "select * from ipl";
     }
     else
     {
        $b = "select * from ipl where t1='$a' or t2='$a'";
     }
      $c = mysqli_query($con,$b);
      $d = mysqli_num_rows($c);
      while($e=mysqli_fetch_assoc($c))
      {

        $ad = $e['d'];
        $b = explode("-",$ad);
        $ay = $b[0];
        $am = $b[1];
        $ad = $b[2];
        $ada = $ad . "-" . $am . "-" . $ay;
        $adaa = strtotime($ada);
        $day = date("l","$adaa");
 
        $t1 =array("CSK"=>"Chennai Super Kings","RCB"=>"Royal Challengers Bengaluru",
    "PBKS"=>"Punjab Kings","DC"=>"Delhi Capitals","KKR"=>"Kolkata Knight Riders",
    "SRH"=>"Sunrisers Hyderabad","RR"=>"Rajasthan Royals","LSG"=>"Lucknow Super Giants",
"GT"=>"Gujarat Titans","MI"=>"Mumbai Indians");


$t2 = array("Chennai"=>"MA Chidambaram Stadium,Chennai","Kolkata"=>"Maharajaa Yadavindra Singh International Cricket Stadium
,Mullanpur,Chandigarh"," "=>"Eden Gardens,Kolkata","Jaipur"=>"Sawai Mansingh Stadium,Jaipur",
"Ahmedabad"=>"Narendra Modi Stadium,Ahmedabad","Bengaluru"=>"M.Chinnaswamy Stadium,Bengaluru",
"Hyderabad"=>"Rajiv Gandhi International Stadium,Uppal,Hyderabad","Lucknow"=>"Bharat Ratna Shri Atal Bihari Vajpayee Ekana Cricket
Stadium,Lucknow","Visakhapatnam"=>"Dr.Y.S.Rajasekhara Reddy ACA-VDCA Cricket Stadium,Visakhapatnam",
"Mumbai"=>"Wankhede Stadium,Mumbai")
?>
   
    <div id="di">
   
    <table  width="100%" cellpadding="6px" border="0px" cellspacing="3px" class="t1">
			<tr>
				<th class="sa">Match no. <span><?PHP echo ": ".$e['m']?></span></th>
				<th class="sa">Date <span><?PHP echo ": ".$e['d']?></span></th>
			</tr>
            <tr>
				<th class="sa" >Time <span><?PHP echo ": ".$e['t']?></span></th>
				<th class="sa">Day <span><?PHP echo ": ".$day?></span></th>
			</tr>
<tr>
        <th class="sb"><img class="im1" src="<?php echo $e['im1'] ?>"></th>
        <th class="sb"><img class="im1" src="<?php echo $e['im2'] ?>"></th>
</tr>
			<tr>

				<th class="sc"><?PHP echo strtr($e['t1'],$t1);?></th>
				<th class="sc"><?PHP echo strtr($e['t2'],$t1)?></th>
			</tr>
			<tr>
			
				<th class="sd" colspan="2" style="color:white;background-color:orange;">Venue: <span><?PHP echo strtr($e['v'],$t2)?></span></th>
			</tr>
	
		 </table>
      </div>
      
<?php } ?>

      </div>

</body>
</html>