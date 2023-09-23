<?php
require './configs/configs.php';

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
    $middlename = mysqli_real_escape_string($conn, $_POST["middlename"]);
    $address = mysqli_real_escape_string($conn, $_POST["address"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $birthday = mysqli_real_escape_string($conn, $_POST["bday"]);
    $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
    $disabilities = mysqli_real_escape_string($conn, $_POST["disabilities"]);
    $photo = $_FILES["photo"]["name"];
    $uploadDirectory = 'C:\xampp\htdocs\e_gabay\pictures of users';

    // Get the temporary file name
    $tempPhoto = $_FILES["photo"]["tmp_name"];

    // Generate a unique name for the uploaded photo
    $photo = uniqid() . '_' . $_FILES["photo"]["name"];

    // Move the uploaded file to the desired directory
    if (move_uploaded_file($tempPhoto, $uploadDirectory . $photo)) {
        // File successfully uploaded

        // Use prepared statements to prevent SQL injection
        $stmt = mysqli_prepare($conn, "INSERT INTO register (username, firstname, middlename, address, password, birthday, lastname, gender, disabilities, photo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ssssssssss", $username, $firstname, $middlename, $address, $password, $birthday, $lastname, $gender, $disabilities, $photo);

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_close($stmt);
                mysqli_close($conn);
                
                // Redirect to login.php after successful registration
                header("Location: login.html");
                exit();
            } else {
                echo "Error: " . mysqli_error($conn);
            }
            
            // JavaScript to display the Swal message
            echo '<div class="notification success">
            Registration successful! You have successfully registered.
        </div>';
            
        } else {
            echo "Error preparing SQL statement: " . mysqli_error($conn);
        }
    } else {
        echo "Error uploading file.";
    }
}
?>
