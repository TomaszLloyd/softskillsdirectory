<?php
  // force HTTPS with php instead of an .htaccess file because I'm lazy
  if(empty($_SERVER["HTTPS"])) { 
      $newurl = "https://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"]; 
      header("Location: $newurl"); 
      exit(); 
} 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hope is not a good plan</title>
    <link href="/css/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body class="background">

  <?php include_once("analyticstracking.php") ?>