<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz Whiz</title>
    <link rel="icon" href="../graphics/logo.png" type="png">
    <link rel="stylesheet" href="../style.css">
</head>
<body class="quiz">
<?php
$score = 0;
$n = 1;

// Define questions, options, and answers
$q1 = "What is the capital of France?";
$q1_opt1 = "Paris";
$q1_opt2 = "London";
$q1_opt3 = "Rome";
$q1_opt4 = "Berlin";
$q1_ans = "Paris";

$q2 = "Which continent is the Sahara Desert located in?";
$q2_opt1 = "Africa";
$q2_opt2 = "Asia";
$q2_opt3 = "Australia";
$q2_opt4 = "Europe";
$q2_ans = "Africa";

$q3 = "What is the longest river in the world?";
$q3_opt1 = "Nile";
$q3_opt2 = "Amazon";
$q3_opt3 = "Yangtze";
$q3_opt4 = "Mississippi";
$q3_ans = "Nile";

$q4 = "What is the largest ocean on Earth?";
$q4_opt1 = "Pacific Ocean";
$q4_opt2 = "Atlantic Ocean";
$q4_opt3 = "Indian Ocean";
$q4_opt4 = "Arctic Ocean";
$q4_ans = "Pacific Ocean";

$q5 = "Which country has the most people?";
$q5_opt1 = "China";
$q5_opt2 = "India";
$q5_opt3 = "USA";
$q5_opt4 = "Russia";
$q5_ans = "China";

$q6 = "Mount Everest is part of which mountain range?";
$q6_opt1 = "Himalayas";
$q6_opt2 = "Andes";
$q6_opt3 = "Rockies";
$q6_opt4 = "Alps";
$q6_ans = "Himalayas";

$q7 = "What is the smallest country in the world by area?";
$q7_opt1 = "Vatican City";
$q7_opt2 = "Monaco";
$q7_opt3 = "San Marino";
$q7_opt4 = "Liechtenstein";
$q7_ans = "Vatican City";

$q8 = "Which line divides the Earth into the Northern and Southern Hemispheres?";
$q8_opt1 = "Equator";
$q8_opt2 = "Prime Meridian";
$q8_opt3 = "Tropic of Cancer";
$q8_opt4 = "Arctic Circle";
$q8_ans = "Equator";

$q9 = "What is the name of the largest island in the world?";
$q9_opt1 = "Greenland";
$q9_opt2 = "Australia";
$q9_opt3 = "Borneo";
$q9_opt4 = "Madagascar";
$q9_ans = "Greenland";

$q10 = "Which U.S. state is known as the 'Sunshine State'?";
$q10_opt1 = "Florida";
$q10_opt2 = "California";
$q10_opt3 = "Texas";
$q10_opt4 = "Arizona";
$q10_ans = "Florida";

// Randomize question order using a shuffled list of IDs
$question_order = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
shuffle($question_order);

// Number of scores calculator
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    if (isset($_POST['q1']) && $_POST['q1'] === $q1_ans) $score++;
    if (isset($_POST['q2']) && $_POST['q2'] === $q2_ans) $score++;
    if (isset($_POST['q3']) && $_POST['q3'] === $q3_ans) $score++;
    if (isset($_POST['q4']) && $_POST['q4'] === $q4_ans) $score++;
    if (isset($_POST['q5']) && $_POST['q5'] === $q5_ans) $score++;
    if (isset($_POST['q6']) && $_POST['q6'] === $q6_ans) $score++;
    if (isset($_POST['q7']) && $_POST['q7'] === $q7_ans) $score++;
    if (isset($_POST['q8']) && $_POST['q8'] === $q8_ans) $score++;
    if (isset($_POST['q9']) && $_POST['q9'] === $q9_ans) $score++;
    if (isset($_POST['q10']) && $_POST['q10'] === $q10_ans) $score++;

    echo '<div class="score">';
    echo "<h2>You scored $score out of 10</h2>";
    echo '<form method="get">';
    echo '<button type="submit" class="fxa">Retake Quiz</button><br>';
    echo '</form>';
    echo '<a href="../select.php" class="fxa">Change category</a>';
    echo '</div>';
} else {
    echo '<main class="mt">';
    echo '<header class="stick">';
    echo '<h2 class="sec">Quiz Whiz: Qeography Quiz</h2>';
    echo '<a href="../intro.php">back</a>';
    echo '</header>';
    echo '<form method="post">';

    // Manually display questions based on shuffled order
    foreach ($question_order as $num) {
        if ($num == 1) {
            echo "<section>";
            echo "<legend>$q1</legend>";
            echo "<label><input type='radio' name='q1' value='$q1_opt1' required> $q1_opt1</label><br>";
            echo "<label><input type='radio' name='q1' value='$q1_opt2'> $q1_opt2</label><br>";
            echo "<label><input type='radio' name='q1' value='$q1_opt3'> $q1_opt3</label><br>";
            echo "<label><input type='radio' name='q1' value='$q1_opt4'> $q1_opt4</label><br>";
            echo "</section>";
        }
        if ($num == 2) {
            echo "<section>";
            echo "<legend>$q2</legend>";
            echo "<label><input type='radio' name='q2' value='$q2_opt1' required> $q2_opt1</label><br>";
            echo "<label><input type='radio' name='q2' value='$q2_opt2'> $q2_opt2</label><br>";
            echo "<label><input type='radio' name='q2' value='$q2_opt3'> $q2_opt3</label><br>";
            echo "<label><input type='radio' name='q2' value='$q2_opt4'> $q2_opt4</label><br>";
            echo "</section>";
        }
        if ($num == 3) {
            echo "<section>";
            echo "<legend>$q3</legend>";
            echo "<label><input type='radio' name='q3' value='$q3_opt1' required> $q3_opt1</label><br>";
            echo "<label><input type='radio' name='q3' value='$q3_opt2'> $q3_opt2</label><br>";
            echo "<label><input type='radio' name='q3' value='$q3_opt3'> $q3_opt3</label><br>";
            echo "<label><input type='radio' name='q3' value='$q3_opt4'> $q3_opt4</label><br>";
            echo "</section>";
        }
        if ($num == 4) {
            echo "<section>";
            echo "<legend>$q4</legend>";
            echo "<label><input type='radio' name='q4' value='$q4_opt1' required> $q4_opt1</label><br>";
            echo "<label><input type='radio' name='q4' value='$q4_opt2'> $q4_opt2</label><br>";
            echo "<label><input type='radio' name='q4' value='$q4_opt3'> $q4_opt3</label><br>";
            echo "<label><input type='radio' name='q4' value='$q4_opt4'> $q4_opt4</label><br>";
            echo "</section>";
        }
        if ($num == 5) {
            echo "<section>";
            echo "<legend>$q5</legend>";
            echo "<label><input type='radio' name='q5' value='$q5_opt1' required> $q5_opt1</label><br>";
            echo "<label><input type='radio' name='q5' value='$q5_opt2'> $q5_opt2</label><br>";
            echo "<label><input type='radio' name='q5' value='$q5_opt3'> $q5_opt3</label><br>";
            echo "<label><input type='radio' name='q5' value='$q5_opt4'> $q5_opt4</label><br>";
            echo "</section>";
        }
        if ($num == 6) {
            echo "<section>";
            echo "<legend>$q6</legend>";
            echo "<label><input type='radio' name='q6' value='$q6_opt1' required> $q6_opt1</label><br>";
            echo "<label><input type='radio' name='q6' value='$q6_opt2'> $q6_opt2</label><br>";
            echo "<label><input type='radio' name='q6' value='$q6_opt3'> $q6_opt3</label><br>";
            echo "<label><input type='radio' name='q6' value='$q6_opt4'> $q6_opt4</label><br>";
            echo "</section>";
        }

        if ($num == 7) {
            echo "<section>";
            echo "<legend>$q7</legend>";
            echo "<label><input type='radio' name='q7' value='$q7_opt1' required> $q7_opt1</label><br>";
            echo "<label><input type='radio' name='q7' value='$q7_opt2'> $q7_opt2</label><br>";
            echo "<label><input type='radio' name='q7' value='$q7_opt3'> $q7_opt3</label><br>";
            echo "<label><input type='radio' name='q7' value='$q7_opt4'> $q7_opt4</label><br>";
            echo "</section>";
        }
        if ($num == 8) {
            echo "<section>";
            echo "<legend>$q8</legend>";
            echo "<label><input type='radio' name='q8' value='$q8_opt1' required> $q8_opt1</label><br>";
            echo "<label><input type='radio' name='q8' value='$q8_opt2'> $q8_opt2</label><br>";
            echo "<label><input type='radio' name='q8' value='$q8_opt3'> $q8_opt3</label><br>";
            echo "<label><input type='radio' name='q8' value='$q8_opt4'> $q8_opt4</label><br>";
            echo "</section>";
        }
        if ($num == 9) {
            echo "<section>";
            echo "<legend>$q9</legend>";
            echo "<label><input type='radio' name='q9' value='$q9_opt1' required> $q9_opt1</label><br>";
            echo "<label><input type='radio' name='q9' value='$q9_opt2'> $q9_opt2</label><br>";
            echo "<label><input type='radio' name='q9' value='$q9_opt3'> $q9_opt3</label><br>";
            echo "<label><input type='radio' name='q9' value='$q9_opt4'> $q9_opt4</label><br>";
            echo "</section>";
        }
        if ($num == 10) {
            echo "<section>";
            echo "<legend>$q10</legend>";
            echo "<label><input type='radio' name='q10' value='$q10_opt1' required> $q10_opt1</label><br>";
            echo "<label><input type='radio' name='q10' value='$q10_opt2'> $q10_opt2</label><br>";
            echo "<label><input type='radio' name='q10' value='$q10_opt3'> $q10_opt3</label><br>";
            echo "<label><input type='radio' name='q10' value='$q10_opt4'> $q10_opt4</label><br>";
            echo "</section>";
        }
    }

    echo '<button type="submit" name="submit" class="fxa">Submit Answers</button>';
    echo '</form>';
    echo '</main>';
}
?>
</body>
</html>