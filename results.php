<?php

// get age from user
$age = $_POST['age'];

//Display if user can watch r rated movies
if ($age >= 18) {
  echo "You can go see any movie you want by yourself.";

}

  // Diplay if user can watch PG or PG-13 movies
else if ($age >= 13) {
  echo "You can't watch R rated movies by yourself, but you can watch anything else (PG, PG-13 or G).";

}

  // Diplay if user can watch G ated movies
else if ($age >= 5) {
  echo "You can't watch R, PG-13 or PG rated movies by yourself, but you can watch G rated movies.";

}

  // Display is user can't watch any movie by themselves
else if ($age >= 0) {
  echo "You can't watch any movie by yourself, please enter a valid age.";

}

?>