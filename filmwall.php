<!DOCTYPE">
<html lang ="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
<link rel="shortcut icon" href="./image/favicon/menu2.png" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no,  user-scalable=no">
<link type="text/css" rel="stylesheet" href="bootstrap-4.3.1/dist/css/bootstrap.css" />
<link type="text/css" rel="stylesheet" href="css/total.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="./css/hover/css/hover.css"  media="all">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="search/auto/easy-autocomplete.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="search/auto/jquery.easy-autocomplete.min.js"></script>
  <script src="code.jquery.com/jquery-1.11.2.min.js"></script>
  <script src="fuck/theme.js"></script>
<title id="tittit">ANIME NAME</title>
</head>

<body>

<div id="size" class="container" >
	<?php
        if(!isset($_GET['o']) or empty($_GET['o']))
        {
          include('mhead.php'); 
          include('mbody2.php');
        }
        else
        {
          if(!empty($_GET['o']))
            {
              include('mhead.php'); 
              include('contentfw.php');
            }
        }
        //this function will check if there is a var for film or not. If yes, it's mean there is a var and search for the film with the ID film. If not, it will show the page not found and the rest of the body
  ?>
    
</div>
	<?php include('mend.php') ?>
	<div id='a' ></div>


<script type="text/javascript">
   document.getElementById("tittit").innerHTML = nane; //bien nane nam trong file contentfw
</script>

</body>
</html>