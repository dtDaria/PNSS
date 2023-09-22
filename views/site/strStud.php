<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница студента</title>
    <link rel="stylesheet" href="/pop-it-mvc-dt-me/public/2zd/strStud.css">
</head>
<body>
<div class="header3">
    <p>Страница студента</p>
    <a href="<?= app()->route->getUrl('/hello') ?>">Главная страница</a>
</div>
<div class="str">
    <form method="post" action="search_usp">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <input type="text" id="search_usp" name="v" class="search" placeholder="Студент">
        <input type="text" id="search_usp" name="search_usp" class="search" placeholder="Группа">
        <input type="text" id="search_usp" name="search_usp" class="search" placeholder="Дисциплина">
        <button type="submit">Поиск</button>
    </form>

</div>

<div class="str2">
    <a href="<?= app()->route->getUrl('/izm') ?>">Изменить</a>
</div>
<div class="str3">
    <button>Закрыть</button>
</div>
</body>
</html>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        font-family: "Zen Maru Gothic";
        height: 1920px;
        background-color: #f8f8f8;
    }

    .header3 {
        width: 100%;
        height: 65px;
        background-color: #790D0D;
    }

    .header3 > p {
        text-align: center;
        padding-top: 19px;
        font-size: 19pt;
        text-decoration: none;
        color: #f8f8f8;
    }

    .header3 > a {
        text-decoration: none;
        font-size: 19pt;
        color: #f8f8f8;
        padding-top: 19px;
        margin-right: 50px;
    }

    .str {
        margin-top: 50px;
    }

    .str > form > input {
        margin-top: 20px;
        height: 20px;
        width: 150px;
        margin-left: 35px;
    }

    .str > form > button {
        margin-top: 20px;
        height: 20px;
        width: 70px;
        margin-left: 35px;
    }

    .str1 {
        margin-top: 20px;
        font-size: 14pt;
        margin-left: 50px;
    }

    .str2 {
        margin-top: 15px;
        margin-left: 50px;
    }

    .str2 > a {
        text-decoration: none;
        color: rgb(139, 75, 75);
    }

    .str3 > button {
        margin-top: 300px;
        height: 45px;
        width: 180px;
        margin-left: 46%;
    }
</style>