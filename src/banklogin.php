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
            margin-top:100px;
            margin-left:80px;
            border-radius: 10px;
            border: 1px white solid;
            width: 400px;
            height: 200px;
            padding: 20px;
            color: black;
            font-weight: bolder;
            font-family: 'Roboto', sans-serif;
            background-color: #05d3fc;
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
<div class="mode">
    <form method="POST" action="banklogin.php">
<label>Login id :</label>
<input type="text" id="cname" name="uid" ><br><br>
<label>Password :</label>
<input type="password" id="cno" name="pwd" ><br><br>    
    <center>
        <button class="btn" name="save">Next</button>
    </center>    
</form>
</div>
<?php
            if(isset($_POST["save"]))    
            {
                define('DB_SERVER','localhost:3307');
                define('DB_USERNAME', 'root');
                define('DB_PASSWORD', '');
                define('DB_DATABASE', 'login');
                $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
                if($db)
                {
                    $userid=$_POST['uid'];
                    //real_escape_string() adds escape chracter '\' for certain char like ' or " which can give error while connecting
                    $userid = mysqli_real_escape_string($db,trim($_POST['uid']));
                    $password = mysqli_real_escape_string($db,trim($_POST['pwd'])); 
                    $sql = "select login_id, password from banklogin where login_id = '$userid' LIMIT 1";  
                    if($result=mysqli_query($db,$sql))
                    {
                        if($row=mysqli_fetch_row($result))
                            {
                                if($row[1]!=$password)
                                    echo "<script>window.alert('Invalid Password');</script>";
                                else
                                {
                                    //$_SESSION["user"]=$username;
                                    //header("Location:.php");
                                    echo "<script>window.alert('Success');</script>";
                                    $_SESSION['logid']=$_POST['uid'];
                                    header("Location:processbank.php");
                                    mysqli_close($db);
                                }
                            }
                        else
                        echo "<script>window.alert('Invalid login credential');</script>";
                    }
                }
                else
                    die("Connection failed: " . mysqli_connect_error());
            }
        ?>

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
