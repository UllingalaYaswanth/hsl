<!DOCTYPE html>
<html>
<head>
    <title>HSL PORTAL</title>
    <link rel="stylesheet" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #pwd {
            color: rgb(208, 255, 0);
            font-weight: bold;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <section>
        <img src="hsl-logo.png" class="icon">
    </section>
    <header>
        <h1>HINDUSTAN SHIPYARD LIMITED - PIDS</h1>
    </header>

    <main>
        <section class="login-container">
            <div id="user-icon">
                <span style="font-size: 36px; color: white;">&#128100;</span>
            </div>

            <form class="form" action="api/login.php" method="post">
                <h2>Login</h2>
                <label for="role" class="role-label"></label>
                <select class="form-input" name="role">
                    <option value="">Select a role*</option>
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                </select>
                <input type="password" name="password" value="" class="form-input" placeholder="Enter Password*" required>
                <!-- <input type="checkbox" style="color:white"> -->
                <!-- <label for="checkbox" style="color: white; margin-right: 80px;">Remember-me</label> -->
                <a href="pwd.html" style="color: #ffffff;" id="Forgot-password">Forgot Password?</a>
                
                <input class="login-btn" type="submit" name="login" value="Login">
                <?php
            if (isset($_GET['msg']) && $_GET['msg'] == "not") {
                echo '<p id ="error">You are not registered with us!</p>';
            } elseif (isset($_GET['msg']) && $_GET['msg'] == "wrong_pwd") {
                echo '<p id="pwd">Password Does Not Match!</p>';
            }
                ?>
            </form>
        </section>
    </main>
    
    <img src="ROSYS_LOGO.png" class="logo">
    <p class="text1">Powered by ROSYS</p>

    <!-- <script>
        function redirectToWelcome() {
            window.location.href = "welcome.html";
        }
    </script> -->
</body>
</html>


</body>
</html>