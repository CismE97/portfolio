<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Test</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
    <link href="animate.css" rel="stylesheet">
  </head>
  <body>
	  <?php include("./includes/functions.php");?>
      <?php include("./includes/navbar.php");?>
      <?php include("./includes/header.php");?>
      
      <?php include("./pages/presentation.php");?>
      <?php include("./pages/formation.php");?>
      <?php include("./pages/creation.php");?>
      <?php include("./pages/download.php");?>
      <?php include("./pages/contact.php");?>

      <?php include("./includes/footer.php");?>    
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/viewportchecker.js"></script> 
    <script src="./js/scripts.js"></script>
  </body>
</html>