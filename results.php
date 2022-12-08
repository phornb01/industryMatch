
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="industrymatch.css" rel='stylesheet'>
    <title>Results</title>

<style>

body{
  text-align:center;
}

.questions{
  width:50vw;
  text-align:left;
  margin:auto;
}

</style>
</head>
<body>

<h1>Results</h1>

<?php

if (isset($_POST['submitAll'])) {

  echo "<div class='questions'>";
  
  echo "Q1: " . $_POST['q1R'] . "<br>";
  echo "Q2: " . $_POST['q2R'] . "<br>";
  echo "Q3: " . $_POST['q3R'] . "<br>";
  echo "Q4: " . $_POST['q4R'] . "<br>";
  echo "Q5: " . $_POST['q5R'] . "<br>";
  echo "Q6: " . $_POST['q6R'] . "<br>";
  echo "Q7: " . $_POST['q7R'] . "<br>";
  echo "Q8: " . $_POST['q8R'] . "<br>";

  echo "</div>";




}


?>

</body>

</html>
