<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Запись нового студента</title>
    <link rel="stylesheet" href="/pop-it-mvc-dt-me/public/2zd/nstud.css">
</head>
<body>
    <div class="header2">
        <p>Запись нового студента</p>
        <a href="<?= app()->route->getUrl('/hello') ?>">Главная страница</a>
    </div>
    <div class="stud">

        <form method="post" class="stud1">
            <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
            <input type="text" name="Фамилия" placeholder="Фамилия">
            <input type="text" name="Имя" placeholder="Имя">
            <input type="text" name="Отчество" placeholder="Отчество">
            <input type="text" name="Пол" placeholder="Пол">
            <input type="date" name="birthday" placeholder="Дата рождения">
            <input type="text" name="Адрес" placeholder="Адрес прописки">
            <?php
            echo('Выбор группы:');
            echo '<select  name="GroupID">';
            foreach ($groups as $Group) {
                echo "<option value=\"$Group->GroupID\">" . $Group->GroupID . "</option>";
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

    .header2{
        width: 100%;
        height: 65px;
        background-color:#790D0D ;
    }
    .header2>p{
        text-align: center;
        padding-top: 19px;
        font-size: 19pt;
        text-decoration: none;
        color: #f8f8f8;

    }
    .stud{
        margin-top: 50px;
        font-size: 30pt;
    }
    .stud1{
        display: flex;
        flex-direction: column;
        margin-top: 20px;

    }
    .stud1>input, #kurs{
        margin-top: 20px;
        height: 30px;
        width: 260px;
        margin-left: 43%;
    }
    .vhod> button{
        margin-top: 60px;
        height: 30px;
        width: 150px;
        margin-left: 46%;
    }

    .vhod{
        width: 100px;
        margin-top: 20px;
        margin-left: 47%;
    }

</style>