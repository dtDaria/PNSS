<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание дисципдины</title>
    <link rel="stylesheet" href="/pop-it-mvc-dt-me/public/2zd/dis.css">
</head>
<body>
<div class="header3">
    <p>Дисциплина</p>
    <a href="<?= app()->route->getUrl('/hello') ?>">Главная страница</a>
</div>
<div class="dis">

    <form method="post" class="dis1">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <input type="text" name="Название" placeholder="Название">
        <input type="text" name="Часы" placeholder="Часы">
        <input type="text" name="Семестр" placeholder="Семестр">
        <?php
        echo('Выбор контроля:');
        echo '<select  name="KontrID">';
        foreach ($kontr as $Kontr) {
            echo "<option value=\"$Kontr->KontrID\">" . $Kontr->KontrID . "</option>";
        }
        echo '</select>';
        ?>
        <button type="submit" >Создать</button>
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

    .header3{
        width: 100%;
        height: 65px;
        background-color:#790D0D ;
    }
    .header3>p{
        text-align: center;
        padding-top: 19px;
        font-size: 19pt;
        text-decoration: none;
        color: #f8f8f8;
    }
    .dis{
        margin-top: 50px;
        font-size: 30pt;
    }
    .dis1{
        display: flex;
        flex-direction: column;
        margin-top: 20px;

    }
    .dis1>input{
        margin-top: 20px;
        height: 30px;
        width: 260px;
        margin-left: 43%;
    }
    .dis1> button{
        margin-top: 60px;
        height: 30px;
        width: 150px;
        margin-left: 46%;
    }
</style>
