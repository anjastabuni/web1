<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Aplikasi</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">
        <section class="login-box">

            <h2>Login Aplikasi</h2>
            <form action="ceklogin.php" method="post">
                <input type="text" placeholder="username" id="username" name="username">
                <input type="password" placeholder="Password" id="password" name="password">
                <input type="submit" value="login">
            </form>
        </section>
    </div>
    
</body>
</html>