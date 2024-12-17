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
$q1 = "What color was the famous whale in the book 'Moby Dick'?";
$q1_opt1 = "White";
$q1_opt2 = "Blue";
$q1_opt3 = "Gray";
$q1_opt4 = "Black";
$q1_ans = "White";

$q2 = "Who painted the Mona Lisa?";
$q2_opt1 = "Leonardo da Vinci";
$q2_opt2 = "Van Gogh";
$q2_opt3 = "Picasso";
$q2_opt4 = "Rembrandt";
$q2_ans = "Leonardo da Vinci";

$q3 = "Which animal appears in the title of George Orwell's famous book 'Animal _'?";
$q3_opt1 = "Farm";
$q3_opt2 = "House";
$q3_opt3 = "Park";
$q3_opt4 = "Land";
$q3_ans = "Farm";

$q4 = "What did Vincent van Gogh famously cut off?";
$q4_opt1 = "His ear";
$q4_opt2 = "His finger";
$q4_opt3 = "His hair";
$q4_opt4 = "His toe";
$q4_ans = "His ear";

$q5 = "Who wrote Romeo and Juliet?";
$q5_opt1 = "William Shakespeare";
$q5_opt2 = "Charles Dickens";
$q5_opt3 = "Mark Twain";
$q5_opt4 = "Jane Austen";
$q5_ans = "William Shakespeare";

$q6 = "What does Harry Potter wear that makes him special?";
$q6_opt1 = "Glasses";
$q6_opt2 = "Hat";
$q6_opt3 = "Scarf";
$q6_opt4 = "Cape";
$q6_ans = "Glasses";

$q7 = "What color was Little Red Riding Hood's hood?";
$q7_opt1 = "Red";
$q7_opt2 = "Blue";
$q7_opt3 = "Green";
$q7_opt4 = "Yellow";
$q7_ans = "Red";

$q8 = "Which famous artist painted with dots?";
$q8_opt1 = "Georges Seurat";
$q8_opt2 = "Van Gogh";
$q8_opt3 = "Da Vinci";
$q8_opt4 = "Picasso";
$q8_ans = "Georges Seurat";

$q9 = "What kind of book is a comic book?";
$q9_opt1 = "Picture book";
$q9_opt2 = "Novel";
$q9_opt3 = "Dictionary";
$q9_opt4 = "Textbook";
$q9_ans = "Picture book";

$q10 = "What do artists paint on?";
$q10_opt1 = "Canvas";
$q10_opt2 = "Paper";
$q10_opt3 = "Wood";
$q10_opt4 = "Glass";
$q10_ans = "Canvas";

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
    echo '<h2 class="sec">Quiz Whiz: Arts and Literature Quiz</h2>';
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