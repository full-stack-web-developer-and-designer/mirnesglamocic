<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
// Set question number
$number = (int) $_GET['n'];

/* 
* Get total choice
*/
$query = "SELECT * FROM `questions`";
//Get results    
$results = $mysqli->query($query) or die($mysqli->error . __LINE__);
$total = $results->num_rows;

/*
* Get Question
*/
$query = "SELECT * FROM `questions`
            WHERE question_number = $number";
// Get Result
$result = $mysqli->query($query) or die($mysqli->error . __LINE__);

$question = $result->fetch_assoc();

/*
* Get Choices
*/
$query = "SELECT * FROM `choices`
            WHERE question_number = $number";
// Get Result
$choices = $mysqli->query($query) or die($mysqli->error . __LINE__);

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
        </div><!-- end .container -->
    </header>
    <main>
        <div class="container">
            <div class="current">Question <?php echo $question['question_number']; ?> of <?php echo $total; ?></div>
            <p class="question">
                <?php echo $question['text']; ?>
            </p>
            <form method="POST" action="process.html">
                <ul class="choices">
                    <?php while($row = $choices->fetch_assoc()) : ?>
                        <li>        
                            <label>
                                <input type='radio' name='choice' value="<?php echo $row['id']; ?>"/><?php echo $row['text']; ?>
                            </label>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <input type="submit" value="submit">
                <input type="hidden" name="number" value="<?php echo $number; ?>"/>
            </form>
        </div><!-- end .container -->
    </main><!-- end main -->
    <?php include 'footer.php' ?>
</body>
</html>