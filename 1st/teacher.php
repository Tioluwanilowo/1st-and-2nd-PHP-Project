<!DOCTYPE html>
<html>
<head>
  <title>Teacher Dashboard</title>
</head>
<body>
  <?php
  // Check if the teacher is logged in
  session_start();
  if (!isset($_SESSION['teacher'])) {
    header('Location: login.php'); // Redirect to login page if not logged in
    exit();
  }
  ?>

  <h1>Welcome, <?php echo $_SESSION['teacher']; ?>!</h1>

  <h2>Add Quiz</h2>
  <form method="POST" action="add_quiz.php">
    <label for="quiz_name">Quiz Name:</label>
    <input type="text" id="quiz_name" name="quiz_name" required><br>
    <input type="submit" value="Add Quiz">
  </form>

  <h2>Add Question</h2>
  <form method="POST" action="add_question.php">
    <label for="quiz_select">Select Quiz:</label>
    <select id="quiz_select" name="quiz_id" required>
      <!-- Fetch and display the list of available quizzes from the database -->
      <?php
      $quizzes = array(
        // Fetch the list of quizzes from the database
        // You can use your preferred method to retrieve the quizzes, e.g., from a database table
        // Example: SELECT quiz_id, quiz_name FROM quizzes WHERE teacher_id = $teacherId
        // Iterate over the result and generate the options dynamically
        array('quiz_id' => 1, 'quiz_name' => 'Math Quiz 1'),
        array('quiz_id' => 2, 'quiz_name' => 'Science Quiz 1'),
        array('quiz_id' => 3, 'quiz_name' => 'English Quiz 1')
      );

      foreach ($quizzes as $quiz) {
        echo "<option value='{$quiz['quiz_id']}'>{$quiz['quiz_name']}</option>";
      }
      ?>
    </select><br>
    <label for="question">Question:</label>
    <textarea id="question" name="question" required></textarea><br>
    <label for="option1">Option 1:</label>
    <input type="text" id="option1" name="option1" required><br>
    <label for="option2">Option 2:</label>
    <input type="text" id="option2" name="option2" required><br>
    <label for="option3">Option 3:</label>
    <input type="text" id="option3" name="option3" required><br>
    <label for="option4">Option 4:</label>
    <input type="text" id="option4" name="option4" required><br>
    <label for="correct_option">Correct Option:</label>
    <select id="correct_option" name="correct_option" required>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
      <option value="4">Option 4</option>
    </select><br>
    <input type="submit" value="Add Question">
  </form>
</body>
</html>
