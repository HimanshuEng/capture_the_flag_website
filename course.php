<?php
    include("connection.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $challenge_id = $_POST["challenge_id"];
    $flag = $_POST["flag"];
    $username = $_SESSION['username']; // Assuming you have user_id available from session or POST data

    // Retrieve the challenge details
    $sql = "SELECT * FROM challenge_table WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $challenge_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $correct_flag = $row['answer']; // Assuming the correct answer is stored in 'answer' column
        $points = $row['points']; // Assuming the points for the challenge are stored in 'points' column

        // Verify if the provided flag matches the correct answer
        if ($flag === $correct_flag) {
            // Update the user's score
            $update_sql = "UPDATE signup SET score = score + ? WHERE username = ?";
            $update_stmt = $conn->prepare($update_sql);
            $update_stmt->bind_param("is", $points, $username);
            if ($update_stmt->execute()) {
                echo "<p style='color: white;'>Score updated successfully!</p>";
            } else {
                die("Error updating the score: " . $conn->error);
            }
        } else {
            echo "<p style='color: red;'>Incorrect flag.</p>";
        }
    } else {
        echo "<p style='color: red;'>Challenge not found.</p>";
    }

    $stmt->close();
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Category Filter in JS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/course.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="main-container">
    <h2>CTF Categories</h2>
    <div class="filter-container">
        <div class="category-head">
            <ul>
                <div class="category-title active" id="all">
                    <li>All</li>
                </div>
                <div class="category-title" id="culture">
                    <li>Web Exploitation</li>
                </div>
                <div class="category-title" id="politics">
                    <li>Cryptography</li>
                </div>
                <div class="category-title" id="finance">
                    <li>Binary Exploitation</li>
                </div>
                <div class="category-title" id="business">
                    <li>Forensics</li>
                </div>
                <div class="category-title" id="sports">
                    <li>General Skills</li>
                </div>
            </ul>
        </div>
    </div>

    <div style="display: grid;
        grid-template-columns: repeat(3, 1fr); /* Three columns of equal width */
        grid-gap: 20px;">

    <!-- PHP code to fetch challenge list -->
    <?php
    // PHP script to fetch all challenge names and points from the database

    // Query to fetch all challengeName and points
    $sql = "SELECT id, challengeName, points,description,hint,category FROM  challenge_table";
    $result = $conn->query($sql);

    if ($result === false) {
        die("Error executing the query: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        // Output data of each row
        $i=0;
        while($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $challengeName = $row["challengeName"];
            $points = $row["points"];
            $hint = $row["hint"];
            $description = $row["description"];
            $category = $row["category"];
            $i++;
    ?>
            <div class="istcont">
                <div class="maincontainer" style="width: 450px;">
                    <div class="topic">
                        <p><?php echo $category; ?></p>
                    </div>
                    <div class="content">
                        <h1><?php echo $challengeName; ?></h1> <!-- Display challenge name -->
                    </div>
                    <div class="point">
                        <p>POINT: <?php echo $points; ?></p> <!-- Display points -->
                    </div>
                    <div class="button-container">
                        <!-- Button -->
                        <button class="open-modal-button" data-modal-target="#modal<?php echo $i; ?>" >CLICK</button>
                    </div>
                </div>
            </div>
            <div class="modal" id="modal<?php echo $i; ?>">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close-button" data-close-button>&times;</span>
                <h2 id="modal-title"><?php echo $challengeName; ?></h2>
                <p>Point: <span id="modal-points"><?php echo $points; ?></span></p>
            </div>
            <form class="modal-body" method="post">
                <h2>Description</h2>
                <p><?php echo $description; ?></p>
                <small>hint</small>
                <div class="hint">
                    <p>HINT:<?php echo $hint; ?></p>
                    <!-- <input type="button" value="hint" id="hint"><br>  -->
                    <div class="textfield">
                        <input type="hidden" name="challenge_id" value="<?= $id ?>">
                        <input type="text" name="flag">
                        <input type="submit" value="SUBMIT FLAG" id="btn">
                    </div>
                </div>
            </form>
        </div>
    </div> 
    <?php
        }
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>
    </div>
    
    <div id="overlay"></div>
</div>


<script src="js/course.js"></script>

</body>
</html>
