<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adel Noval_3051</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form id="form" action="routes.php" method="get">
            <h1>Login</h1>
            <div class="input-control">
                <label for="username">Username</label>
                <input type="text" name="route" value="dashboardadmin" style="display: none;">
                <input id="username" name="username" type="text" required>
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="email">Email</label>
                <input id="email" name="email" type="text" required>
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="password">Password</label>
                <input id="password"name="password" type="password" required>
                <div class="error"></div>
            </div>
            <a href="dashboardadmin.php"><button>Sign Up</button></a>
        </form>
    </div>
</body>
</html>