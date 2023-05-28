<?php
include_once 'classes/db1.php';
$result = mysqli_query($conn,"SELECT * FROM events,registered r ,participent p WHERE events.event_id=r.event_id and r.usn = p.usn order by event_title");

// Check if the delete button is clicked
if (isset($_GET['delete'])) {
    $usn = $_GET['delete'];
    // Perform the delete operation for the corresponding student using the $usn value
    // You need to write the delete query or call a function to delete the student from the database
    // For example:
    // $deleteQuery = "DELETE FROM students WHERE usn = '$usn'";
    // mysqli_query($conn, $deleteQuery);
    // After deleting, you can redirect to the same page to update the table
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
            <h1>Student details</h1>
            <div class="mb-3">
                <a href="add_student.php" class="btn btn-primary">Add Student</a>
            </div>
            <?php
            if (mysqli_num_rows($result) > 0) {
            ?>
                <table class="table table-hover">
                    <tr>
                        <th>USN</th>
                        <th>Name</th>
                        <th>Branch</th>
                        <th>Sem</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>College</th>
                        <th>Event</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row["usn"]; ?></td>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["branch"]; ?></td>
                            <td><?php echo $row["sem"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                            <td><?php echo $row["phone"]; ?></td>
                            <td><?php echo $row["college"]; ?></td>
                            <td><?php echo $row["event_title"]; ?></td>
                            <td>
                                <!-- Add the delete button with a link that includes the student's USN -->
                                <a href="stu_details.php?delete=<?php echo $row["usn"]; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            <?php
            }
            else{
                echo "No result found";
            }
            ?>
        </div>
    </div>
    <?php include 'utils/footer.php'; ?>
</body>

</html>
