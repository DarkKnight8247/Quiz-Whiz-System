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
$q1 = "What is the largest planet in our solar system?";
$q1_opt1 = "Earth";
$q1_opt2 = "Mars";
$q1_opt3 = "Jupiter"; 
$q1_opt4 = "Saturn"; 
$q1_ans = "Jupiter";

$q2 = "How many hearts does an octopus have?";
$q2_opt1 = "7";
$q2_opt2 = "5";
$q2_opt3 = "3";
$q2_opt4 = "4";
$q2_ans = "3";

$q3 = "How many chromosomes does a human have?";
$q3_opt1 = "99";
$q3_opt2 = "52";
$q3_opt3 = "46";
$q3_opt4 = "96";
$q3_ans = "46";

$q4 = "What type of organ does not develop cancer cells?";
$q4_opt1 = "Liver";
$q4_opt2 = "Heart";
$q4_opt3 = "Lungs";
$q4_opt4 = "Pancreas";
$q4_ans = "Heart";

$q5 = "What chemical is commonly found in the atmosphere?";
$q5_opt1 = "Methane";
$q5_opt2 = "Nitrogen";
$q5_opt3 = "Oxygen";
$q5_opt4 = "Helium";
$q5_ans = "Nitrogen";

$q6 = "What planet is known as the Red Planet?";
$q6_opt1 = "Mars";
$q6_opt2 = "Jupiter";
$q6_opt3 = "Saturn";
$q6_opt4 = "Venus";
$q6_ans = "Mars";

$q7 = "What is the chemical symbol for water?";
$q7_opt1 = "CO₂";
$q7_opt2 = "H₂O";
$q7_opt3 = "O₂";
$q7_opt4 = "NaCl";
$q7_ans = "H₂O";

$q8 = "What gas do humans breathe in to survive?";
$q8_opt1 = "Carbon Dioxide";
$q8_opt2 = "Nitrogen";
$q8_opt3 = "Oxygen";
$q8_opt4 = "Helium";
$q8_ans = "Oxygen";

$q9 = "What force keeps us on the ground and prevents us from floating into space?";
$q9_opt1 = "Magnetism";
$q9_opt2 = "Friction";
$q9_opt3 = "Gravity";
$q9_opt4 = "Inertia";
$q9_ans = "Gravity";

$q10 = "Which part of the plant conducts photosynthesis?";
$q10_opt1 = "Roots";
$q10_opt2 = "Stem";
$q10_opt3 = "Leaves";
$q10_opt4 = "Flowers";
$q10_ans = "Leaves";

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
    echo '<h2 class="sec">Quiz Whiz: Science Quiz</h2>';
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