<!DOCTYPE">
<html lang ="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
<link rel="shortcut icon" href="./image/favicon/menu2.png" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no,  user-scalable=no">
<link type="text/css" rel="stylesheet" href="bootstrap-4.3.1/dist/css/bootstrap.css" />
<link type="text/css" rel="stylesheet" href="css/total.css?version=1"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="./css/hover/css/hover.css"  media="all">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link rel="stylesheet" href="search/auto/easy-autocomplete.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="search/auto/jquery.easy-autocomplete.min.js"></script>
  <script src="code.jquery.com/jquery-1.11.2.min.js"></script>
  
<style>
body{
	background-color:#373737;
	}
</style>
<title>ANIME360</title>
</head>

<body>


	 <?php  include("ketnoibh.php");
			    	
					$f=$_GET["search"];
					$s="select * from film where Namee Like('%$f%') ";
					$kq=mysqli_query($conn,$s);
					while($d = mysqli_fetch_assoc($kq))
					{
						?>
                        <div class="totalinfo row ">
                            <div id="tagfilm" class="col-sm-12"><i id="icontag" class="material-icons" >star_border</i>&nbsp info &nbsp <i id="icontag" class="material-icons" >star_border</i></div> 
                            
                                
                                <ul id="iffilm"  class="col-sm-12 infodetail" type="none">
                                	<li>
                                     <span> <b>Name English:</b> <?php echo $d['Namee']; ?></span>
                                    </li>
                                    <li>
                                     <span> <b>Name Japanese:</b> <?php echo $d['Namej']; ?></span>
                                    </li>
                                    <li>
                                     <span> <b>Name Romanji:</b> <?php echo $d['Namer']; ?></span>
                                    </li>
                                    <li>
                                     <span> <b>Episodes:</b> <?php echo $d['Eps']; ?></span>
                                    </li>
                                    
                                   
                                </ul>
                        </div>
           <?php } ?>
	
	<div id='a'></div>

</body>
</html>