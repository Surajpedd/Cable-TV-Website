<html>
    <head>
        <title>Customers</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script>

        </script>
        <style>
            *{
                margin: 0px;
            }
            #search
            {
                height: 30px;
                width:250px;
                background-color: lightgoldenrodyellow;
                border:1px solid darkgray;
                border-radius: 5px;
                font-family: 'Roboto', sans-serif;
            }
            button
            {
                background-color: green;
                font-family: 'Roboto', sans-serif;
                border-radius: 50%;
                border:1px solid transparent;
                height: 35px;
                width:35px;
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
            .but
            {
                background-color: red;
                color: white;
                border:none;
                height:40px;
                width:20%;
            }
            table
            {
                width:45%;
                height:50px;
                font-size:22px;
            }
            th,td
            {
                padding:5px;
                text-align:center;
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
                <h1>Customer Details</h1><br><br>
                <form method="POST">
                    <label style="font-size:23px;">Phone Number: </label>
                    <input type="tel" id="search" placeholder="Search..." pattern="[0-9]{10}" name="tel">
                    <button style="font-size:20px" type="submit" name="sub1"><i class="fa fa-search" style="color:white"></i></button><br><br>
                    <label style="font-size:23px">Email Number:  </label>
                    <input type="email" id="search" placeholder="Search..." name="email">
                    <button style="font-size:20px" type="submit" name="sub2"><i class="fa fa-search" style="color:white"></i></button><br><br><br>
                    <input type="submit" value="VIEW ALL" class="but" name="sub3">
                </form>
            </div>
        <?php 
                if(isset($_POST["sub3"]))
                {
                    $db = mysqli_connect("localhost:3307", "root", "", "login");
                    if($db)
                    {
                        $sql="Select id,Fname,Lname,Username,Email,Phone from user";
                        $result=mysqli_query($db,$sql);
                        $rowcount=mysqli_num_rows($result);
                        if($rowcount)
                        {
                            echo "<br><br><table border='1' style='border-collapse:collapse'>";
                            echo "<tr><th>S.no</th><th>Fname</th><th>Lname</th><th>Username</th><th>Email</th><th>Phone</th></tr>";
                            while ($row = mysqli_fetch_array($result)) 
                            {
                                echo "<tr><td>".$row['id']."</td><td>".$row['Fname']."</td><td>".$row['Lname']."</td><td>".$row['Username']."</td><td>".$row['Email']."</td><td>".$row['Phone']."</td></tr>";
                            }
                            echo "</table>";
                        }
                    }
                }
                else if(isset($_POST["sub2"]))
                {
                    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
                    if($db)
                    {
                        $email=$_POST['email'];
                        $sql="Select id,Fname,Lname,Username,Email,Phone from user where Email='$email' LIMIT 1";
                        if($row=mysqli_fetch_row(mysqli_query($db,$sql)))
                        {
                            echo "<br><br><table border='1' style='border-collapse:collapse'>";
                            echo "<tr><th>S.no</th><th>Fname</th><th>Lname</th><th>Username</th><th>Email</th><th>Phone</th></tr>";
                            echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td></tr>";                       
                        }
                    }
                }
                else if(isset($_POST["sub1"]))
                {
                    $db = mysqli_connect("localhost:3307", "root", "", "login");;
                    if($db)
                    {
                        $tel=$_POST['tel'];
                        $sql="Select id,Fname,Lname,Username,Email,Phone from user where Phone='$tel' LIMIT 1";
                        if($row=mysqli_fetch_row(mysqli_query($db,$sql)))
                        {
                            echo "<br><br><table border='1' style='border-collapse:collapse'>";
                            echo "<tr><th>S.no</th><th>Fname</th><th>Lname</th><th>Username</th><th>Email</th><th>Phone</th></tr>";
                            echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td></tr>";                       
                        }
                    }
                }
        ?>
    </center>
    </body>
</html>
