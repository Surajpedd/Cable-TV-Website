<!DOCTYPE html>
<html>
<head>
<title>MSH Cable TV</title>
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
    width:300px;
    background-color: #fe834f;
    color:#000;
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

h1 span
{ 
/*background:linear-gradient(to right,green,#0192ed);*/
font-family: 'Roboto', sans-serif;
text-align: center;
font-style: italic;
font-weight: bold;
color: #fe834f;
font-size: 50px;  
}
body
    {
        background: #0c2326;
        color:#05d3fc;
    }
</style>
</head>
<body>
<script>
function change_reg(){
  window.location.href = "Registration.php";
} 
function change_log(){
  window.location.href = "Login1.php";
} 
</script>

    <br><br>
    <center>
        <h1><span>Welcome To MSH Cable TV<span></h1><br>
        <img src="log.jpeg"  style="height:30%"><br><br>
        <form method="POST">
                <input type="button" value="Existing Customer" onclick="change_log()"/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="button" value="Not a MSH Customer" onclick="change_reg()"/>
        </form>
        <br><br>
        </center>
</body>
</html>
