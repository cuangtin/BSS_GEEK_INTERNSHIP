<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/index.css">

</head>

<body>
    <?php
    require './helpers/Db.php';
    require './models/user.php';
    require './controllers/UserController.php';

    $user_ctl = new UserController();
    $username = $_GET['username'];
    $password = $_GET['pwd'];

    $user_ctl->login($username, $password);

    ?>
    <div class="wrapper">
        <div class="login-form">
            <h2 class="login-title">SOIOT SYSTEM</h2>
            <form action="" method="get">
                <input type="text" id="username" name="username" placeholder="Username"><br>
                <input type="password" id="pwd" name="pwd" placeholder="Password"><br>
                <p id="validate_login">Tên đăng nhập/mật khẩu không chính xác</p>
                <button type="submit">Login</button><a href="">or create a new
                    account!</a>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
    </script>
    <!--    <script src="../js/validate.js"></script>-->
</body>

</html>