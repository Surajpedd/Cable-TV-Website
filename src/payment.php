<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
    
    #profile
    {
    padding-right:40px;
    padding-top:40px;
    padding-bottom:10px;
    padding-left:40px;
    border:1px dashed grey;
    font-size:20px;
    background-color: #0c2326;
    color: #fff;
    font-size: 30px;
    }
    #logout
    {
    float:right;
    padding:5px;
    border:dashed 1px #fff;
    color:#000;
    }
    #top a
    {
    width:170px;
    background-color: #0c2326;
    color:#fff;
    border:1.5px outset;
    padding:10px;
    font-size:20px;
    cursor:pointer;
    text-align:center;
    font-family: 'Roboto', sans-serif;
    transition: transform .2s;
    text-decoration:none;
    display:inline-block;
    }
    #top a:hover
   {
   cursor: pointer;
   background: #4fcaff;
   color: #000;
   transform: scale(1.25);
   text-decoration:none;
   display:inline-block;
   }
   .welc{
        font-family: 'Roboto', sans-serif;
        font-size: 20px;
        text-align: center;
        font-style: italic;
        font-weight: bold;
        color: #4fcaff;
   }

.blue_bt {
    width: 255px;
    height: 58px;
    background: #4fcaff;
    color: rgb(255, 255, 255);
    float: left;
    text-align: center;
    line-height: 58px;
    font-size: 20px;
    font-weight: 300;
    transition: transform .2s;
}
.blue_bt:hover,
.blue_bt:focus {
    background: #fff;
    color: #0c2326;
    transform: scale(1.2);
}
body
    {
        background: #213c40;
        color:#05d3fc;
    }


/* footer */
footer, footer a {
    color: white;
}
footer {
    display: block;
    overflow: hidden;
    background-color: #0c2326;
}
footer a:hover {
    color: #4fcaff;
}
footer .container > ul {
    overflow: hidden;
    margin: 30px 0;
    padding-left: 0;
}
footer .container > ul li {
    float: left;
    padding-right: 25px;
}
footer .item h4 {
    margin-bottom: 20px
}
footer .item p.address {
    line-height: 1.2;
    font-size: 16px;
}
footer .item ul {
    padding-left: 0;
}
footer .item ul li {
    margin-bottom: 3px;
    font-size: 16px;
}
footer .date p {
    margin-bottom: 5px;
    font-size: 16px;
    font-weight: 300;
}
footer .item form {
    overflow: hidden;
}
footer .item form input {
    width: 100%;
    margin-bottom: 15px;
    padding: 5px 10px;
}
footer .item form input[type="submit"] {
    width: 100px;
    height: 40px;
    line-height: 4px;
    background-color: #ef44f8;
    border: none;
    float: right;
    color: #FFF;
    padding: 0
}
footer .copyright {
    padding: 15px 0;
}
footer .copyright p {
    margin-bottom: 0;
    font-size: 16px;
}
.mode{
            margin-top:50px;
            margin-left:200px;
            border-radius: 10px;
            border: 1px white solid;
            width: 900px;
            height: 900px;
            padding: 20px;
            color: black;
            font-weight: bolder;
            font-family: 'Roboto', sans-serif;
            background-color: #05d3fc;
        }

        .cdisp{
            border: none;
            margin:200px;
        }
        .bdisp{
            border: none;
            margin:200px;
        }
        img{
            margin-left:30px ;
            margin-top:30px;
        }
        .btn{
            margin-left:300px;
            padding:10px;
            background-color: lightblue;
            font-weight: bolder;
            color:black;
            text-align: center;
            border-radius: 10px;
            border: 1px solid;
        }
        .btn1{
            margin-left:100px;
            padding:10px;
            background-color: #0c2326;
            font-weight: bolder;
            color:white;
            border-radius: 10px;
            border: 1px solid;
            transition: transform .2s;
    }
    .btn1:hover
   {
   cursor: pointer;
   background: #4fcaff;
   color: #000;
   transform: scale(1.25);
   }
        p{
            margin:50px;
            font-weight: bolder;
            font-size: 20;

        }
        center{
            font-size:20px;
            font-weight:bolder;
        }
        
</style>
</head>
<body>
<div id="profile">
    <span id="top">
    <img src="log1.jpeg">
    &nbsp;&nbsp;&nbsp;&nbsp;
    <a href="home.php">Home Page</a>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <a href="index.php">My MSH</a>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <a href="payment.php">Payment</a>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <a href="about.php">About</a>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <a href="faq.php">Help</a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </span>
    <b id="logout"><a href="logout2.php">Log Out</a></b> 
    <br>&nbsp;&nbsp;
</div>
<?php
 //echo"this is php";
   
$servername="localhost:3307";
$username="root";
$password="";
$dbname="login";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("connection failed: ".mysqli_connect_error());
}

$sql="SELECT recharge_amt from temprecharge";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
    $row=mysqli_fetch_assoc($result);
    $t=$row["recharge_amt"];
    
}
function convert($data)
{
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
$upd="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $upd=convert($_POST["updater"]);
    //echo "the chosen value is ".$upd." ";
    if($upd=="1month")
    {   
        $t1=$t;
        //$sq="UPDATE temprecharge SET recharge_amt='$t1' where recharge_amt='$t'";
        //if(!mysqli_query($conn,$sq))
        //echo "Error updating record: " . mysqli_error($conn);
        $_SESSION["rec"]=$t1;
        //echo "<br>"."<br>"."<br>"."<br>"."<br>"."<center>"."the Recharge amount is now ".$t1."rs "."</center>"; 
        echo "<br>"."<br>"."<br>"."<br>"."<br>"."<center>"."The Recharge amount is now ".$_SESSION["rec"]."rs "."</center>";
    }
    else if($upd=="3months")
    {
        $t1=$t*3;
        $_SESSION["rec"]=$t1;
        //$sq="UPDATE temprecharge SET recharge_amt='$t1' where recharge_amt='$t'";
        //if(!mysqli_query($conn,$sq))
        //echo "Error updating record: " . mysqli_error($conn);
        //echo "the Recharge amount is now ".$t1."rs "; 
        echo "<br>"."<br>"."<br>"."<br>"."<br>"."<center>"."The Recharge amount is now ".$_SESSION["rec"]."rs "."</center>";
    }
    else if($upd=="6months")
    {
        $t1=$t*6;
        $_SESSION['rec']=$t1;
        //$sq="UPDATE temprecharge SET recharge_amt='$t1' where recharge_amt='$t'";
        //if(!mysqli_query($conn,$sq))
        //echo "Error updating record: " . mysqli_error($conn);
        //echo "the Recharge amount is now ".$t1."rs "; 
        echo "<br>"."<br>"."<br>"."<br>"."<br>"."<center>"."The Recharge amount is now ".$_SESSION["rec"]."rs "."</center>";
    }
    else if($upd=="1year")
    {
        $t1=$t*12;
        $_SESSION['rec']=$t1;
        //$sq="UPDATE temprecharge SET recharge_amt='$t1' where recharge_amt='$t'";
        //if(!mysqli_query($conn,$sq))
        //echo "Error updating record: " . mysqli_error($conn);
        echo "<br>"."<br>"."<br>"."<br>"."<br>"."<center>"."The Recharge amount is now ".$_SESSION["rec"]."rs "."</center>";
    }
}

mysqli_close($conn);
?>
        <div class="mode" id="mode1">
        <p id="recharge" class="disprecharge" ></p><br>
        Pay for <br><br>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="radio" onchange="dorecharge()" name="updater" value="1month" required> Only this Month<br><br>
        <input type="radio" onchange="dorecharge()" name="updater" value="3months"> Three months<br><br>
        <input type="radio" onchange="dorecharge()" name="updater" value="6months"> Six months<br><br>
        <input type="radio" onchange="dorecharge()" name="updater" value="1year"> 12 months<br><br>
        <button class="btn1" name="confirm">Confirm Payment</button>
        </form>
        <label style="font-size: large;"> Select payment type </label><br><br>
        <input type="radio" name="pay" value = "card">Credit Card / Debit Card &nbsp;&nbsp;
        <img src="visacard.jpg" width=100" height="50"><br><br>
        <input type="radio" name="pay" value= "bank">Net Banking &nbsp;&nbsp;
        <img style="margin-left:120px;" src="bank.jpg" height="50" width="100"><br><br>
        <br>
        <br>
        <input type="button" class="btn" name="save" style="margin-left:100px;" onclick="setpayment()" value ="next">
        
   
</div>
<script>
/*
var r=200;
    function dorecharge()
    {
        var z=document.getElementsByName('updater');
        var r1=0;
       for(var i=0; i<z.length;i++)
       {
           if(z[i].checked==true)
           {
                
               if(z[i].value=="1month")
               {
                    
                    document.getElementById("recharge").innerHTML="Your Recharge Amount is "+r;
               }
               else if(z[i].value=="3months")
               {
                 r1=r*3;
                 document.getElementById("recharge").innerHTML="Your Recharge Amount is  "+r1;
               }
               else if(z[i].value=="6months")
               {
                   r1=r*6;
                   document.getElementById("recharge").innerHTML="Your Recharge Amount is  "+r1;
               }
               else if(z[i].value=="1year")
               {
                   r1=r*12;
                   document.getElementById("recharge").innerHTML="Your Recharge Amount is"+r1;
               }
           }
       }
        
    }*/
   function setpayment()
   {
       var k=document.getElementsByName('pay');
       for(var i=0; i<k.length;i++)
       {
           if(k[i].checked==true)
           {
                document.getElementById("mode1").style.display="none";
               if(k[i].value=="card")
               { /*
                   var del2=document.getElementsByClassName("bdisp");
                while(del2.length)
                del2[0].parentNode.removeChild(del2[0]);
                var x= document.createElement("IFRAME");
                x.setAttribute("src","card.php");
                x.setAttribute("class","cdisp")
                x.setAttribute("width","1100");
                x.setAttribute("height","600");
                document.body.appendChild(x);
                */
                location.replace("card.php");
               }
               else if(k[i].value=="bank")
               {
                   location.replace("banklogin.php");
                   /*
                var del1=document.getElementsByClassName("cdisp");
                while(del1.length)
                del1[0].parentNode.removeChild(del1[0]);   
                var x= document.createElement("IFRAME");
                x.setAttribute("src","banklogin.php");
                x.setAttribute("class","bdisp")
                x.setAttribute("width","1100");
                x.setAttribute("height","600");
                document.body.appendChild(x);
                */
               }
           }
       }
   }
    
</script>
      <footer>
          <br>
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-12">
                  <div class="footer_blog_section">
                     <img src="log1.jpeg" alt="#" />
                     <p style="margin-top: 5px;">M S H Limited is a joint venture Corporation.
Incorporated in 2022 and with services launched recently, leading content distribution platform providing Pay TV and services.</p>
                  </div>
               </div>
               <div class="col-lg-2 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase">Navigation</h4>
                     <ul>
                        <li><a href="#" onclick="change_home()">Home</a></li>
                        <li><a href="#" onclick="change_mytv()">My MSH</a></li>
                        <li><a href="#" onclick="change_payment()">Payment</a></li>
                        <li><a href="#" onclick="change_help()">Help</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase">Contact Info</h4>
                     <p><strong>Corporate Office Address:</strong></p>
                     <p><img src="phone_icon.png" alt="#" /> VIT Chennai, Kelambakkam Road Chennai-132</p>
                     <p><strong>Customer Service:</strong></p>
                     <p><img src="location.png" alt="#" /> +91 9876543210</p>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase">Discover</h4>
                     <ul>
                        <li><a href="#" onclick="change_help()">Help</a></li>
                        <li><a href="#" onclick="change_about()">About Us</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright text-center">
            <p>Copyright 2020</p>
         </div>
      </footer>
</body>
</html>
