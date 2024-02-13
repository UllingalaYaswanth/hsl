<?php

require("../db/dbCon.php");

$result = [];
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Get form data
        echo var_dump($_POST);

        $firstName = $_POST["first_name"];
        $lastName = $_POST["last_name"];
        $pass = $_POST["pass"];
        $dsgn = $_POST["dsgn"];
        $validity = $_POST["validity"];
        $address = $_POST["address"];
        $gender = $_POST["gender"];
        $dob = $_POST["dob"];
        $mobile = $_POST["mobile"];
        $email = $_POST["email"];
        $bloodGroup = $_POST["blood_group"];
        $upload_image = $_POST["image"];

        // Handle image upload
        $uploadDir = "../uploads";  // Update this with the actual path
        $uploadFile = $uploadDir . basename($_FILES['image']['']);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            // Image upload successful
            $upload_image = $uploadFile;
        } else {
            // Image upload failed
            $upload_image = null;
        }

        // Insert data into the database
        $stmt = $con->prepare("INSERT INTO hsl_form (first_name, last_name, emp_id, dept, aadhar, address, gender, dob, mobile, email, blood_group, image) 
                              VALUES (:firstName, :lastName, :empId, :dept, :aadhar, :address, :gender, :dob, :mobile, :email, :bloodGroup, :upload_image)");

        // Bind parameters
        $stmt->bindParam(":first_name", $firstName);
        $stmt->bindParam(":last_name", $lastName);
        $stmt->bindParam(":emp_id", $empId);
        $stmt->bindParam(":dept", $dept);
        $stmt->bindParam(":aadhar", $aadhar);
        $stmt->bindParam(":address", $address);
        $stmt->bindParam(":gender", $gender);
        $stmt->bindParam(":dob", $dob);
        $stmt->bindParam(":mobile", $mobile);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":blood_group", $bloodGroup);
        $stmt->bindParam(":image", $upload_image);

        $stmt->execute();

        // Return a success message
        echo "Success: Registration successful!";
    } catch (PDOException $e) {
        // Return a detailed error message
        echo "Error: " . $e->getMessage();
    }
} else {
    // If the form is not submitted, return an error message
    echo "Error: Form not submitted.";
}
?>
