<?php
    session_start();
    if(isset($_SESSION["user"]))
    //    header("Location:home.php");
?>
<head>
<style>
*{
    margin:0px;
}
.form-box
{
    width: 400px;
    height: 550px;
    position: relative;
    top:50px;
    background-color: black;
    padding: 10px 5px; 
}
.input-group
{
    top: 110px;
    position: absolute;
    width: 300px;
}
p
{
    color:white;
    font-size:15px;
    font-family:'Lucida Sans';
}
.input-field
{
    width: 100%;
    padding: 10px 0px;
    border-left:0;
    border-right: 0;
    border-top: 0;
    border-bottom:1px solid white;
    outline: none;
    background:transparent;
    color:white;
    font-size: medium;
}
::placeholder
{
    color:white;
}
.submit-btn
{
    width:100%;
    padding: 10px 30px;
    cursor: pointer;
    margin:auto;
    background:linear-gradient(to right,#4fcaff,#0c2326);   /* Linear Gradient gives differetn based on direction*/
    border:0; 
    outline: none;
    border: none;
    color:white;
    border-radius: 30px;
    transition: transform .2s;
}
.submit-btn:hover
   {
   cursor: pointer;
   transform: scale(1.25);
   }
#pos
{
    left:50px;
}
h1
{
    color:#4fcaff;
    font-size: 28px;
    margin-top: 30px;
    font-family: 'Lucida Sans';
}
body
    {
        background: #0c2326;
        color:#05d3fc;
    }
</style>
        <title>Registration</title>
        <style>
            #passd
            {
                position: absolute;
                color:yellow;
                background-color:black;
                line-height:25px;
                height:110px;
                width:380px;
                display: none;
                left:360px;
                top:220px;
                border-radius:10px;
                border:1px solid black;
                text-align:left;
                font-family:'Lucida Sans';
                font-size:13px;
            }
        </style>
    </head>
    <body>
        <center>
            <div class="form-box">
                <h1>USER SIGN UP</h1>
                <form class="input-group" method="POST" id="pos">
                    <input type="text" class="input-field" placeholder="First Name" name="fname" required><br><br>
                    <input type="text" class="input-field" placeholder="Last Name" name="lname" required><br><br>
                    <input type="text" class="input-field" placeholder="Username" name="user" required><br><br>
                    <input type="email" class="input-field" placeholder="Email" name="uemail" required><br><br>
                    <input type="password" class="input-field" placeholder="Password*" name="pass" id="pa" oninput="show()" onblur="hide()" pattern="(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^A-Za-z0-9]).{8,15}" required>
                    <b id="passd"><center>The Password must contain</center>
                        <ul>
                            <li>8-15 Characters</li>
                            <li>Atleast one Uppercase and Lowercase Character</li>
                            <li>Atleast one Number and one Special Character</li>
                        </ul>
                    </b><br><br>
                    <input type="tel" class="input-field" placeholder="Phone Number" name="tel" pattern="[789][0-9]{9}" required><br><br><br>
                    <button type="submit" class="submit-btn" name="sub"><b>Sign Up</b></button><br><br>
                    <p>Already Registered?&emsp;<a href="Login.php">Login now</a></p>
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
        </center>
        <?php
            if(isset($_POST["sub"]))    
            {
                //checcking names
                if(preg_match("/^[A-Za-z-']*$/",$_POST['fname'])==0 or preg_match("/^[A-Za-z-']*$/",$_POST['lname'])==0)
                    echo "<script>window.alert('Enter Valid Name');</script>";
                if($_POST['pass']=="Admin" || $_POST["user"]=="Admin")
                    echo "<script>window.alert('Credentials already in Use');</script>";
                else
                {
                    define('DB_SERVER','localhost');
                    define('DB_USERNAME', 'root');
                    define('DB_PASSWORD', '');
                    define('DB_DATABASE', 'login');
                    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
                    if($db)
                    {
                        //real_escape_string() adds escape chracter '\' for certain char like ' or " which can give error while connecting
                        $username = mysqli_real_escape_string($db,trim($_POST['user']));
                        $password = mysqli_real_escape_string($db,trim($_POST['pass'])); 
                        $fname = mysqli_real_escape_string($db,trim($_POST['fname']));
                        $lname = mysqli_real_escape_string($db,trim($_POST['lname'])); 
                        $uemail = mysqli_real_escape_string($db,trim($_POST['uemail']));
                        $ph=$_POST["tel"];
                        //Checking already exists
                        $sql_check="select Username,Email,Phone from user where Username='$username' or Email='$uemail' or Phone='$ph' LIMIT 1";
                        $rowcount=mysqli_num_rows(mysqli_query($db,$sql_check));
                        if($rowcount)
                        {
                            $row=mysqli_fetch_assoc($result);

                            if($row['Username']==$username)
                                echo "<script>window.alert('Username already exists');</script>";
                            else if($row['Email']==$uemail)
                                echo "<script>window.alert('Email already in Use');</script>";
                            else if($row['Phone']==$ph)
                                echo "<script>window.alert('Phone Number already exists');</script>";
                        }
                        else
                        {
                            $sql = "insert into user(Fname,Lname,Username,Email,Password,Phone) values('$fname','$lname','$username','$uemail', '$password','$ph')";
                            if(mysqli_query($db, $sql))
                            {
                                $_SESSION["user"]=$username;
                                $_SESSION["em"]=$uemail;
                                header("Location:home.php");
                                echo "<script>window.alert('Success');</script>";
                                mysqli_close($db);                       
                            }
                        }
                    }
                    else
                        die("Connection failed: " . mysqli_connect_error());
                }
            }
        ?>
    </body>
</html>
