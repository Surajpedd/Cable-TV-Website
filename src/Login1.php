<?php
    session_start();
    if(isset($_SESSION["user"]))
        //header("Location:home.php");
?>
<html>
    <head>
        <title>Login</title>
        <style>
        *{
    margin:0px;
}
.form-box
{
    width: 400px;
    height: 550px;
    position: relative;
    top:40px;
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
    border-radius: 30px;
    color:white;
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
            img
            {
                border-radius:65px;
                height:130px;
            }
            #view
            {
                color:white;
                right:50px;
            }
            body
    {
        background: #0c2326;
        color:#05d3fc;
    }
        </style>
    </head>
    <body>
        <center>
            <div class="form-box">
                <h1>USER LOGIN</h1>
                <form class="input-group" method="POST" id="pos">
                    <img src="user.png"><br><br><br>
                    <input type="text" class="input-field" placeholder="Username" name="user" required><br><br><br>
                    <input type="password" class="input-field" placeholder="Password" name="pass" required><br><br><br><br>
                    <button type="submit" class="submit-btn" name="sub"><b>Log In</b></button><br><br><br>
                    <p>Don't have an account?&emsp;<a href="Registration.php">Sign up now</a></p>
                </form>
            </div>
        </center>
        <?php
            if(isset($_POST["sub"]))    
            {
                if($_POST["user"]=="Admin" && $_POST["pass"]=="Admin")
                {
                    $_SESSION["user"]="Admin";
                    header("Location:Admin.php");
                }
                else
                {
                    $db = mysqli_connect("localhost:3307", "root", "", "login");
                    if($db)
                    {
                        //real_escape_string() adds escape chracter '\' for certain char like ' or " which can give error while connecting
                        $username = mysqli_real_escape_string($db,trim($_POST['user']));
                        $password = mysqli_real_escape_string($db,trim($_POST['pass'])); 
                        $sql = "select Username,Password from user where Username = '$username' LIMIT 1";  
                        if($result=mysqli_query($db,$sql))
                        {   
                            if($row=mysqli_fetch_row($result))
                                {
                                    if($row[1]!=$password)
                                        echo "<script>window.alert('Invalid Password');</script>";
                                    else
                                    {
                                        $_SESSION["user"]=$username;
                                        header("Location:home.php");
                                        echo "<script>window.alert('Success');</script>";
                                        mysqli_close($db);
                                    }
                                }
                            else
                            echo "<script>window.alert('Invalid Username');</script>";
                        }
                    }
                    else
                        die("Connection failed: " . mysqli_connect_error());
                }
            }
        ?>
    </body>
</html>
