<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!--
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />
  -->
  
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
  <script type="text/javascript" charset="utf-8">
    function hasClassName(inElement, inClassName)
    {
        var regExp = new RegExp('(?:^|\\s+)' + inClassName + '(?:\\s+|$)');
        return regExp.test(inElement.className);
    }

    function addClassName(inElement, inClassName)
    {
        if (!hasClassName(inElement, inClassName))
            inElement.className = [inElement.className, inClassName].join(' ');
    }

    function removeClassName(inElement, inClassName)
    {
        if (hasClassName(inElement, inClassName)) {
            var regExp = new RegExp('(?:^|\\s+)' + inClassName + '(?:\\s+|$)', 'g');
            var curClasses = inElement.className;
            inElement.className = curClasses.replace(regExp, ' ');
        }
    }

    function toggleClassName(inElement, inClassName)
    {
        if (hasClassName(inElement, inClassName))
            removeClassName(inElement, inClassName);
        else
            addClassName(inElement, inClassName);
    }

    function toggleShape()
    {
      var shape = document.getElementById('shape');
      if (hasClassName(shape, 'ring')) {
        removeClassName(shape, 'ring');
        addClassName(shape, 'cube');
      } else {
        removeClassName(shape, 'cube');
        addClassName(shape, 'ring');
      }
      
      var stage = document.getElementById('stage');
      if (hasClassName(shape, 'ring'))
        stage.style.webkitTransform = 'translateZ(-200px)';
      else
        stage.style.webkitTransform = '';
    }
    
  </script>
</head>
<body>

  
  
  <div id="container" onclick="toggleShape()">
    <div id="stage">
      <div id="shape" class="cube backfaces">
	  <?php include('ketnoibh.php');
	  		$get = $_GET['o'];
	  		$r = "select * from wallpaper where wallpaper.IdF = $get ";
			
			$kq=mysqli_query($conn,$r);
			
			while($d = mysqli_fetch_array($kq))
			{
				?>
                
     				<div class="plane m<?php echo $d['numW'];?>" style="background-image: url(<?php echo $d['LinkW'];echo $d['NameW'];?>)"></div>
       <?php }?>
      </div>
    </div>
  </div>
  
  <!--script>
    var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
    if(isChrome) {
        document.getElementById('playAudio').remove();
        document.write('<iframe src="Girls_Like_You.mp3" allow="autoplay loop" style="display:none"></iframe>');
    }
  </script-->
  <!--// https://www.facebook.com/nhquyet //-->
</body>
</html>