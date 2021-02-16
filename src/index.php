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

/* header */
header {
    position: relative;
    color: #FFF;
    font-family: 'Roboto', sans-serif;
}
header .container {
    height: 100%
}

header .container > div {
    margin: 0 auto;
    position: relative;
/*    text-align: center;*/
}
header .container > div h1 {
    font-size: 90px;
}
header button {
    background-color: transparent;
    display: block;
    border: 1px solid #FFF;
    border-radius: 50px;
    padding: 0;
    margin: 30px auto;
}
header button a {
    padding: 10px 40px;
    display: block;
    color: #FFF;
}
header button:hover {
    background-color: #bd8cbf;
    border: 1px solid #bd8cbf;
}
header button:hover a {
    color: white;
}
h3.blog_head {
    width: 100%;
    float: left;
    background: #fff;
    text-align: center;
    font-size: 25px;
    text-transform: uppercase;
    color: #090101;
    margin: 0;
    min-height: 75px;
    line-height: 75px;
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
.ovarlay_slide_cont {
    background: rgba(5,3,0,0.63);
    position: absolute;
    width: 60%;
    margin: 0 15%;
    z-index: 1111111111;
    top: 135px;
    left: 0;
    padding: 50px 60px 70px;
}
.ovarlay_slide_cont h2 {
    color: #fff;
    text-transform: uppercase;
    font-size: 70px;
    font-weight: 700;
    line-height: normal;
    margin: 0;
}
.ovarlay_slide_cont h4 {
    color: #4fcaff;
    font-size: 32px;
    text-transform: uppercase;
    font-weight: 700;
    margin: 0 0 15px 0;
    line-height: normal;
}
.ovarlay_slide_cont p {
    color: #fff;
    font-weight: 300;
    margin: 0 0 30px 0;
    font-size: 21px;
    padding: 0 75px 0 0;
    line-height: 28px;
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
</style>
</head>
<body>
<script>
function change_search(){
  window.location.href = "search1.php";
} 
function change_mytv(){
  window.location.href = "mytv.php";
} 
function change_packs(){
  window.location.href = "packs.php";
} 
function change_home(){
  window.location.href = "home.php";
} 
function change_mytv2(){
  window.location.href = "index.php";
} 
function change_payment(){
  window.location.href = "payment.php";
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
    <input type="button" value="My MSH" onclick="change_mytv2()"/> 
    &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="button" value="Payment" onclick="change_payment()"/> 
    &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="button" value="About" onclick="change_about()"/> 
    &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="button" value="Help" onclick="change_help()"/> 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <b id="logout"><a href="Logout.php">Log Out</a></b> 
    <br>&nbsp;&nbsp;
</div>
<div id="home" class="slider">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#main_slider" data-slide-to="0" class="active"></li>
               <li data-target="#main_slider" data-slide-to="1"></li>
               <li data-target="#main_slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="d-block w-100" src="bg3.1.jpg" alt="slider_img">
                  <div class="ovarlay_slide_cont">
                     <h2>My Subscriptions</h2>
                     <h4>View what channels u have subscribed for</h4>
                     <p>Add/drop from your subscription list and manage your final prices</p>
                     <a class="blue_bt" href="#" onclick="change_mytv()">Manage Subscrition</a>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="bg1.1.jpg" alt="slider_img">
                  <div class="ovarlay_slide_cont">
                     <h2>Channel packages</h2>
                     <h4>Packages have channels in similar genre</h4>
                     <p>View and buy exciting packages of channels you want at cheaper prices</p>
                     <a class="blue_bt" href="#" onclick="change_packs()">View packages</a>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="bg6.1.jpg" alt="slider_img">
                  <div class="ovarlay_slide_cont">
                     <h2>Channel Directory</h2>
                     <h4>Browse individual channel list</h4>
                     <p>View and add channels individually by going through the channel directory</p>
                     <a class="blue_bt" href="#" onclick="change_search()">Channel Directory</a>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <img src="left.png" alt="#" />
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <img src="right.png" alt="#" />
            </a>
         </div>
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
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script>
         $(function () 
         {
             var winH = $(window).height();
             
             $('header').height(winH);  
             
             $('header .container > div').css('top', (winH / 2) - ( $('header .container > div').height() / 2));
             
             $('.navbar ul li a.search').on('click', function (e) {
                 e.preventDefault();
             });
             $('.navbar a.search').on('click', function () {
                 $('.navbar form').fadeToggle();
             });
             
             $('.navbar ul.navbar-nav li a').on('click', function (e) {
                 
                 var getAttr = $(this).attr('href');
                 
                 e.preventDefault();
                 $('html').animate({scrollTop: $(getAttr).offset().top}, 1000);
             });
         })
      </script>
</body>
</html>
