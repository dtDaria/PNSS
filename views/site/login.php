
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход в систему</title>
    <link rel="stylesheet" href="/pop-it-mvc-dt-me/public/2zd/login.css">
</head>
<body>
<div class="header">
    
    <p>Вход в систему</p>
</div>
<div class="vhod">
    <form method="post" class="vhod1">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <h><?= $message ?? ''; ?></h>
        <input type="text" name="login"placeholder="Логин">
        <input type="password" name="password"placeholder="Пароль">
        <button>Войти</button>
    </form>
</div>

</body>

<style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        font-family: "Zen Maru Gothic";
        height: 1920px;
        background-color: #f8f8f8;
    }

    .header{
        width: 100%;
        height: 65px;
        background-color:#790D0D ;
    }
    .header>p{
        text-align: center;
        padding-top: 19px;
        font-size: 19pt;
        text-decoration: none;
        color: #f8f8f8;

    }
    .header >a{
        text-decoration: none;
        font-size: 19pt;
        color: #f8f8f8;
        padding-top: 19px;
        margin-right: 50px;
    }
    .vhod{
        margin-top: 50px;
        font-size: 30pt;
    }
    .vhod1{
        display: flex;
        flex-direction: column;
        margin-top: 20px;

    }
    .vhod1>input{
        margin-top: 20px;
        height: 30px;
        width: 260px;
        margin-left: 43%;
    }
    .vhod1>h{
        text-align: center;
        padding-top: 19px;
        font-size: 19pt;
        text-decoration: none;
    }
    .vhod1> button{
        margin-top: 60px;
        height: 30px;
        width: 150px;
        margin-left: 46%;
    }
</style>