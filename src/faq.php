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
        background: bisque;
        color:#05d3fc;
        margin-top: 10px;
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
        .q{
            margin-left:100px;
            background-color:bisque ;
            color:gray;
            font-weight: bolder;
            width:1100px;
            font-size: 17px;
            max-height:200px;
            line-height: 30px;
            padding: 10px;

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

<div class="q">
     Toll free customer care : 044-42567445/+91 9876043874 <br>
     <br>
     Send your queries to smh.cabletv@gmail.com <br>  
    </div>
    <br>
<div class="q">
    </div>    
<div class="q">
I need to know about features on M S H , what should I do ?
<br>
<br>
Please call our 24x7 helpline. Our associates are trained to answer subscriber queries in 13 languages. For frequently asked questions press<br> 
the 'help' button on your remote. Visit here to view a demo of all the features available on Tata Sky.<br>
please go the home page click on explore icon to see reccomended packs or else click on manage packs to view channels and search you channel<br>
number or name in search bar<br>
</div>
<br>
<div class="q">
How to process payment ?
<br>
<br>
After selecting your favourite channels or/and packages click proceed to payment option.<br>
Select your mode of payment and carry out an OTP VERIFIED transaction.<br>    
<br>
<br>
</div>
<br>
<div class="q">
    Why is channel packages neccessary ?
    <br>
    <br>
   In channel packages the subscribers get an edge over other subscribers in reduction of payment for their channels i.e., there will<br> 
   be discounted rates of the channels in the packages.<br> 
</div>
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
