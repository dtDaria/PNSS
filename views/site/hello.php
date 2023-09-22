<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Администратор</title>
    <link rel="stylesheet" href="/pop-it-mvc-dt-me/public/2zd/glavn.css">
</head>
<body>
<div class="header">
    <a href="<?= app()->route->getUrl('/login') ?>">Выход (<?= app()->auth::user()->login ?>)</a>
</div>

<div class="ad1">
    <?php
    if (app()->auth::user()->Admin()):
        ?>
        <a href="<?= app()->route->getUrl('/sgroup') ?>">Создать группу</a>
        <a href="<?= app()->route->getUrl('/nstud') ?>">Создание студента</a>
        <a href="<?= app()->route->getUrl('/sdis') ?>">Создать дисциплины</a>
        <a href="<?= app()->route->getUrl('/strStud') ?>">Страница студента</a>
        <a href="<?= app()->route->getUrl('/signup') ?>">Регистрация нового пользователя</a>
    <?php endif; ?>
</div>


</div>
<div class="ad2">
    <form method="post" action="search">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <input type="text" id="name" name="name" placeholder="Студент">
        <input type="text" id="name" name="name" placeholder="Группа">
        <input type="text" id="name" name="name" placeholder="дисциплина">
        <button type="submit">Найти</button>
    </form>
    <div class="ad3">

        <?php
        foreach ($students as $student) {
            echo '<h5>Имя</h5>' . $student->Имя . '<h5>Фамилия</h5>' . $student->Фамилия . '<h5> Отчетсво</h5>' . $student->Отчество;
            echo '<h5>Курс</h5>' . $student->Курс;
            echo '<h5>Номер группы</h5>' . $student->Номер_группы;
            echo '<h5>Успеваемость</h5>' . $student->Оценка;
            echo '<h5>Дисциплина</h5>' . $student->Название;
            echo '<h5>Часы</h5>' . $student->Часы;
            echo '<h5>Семестр</h5>' . $student->Семестр;
        }
        ?>

    </div>
</body>
</html>


<!--<style>-->
<!--    * {-->
<!--        margin: 0;-->
<!--        padding: 0;-->
<!--    }-->
<!---->
<!--    body {-->
<!--        font-family: "Zen Maru Gothic";-->
<!--        height: 1920px;-->
<!--        background-color: #f8f8f8;-->
<!--    }-->
<!---->
<!--    .header {-->
<!--        width: 100%;-->
<!--        height: 65px;-->
<!--        background-color: #790D0D;-->
<!--        display: flex;-->
<!--        flex-direction: row;-->
<!--    }-->
<!---->
<!--    .header > p {-->
<!--        padding-top: 19px;-->
<!--        font-size: 19pt;-->
<!--        text-decoration: none;-->
<!--        color: #f8f8f8;-->
<!--    }-->
<!---->
<!--    .header > a {-->
<!--        padding-top: 22px;-->
<!--        padding-left: 1590px;-->
<!--        font-size: 18pt;-->
<!--        text-decoration: none;-->
<!--        color: #f8f8f8;-->
<!--    }-->
<!---->
<!--    .ad1 {-->
<!--        margin-top: 50px;-->
<!--        display: flex;-->
<!--        flex-direction: row;-->
<!--        margin-left: 5%;-->
<!--        font-size: 15pt;-->
<!--    }-->
<!---->
<!--    .ad1 > a {-->
<!--        margin-left: 90px;-->
<!--        text-decoration: none;-->
<!--        color: black;-->
<!--    }-->
<!---->
<!--    .ad2 {-->
<!--        margin-top: 40px;-->
<!--        display: flex;-->
<!--        flex-direction: row;-->
<!--    }-->
<!---->
<!--    .ad2 > form > input, button {-->
<!--        margin-left: 40px;-->
<!--    }-->
<!---->
<!--    .ad3 {-->
<!--        margin-top: 40px;-->
<!---->
<!--    }-->
<!---->
<!--    .ad3 > p {-->
<!--        display: inline-block;-->
<!--        margin-left: 200px;-->
<!--    }-->
<!--</style>-->