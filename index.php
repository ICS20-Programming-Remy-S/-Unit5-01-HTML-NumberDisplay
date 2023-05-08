<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Display">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Remy Skelton">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Number Display, with JavaScript</title>
  </head>
  <body>
    <center>
    <!-- php echo to print the html to the page -->
<?php 
echo "<h1>Number Display</h1>";
?>
<?php
echo "<h3>Please Entre your Min and Max Numbers you want Displayed</h3>";
?>

<!-- Function and direction toward results -->
    <form action="./results.php" method="post" target="results">
      <form action=" javascript: enterClicked()">
        <!-- Numeric Textfield for Min -->
      <label for="min"> Please Enter your Min:</label>
      <input type="number" id="min" placeholder="Ex.4" step="1" name="min"><br><br>

      <!-- Numeric Textfield for Max -->
        <label for="max"> Please Enter your max:</label>
      <input type="number" id="max" placeholder="Ex.4" step="1" name="max"><br><br>
                
      <input type="submit" value="Submit responses"> 
    </form>
    
    <!-- iframe for the results to show on the web page. -->
    <iframe id="results" name="results">			
      results
    </iframe>
      <!-- Number image -->
      <h1>
      <img src="./images/Number.jpg" alt="Museum" width="75%" height="auto"/>
      </h1>
          </center>
  </body>
</html>