<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the record
    $sql = "DELETE FROM `crudt` WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {

        header("Location: display.php");
        // echo "Deleted successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>