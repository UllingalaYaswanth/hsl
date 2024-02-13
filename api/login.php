<?php
require("../db/dbCon.php");

// Assuming that the loginid is not needed in this scenario
// $loginid = htmlspecialchars(strip_tags($_POST['loginid']));

$uh_password = htmlspecialchars(strip_tags($_POST['password']));
$password = password_hash($uh_password, PASSWORD_BCRYPT);
$role = htmlspecialchars(strip_tags($_POST['role']));

// echo "Password:".$uh_password."\nRole:".$role;
// echo "\nHashed Password:".$password; // Echo the hashed password

$query = "SELECT * FROM login WHERE role = :role";
$stmt = $con->prepare($query);
$stmt->bindParam(':role', $role);
$stmt->execute();
$num_rows = $stmt->rowCount();

if ($num_rows > 0) {
    $loginArray = $stmt->fetch(PDO::FETCH_ASSOC);

    if (password_verify($uh_password, $loginArray['password'])) {
        switch ($loginArray['role']) {
            case "Admin":
                // Redirect to the specified page
                header("Location: ../hsl/welcome_page.html");
                exit(); // Make sure to exit after redirection
                break;
            case "user":
                // Redirect to the specified page
                header("Location: ../FRS_Moderater/html/Live.html");
                exit(); // Make sure to exit after redirection
                break;
            // Add more cases as needed
        }
    } else {
        header("Location: ../index.php?msg=wrong_pwd"); // Append message to URL
    }
} else {
    header("Location: ../index.php?msg=not");
}
?>