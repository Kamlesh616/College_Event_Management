<?php
require_once 'classes/db1.php';

if (isset($_GET['event_id'])) {
    $event_id = $_GET['event_id'];

    // Perform any necessary validation/sanitization of the event_id

    // Delete the event from the database
    $deleteQuery = "DELETE FROM events WHERE event_id = '$event_id'";
    $deleteResult = mysqli_query($conn, $deleteQuery);

    if ($deleteResult) {
        // Event deleted successfully
        echo 'Event deleted successfully.';
    } else {
        // Error occurred while deleting the event
        echo 'Error deleting the event. Please try again.';
    }
} else {
    // Invalid or missing event_id parameter
    echo 'Invalid request. Please provide a valid event ID.';
}
?>
