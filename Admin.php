<?php
session_start();
if($_SESSION["user"]!="Admin")
    header("location:Intro.php");
?>
<html>
    <head>
        <title>Admin</title>
        <style>
            *{
               margin: 0px;
            }
        </style>
    </head>
    <frameset cols="20%,80%" border="0">
        <frame name="left" src="Nav2.html" style="background-color: #0c2326;">
        <frameset rows="12%,88%">
            <frame name="header" src="Header2.html" scrolling="no">
            <frame name="main" src="Home2.html">
        </frameset>
    </frameset>
</html>
