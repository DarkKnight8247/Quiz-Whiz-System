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
$q1 = "Which ancient civilization built the Great Pyramid of Giza?";
$q1_opt1 = "Ancient Egyptians";
$q1_opt2 = "Mesopotamians";
$q1_opt3 = "Greeks";
$q1_opt4 = "Romans";
$q1_ans = "Ancient Egyptians";

$q2 = "In which year did Christopher Columbus first reach the Americas?";
$q2_opt1 = "1492";
$q2_opt2 = "1498";
$q2_opt3 = "1500";
$q2_opt4 = "1488";
$q2_ans = "1492";

$q3 = "Who was the first Emperor of China?";
$q3_opt1 = "Qin Shi Huang";
$q3_opt2 = "Sun Yat-sen";
$q3_opt3 = "Kublai Khan";
$q3_opt4 = "Emperor Wu";
$q3_ans = "Qin Shi Huang";

$q4 = "Which event marked the beginning of World War I?";
$q4_opt1 = "Assassination of Archduke Franz Ferdinand";
$q4_opt2 = "German invasion of Poland";
$q4_opt3 = "Russian Revolution";
$q4_opt4 = "Treaty of Versailles";
$q4_ans = "Assassination of Archduke Franz Ferdinand";

$q5 = "Who wrote 'The Art of War'?";
$q5_opt1 = "Sun Tzu";
$q5_opt2 = "Confucius";
$q5_opt3 = "Lao Tzu";
$q5_opt4 = "Emperor Wu";
$q5_ans = "Sun Tzu";

$q6 = "Which city was the capital of the Byzantine Empire?";
$q6_opt1 = "Constantinople";
$q6_opt2 = "Rome";
$q6_opt3 = "Athens";
$q6_opt4 = "Alexandria";
$q6_ans = "Constantinople";

$q7 = "Who was the first woman to win a Nobel Prize?";
$q7_opt1 = "Marie Curie";
$q7_opt2 = "Mother Teresa";
$q7_opt3 = "Pearl Buck";
$q7_opt4 = "Jane Addams";
$q7_ans = "Marie Curie";

$q8 = "Which civilization developed the first known system of writing?";
$q8_opt1 = "Sumerians";
$q8_opt2 = "Egyptians";
$q8_opt3 = "Chinese";
$q8_opt4 = "Indus Valley";
$q8_ans = "Sumerians";

$q9 = "Who was the first President of the United States?";
$q9_opt1 = "George Washington";
$q9_opt2 = "Thomas Jefferson";
$q9_opt3 = "John Adams";
$q9_opt4 = "Benjamin Franklin";
$q9_ans = "George Washington";

$q10 = "Which empire was known as 'the empire on which the sun never sets'?";
$q10_opt1 = "British Empire";
$q10_opt2 = "Roman Empire";
$q10_opt3 = "Mongol Empire";
$q10_opt4 = "Spanish Empire";
$q10_ans = "British Empire";

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
    echo '<h2 class="sec">Quiz Whiz: History Quiz</h2>';
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