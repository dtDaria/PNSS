<link rel="stylesheet" href="/pop-it-mvc-dt-me/public/2zd/signup.css">

<div class="header5"><p>Регистрация нового пользователя</p>
    <a href="<?= app()->route->getUrl('/hello') ?>">Главная страница</a>
</div>

<div class="reg1">
<form method="post" class="reg2">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <input type="text" name="name" placeholder="Имя">
    <input type="text" name="login" placeholder="Логин">
    <input type="password" name="password" placeholder="Пароль">
    <label for="prof">Выберите вид прав</label>
    <select id="prof" name="prof">
        <option value="1">Admin (1)</option>
        <option value="0">User (0)</option>
    </select>
    <h><?= $message ?? ''; ?></h>
    <button>Зарегистрироваться</button>

</form>
</div>

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

    .header5{
        width: 100%;
        height: 65px;
        background-color:#790D0D ;
    }
    .header5>p{
        text-align: center;
        padding-top: 19px;
        font-size: 19pt;
        text-decoration: none;
        color: #f8f8f8;
    }
    .reg1{
        margin-top: 50px;
    }
    .reg2{
        display: flex;
        flex-direction: column;
        margin-top: 20px;

    }
    .reg2>input{
        margin-top: 20px;
        height: 30px;
        width: 260px;
        margin-left: 44%;
    }
    .reg2>button{
        margin-top: 60px;
        height: 30px;
        width: 150px;
        margin-left: 47%;
    }
    #prof{
        margin-top: 20px;
        height: 30px;
        width: 260px;
        margin-left: 44%;
    }
    .reg2>label{
        text-align: center;
        padding-top: 19px;
        font-size: 19pt;
        text-decoration: none;
    }

</style>