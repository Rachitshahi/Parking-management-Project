<?php
    session_start();
    include('include/dbcon.php');

    $space_id = $_POST['space_id'];
    
    $new_val = '1'; 
    $query = "UPDATE space SET status = 1 WHERE space_id = ?";
    

    // Prepare the statement
    if ($stmt = $conn->prepare($query)) {
        
        // Bind parameters (s for string, i for integer)
        $stmt->bind_param("i", $space_id);
        
        // Execute the statement
        if ($stmt->execute()) {

            $_SESSION['message'] = "Space booked successfully.";
            $_SESSION['message_type'] = "success";
        } else {
            $_SESSION['message'] = "Error updating record: " . $stmt->error;
            $_SESSION['message_type'] = "error";
        }
        
        // Close the statement
        $stmt->close();
    } else {
        $_SESSION['message'] = "Error preparing statement: " . $conn->error;
        $_SESSION['message_type'] = "error";
    }
    $










    // Close the connection
    $conn->close();
    
    // Redirect back to searchspace.php
    header("Location: myspace.php");
    $conn->close();
    exit();
    

    // Close the connection
    
    
?>