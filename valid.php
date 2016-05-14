<html><body>

<?php

// define variables and set to empty values
$animalErr = $colorErr = $genderErr = $commentErr =
$animal = $color = $gender = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["animal"])){
    $animalErr = "Animal is required. Rawr.";
  } else {
  $animal = test_input($_POST["animal"]);
  }

  if (empty($_POST["color"])){
    $colorErr = "All are artists. Color required.";
  } else {
    $color = test_input($_POST["color"]);
  }

  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo $animal;
echo "<br>";
echo $color;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>



<body><html>