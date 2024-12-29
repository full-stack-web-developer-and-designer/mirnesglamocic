<?php
    include 'database.php';
?>
<?php session_start(); ?>
<?php
/*
* Get Total Questions
*/
$query = "SELECT * FROM questions";
// Get results
$results = $mysqli->query($query) or die($mysqli->error . __LINE__);
$total = $results->num_rows;
?>
<!DOCTYPE html>
<html lang="en">
<?php
    include 'head.php';
?>
<body>
    <header>
        <div class="container">
            <h1>SQL Quizzer</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <h2>Test your SQL knowledge</h2>
            <p>This is a multiple choice quiz to test your knowledge of SQL</p>
            <ul>
                <li><strong>Number of Questions: </strong><?php echo $total; ?></li>
                <li><strong>Type: </strong>Multiple choice</li>
                <li><strong>Estimated Time: </strong><?php echo $total * .5; ?> minutes</li>
            </ul>
            <a href="start-quiz" class="start">Start Quiz</a>
            <a href="add-question" class="start">Add Question</a>
        </div>
    </main>
    <?php include_once 'footer.php' ?>
</body>
</html>