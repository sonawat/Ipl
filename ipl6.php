<html>
    <head>
        <style>
            *
            {
                margin:0px;
            }
            .t2
            {
                background-image:url("bc6.webp");
                border-bottom:5px solid black;
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
                width:30%;
                background-color:white;
                border-radius:50%;
              
            }
            form{
    height: 650px;
    width: 450px;
    background-color: rgba(255,255,255,0.13);
    /* background-color: rgba(0, 13, 32, 0.889);  */
    position: absolute;
    transform: translate(-50%,-50%);
    top: 63%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
td
{
    border-bottom:4px solid black;
}
.a
{
    color:black;
   font-size:20px;
}
.b
{
    color:black;
    font-size:28px;
  background-color:red;
  height:50px;
}
    .im3
            {
                border:1px solid white;;
                border-radius:100%;
                background-color:white;
                width:100%;
                height:50px;
            
            }
        </style>
        <body>

<table width="100%" class="t2" cellpadding="10px">
            <tr>
                <td style="border-bottom:none" class="lo"><img class="im2" src="ipl logo.png"></td>
                <td style="border-bottom:none" class="to">Indians Premium Ligure , T20</td>
   
        </tr>
        </table>
    <form>
    <table width="100%" border="0px" cellspacing="7px">
    <tr>
        <td class="b" colspan="3">Team</td>
        <td class="b">M</td>
        <td class="b">W</td>
        <td class="b">L</td>
        <td class="b">NRR</td>
        <td class="b">Pts</td>
    </tr>
        <?php
            $con = new mysqli("localhost","root","","echo");
            $a = "select * from point_table";
            $b = mysqli_query($con,$a);
            while($c = mysqli_fetch_assoc($b))
            {
        ?>
    <tr>
        
        <td class="a"><?php echo $c['id'] ?></td>
        <td style="width:15%"><img class="im3" src="<?php echo $c['im']?>"></td>
        <td class="a"><?php echo $c['t'] ?></td>
        <td class="a"><?php echo $c['m'] ?></td>
        <td class="a"><?php echo $c['w'] ?></td>
        <td class="a"><?php echo $c['l'] ?></td>
        <td class="a"><?php echo $c['n'] ?></td>
        <td class="a"><?php echo $c['p'] ?></td>
        </tr>
        <?php } ?>
</table>
</form>

</body>
</html>