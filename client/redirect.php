<!DOCTYPE html>
<html>
<head>
    <title>Redirecting...</title>
</head>
<body>
    <script>
        // Display alert message
        alert("Account created succesfully. Please log in to continue.");

        // Redirect after a delay (e.g., 3 seconds)
        setTimeout(function() {
            window.location = 'login.php';
        }, 1000); // Adjust the delay as needed
    </script>
</body>
</html>
