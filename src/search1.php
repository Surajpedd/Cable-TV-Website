<?php

if(isset($_POST['search1']))
{
    $chid = $_POST['chid'];
    $chname = $_POST['chname'];
    $langg = $_POST['langg'];
    $typee = $_POST['typee'];

    $query = "SELECT * FROM television WHERE 1=1";
    if($chid != '')
    {
        $a=" and ch_num ='".$chid."'";
        $query = $query.$a;
    }
    if($chname != '')
    {
        $b=" and ch_name ='".$chname."'";
        $query = $query.$b;
    }
    if($langg != '')
    {
        $c=" and lang ='".$langg."'";
        $query = $query.$c;
    }
    if($typee != '')
    {
        $f=" and type ='".$typee."'";
        $query = $query.$f;
    }
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM television";
    $search_result = filterTable($query);
}
function filterTable($query)
{
    $connect = mysqli_connect("localhost:3307", "root", "", "channels");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Channel Directory</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
    h1{
font-family: monospace;
font-size: 40px;
text-align: center;
font-style: italic;
font-weight: bold;
}
.inp
   {
    font-style: italic;
    font-family: monospace;
    font-size:18px;
    width: 1350px;
    height: 200px;
    background: url(picd.jpg);;
    background-size:cover;
    background-position: center;
    color: rgb(0, 0, 0);
    top: 40%;
    left: 50%;
    bottom:0%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    /*padding: 0px 10px;*/
    border-radius: 20px;
    text-align: center;
    }
.tabu {
width: 50%;
margin-left:25%; 
margin-right:25%;
color:#0a114a ;
font-family: monospace;
font-size: 15px;
text-align: center;
font-style: italic;
}
.inp input[type="text"] {
  width: 10%;
}
table/*, th ,td*/ {
    border: 1px solid black;
}
th {
background-color: #0a114a;
color: white;
}
tr{background-color: #d4d4d4}
.inp input[type="submit"]
    {
    align-items:center;
    border: none;
    outline: none;
    height: 30px;
    background: #0c2326;
    color: #fff;
    font-size: 18px;
    font-family: 'Roboto', sans-serif;
    transition: transform .2s;
    }
    .inp input[type="submit"]:hover
    {
    cursor: pointer;
    background:  #3ab1c0;
    color: #000;
    transform: scale(1.2);
    border: 1px solid;
    }
   /*starts here*/
    #profile
    {
    padding:50px;
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
    border:2px solid;
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
   background: #3ab1c0;
   color: #000;
   transform: scale(1.25);
   }
   body
    {
        background: #213c40;

        color:#05d3fc;
    }

.blue_bt {
    width: 255px;
    height: 58px;
    background: #4fcaff;
    color: #fff;
    float: left;
    text-align: center;
    line-height: 58px;
    font-size: 20px;
    font-weight: 300;
}
.blue_bt:hover,
.blue_bt:focus {
    background: #fff;
    color: #0c2326;
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
    &nbsp;&nbsp;&nbsp;
    <b id="logout"><a href="Logout.php">Log Out</a></b> 
</div>

    <div class="inp">
        <br>
<form action="search1.php" method="post">
<tr>
    <h1>CHANNEL DIRECTORY SEARCH
    </h1>
    <td>Channel Number :</td>
    <td>           
        <input type="number" name="chid" placeholder="Channel Number">
    </td>
    <td>Channel Name :</td>
    <td>           
        <input type="text" name="chname" placeholder="Channel name">
    </td>
    <td>Language :</td>
    <td><input type="text" name="langg" placeholder="Language"></td>
    <td>Type :</td>
    <td><input type="text" name="typee" placeholder="Type"></td>
</tr>
<br><br>
        <input type="submit" name="search1" value="Search"><br><br>
</form>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="tabu">
            <table>
            <tr>
                <th>Channel Number</th>
                <th>Channel Name</th>
                <th>Language</th>
                <th>Type</th>
                <th>Price</th>
                <th>Logo</th>
                <th>Add?</th>
            </tr>
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr class="tabu">
                    <td><?php echo $row['ch_num'];?></td>
                    <td><?php echo $row['ch_name'];?></td>
                    <td><?php echo $row['lang'];?></td>
                    <td><?php echo $row['type'];?></td>
                    <td><?php echo $row['price'];?></td>
                    <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['img'] ).'"/>';?></td>
                    <?php
                    echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to add?');\" 
                    href=add_channel.php?id=".$row['ch_num'].">Add</a></td>";
                    ?>
                </tr>
                <?php endwhile;?>
            </table>
    </div>
    <br><br><br><br>
    
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
