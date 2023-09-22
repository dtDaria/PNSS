<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание группы</title>
    <link rel="stylesheet" href="/pop-it-mvc-dt-me/public/2zd/Sgroup.css">
</head>
<body>
<div class="header1">
    <p>Создание группы</p>
    <a href="<?= app()->route->getUrl('/hello') ?>">Главная страница</a>
</div>
<div class="group">

    <form method="post" class="group1">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <input type="text" name="Курс" placeholder="Курс">
        <input type="text" name="Номер_группы" placeholder="Номер группы">
        <button type="submit">Создать</button>
    </form>

</div>
</body>
</html>


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

    .header1{
        width: 100%;
        height: 65px;
        background-color:#790D0D ;
    }
    .header1>p{
        text-align: center;
        padding-top: 19px;
        font-size: 19pt;
        text-decoration: none;
        color: #f8f8f8;
    }
    .group{
        margin-top: 50px;
        font-size: 30pt;
    }
    .group1{
        display: flex;
        flex-direction: column;
        margin-top: 20px;

    }
    .group1>input{
        margin-top: 20px;
        height: 30px;
        width: 260px;
        margin-left: 43%;
    }
    .group1> button{
        margin-top: 60px;
        height: 30px;
        width: 150px;
        margin-left: 46%;
    }
</style>
