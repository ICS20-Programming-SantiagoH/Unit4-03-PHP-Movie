<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="How old are you Going to the Movie Theater">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Santiago Hewett">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>How old are you Going to the Movie Theater</title>
  </head>
  <body>
    <!-- php echo to print the html to the page -->
<?php 
echo "<h1>How old are you Going to the Movie Theater</h1>";
?>
<!-- Movie image -->
      <main class="mdl-layout__content">
        <table>
          <tr>
            <th>
              <img src="./images/MOVIES.webp" alt="Movies" width="75%" height="auto"/>
      </main>
<?php
echo "<h3>How old are you right now</h3>";
?>

<!-- form to get the age from the user -->
    <form action="./results.php" method="post" target="results">
      <label for="age"> Please Entre your age:</label>
      <input type="number" id="age" placeholder="Ex. 15" step="1" min="0" name="age"><br><br>
      <input type="submit" value="Calculate"> 
    </form>
    
    <!-- iframe for the results to show on the web page. -->
    <iframe id="results" name="results">			
      results
    </iframe>
  </body>
</html>