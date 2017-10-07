<?php
  define('MEDIA_DIR','192.168.1.10/picam/img/');
  $filename = "newpano.png";
  //if(isset($_POST['previewpano']))
  //{
  //    $filename = $_POST['previewpano'];
  //}
?>

<!doctype html>
<html>
  <head>
    <script src="https://aframe.io/releases/0.6.1/aframe.min.js"></script>
    <title>Pano Viewer</title>
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-1.11.1.js"></script>
    <a-scene>
	    <a-sky id="panoimg" src="<?php echo MEDIA_DIR; echo $filename; ?>"></a-sky>
    </a-scene>
  </body>
</html>
