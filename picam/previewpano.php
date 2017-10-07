<?php
  define('MEDIA_DIR','img/');
  $filename = "panowm.jpg";
  if(isset($_GET['previewpano']))
  {
      $filename = $_GET['previewpano'];
  }
?>

<!doctype html>
<html>
  <head>
    <script src="js/aframe.min.js"></script>
    <title>Pano Viewer</title>
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-1.11.1.js"></script>
    <a-scene>
	    <a-sky id="panoimg" src="<?php echo MEDIA_DIR; echo $filename; ?>"></a-sky>
    </a-scene>
  </body>
</html>
