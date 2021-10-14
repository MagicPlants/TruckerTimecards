<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
   header('Location: index.php');
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Payroll Manager | Employee Create/Edit</title>
		<link href="content/styles.css" rel="stylesheet" />
	</head>

<body style="background-color:#414141;color:#c0c0c0;" link="#c0c0c0" vlink="#c0c0c0" alink="#ffffff">
        <br>
		<div style="font-size: 36px">Payroll Hours Manager</div>
		<br>
		<hr>
		<div style="font-size: 24px;"><u><b>Data Entry</b></u> | Name List | <a href="logout.php">Logout</a></div>
        
		    <div class="container">
        <h1>User Database</h1>

        <h2>Name Lookup</h2>
        <p>Type country name in english:</p>
        <div style="position: relative; height: 80px;">
            <input type="text" name="country" id="autocomplete-ajax" style="position: absolute; z-index: 2; background: transparent;"/>
            <input type="text" name="country" id="autocomplete-ajax-x" disabled="disabled" style="color: #CCC; position: absolute; background: transparent; z-index: 1;"/>
        </div>
        <div id="selction-ajax"></div>
        
        <h2>Local Lookup and Grouping</h2>
        <p>Type NHL or NBA team name:</p>
        <div>
            <input type="text" name="country" id="autocomplete"/>
        </div>
        <div id="selection"></div>

        <h2>Custom Lookup Container</h2>
        <p>Type country name in english:</p>
        <div>
            <input type="text" name="country" id="autocomplete-custom-append" style="float: left;"/>
            <div id="suggestions-container" style="position: relative; float: left; width: 400px; margin: 10px;"></div>
        </div>
    </div>

		
		
		<br>
        
		
		<!-- autocomplete libraries -->
    <script type="text/javascript" src="scripts/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.mockjax.js"></script>
    <script type="text/javascript" src="src/jquery.autocomplete.js"></script>
    <script type="text/javascript" src="scripts/countries.js"></script>
    <script type="text/javascript" src="scripts/demo.js"></script>
    </body>
</html>