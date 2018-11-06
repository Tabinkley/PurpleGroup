<?php

require "header.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Blogs</title>

    <link rel = "Stylesheet" href = "myBlogPageStyleSheet.css">
</head>
<body style="background-color: #1abc9c">

<div id = "main-blog-wrapper">

    <form class = "BlogForm" action = "" method = "post">
        <br>
        <h1>My Blogs</h1>
        <br>
        <br>
        <h2>View of subjects to choose from here....</h2>
        <br>
        <select name="messages" size="5">
            <option value="MessageNew">Message Newest</option></option>
            <option value="Message2">Message 2nd Newest</option>
            <option value="Message3">Message 3rd Newest</option>
            <option value="Message4">Message 4th Newest</option>
            <option value="Message5">Message 5th Newest</option>
            <option value="Message6">Message 6th Newest</option>
            <option value="Message7">Message 7th Newest</option>
            <option value="Message8">Message 8th Newest</option>
        </select>
        <br><br>
        <input type="submit">
        <br>

    </form>
</div>
    <form class = "MessageView" action = "mainblogpage.php" method = "post">
        <br>
        <h2>Display message from selected subject here....</h2>
        <br>
        <input type = "submit" id = "submit_btn" value = "Return to Main" >
    </form>
</body>
</html>