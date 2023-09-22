<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изменение</title>
    <link rel="stylesheet" href="/pop-it-mvc-dt-me/public/2zd/izm.css">
</head>
<body>
<div class="header4">
    <p>Изменение</p>
    <a href="<?= app()->route->getUrl('/hello') ?>">Главная страница</a>
</div>
<div class="izm1">
    <input type="text" name="izmenenie1" placeholder="1:">
    <input type="text" name="izmenenie2" placeholder="2:">
    <input type="text" name="izmenenie3" placeholder="3:">
    <input type="text" name="izmenenie4" placeholder="4:">
    <input type="text" name="izmenenie5" placeholder="5:">
    <input type="text" name="izmenenie6" placeholder="6:">
    <input type="text" name="izmenenie7" placeholder="7:">
    <input type="text" name="izmenenie8" placeholder="8:">
</div>
<div class="izm2">
    <button>Изменить</button>
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

    .header4 {
        display: flex;
        width: 100%;
        height: 65px;
        background-color: #790D0D;
    }

    .header4 > p {
        text-align: center;
        padding-top: 19px;
        font-size: 19pt;
        color: #f8f8f8;
        margin: 0 auto;
        padding-left: 225px;
    }

    .header4 >a{
        text-decoration: none;
        font-size: 19pt;
        color: #f8f8f8;
        padding-top: 19px;
        margin-right: 50px;
    }

    .izm1 {
        margin-top: 50px;
        font-size: 30pt;
    }

    .izm1 {
        display: flex;
        flex-direction: column;
        margin-top: 20px;

    }

    .izm1 > input {
        margin-top: 20px;
        height: 30px;
        width: 260px;
        margin-left: 43%;
    }

    .izm2 > button {
        margin-top: 60px;
        height: 30px;
        width: 150px;
        margin-left: 46%;
    }


</style>