<?php require_once 'includes/header.php';?>
<body>
<div class="container-sm">
    <h2 class="text mb-5">Регистрация</h2>
    <form>
        <div class="container-reg">
            <div class="input-group mb-4">
                <span class="input-group-text col-5" id="inputGroup-sizing-default">Логин</span>
                <input placeholder='Введите логин' type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="loginReg">
            </div>
            <div class="input-group mb-4">
                <span class="input-group-text col-5" id="inputGroup-sizing-default">Пароль</span>
                <input placeholder='Введите пароль не короче 8 символов' type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="passwordReg">
            </div>
            <div class="input-group mb-4">
                <span class="input-group-text col-5" id="inputGroup-sizing-default">Подтвердить пароль</span>
                <input placeholder='Повторите пароль' type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="confirmPassword">
            </div>
            <div class="input-group mb-4">
                <span class="input-group-text col-5" id="inputGroup-sizing-default">e-mail</span>
                <input placeholder='Введите e-mail' type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="email">
            </div>
            <div class="input-group mb-4">
                <span class="input-group-text col-5" id="inputGroup-sizing-default">Имя</span>
                <input placeholder='Введите имя' type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="name">
            </div>
            <div class="input-group mb-4">
                <span class="input-group-text col-5" id="inputGroup-sizing-default">Фамилия</span>
                <input placeholder='Введите фамилию' type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="lastname">
            </div>
            <div class="input-group mb-4">
                <span class="input-group-text col-5" id="inputGroup-sizing-default">Отчество</span>
                <input placeholder='Введите отчество' type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="patronymic">
            </div>
            <div class="row mb-3"><div class="msg-reg" id = "msgReg"></div></div>
        </div>
       <button class="btn btn-primary" id="buttonRegUser">Создать аккаунт</button>
    </form>
</div>
</body>
</html>





