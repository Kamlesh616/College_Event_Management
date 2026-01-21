<!DOCTYPE html>
<html>
<head>
    <title>Registered Events</title>
    <!-- Add your CSS and other head elements here -->
</head>
<body>
    <?php
    require_once 'utils/header.php';
    require_once 'utils/styles.php';

    $usn = $_POST['usn'];

    include_once 'classes/db1.php';

    $result = mysqli_query($conn, "SELECT * FROM registered r, staff_coordinator s, event_info ef, student_coordinator st, events e WHERE e.event_id = ef.event_id AND e.event_id = s.event_id AND e.event_id = st.event_id AND r.usn = '$usn' AND r.event_id = e.event_id");
    ?>

    <div class="content">
        <div class="container">
            <h1>Registered Events</h1>
            <?php
            if (mysqli_num_rows($result) > 0) {
            ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Event Name</th>
                            <th>Student Co-ordinator</th>
                            <th>Staff Co-ordinator</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Location</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<tr>';
                            echo '<td>' . $row['event_title'] . '</td>';
                            echo '<td>' . $row['st_name'] . '</td>';
                            echo '<td>' . $row['name'] . '</td>';
                            echo '<td>' . $row['Date'] . '</td>';
                            echo '<td>' . $row['time'] . '</td>';
                            echo '<td>' . $row['location'] . '</td>';
                            echo '<td><a href="delete_event.php?event_id=' . $row['event_id'] . '">Delete</a></td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            <?php
            } else {
                echo 'Not Yet Registered for Any Events';
            }
            ?>
        </div>
    </div>

    <?php
    include 'utils/footer.php';
    ?>
</body>
</html>
