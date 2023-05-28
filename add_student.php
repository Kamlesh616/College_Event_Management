<?php
// Include the database connection file or any necessary classes
include_once 'classes/db1.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $usn = $_POST['usn'];
    $name = $_POST['name'];
    $branch = $_POST['branch'];
    $sem = $_POST['sem'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $college = $_POST['college'];
    $event = $_POST['event'];

    // Perform the necessary validation and sanitization on the form data

    // Example: Insert the new student into the database
    $insertQuery = "INSERT INTO students (usn, name, branch, sem, email, phone, college, event) VALUES ('$usn', '$name', '$branch', '$sem', '$email', '$phone', '$college', '$event')";
    mysqli_query($conn, $insertQuery);

    // Redirect to the student details page after successful insertion
    header("Location: stu_details.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>cems</title>
    <title></title>
    <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->

</head>

<body>
    <?php include 'utils/adminHeader.php'?>
    <div class="content">
        <div class="container">
            <h1>Add Student</h1>
            <form method="POST" action="">
                <div class="mb-3">
                    <label for="usn" class="form-label">USN</label>
                    <input type="text" class="form-control" id="usn" name="usn" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="branch" class="form-label">Branch</label>
                    <input type="text" class="form-control" id="branch" name="branch" required>
                </div>
                <div class="mb-3">
                    <label for="sem" class="form-label">Sem</label>
                    <input type="text" class="form-control" id="sem" name="sem" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="mb-3">
                    <label for="college" class="form-label">College</label>
                    <input type="text" class="form-control" id="college" name="college" required>
                </div>
                <div class="mb-3">
                    <label for="event" class="form-label">Event</label>
                    <input type="text" class="form-control" id="event" name="event" required>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
    <?php include 'utils/footer.php'; ?>
</body>

</html>
