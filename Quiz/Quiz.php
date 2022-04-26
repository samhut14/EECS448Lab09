<!Doctype html>
<html>
<body>
    <h2>European Capital Quiz Results</h2>

<?php 
$germany = $_POST["Germany"]; 
$france = $_POST["France"]; 
$spain = $_POST["Spain"];
$finland = $_POST["Finland"];
$portugal = $_POST["Portugal"];
 
$scoreTracker = 0;

echo "Question 1: What is the capital of Germany? <br>";
echo "You answered: $germany <br>";
echo "Correct answer: Berlin <br> <br>";
if($germany == "Berlin") $scoreTracker++;

echo "Question 2: What is the capital of France? <br>";
echo "You answered: $france <br>";
echo "Correct answer: Paris <br> <br>";
if($france == "Paris") $scoreTracker++;

echo "Question 3: What is the capital of Spain? <br>";
echo "You answered: $spain <br>";
echo "Correct answer: Madrid <br> <br>";
if($spain == "Madrid") $scoreTracker++;

echo "Question 4: What is the capital of Finland? <br>";
echo "You answered: $finland <br>";
echo "Correct answer: Helsinki <br> <br>";
if($finland == "Helsinki") $scoreTracker++;

echo "Question 5: What is the capital of Portugal? <br>";
echo "You answered: $portugal <br>";
echo "Correct answer: Lisbon <br> <br>";
if($portugal == "Lisbon") $scoreTracker++;
 
$percent = $scoreTracker/5*100;

echo "You answered $scoreTracker out of 5, correctly. <br>";
echo "Score: $percent%";

?> 

</body>
</html>