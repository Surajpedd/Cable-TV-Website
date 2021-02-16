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
        <title>Faculty Directory</title>

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
    height: 230px;
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

body{
    background: url(blue.jpg);
    background-repeat: no-repeat;
   background-size:3000px 8000px;
   background-position:unset;
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
    background: #02427d;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
    border:1px solid;
    }
    .inp input[type="submit"]:hover
    {
    cursor: pointer;
    background: #09c5eb;
    color: #000;
    }
    #profile
    {
    padding:50px;
    border:1px dashed grey;
    font-size:20px;
    background-color:#02427d;
    color: #fff;
    font-size: 30px;
    }
    a
    {
    text-decoration:none;
    font-family: Arial;
    text-align: center;
    color:#05d3fc;
    }
    i
    {
    font-family: Arial;
    text-align: center;
    color:#05d3fc;
    }
    a:link, a:visited {
  background-color: #02427d;
  color: #05d3fc;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #09c5eb;
  color: #000;
}
input[type=button]
    {
    width:300px;
    background-color:#02427d;
    color:#fff;
    border:2px solid;
    padding:10px;
    font-size:20px;
    cursor:pointer;
    border-radius:10px;
    align-items:center;
    }
    input[type="button"]:hover
   {
   cursor: pointer;
   background: #e13423;
   color: #000;
   }
</style>
    </head>
<body>
    <div id="profile">
    <input type="button" value="Manage my Packs" onclick="change_search()"/> 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="button" value="Recommended Packs" onclick="change_search()"/> 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="button" value="Search Channels" onclick="change_search()"/> 
</div>
<div class="inp">
<form action="search.php" method="post">
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
    <td>Language :</td>
    <td><input type="text" name="typee" placeholder="Type"></td>
</tr>
<br><br>
        <input type="submit" name="search1" value="Search"><br><br>
</div>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br><br><br><br><br>
<div class="tabu">
            <table>
            <tr>
                <th>Channel Number</th>
                <th>Channel Name</th>
                <th>Language</th>
                <th>Type</th>
                <th>Price</th>
                <th>Logo</th>
            </tr>
</div>
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr class="tabu">
                    <td><?php echo $row['ch_num'];?></td>
                    <td><?php echo $row['ch_name'];?></td>
                    <td><?php echo $row['lang'];?></td>
                    <td><?php echo $row['type'];?></td>
                    <td><?php echo $row['price'];?></td>
                    <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['img'] ).'"/>';?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>