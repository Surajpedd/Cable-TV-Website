<?php
 $host    = "localhost:3307";
 $user    = "root";
 $pass    = "";
 $db_name = "login";

 //create connection
 $conn = mysqli_connect($host, $user, $pass, $db_name);
 //test if connection failed
 $sql= "SELECT * from user where Email='harisuperduper@gmail.com'";
 $result=mysqli_query($conn,$sql) or die(mysqli_error());
 $row=mysqli_fetch_assoc($result);
 if(!$conn)
 {
     die("Connection failed :".mysqli_connect_error());
 }
 
 if(isset($_POST['save']))
 {
    $n1=$_POST['fname'];
    $n2=$_POST['lname'];
    $un=$_POST['uname'];
    $em=$_POST['email'];
    $p=$_POST['pass'];
    $ph=$_POST['phone'];
    $i=$_POST['uid'];
    //echo "submitted";
    $sq= "UPDATE user set Fname='$n1',Lname='$n2',Username='$un',Email='$em', Password='$p', Phone='$ph' WHERE id='$i'"; 
    $res=mysqli_query($conn,$sq);
    if($res)
    {
        echo"<script>alert('Your details have been updated');</script>";
    }
    else
    {
        echo"<script>alert('sorry try again');</script>";
    }
    }
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
    input[type=button]
    {
    width:170px;
    background-color: #0c2326;
    color:#fff;
    border:1.5px outset;
    padding:10px;
    font-size:20px;
    cursor:pointer;
    align-items:center;
    font-family: 'Roboto', sans-serif;
    transition: transform .2s;
    }
    input[type="button"]:hover
   {
   cursor: pointer;
   background: #4fcaff;
   color: #000;
   transform: scale(1.25);
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
.input-box{
            border:none;
            font-size:20px;
            font-weight:bolder;
            max-width:800px;
            outline:none;
        }
        .profile{
        background-image: linear-gradient(to left, blue, green, orange, red);
        -webkit-background-clip: text;
        background-position:right;
        color:transparent;
        margin-left:200px;
        margin-top:100px;
        
        font-weight:bolder;
        font-size:20px;
        line-height:30px;
        }
        h2{
            margin-left:200px;
            margin-top:200px;
        }
        .btn{
            margin-left:100px;
            padding:10px;
            background-color: #0c2326;
            font-weight: bolder;
            color:white;
            border-radius: 10px;
            border: 1px solid;
            transition: transform .2s;
    }
    .btn:hover
   {
   cursor: pointer;
   background: #4fcaff;
   color: #000;
   transform: scale(1.25);
   }
        #passd
            {
                position: absolute;
                color:red;
                background-color:black;
                line-height:25px;
                height:110px;
                width:380px;
                display: none;
                left:600px;
                top:520px;
                border-radius:10px;
                border:1px solid black;
                text-align:left;
                font-family:'Lucida Sans';
                font-size:13px;
            }
</style>
</head>
<body>
<script>
function change_home(){
  window.location.href = "home.php";
} 
function change_mytv(){
  window.location.href = "index.php";
} 
function change_payment(){
  window.location.href = "index.php";
} 
function change_admin(){
  window.location.href = "packs.php";
} 
function change_help(){
  window.location.href = "faq.php";
} 
function change_about(){
  window.location.href = "about.php";
} 
</script>
<div id="profile">
    <img src="log1.jpeg">
    &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="button" value="Home page" onclick="change_home()"/> 
    &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="button" value="My MSH" onclick="change_mytv()"/> 
    &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="button" value="Payment" onclick="change_payment()"/> 
    &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="button" value="About" onclick="change_about()"/>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="button" value="Help" onclick="change_help()"/> 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <b id="logout"><a href="logout2.php">Log Out</a></b> 
    <br>&nbsp;&nbsp;
</div>
<h2>User profile
</h2>
<div class="profile">
<form method="post" action="userprofile.php">
<input type="hidden" name="uid" class="input-box" value="<?php echo $row['id'];?>">
Your Name:
<input type="text" name="fname" size="15" class="input-box" value="<?php echo $row['Fname'];?>" pattern="[A-Za-z]+" > &nbsp; &nbsp;
<input type="text" name="lname" size="15" class="input-box" value="<?php echo $row['Lname'];?>" pattern="[A-Za-z]+" ><br><br>
Username:
<input type="text" name="uname" class="input-box" value="<?php echo $row['Username'];?>" readonly><br><br>
Email:
<input type="email" name="email" class="input-box" value="<?php echo $row['Email'];?>"><br><br>
Password:
<input type="password" name="pass" class="input-box" oninput="show()" onblur="hide()" value="<?php echo $row['Password'];?>" id="pa" pattern="(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^A-Za-z0-9]).{8,15}" ><br><br>
<b id="passd">The Password must contain
                        <ul>
                            <li>8-15 Characters</li>
                            <li>Atleast one Uppercase and Lowercase Character</li>
                            <li>Atleast one Number and one Special Character</li>
                        </ul>
                    </b>
Phone:
<input type="tel" name="phone"class="input-box"  value="<?php echo $row['Phone'];?>" pattern="[0-9]{10}"><br><br>
<br>
<button class="btn" name="save"> Update Details </button><br>
</form>
<script>
                    var y = document.getElementById('passd');
                    function show()
                    {
                        var x = document.getElementById('pa').value;
                        if (x.length)
                            y.style.display = 'block';
                    }
                    function hide()
                    {
                        y.style.display="none";
                    }
                </script>
</div>
<br><br>

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
