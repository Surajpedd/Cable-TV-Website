<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Insert</title>
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
                height: 80%;
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
            #sub
            {
                background-color: green;
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
        <script>

        </script>
    </head>
    <body>
        <br><br>
        <center>
            <div id="form">
                <h1>Add New Channel</h1><br><br>
                <!-- enctype="multipart/form-data needed for file upload-->
                <form method="post" action="Insert.php" enctype="multipart/form-data">
                    <div class="val">
                        <label>Channel Number<span style="color:red">* </span></label>
                        <input type="number" class="search" name="cnum" min="0" required><br><br>
                    </div>
                    <div class="val">
                        <label>Channel Name<span style="color:red">* </span></label>
                        <input type="text" class="search" name="cname" pattern="[A-Z]{1}[A-Za-z]*" required><br><br>
                    </div>
                    <div class="val">
                        <label>Language<span style="color:red">* </span></label>
                        <input type="text" class="search" name="clang" pattern="[A-Z]{1}[A-Za-z]*" required><br><br>
                    </div>
                    <div class="val">
                        <label>Category<span style="color:red">* </span></label>
                        <input type="text" class="search" name="ccat" pattern="[A-Z]{1}[A-Za-z]*" required><br><br>
                    </div>
                    <div class="val">
                        <label>Price<span style="color:red">* </span></label>
                        <input type="number" class="search" name="cprice" pattern="[0-9]*" required><br><br>
                    </div>
                    <div class="val">
                        <label>Logo</label>&nbsp;
                        <input type="file" name="clogo"><br><br>
                    </div>
                    <br>
                    <input type="submit" value="ADD" name="submit" class="but" id="sub">
                    <input type="reset"value="CLEAR" class="but">
                </form>

            </div>
        </center>
        <?php
            if(isset($_POST["submit"]))
            {
                $cn=$_POST['cnum'];
                $name=$_POST['cname'];
                $lang=$_POST['clang'];
                $cat=$_POST['ccat'];
                $price=$_POST['cprice'];

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
                //blob stores media files in form of binary data of the image
                //In order to convert the data held by the BLOB data type back to images, you’ve used the in-built PHP base64_encode function and the following syntax for the Data URI scheme data:media_type;base64, base_64_encoded_data
                //In this case, the image/png is the media_type and the Base64 encoded string from the product_image column is the base_64_encoded_data.
                //mysqli_real_escape_string() adds an escape character, the backslash, \, before certain potentially dangerous characters in a string passed in to the function. The characters escaped are
                $nm=mysqli_real_escape_string($conn,$_FILES["clogo"]["name"]);    //$_FILES['filenamein form']["name'] here var stores name of file
                $image=mysqli_real_escape_string($conn,file_get_contents($_FILES["clogo"]["tmp_name"]));  //$_FILES['filenamein form']["tmp_name'] here var stores temp address of where file is located, the actual image
                $type=mysqli_real_escape_string($conn,$_FILES["clogo"]["type"]); //var stores file type such as image pdf etc
                if(substr($type,0,5)!="image")
                    echo "<script>window.alert('Enter Image Only');</script>";
                else
                {
                    //insert $image into database don't know the name of column in your database
                    //In database create image column datatype as blob that's enough
                    $result=mysqli_query($conn,"INSERT into television(ch_num, ch_name, lang, type, price,img )VALUES('$cn','$name', '$lang', '$cat', '$price', '$image')");

                    echo"<p>"."The channel has been inserted"."</p>";
                    mysqli_close($conn);
                    /* To View Image use this
                    $result=mysqli_query($conn,"Select * from Logo");
                    $rowcount=mysqli_num_rows($result);
                    if($rowcount)
                    {
                        echo "<table border='1' style='border-collapse:collapse'><tr><th>ID</th><th>Image</th></tr>";
                        while($row=mysqli_fetch_array($result))
                        {
                            echo '<tr><td>'.$row["id"].'</td><td><img src="data:image;base64,'.base64_encode($row['Logo']).'"</td></tr>';
                        }
                    }*/
                }    

            }
        ?>
    </body>
</html>
