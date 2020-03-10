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
    function downloadLink()
    {
      location.href = 'http://redirect.nhq.vn/demo/3d-css.zip';
    }
  </script>
</head>
<body>

  
  
  <div id="container" onclick="toggleShape()">
    <div id="stage">
      <div id="shape" class="cube backfaces">
        <div class="plane one" style="background-image: url(image/mbody/wall/5cm/1.jpg);"></div>
        <div class="plane two" style="background-image: url(image/mbody/wall/5cm/2.jpg);"></div>
        <div class="plane three" style="background-image: url(image/mbody/wall/5cm/3.jpg);"></div>
        <div class="plane four" style="background-image: url(image/mbody/wall/5cm/4.jpg);"></div>
        <div class="plane five" style="background-image: url(image/mbody/wall/5cm/5.jpg);"></div>
        <div class="plane six" style="background-image: url(image/mbody/wall/5cm/6.jpg);"></div>
        <div class="plane seven" style="background-image: url(image/mbody/wall/5cm/7.jpg);"></div>
        <div class="plane eight" style="background-image: url(image/mbody/wall/5cm/8.jpg);"></div>
        <div class="plane nine" style="background-image: url(image/mbody/wall/5cm/9.png);"></div>
        <div class="plane ten" style="background-image: url(image/mbody/wall/5cm/10.jpg);"></div>
        <div class="plane eleven" style="background-image: url(image/mbody/wall/5cm/11.jpg);"></div>
        <div class="plane twelve" style="background-image: url(image/mbody/wall/5cm/12.jpg);"></div>
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