<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *
        {
            margin: 0%;
        }
      #di
    {
        width:32%;     
        margin-top:5%;
        margin-left:12%;
         float:left;
        border:3px solid black;
        border-radius:10px;
   
    }
    #di1
    {
        width:32%;     
        margin-top:5%;
        margin-right:12%;
         float:right;      
        border:3px solid black;
        border-radius:10px;
        background-color:white;
        overflow:auto;
    }
    h1
    {
        color:red;
        font-size:35px;
    }
    p
    {
        font-size:30px;
    }
    .t1
    {
        float:left;      
        background-color: rgba(0, 13, 32, 0.889); 
        height:480px;
    }
    .a
    {
        color:white;
        font-size:20px;
        width:50%;
    }
    .imgchange
        {
           width:100%;
            background-color: whitesmoke;
            height:350px;
            
            border: 2px solid rgba(0, 0, 0, 0.442);
            box-shadow: 2px 2px 12px 2px black;
        }
        /* .imgchange:hover
        {
            
            transition: .5s ease-in;
            transform: scale(1.1, 1.1);
        } */
        .t2
            {
                background-image:url("bc6.webp");
                border-bottom:5px solid black;
                
              
                 }
           
            .to
            {
                font-size:80px;
                color:#fff;
                font-weight:bold;
            }
            .im2
       {
            background-color:white;        
          height: 80px;
       }
      body
      {
        background-color:cyan;
      }
    </style>
</head>
<body>
  
<table width="100%" class="t2" cellpadding="10px" border="0px">
            <tr>
                <td class="lo"><img class="im2" src="ipl logo.png"></td>
                <th class="to">Indians Premium Ligure , T20 Winner</td>
        </tr>
        </table>
   
   
    <?php
        $con = new mysqli("localhost","root","","echo");
         $a = "select * from winner";
         $b = mysqli_query($con,$a);
         $c = mysqli_num_rows($b);
         while($e=mysqli_fetch_assoc($b))
        {   
            $t1 =array("csk"=>"Chennai Super Kings","rcb"=>"Royal Challengers Bengaluru",
            "pbks"=>"Punjab Kings","dc"=>"Delhi Capitals","kkr"=>"Kolkata Knight Riders",
            "srh"=>"Sunrisers Hyderabad","rr"=>"Rajasthan Royals","lsg"=>"Lucknow Super Giants",
        "gt"=>"Gujarat Titans","mi"=>"Mumbai Indians");
    ?>
    
<div id="di">
   
    <table  width="100%"  cellpadding="5px" border="0px"  class="t1">
			<tr>
            <th class="a" colspan="2"  style="background-color:red;font-size:30px;">Year : <?php echo $e['y'] ?></th>
            
    </tr>
  
    <tr>
            <th class="a">Wining Team</th>
            <th class="a"><?PHP echo strtr($e['t1'],$t1);?></th>
    </tr>
    <tr>
    <th class="a">Runnable Team</th>
          
            <th class="a"><?php echo strtr ($e['t2'],$t1) ?></th>
    </tr>
    <tr>
    <th class="a" colspan="2">Won by<?php echo $e['w'] ?></th>
    </tr>
    <tr>
            <th colspan="2" ><img   class="imgchange" src="<?php echo $e['i']?>"></th>
    </tr>
    <tr>
            <th class="a" colspan="2" style="color:white;background-color:orange;">Vanue:<?php echo $e['v']?></th>
    </tr>
   
    </table>
</div>
<div id="di1" style="height: 555px">
            <h1><?php echo $e['h'] ?></h1>
            <br >
            <p><?php echo $e['p'] ?></p>
</div>
<?php } ?>

</body>
</html>