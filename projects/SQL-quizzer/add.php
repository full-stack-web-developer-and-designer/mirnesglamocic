<?php include 'database.php'; ?>
<?php
$error = false;
$question_text = '';
if(isset($_POST['submit'])){
    if(empty($_POST['question_number'] && $_POST['question_text'] && $_POST['choice1'] && $_POST['choice2'] && $_POST['correct_choice'] )){
        $error = "All marked fields* is required!";
    }else{
    // Get post variables
    $question_number = $_POST['question_number'];
    $question_text = $_POST['question_text'];
    $correct_choice = $_POST['correct_choice'];
    // Choices array
    $choices = array();
    $choices[1] = $_POST['choice1'];
    $choices[2] = $_POST['choice2'];
    $choices[3] = $_POST['choice3'];
    $choices[4] = $_POST['choice4'];
    $choices[5] = $_POST['choice5'];

    // Question Query
    $query = "INSERT INTO `questions` (question_number, text)
            VALUES('$question_number', '$question_text')";

    // Run Query
    $insert_row = $mysqli->query($query) or die($mysqli->error . __LINE__);

    // Validate insert
    if($insert_row){
        foreach($choices as $choice => $value){
            if($value !=''){
                
                if($correct_choice == $choice){
                    $is_correct = 1;
                } else {
                    $is_correct = 0;
                }
                // Choice query
                $query = "INSERT INTO `choices`(question_number, is_correct, text)
                        VALUES('$question_number', '$is_correct', '$value')";

                // Run query
                $insert_row = $mysqli->query($query) or die($mysqli->error . __LINE__);

                // Validate inserts
                if($insert_row){
                    continue;
                } else {
                    die('Error: (' . $mysqli->errorno . ') ' . $mysqli->error);
                }
            } 
        } 
        $msg = "Question has been added";
    } 
   
}
}
   /* 
    * Get total questions
    */

    $query = "SELECT * FROM `questions`";
    //Get results
    $results = $mysqli->query($query) or die($mysqli->error . __LINE__);
    $total = $results->num_rows;
    $next = $total+1;
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
            <h2>Add A Question</h2>
            <?php
                if(isset($msg)){
                    echo '<h2 class="success">'.$msg.'</h2>';
                } else{
                    echo '<h2 class="error">'.$error.'</h2>';
                }
                ?>
            <form action="add-question" method="post" id="test_SQL">
                <p><label for="question_number">Question Number: *</label><input type="number" value="<?php echo $next;?>" name="question_number" id="question_number"></p>
                <p><label for="question_text">Question: *</label><input type="text" name="question_text" id="question_text" value="<?php if (isset($_POST['question_text'])) echo $_POST['question_text']; ?>"></p>
                <p><label for="choice1">Choice #1: *</label><input type="text" name="choice1" id="choice1" value="<?php if (isset($_POST['choice1'])) echo $_POST['choice1']; ?>"></p>
                <p><label for="choice2">Choice #2: *</label><input type="text" name="choice2" id="choice2" value="<?php if (isset($_POST['choice2'])) echo $_POST['choice2']; ?>"></p>
                <p><label for="choice3">Choice #3:</label><input type="text" name="choice3" id="choice3" value="<?php if (isset($_POST['choice3'])) echo $_POST['choice3']; ?>"></p>
                <p><label for="choice4">Choice #4:</label><input type="text" name="choice4" id="choice4" value="<?php if (isset($_POST['choice4'])) echo $_POST['choice4']; ?>"></p>
                <p><label for="choice5">Choice #5:</label><input type="text" name="choice5" id="choice5"value="<?php if (isset($_POST['choice5'])) echo $_POST['choice5']; ?>"></p>
                <p><label for="correct_choice">Correct Choice Number: *</label><input type="number" name="correct_choice" id="correct_choice" value="<?php if (isset($_POST['correct_choice'])) echo $_POST['correct_choice']; ?>"></p>
                <p><input type="submit" name="submit" value="Submit"></p>
                <a href="start-quiz" id="add_question" class="start">Try Quiz</a>
            </form>
        </div>
    </main>
    <?php include 'footer.php' ?>
</body>
</html>