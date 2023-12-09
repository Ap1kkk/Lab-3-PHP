<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
</head>
<body>
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



<form name="regist" method="post">
    <h1>Регистрация</h1>
    <p>Имя:</p>
    <input type="text" name="login" placeholder="Введите ваше имя">
    <p>Пароль:</p>
    <input type="password" name="password" placeholder="Введите ваш пароль">


    <?php
    if (isset($_POST['EventofRegistration']))
    {
        $name = $_POST['login'];
        $password = $_POST['password'];
        if ($name == null || $password == null)
            echo "Данные необходимо заполнить!";
        else
        {
            $PDO = new PDO('mysql:dbname=users;host=Lab-3-PHP', 'root', '');
            $Set = "INSERT INTO users(login, password)
                    values('$name','$password')";
            $PDO->exec($Set);
            echo "Вы успешно зарегестрировались";
        }
    }
    ?>

    <p><input name = "EventofRegistration" type="submit" value="Регистрация"></input></p>
    <pre id="profile"></pre>
</form>
</body>
</html>