<html>
    <head>
        <title>Delete</title>
        <style>
            *{
                margin: 0px;
            }
            .search
            {
                height: 30px;
                width:250px;
                background-color: lightgoldenrodyellow;
                border:1px solid darkgray;
                border-radius: 5px;
            }
            ::placeholder
            {
                color: black;
            }
            #form
            {
                font-family: 'Roboto', sans-serif;
                background-color: #05d3fc;
                height: 45%;
                width:70%;
                padding-top: 20px;
            }
            .val label
            {
                font-size: 23px;
                display: inline-block;
                text-align: right;
                width:190px;
            }
            .but
            {
                background-color: red;
                color: white;
                border:none;
                height:40px;
                width:18%;
                margin-left:20px;
            }
            body
    {
        background: #213c40;
    }
    table/*, th ,td*/ {
    border: 1px solid black;
}
th {
background-color: #0a114a;
color: white;
}
tr{background-color: #d4d4d4}
        </style>
    </head>
    <body>
        <br><br>
        <center>
            <div id="form">
                <h1>Remove Existing Channel</h1><br><br>
                <form method="post" action="Delete.php">
                    <div class="val">
                        <label>Channel Number:</span></label>
                        <input type="number" name="cnum" class="search" min="0"><br><br>
                    </div>
                    <div class="val">
                        <label>Channel Name:</span></label>
                        <input type="text" name="cname" class="search" pattern="[A-Z]{1}[A-Za-z]*"><br><br>
                    </div><br>
                    <input type="submit" name="submit" value="REMOVE" class="but" id="sub">
                </form>
            </div>
        </center>
        <?php
        if(isset($_POST["submit"]))
        {
            $cn=$_POST['cnum'];
            $name=$_POST['cname'];
            //$lang=$_POST['clang'];
            //$cat=$_POST['ccat'];
            //$price=$_POSt['cprice'];

            $host    = "localhost:3307";
            $user    = "root";
            $pass    = "";
            $db_name = "channels";

//create connection
$conn = mysqli_connect($host, $user, $pass, $db_name);

//test if connection failed
if(!$conn)
{
die("Connection failed :".mysqli_connect_error());
}
//if(!empty($_POST['cnum']))
    $f=0;$f1=0;

    if(!empty($_POST['cnum']))
    {
        $cn=$_POST['cnum'];
        $f=1;
    }   

    if(!empty($_POST['cname']))
    {
        $cname=$_POST['cname'];
        $f1=1;

    }    
    if($f==1 && $f1==1)
    $result = mysqli_query($conn,"DELETE * from television where ch_num=$cn AND ch_name='$cname'"); 
    else if($f==1 && $f1==0)
    $result = mysqli_query($conn,"DELETE * from television where ch_num=$cn");
    else if($f==0 && $f1==1)
    $result = mysqli_query($conn,"DELETE * from television where ch_name='$cname'");
    else if($f==0&& $f1==0)
    echo"<script>alert('Enter any one entry to delete');<script>";


//$result=mysqli_query($conn,"DELETE from channels WHERE channel_no='$cn' AND channel_name='$name'");
if($result)
{
    echo "<script>alert('The Channel has been deleted');</script>";
}
else
echo "<script>alert('The Channel name Or Channel number does not match');</script>";

mysqli_close($conn);
}
?>
        
    </body>
</html>
