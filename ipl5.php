<?php
     $con = new mysqli("localhost","root","","echo");
      $a = $_REQUEST['a'];

      $b = "select * from player where id = '$a'";
      $c = mysqli_query($con,$b);
      $d = mysqli_num_rows($c);
     $e = mysqli_fetch_assoc($c);
   
?>
<html>
    <head>
        <style>
            *
            {
                margin:0px;
            }
             .lo
            {
                width:25%;
             
            }
            .to
            {
                font-size:80px;
                color:#fff;
                font-weight:bold;
            }
            .im2
            {
                height:100px;
                width:28%;
                background-color:white;
                border-radius:50%;
                margin-left:15%;
            }
            .t2
            {
                background-image:url("bc6.webp");
                border-bottom:5px solid black;
            }
         #a
         {
            width:30%;
            height:550px;
            border:3px solid black;
            margin-top:4%;
            margin-left:15%;
            /* background-image:url("img3.jpg"); */
            background-color: rgba(0, 13, 32, 0.889);
            float:left;
         }
       
         td
         {
            font-size:22px;
            color:#fff;
            font-weight:bold;
         }
        #b
        {
            width: 25%;
            height: 400px;
            float:left;
            margin-left:10%; 
            margin-top:8%;
          
        }
         .imgchange
        {
            width: 100%;
            height: 400px;
           
            background-color: whitesmoke;
            
            border-radius: 100%;
            border: 2px solid rgba(0, 0, 0, 0.442);
            box-shadow: 2px 2px 12px 2px black;
        }
        .imgchange:hover
        {
            
            transition: .5s ease-in;
            transform: scale(1.1, 1.1);
        }
        p
        {
            padding:10px;
            background-color:red;
            color:#fff;
            font-weight:bold;
            font-size:22px;
        }
        </style>
        
    </head>
<body onload="ani()">
<table width="100%" class="t2" cellpadding="10px">
            <tr>
                <td class="lo"><img class="im2" src="ipl logo.png"></td>
                <td class="to">Indians Premium Ligure , T20</td>
        </tr>
        </table>
        <div id="a">
           <p><?php echo $e['te']?> Player Name</p>
         <table width="100%"cellpadding="10px" class="t3" border="0px" cellspacing="0px">
            <tr>
            <td>Captain</td>
            <td><?php echo $e['c'] ?></td>
        </tr>
        <tr>
            <td>WK Keeper</td>
            <td><?php echo $e['w'] ?></td>
        </tr>
        <tr>
            <td>Batter</td>
            <td><?php echo $e['b1'] ?></td>
        </tr>
        <tr>
            <td>Batter</td>
            <td><?php echo $e['b2'] ?></td>
        </tr>
        <tr>
            <td>All-Rounder</td>
            <td><?php echo $e['b3'] ?></td>
        </tr>
        <tr>
            <td>All-Rounder</td>
            <td><?php echo $e['b4'] ?></td>
        </tr>
        <tr>
            <td>All-Rounder</td>
            <td><?php echo $e['a1'] ?></td>
        </tr>
        <tr>
            <td>All-Rounder</td>
            <td><?php echo $e['a2'] ?></td>
        </tr>
        <tr>
            <td>Bowler</td>
            <td><?php echo $e['bo1'] ?></td>
        </tr>
        <tr>
            <td>Bowler</td>
            <td><?php echo $e['bo2'] ?></td>
        </tr>
        <tr>
            <td>Bowler</td>
            <td><?php echo $e['bo3'] ?></th>
        </tr>
        
        </table>
        </div>
    <div id="b">

    </div>
<?php
        switch($a)
    {
        case "1":

    ?>
       
    <script>
        // const image = document.getElementById("b");
        var i = 0;
        function ani()
        {
           
            const bgchange = ["csk.png","rcb.png","dc.jpg","rr.png","pbks.png","lsg.png",
            "srh.png","kkr.png","mi.png","gt.png"];
            console.log("aniket");
            document.getElementById("b").innerHTML = `<img class='imgchange' src=${bgchange[i]}>`;
           
          
           i++;
           if(i>9)
           {
                i=0
           }
        }
        setInterval(ani, 1000);
    </script>
    <?php
    break;
    case "2":
        ?>             
    <script>
        // const image = document.getElementById("b");
        var i = 0;
        function ani()
        {        
            const bgchange = ["csk.png","rcb.png","dc.jpg","rr.png","pbks.png","lsg.png",
            "srh.png","kkr.png","mi.png","gt.png"];
            console.log("aniket");
            document.getElementById("b").innerHTML = `<img class='imgchange' src=${bgchange[i]}>`;        
           i++;
           if(i>9)
           {
                i=0
           }
        }
        setInterval(ani, 1000);
    </script>
     <?php
    break;
    case "3":
        ?>             
    <script>
        // const image = document.getElementById("b");
        var i = 0;
        function ani()
        {        
            const bgchange = ["csk.png","rcb.png","dc.jpg","rr.png","pbks.png","lsg.png",
            "srh.png","kkr.png","mi.png","gt.png"];
            console.log("aniket");
            document.getElementById("b").innerHTML = `<img class='imgchange' src=${bgchange[i]}>`;        
           i++;
           if(i>9)
           {
                i=0
           }
        }
        setInterval(ani, 1000);
    </script>
     <?php
    break;
    case "4":
        ?>             
    <script>
        // const image = document.getElementById("b");
        var i = 0;
        function ani()
        {        
            const bgchange = ["csk.png","rcb.png","dc.jpg","rr.png","pbks.png","lsg.png",
            "srh.png","kkr.png","mi.png","gt.png"];
            console.log("aniket");
            document.getElementById("b").innerHTML = `<img class='imgchange' src=${bgchange[i]}>`;        
           i++;
           if(i>9)
           {
                i=0
           }
        }
        setInterval(ani, 1000);
    </script>
    <?php  } ?>
</body>
</html>