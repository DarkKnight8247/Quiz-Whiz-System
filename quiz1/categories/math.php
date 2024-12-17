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
$q1 = "What is 5 + 7?";
$q1_opt1 = "12";
$q1_opt2 = "10";
$q1_opt3 = "13";
$q1_opt4 = "11";
$q1_ans = "12";

$q2 = "How many sides does a triangle have?";
$q2_opt1 = "3";
$q2_opt2 = "4";
$q2_opt3 = "5";
$q2_opt4 = "6";
$q2_ans = "3";

$q3 = "What is 4 × 5?";
$q3_opt1 = "20";
$q3_opt2 = "16";
$q3_opt3 = "18";
$q3_opt4 = "22";
$q3_ans = "20";

$q4 = "What is half of 10?";
$q4_opt1 = "5";
$q4_opt2 = "4";
$q4_opt3 = "6";
$q4_opt4 = "3";
$q4_ans = "5";

$q5 = "What comes after 29?";
$q5_opt1 = "30";
$q5_opt2 = "31";
$q5_opt3 = "28";
$q5_opt4 = "32";
$q5_ans = "30";

$q6 = "How many minutes are in 1 hour?";
$q6_opt1 = "60";
$q6_opt2 = "50";
$q6_opt3 = "45";
$q6_opt4 = "30";
$q6_ans = "60";

$q7 = "What is 15 - 8?";
$q7_opt1 = "7";
$q7_opt2 = "6";
$q7_opt3 = "8";
$q7_opt4 = "5";
$q7_ans = "7";

$q8 = "How many corners does a square have?";
$q8_opt1 = "4";
$q8_opt2 = "3";
$q8_opt3 = "5";
$q8_opt4 = "6";
$q8_ans = "4";

$q9 = "What is 3 × 3?";
$q9_opt1 = "9";
$q9_opt2 = "6";
$q9_opt3 = "12";
$q9_opt4 = "8";
$q9_ans = "9";

$q10 = "If you have 4 apples and get 3 more, how many do you have?";
$q10_opt1 = "7";
$q10_opt2 = "6";
$q10_opt3 = "8";
$q10_opt4 = "5";
$q10_ans = "7";

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
    echo '<h2 class="sec">Quiz Whiz: Math Quiz</h2>';
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