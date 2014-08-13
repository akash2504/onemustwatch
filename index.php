<!DOCTYPE html>
<html>
  <head>
    <!-- <title>Bootstrap 101 Template</title> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/mystyles.css" rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah|Indie+Flower|Inconsolata|Karla' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
    <script src="js/jquery.min.js"></script>
  </head>
  <body>
  <!-- <div class="container"> -->
  <div class="row">
    
</div>
 <div class="row">
 
    <?php include("snippet-carousel.php"); ?>
 
    <?php include('about.php'); ?>
    <?php include('photogallery.php'); ?>
    <?php include('makemodal.php'); ?>

  </div>
    <script src="js/bootstrap.js"></script>
    <script src="js/myscript.js"></script>

    <script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="js/bootstrap-image-gallery.min.js"></script>
    <?php include ('footer.php'); ?>
     <!-- </div> -->

  </body>

</html>
