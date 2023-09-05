<?php
include("connection.php");

if(isset($_POST['login'])){
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $stmt = $conn->prepare("SELECT * FROM tesst1 WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $hashedpassword = $row['password'];
        
        if(password_verify($password, $hashedpassword)){
            header("Location: welcome.php");
        } 
        else {
            echo '<script>
                window.location.href = "index.php";
                alert("Login failed. Invalid username or password");
            </script>';
        }
    } 
    else {
        echo '<script>
            window.location.href = "index.php";
            alert("Login failed. Invalid username or password");
        </script>';
    }
} 
else {
    echo '<script>
        window.location.href = "index.php";
        alert("Login failed. Invalid username or password");
    </script>';
}
