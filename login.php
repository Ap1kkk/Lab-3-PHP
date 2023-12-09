<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <style>
        body {
            background-color: #333;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #444;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        h1 {
            text-align: center;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #666;
            border-radius: 4px;
            background-color: #555;
            color: #fff;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        pre {
            color: #fff;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <form name="Auth" method="post">
        <h1>Авторизация</h1>
        <p>Имя:</p>
        <input type="text" name="login" placeholder="Введите ваше имя">
        <p>Пароль:</p>
        <input type="password" name="password" placeholder="Введите ваш пароль">
        
        <?php
    $connect = mysqli_connect('Lab-3-PHP', 'root', '','users');
    $isAuth = false;

    if (isset($_POST['EventofAuth']))
    {
        $name = $_POST['login'];
        $password = $_POST['password'];
        if ($name == null || $password == null)
            echo "Необходимо заполнить данные";
        else {
            if (isAuthUser($name, $password))
            {
                setcookie('name', $name, time() + (86400*30), '/');
                setcookie('password', $password, time() + (86400*30), '/');
                header("Location: index.php");
                exit();
            }
            else {
                echo "Данные неверны!";
            }
        }
    }
    mysqli_close($connect);

    function isAuthUser($name, $password)
    {
        $connect = mysqli_connect('Lab-3-PHP', 'root', '','users');
        $Get = 'SELECT login, password
                    FROM users';
        $users = mysqli_query($connect, $Get);
        while($row = $users->fetch_assoc())
        {
            if($row['login'] == $name && $row['password'] == $password)
                return true;
        }
        return false;
    }

    function isCookie()
    {
        $login = $_COOKIE['login'];
        $userPassword = $_COOKIE['password'];
        if (isAuthUser($login, $userPassword)){
            return $login;
        }
        return null;
    }

    ?>

        <p><input name="EventofAuth" type="submit" value="Вход"></p>
        <pre id="profile"></pre>
    </form>
</body>
</html>