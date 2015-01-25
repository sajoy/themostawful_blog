<!DOCTYPE html>
<html>
<head>
<title>the most awful</title>

<link href='http://fonts.googleapis.com/css?family=Lato:400,900' rel='stylesheet' type='text/css'>
<?php
if(isset($_SESSION['subfolder']) && $_SESSION['subfolder'] == "yes"){
	$filePath = "../"; }
	else { $filePath = ""; }
 ?>
<link href="<?php echo $filePath; ?>css/blog.css" rel="stylesheet" type="text/css">


</head>

<body>
    <div id="container">

        <div id="nav">
        <h1><a href="<?php echo $filePath; ?>index">the most awful blog</a></h1>
           <a href="<?php echo $filePath; ?>about">about</a> /
            <a href="<?php echo $filePath; ?>weekly/">weekly blog</a> /
            <a href="<?php echo $filePath; ?>misc/">misc writing</a> /
            <a href="<?php echo $filePath; ?>archive">archive</a> /
            <a href="<?php echo $filePath; ?>social">social</a>
         </div>

        <div id="content">
            <div id="left">
