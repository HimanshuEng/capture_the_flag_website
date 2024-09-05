<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "ctf"; // Changed database name

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['challengeName'], $_POST['points'], $_POST['description'], $_POST['hint'], $_POST['answer'], $_POST['category'])) {
        $challengeName = $_POST['challengeName'];
        $points = $_POST['points'];
        $description = $_POST['description'];
        $hint = $_POST['hint'];
        $answer = $_POST['answer'];
        $category = $_POST['category']; // Added category field

        $stmt = $conn->prepare("INSERT INTO challenge_table (challengeName, points, description, hint, answer, category) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sissss", $challengeName, $points, $description, $hint, $answer, $category);

        if ($stmt->execute()) {
            echo "Challenge added successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "One or more form fields are empty.";
    }
} else {
    echo "Form is not submitted.";
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Challenge</title>
    <link rel="stylesheet" href="css/chlg.css">
</head>
<body>
    <div class="container">
        <h2>Add Challenge</h2>
        <form id="challengeForm" method="post">
            <div class="form-group">
                <label for="challengeName">Challenge Name</label>
                <input type="text" id="challengeName" name="challengeName" required>
            </div>
            <div class="form-group">
                <label for="points">Points</label>
                <input type="number" id="points" name="points" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="hint">Hint</label>
                <input type="text" id="hint" name="hint" required>
            </div>
            <div class="form-group">
                <label for="answer">Answer</label>
                <input type="text" id="answer" name="answer" required>
            </div>
            <div class="form-group">
                <label for="category">Category</label> <!-- Changed id to category -->
                <input type="text" id="category" name="category" required> <!-- Added category field -->
            </div>
            <button type="submit">Submit</button>
        </form>
        <div id="successMessage" style="display: none;">Challenge added successfully</div>
    </div>
</body>
</html>
