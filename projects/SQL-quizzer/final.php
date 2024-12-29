<?php 
    // Start the session
    session_start(); 
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
            <h2>You're done!</h2>
            <p>Congrats! You have completed the test.</p>
            <p>Final score: <?php echo $_SESSION['score']; ?></p>
            <a href="question?n=1" class="start">Take again!</a>
            <a href="add-question" id="add_question" class="start">Add Question</a>
        </div><!-- end .container -->
    </main><!-- end main -->
    <?php include 'footer.php' ?>
</body>
</html>
<?php
    // Destroy the session.
    session_destroy();
?>